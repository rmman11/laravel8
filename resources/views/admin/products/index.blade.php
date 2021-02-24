@extends('admin.layouts.master')
@section('title', 'Products List')
@section('content')




<div class="card">

  <div class="card-body">

    <p>
      <a href="{{ route('admin.products.create') }}" class="btn btn-success">New product</a>

    </p>

    @if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    <div class="table-responsive">
      <table class=" table table-bordered table-striped table-hover datatable datatable-Products">
        <thead>
          <tr>
            <th class="no-sort" name="prop_ref_no">Nr</th>
            <th>Name</th>
            <th>Categorie</th>
            <th>Status</th>
            <th>price</th>
            <th>image</th>
            <th class="no-sort" name="prop_ref_no">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($products as $key => $product)
          <tr>
            <td style="width:10px">{{ ++$key }}</td>
            <td>{{ $product->name }}</td>

             
        <td>{{ optional($product->categories)->name }}</td>

            <td>
          
              @if ($product->status == 1)
              <span class="badge badge-success">Active</span>
              @else
              <span class="badge badge-danger">Not Active</span>
              @endif

              
            </td>
            <td>{{ $product->price }}</td>
            <td ><div>
              <img src="{{ asset('/public/uploads/' . $product->image) }}" alt="product" class="img-responsive"
              width="100" height="100"> </div></td>
              <td>
                <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                  <input type="hidden" name="_method" value="DELETE">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <button class="btn" title="delete"><i class="fa fa-trash"></i></button>
                </form>



                <a   href="{{ route('admin.products.edit',$product->id) }}" title="edit">
                  <i class="fa fa-edit" style="font-size:26px"></i></a>

                  <a   href="{{ route('admin.products.show',$product->id) }}" title="details">
                    <i class="fa fa-eye" style="font-size:26px; color:red"></i></a>



                  </td>
                </tr>

                @endforeach
              </tbody>
            </table>

          </div>
        </div>
      </div>


      @endsection
      @section('scripts')
      @parent
      <script>
        $(function () {
          let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)


          $.extend(true, $.fn.dataTable.defaults, {
            order: [[ 1, 'desc' ]],
            pageLength: 100,
          });
          $('.datatable-Products:not(.ajaxTable)').DataTable({ buttons: dtButtons })
          $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
            $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
          });
        })

      </script>
      @endsection


