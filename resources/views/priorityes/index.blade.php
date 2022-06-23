@extends('main', ['title' => 'Priorityes'])

@section('menu')

    <div class="container">
        <div class="row">
            <div class="col s12">
                <a href="/" class="btn waves-effect waves-light">Home
                    <i class="material-icons right">home</i>
                </a>
                <a href="/priorityes/new" class="btn waves-effect waves-light">New Priorityes
                    <i class="material-icons right">add</i>
                </a>
            </div>
        </div>
    </div>

@endsection

@section('content')

    <div class="container">
        <form action="/priorityes/search" method="GET">
            <input type="text" name="search" required/>
            <button type="submit">Search</button>
        </form>
        <div class="row">

            @foreach($priorityes as $priority)
                <div class="col s12 m4 l3">
                    <div class="card">
                        <div class="card-content">
                            <span class="card-title">{{ $priority->Title }}</span>
                        </div>
                        <div class="card-action">
                            <form method="post">
                                <a href="{{ url() -> current() }}/edit/{{ $priority -> Id }}" class="btn-floating btn-small waves-effect waves-teal">
                                    <i class="material-icons">edit</i></a>
                                <a href="{{ url() -> current() }}/delete/{{ $priority -> Id }}" class="btn-floating btn-small waves-effect waves-teal red">
                                    <i class="material-icons">delete</i></a>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
