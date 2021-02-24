
@extends('admin.layouts.master')
@section('title', 'Email')
@section('content')


<div class="card">

  <div class="card-header bg-info text-white">List Email</div>

  <div class="card-body">
    @if(Session::has('message'))

    <div class="alert alert-success">

      {{ Session::get('message') }}

    </div>

    @endif


    <div class="table-responsive">
      <table class=" table table-bordered table-striped table-hover datatable datatable-Email">
        <thead>
          <th>Nr</th>
          <th>Email</th>
          <th>Browser</th>
          <th>Ip</th>
          <th>Time</th>
          <th>Action</th>
        </thead>
        <tbody>
          @if (count($data) > 0)
          @foreach($data as  $key => $email)
          <td>{{ ++$key }}</td>
          <td><div>{{ $email->email }}</div></td>
          <td><div>{{ $email->browse }}</div></td>
          <td><div>{{ $email->ip }}</div></td>
          <td><div>{{ $email->created_at }}</div></td>

          <td>
          </a>

          {!! Form::open(array(
            'style' => 'display: inline-block;',
            'method' => 'DELETE',
            'onsubmit' => "return confirm('".trans("global.delete")."');",
            'route' => ['admin.pages.destroy', $email->id])) !!}
            

            <button class="btn"><i class="fa fa-trash"></i></button>
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
  $('.datatable-Email:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
    $($.fn.dataTable.tables(true)).DataTable()
    .columns.adjust();
  });
})


</script>
@endsection


