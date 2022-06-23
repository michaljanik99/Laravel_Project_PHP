@extends('main', ['title' => 'Search results for "'.$search.'" in users '])

@section('menu')
    <div class="container">
        <div class="row" style="padding-top: 20px">
            @if($users->isNotEmpty())
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
                                    <a href="../users/edit/{{ $user -> Id }}"
                                       class="btn-floating btn-small waves-effect waves-teal blue accent-2">
                                        <i class="material-icons">edit</i></a>
                                    <a href="../users/delete/{{ $user -> Id }}"
                                       class="btn-floating btn-small waves-effect waves-teal red">
                                        <i class="material-icons">delete</i></a>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div>
                    <h2>No users found</h2>
                </div>
            @endif

        </div>
        <div class="row center-align" style="padding-top: 20px">
            <a href="./" class="waves-effect waves-light btn blue accent-2">Back to users</a>
        </div>
    </div>
@endsection
