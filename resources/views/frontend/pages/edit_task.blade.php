
@extends('frontend.layouts.app')
@section('title', 'Tasks')
@section('content')


<div class="container"  style="background: #fff;">

  <div class="pull-right">

    <a class="btn btn-primary" href="{{ route('tasks') }}"> Back</a>

  </div>


    <h2 class="modal-title">Edit</h2>

  <div class="modal-body"> {!! Form::model($task, [
    'method' => 'PATCH',
    'route' => ['task.update', $task->id]
    ]) !!}	
    
    {{ csrf_field() }}
   <div class="form-group">
    
      <label for="title">Name</label>
   <input type="text" name="name"  value="{{ $task->name }}" >
    </div>

    <div class="form-group">
      <label for="content">Description</label>
      <textarea name="description"   value="{{ $task->description }}">
           </textarea>
    </div>
    <div class="form-group">
      <button type="submit" class="btn">Update</button>
      <input type="hidden" id="id" name="id">
    </div>    
   </form>
    
   
</div>
</div>

  @endsection