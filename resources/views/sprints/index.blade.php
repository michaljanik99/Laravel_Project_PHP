@extends('main', ['title' => 'Posty wewnętrzne'])

@section('menu')

    <div class="container">
        <div class="row">
            <div class="col s12">
                <a href="/" class="btn waves-effect waves-light">Home
                    <i class="material-icons right">home</i>
                </a>
                <a href="/sprints/new" class="btn waves-effect waves-light">Nowy Post
                    <i class="material-icons right">add</i>
                </a>
            </div>
        </div>
    </div>

@endsection

@section('content')
    <div class="container">
        <form action="/sprints/search" method="GET">
            <input type="text" name="search" required/>
            <button type="submit">Search</button>
        </form>
        <div class="row">

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
                                <a href="{{ url() -> current() }}/edit/{{ $sprint -> Id }}" class="btn-floating btn-small waves-effect waves-teal">
                                    <i class="material-icons">edit</i></a>
                                <a href="{{ url() -> current() }}/delete/{{ $sprint -> Id }}" class="btn-floating btn-small waves-effect waves-teal red">
                                    <i class="material-icons">delete</i></a>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
