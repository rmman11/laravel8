@extends('admin.layouts.master')
@section('content')

    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.meetings.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.meeting.title_singular') }}
            </a>
        </div>
    </div>

<div class="card">
    <div class="card-header">
        {{ trans('cruds.meeting.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Meeting">
                <thead>
                    <tr>
              
                        <th>
                            {{ trans('cruds.meeting.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.meeting.fields.attendees') }}
                        </th>
                        <th>
                            {{ trans('cruds.meeting.fields.start_time') }}
                        </th>
                        <th>
                       Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($meetings as $key => $meeting)
                        <tr data-entry-id="{{ $meeting->id }}">
                          
                            <td>
                                {{ $meeting->id ?? '' }}
                            </td>
                            <td>
                                {{ $meeting->attendees ?? '' }}
                            </td>
                            <td>
                                {{ $meeting->start_time ?? '' }}
                            </td>
                            <td>
                            
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.meetings.show', $meeting->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                              
                        
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.meetings.edit', $meeting->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>

                 
                                    <form action="{{ route('admin.meetings.destroy', $meeting->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                      <button class="btn"><i class="fa fa-trash"></i></button>
                                    </form>
                            

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
  $('.datatable-Meeting:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})

</script>
@endsection