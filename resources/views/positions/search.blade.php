@extends('main', ['title' => 'Search results for "'.$search.'" in positions '])

@section('menu')
    <div class="container">
        <div class="row" style="padding-top: 20px">
            @if($positions->isNotEmpty())
                @foreach($positions as $position)
                    <div class="col s12 m4 l3">
                        <div class="card">
                            <div class="card-content">
                                <span class="card-title">{{ $position->Title }}</span>
                            </div>
                            <div class="card-action">
                                <form method="post">
                                    <a href="../positions/edit/{{ $position -> Id }}" class="btn-floating btn-small waves-effect waves-teal blue accent-2">
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
                    <h2>No positions found</h2>
                </div>
            @endif

        </div>
        <div class="row center-align" style="padding-top: 20px">
            <a href="./" class="waves-effect waves-light btn blue accent-2">Back to positions</a>
        </div>
    </div>
@endsection
