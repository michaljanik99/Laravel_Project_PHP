@extends('main', ['title' => 'Search results for "'.$search.'" in priorityes '])
@section('menu')
    <div class="container">
        <div class="row" style="padding-top: 20px">
            @if($priorityes->isNotEmpty())
                @foreach($priorityes as $priority)
                    <div class="col s12 m4 l3">
                        <div class="card">
                            <div class="card-content">
                                <span class="card-title">{{ $priority->Title }}</span>
                            </div>
                            <div class="card-action">
                                <form method="post">
                                    <a href="../priorityes/edit/{{ $priority -> Id }}" class="btn-floating btn-small waves-effect waves-teal blue accent-2">
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
                    <h2>No priorityes found</h2>
                </div>
            @endif

        </div>
        <div class="row center-align" style="padding-top: 20px">
            <a href="./" class="waves-effect waves-light btn blue accent-2">Back to priorityes</a>
        </div>
    </div>
@endsection
