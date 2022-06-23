@extends('main', ['title' => 'search'])

@section('menu')
    <div class="container">
        <div class="row">
            @if($priorityes->isNotEmpty())
                @foreach($priorityes as $priority)
                    <div class="col s12 m4 l3">
                        <div class="card">
                            <div class="card-content">
                                <span class="card-title">{{ $priority->Title }}</span>
                            </div>
                            <div class="card-action">
                                <form method="post">
                                    <a href="../priorityes/edit/{{ $priority -> Id }}" class="btn-floating btn-small waves-effect waves-teal">
                                        <i class="material-icons">edit</i></a>
                                    <a href="../priorityes/delete/{{ $priority -> Id }}" class="btn-floating btn-small waves-effect waves-teal red">
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
