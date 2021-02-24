@extends('frontend.layouts.app')
@section('title', 'Tasks')
@section('content')


<div class="container"  style="background: #fff">

    <div class="row">
      <h2>Tasks</h2>

      @if (Session::has('message'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <h4 class="alert-heading">Success!</h4>
        <p>{{ Session::get('message') }}</p>

        <button type="button" class="close" data-dismiss="alert aria-label">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

     <div class="table-responsive">

<table class="table table-bordered table-striped table-hover datatable datatable-Tasks">

        <!-- Table Headings -->
        <thead>
            <tr  style="background-color:#00FF00; font-weight:bold;">
            <th>Nr</th>
            <th>Task</th>
            <th>Details</th>
            <th>Date</th>
            <th>Action</th>
        </tr>
        </thead>

        <!-- Table Body -->
        <tbody>
           @foreach ($tasks as  $key => $task)
            <tr>
                <!-- Task Name -->


                <td>{{ ++$key }}</td>
                <td>
                 {{ $task->name }}
                </td>

                <td>
                    {{ $task->description }}
                </td>

                <td>
                   {{ $task->created_at  }}
                </td>

                <td>

                    <form action="{{ url('task/'.$task->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                          <button class="btn" title="delete"><i class="fa fa-trash" style="color: red"></i></button>
                                    </form>


                   <a   href="{{ route('tasks.edit',$task->id) }}" title="edit">
                      <i class="fa fa-edit" style="font-size:26px"></i></a>

             </td>
         </tr>
         @endforeach
     </tbody>
 </table>
</div>


{{$tasks->links("pagination::bootstrap-4")}}


 <div class="panel-body">
    <!-- Display Validation Errors -->
    @include('frontend.common.errors')

    <!-- New Task Form -->
    <form action="{{ url('task') }}" method="POST" class="form-horizontal">
        {{ csrf_field() }}

        <!-- Task Name -->
        <div class="form-group">
            <label for="task-name" class="col-sm-3 control-label">Task</label>

            <div class="col-sm-6">
                <input type="text" name="name" id="task-name" class="form-control">
            </div>
        </div>


        <div class="form-group">
            <label for="task-details" class="col-sm-3 control-label">Details Task</label>

            <div class="col-sm-6">

              <textarea class="form-control"  
              rows="5" 
              cols="28" 
              name="description" 
              style="resize:none;">
          </textarea>

      </div>

  </div>



  <!-- Add Task Button -->
  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-6">
        <button type="submit" class="btn btn-default">
            <i class="fa fa-plus"></i> Add Task
        </button>
    </div>
</div>
</form>
</div>
</div>
</div>



<script>
  $('.delete-task').click(function(e){
        e.preventDefault() // Don't post the form, unless confirmed
        if (confirm('Are you sure?')) {
            // Post the form
            $(e.target).closest('form').submit() // Post the surrounding form
        }
    });


</script>
@endsection