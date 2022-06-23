@extends('main', ['title' => 'search'])

@section('menu')
    <div class="container">
        <div class="row">
            @if($sprints->isNotEmpty())
                @foreach($sprints as $sprint)
                    <div class="col s12 m4 l3">
                        <div class="card">
                            <div class="card-content">
                                <span class="card-title">{{ $sprint->Title }}</span>
                                <blockquote>Krótki opis: {{ $sprint->CreationDateTime }}</blockquote>
                                <blockquote>Opis meta: {{ $sprint->StartDateTime }}</blockquote>
                                <blockquote>Meta tagi: {{ $sprint->EndDateTime }}</blockquote>
                                <blockquote>Notatki: {{ $sprint->UsersName }} {{ $sprint->UsersSurname }}</blockquote>
                            </div>
                            <div class="card-action">
                                <form method="post">
                                    <a href="../sprints/edit/{{ $sprint -> Id }}" class="btn-floating btn-small waves-effect waves-teal">
                                        <i class="material-icons">edit</i></a>
                                    <a href="../sprints/delete/{{ $sprint -> Id }}" class="btn-floating btn-small waves-effect waves-teal red">
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
