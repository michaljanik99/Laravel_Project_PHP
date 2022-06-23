@extends('main', ['title' => 'search'])

@section('menu')
    <div class="container">
        <div class="row">
            @if($positions->isNotEmpty())
                @foreach($positions as $position)
                    <div class="col s12 m4 l3">
                        <div class="card">
                            <div class="card-content">
                                <span class="card-title">{{ $position->Title }}</span>
                            </div>
                            <div class="card-action">
                                <form method="post">
                                    <a href="../positions/edit/{{ $position -> Id }}" class="btn-floating btn-small waves-effect waves-teal">
                                        <i class="material-icons">edit</i></a>
                                    <a href="../positions/delete/{{ $position -> Id }}" class="btn-floating btn-small waves-effect waves-teal red">
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
