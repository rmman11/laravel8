
@extends('frontend.layouts.app')
@section('title', 'Show Task')
@section('content')

<div class="container">
    <div class="row">

<p class="lead">Edit this task below. <a href="{{ route('tasks') }}">Go back to all tasks.</a></p>        
<h1>{{ $task->name }}</h1>
<p class="lead">{{ $task->description }}</p>

</div></div>

@endsection