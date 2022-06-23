@extends('main', ['title' => 'Search results for "'.$search.'" in tasks '])


@section('menu')
    <div class="container">
        <div class="row" style="padding-top: 20px">
            @if($tasks->isNotEmpty())
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
            @else
                <div>
                    <h2>No tasks found</h2>
                </div>
            @endif
        </div>
        <div class="row center-align" style="padding-top: 20px">
            <a href="./" class="waves-effect waves-light btn blue accent-2">Back to Tasks</a>
        </div>
    </div>
@endsection
