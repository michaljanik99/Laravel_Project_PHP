@extends('main', ['title' => 'All Tasks'])
@section('content')
    <div class="container">
        <form action="/tasks/search" method="GET" style="padding: 20px">
            <div class="row valign-wrapper">
                <div class="col s10">
                    <input type="text" name="search"/>
                </div>
                <div class="col s2">
                    <button class="btn waves-effect waves-light blue accent-2" type="submit">Search<i
                            class="material-icons right">search</i></button>
                </div>
            </div>
        </form>
        <div class="row valign-wrapper center-align">
            <a class="btn-floating btn-large waves-effect waves-light blue accent-2" href="/tasks/new"><i
                    class="material-icons">add</i></a>
        </div>
        <div class="row">
            <div class="col s3">
                <div class="row center-align">
                    <h5 style="padding-bottom:20px">To Do</h5>
                    @foreach($tasks as $task)
                        @if($task->Status == "To Do")
                        <div class="col s12 ">
                            <div class="card">
                                <div class="card-content">
                                    <span class="card-title">{{ $task->Title }}</span>
                                    <p>Description: {{ $task->Description }}</p>
                                    <p>Opis meta: {{ $task->UsersName }} {{ $task->UsersSurname }}</p>
                                    <p>Meta tagi: {{ $task->PriorityTitle }}</p>
                                    <p>Notatki: {{ $task->SprintTitle }}</p>
                                    <p>Status: {{ $task->Status }}</p>
                                    <strong class="blue-text">Sprint Start: {{ $task->SprintStart }}</strong><br>
                                    <strong class="blue-text">Sprint End: {{ $task->SprintEnd }}</strong>
                                </div>
                                <div class="card-action">
                                    <form method="post">
                                        <a href="{{ url() -> current() }}/edit/{{ $task -> Id }}"
                                           class="btn-floating btn-small waves-effect waves-teal blue accent-2">
                                            <i class="material-icons">edit</i></a>
                                        <a href="{{ url() -> current() }}/delete/{{ $task -> Id }}"
                                           class="btn-floating btn-small waves-effect waves-teal red">
                                            <i class="material-icons">delete</i></a>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="col s3">
                <div class="row center-align">
                    <h5 style="padding-bottom:20px">In Progress</h5>
                    @foreach($tasks as $task)
                        @if($task->Status == "In Progress")
                        <div class="col s12 ">
                            <div class="card">
                                <div class="card-content">
                                    <span class="card-title">{{ $task->Title }}</span>
                                    <p>Description: {{ $task->Description }}</p>
                                    <p>Opis meta: {{ $task->UsersName }} {{ $task->UsersSurname }}</p>
                                    <p>Meta tagi: {{ $task->PriorityTitle }}</p>
                                    <p>Notatki: {{ $task->SprintTitle }}</p>
                                    <p>Status: {{ $task->Status }}</p>
                                    <strong class="blue-text">Sprint Start: {{ $task->SprintStart }}</strong><br>
                                    <strong class="blue-text">Sprint End: {{ $task->SprintEnd }}</strong>
                                </div>
                                <div class="card-action">
                                    <form method="post">
                                        <a href="{{ url() -> current() }}/edit/{{ $task -> Id }}"
                                           class="btn-floating btn-small waves-effect waves-teal blue accent-2">
                                            <i class="material-icons">edit</i></a>
                                        <a href="{{ url() -> current() }}/delete/{{ $task -> Id }}"
                                           class="btn-floating btn-small waves-effect waves-teal red">
                                            <i class="material-icons">delete</i></a>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="col s3">
                <div class="row center-align">
                    <h5 style="padding-bottom:20px">Blocked</h5>
                    @foreach($tasks as $task)
                        @if($task->Status == "Blocked")
                        <div class="col s12 ">
                            <div class="card">
                                <div class="card-content">
                                    <span class="card-title">{{ $task->Title }}</span>
                                    <p>Description: {{ $task->Description }}</p>
                                    <p>Opis meta: {{ $task->UsersName }} {{ $task->UsersSurname }}</p>
                                    <p>Meta tagi: {{ $task->PriorityTitle }}</p>
                                    <p>Notatki: {{ $task->SprintTitle }}</p>
                                    <p>Status: {{ $task->Status }}</p>
                                    <strong class="blue-text">Sprint Start: {{ $task->SprintStart }}</strong><br>
                                    <strong class="blue-text">Sprint End: {{ $task->SprintEnd }}</strong>
                                </div>
                                <div class="card-action">
                                    <form method="post">
                                        <a href="{{ url() -> current() }}/edit/{{ $task -> Id }}"
                                           class="btn-floating btn-small waves-effect waves-teal blue accent-2">
                                            <i class="material-icons">edit</i></a>
                                        <a href="{{ url() -> current() }}/delete/{{ $task -> Id }}"
                                           class="btn-floating btn-small waves-effect waves-teal red">
                                            <i class="material-icons">delete</i></a>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="col s3">
                <div class="row center-align">
                    <h5 style="padding-bottom:20px">Done</h5>
                    @foreach($tasks as $task)
                        @if($task->Status == "Done")
                        <div class="col s12 ">
                            <div class="card">
                                <div class="card-content">
                                    <span class="card-title">{{ $task->Title }}</span>
                                    <p>Description: {{ $task->Description }}</p>
                                    <p>Opis meta: {{ $task->UsersName }} {{ $task->UsersSurname }}</p>
                                    <p>Meta tagi: {{ $task->PriorityTitle }}</p>
                                    <p>Notatki: {{ $task->SprintTitle }}</p>
                                    <p>Status: {{ $task->Status }}</p>
                                    <strong class="blue-text">Sprint Start: {{ $task->SprintStart }}</strong><br>
                                    <strong class="blue-text">End Start: {{ $task->SprintEnd }}</strong>
                                </div>
                                <div class="card-action">
                                    <form method="post">
                                        <a href="{{ url() -> current() }}/edit/{{ $task -> Id }}"
                                           class="btn-floating btn-small waves-effect waves-teal blue accent-2">
                                            <i class="material-icons">edit</i></a>
                                        <a href="{{ url() -> current() }}/delete/{{ $task -> Id }}"
                                           class="btn-floating btn-small waves-effect waves-teal red">
                                            <i class="material-icons">delete</i></a>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
