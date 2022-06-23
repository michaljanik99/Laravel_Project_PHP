@extends('main', ['title' => 'Home'])

@section('content')
<div class="container" style="min-height: 550px">
    <div class="row center-align">
        <h1>Welcome to the task management programm</h1>
        <p class="flow-text center-align">It will help you organise your tasks in order to rise to the heights of your productivity </p>
        <a href="/tasks" style="margin-top: 60px" class="waves-effect waves-light btn btn blue accent-2">Let's start</a>
    </div>
</div>
@endsection
