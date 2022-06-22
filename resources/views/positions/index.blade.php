@extends('main', ['title' => 'Positions'])

@section('menu')

    <div class="container">
        <div class="row">
            <div class="col s12">
                <a href="/" class="btn waves-effect waves-light">Home
                    <i class="material-icons right">home</i>
                </a>
                <a href="/positions/new" class="btn waves-effect waves-light">New Position
                    <i class="material-icons right">add</i>
                </a>
            </div>
        </div>
    </div>

@endsection

@section('content')
    <div class="container">
        <div class="row">

            @foreach($positions as $position)
                <div class="col s12 m4 l3">
                    <div class="card">
                        <div class="card-content">
                            <span class="card-title">{{ $position->Title }}</span>
                        </div>
                        <div class="card-action">
                            <form method="post">
                                <a href="{{ url() -> current() }}/edit/{{ $position -> Id }}" class="btn-floating btn-small waves-effect waves-teal">
                                    <i class="material-icons">edit</i></a>
                                <a href="{{ url() -> current() }}/delete/{{ $position -> Id }}" class="btn-floating btn-small waves-effect waves-teal red">
                                    <i class="material-icons">delete</i></a>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
