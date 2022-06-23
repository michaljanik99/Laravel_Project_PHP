@extends('main', ['title' => 'search'])

@section('menu')
    <div class="container">
        <div class="row">
            @if($tasks->isNotEmpty())
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
                                <a href="../tasks/edit/{{ $task -> Id }}" class="btn-floating btn-small waves-effect waves-teal">
                                    <i class="material-icons">edit</i></a>
                                <a href="../tasks/delete/{{ $task -> Id }}" class="btn-floating btn-small waves-effect waves-teal red">
                                    <i class="material-icons">delete</i></a>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
            @else
                <div>
                    <h2>No posts found</h2>
                </div>
            @endif

        </div>
    </div>
@endsection
