@extends('main', ['title' => 'All Users'])
@section('content')
    <div class="container">
        <form action="/users/search" method="GET" style="padding: 20px">
            <div class="row valign-wrapper">
                <div class="col s10">
                    <input type="text" name="search" required/>
                </div>
                <div class="col s2">
                    <button class="btn waves-effect waves-light blue accent-2" type="submit">Search<i
                            class="material-icons right">search</i></button>
                </div>
            </div>
        </form>
        <div class="row valign-wrapper center-align">
            <a class="btn-floating btn-large waves-effect waves-light blue accent-2" href="/users/new"><i
                    class="material-icons">add</i></a>
        </div>
        <div class="row">
            @foreach($users as $user)
                <div class="col s3">
                    <div class="card">
                        <div class="card-content">
                            <span class="card-title">{{ $user->Name }} {{ $user->Surname }} </span>
                            <blockquote>Position: {{ $user->PositionTitle }}</blockquote>
                            <blockquote>Adress: {{ $user->Adress }}</blockquote>
                        </div>
                        <div class="card-action">
                            <form method="post">
                                <a href="{{ url() -> current() }}/edit/{{ $user -> Id }}"
                                   class="btn-floating btn-small waves-effect waves-teal blue accent-2">
                                    <i class="material-icons">edit</i></a>
                                <a href="{{ url() -> current() }}/delete/{{ $user -> Id }}"
                                   class="btn-floating btn-small waves-effect waves-teal red">
                                    <i class="material-icons">delete</i></a>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
