@extends('main', ['title' => 'Posty wewnętrzne'])

@section('menu')

    <div class="container">
        <div class="row">
            <div class="col s12">
                <a href="/" class="btn waves-effect waves-light">Home
                    <i class="material-icons right">home</i>
                </a>
                <a href="/tasks/new" class="btn waves-effect waves-light">Nowy Post
                    <i class="material-icons right">add</i>
                </a>
            </div>
        </div>
    </div>

@endsection

@section('content')
    <div class="container">
        <form action="/tasks/search" method="GET">
            <input type="text" name="search" required/>
            <button type="submit">Search</button>
        </form>
        <div class="row">
            @foreach($tasks as $task)
                <div class="col s12 m4 l3">
                    <div class="card">
                        <div class="card-content">
                            <span class="card-title">{{ $task->Title }}</span>
                            <blockquote>Description: {{ $task->Description }}</blockquote>
                            <blockquote>Opis meta: {{ $task->UsersName }} {{ $task->UsersSurname }}</blockquote>
                            <blockquote>Meta tagi: {{ $task->PriorityTitle }}</blockquote>
                            <blockquote>Notatki: {{ $task->SprintTitle }}</blockquote>
                            <strong class="blue-text">{{ $task->SprintStart }}</strong>
                            <strong class="blue-text">{{ $task->SprintEnd }}</strong>
                        </div>
                        <div class="card-action">
                            <form method="post">
                                <a href="{{ url() -> current() }}/edit/{{ $task -> Id }}" class="btn-floating btn-small waves-effect waves-teal">
                                    <i class="material-icons">edit</i></a>
                                <a href="{{ url() -> current() }}/delete/{{ $task -> Id }}" class="btn-floating btn-small waves-effect waves-teal red">
                                    <i class="material-icons">delete</i></a>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
