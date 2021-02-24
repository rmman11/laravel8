@extends('admin.layouts.master')
@section('title', 'Login')
@section('content')

<div class="card">
  <div class="card-body">
    <a href="{{ route('admin.categories.create') }}" class="btn btn-success">
      {{ trans('global.create') }} {{ trans('cruds.categ.title_singular') }}
    </a>
    <div class="table-responsive">
      <table class=" table table-bordered table-striped table-hover datatable datatable-Categories">
        <thead>
          <th>Nr</th>
          <th>Name</th>
          <th>Date Time</th>
          <th>Action</th>
        </thead>
        <tbody>
          @if (count($categories) > 0)
          @foreach ($categories as  $key => $category)
          <td>{{ ++$key }}</td>
          <td><div>{{ $category->name }}</div></td>
          <td><div>{{ $category->created_at }}</div></td>

          <td>

           


            {!! Form::open(array(
              'style' => 'display: inline-block;',
              'method' => 'DELETE',
              'onsubmit' => "return confirm('".trans("global.delete")."');",
              'route' => ['admin.categories.destroy', $category->id])) !!}
          <button class="btn" title="delete"><i class="fa fa-trash"></i></button>
              {!! Form::close() !!}

            </td>

          </tr>
          @endforeach
          @else
          <tr>
            <td colspan="6">@lang('quickadmin.qa_no_entries_in_table')</td>
          </tr>
          @endif
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
  $('.datatable-Categories:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
    $($.fn.dataTable.tables(true)).DataTable()
    .columns.adjust();
  });
})


</script>
@endsection