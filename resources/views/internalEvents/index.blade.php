@extends('main', ['title' => 'Wydarzenia wewnętrzne'])

@section('menu')

<div class="container">
    <div class="row">
        <div class="col s12">
            <a href="/" class="btn waves-effect waves-light">Home
                <i class="material-icons right">home</i>
            </a>
            <a href="/wydarzenia-wewnetrzne/nowe" class="btn waves-effect waves-light">Nowe wydarzenie
                    <i class="material-icons right">add</i>
            </a>
        </div>
    </div>
</div>

@endsection

@section('content')
<div class="container">
    <div class="row">

    @foreach($internalEvents as $internalEvent)
        <div class="col s12 m4 l3">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">{{ $internalEvent->Title }}</span>
                    <blockquote>{{ $internalEvent->ShortDescription }}</blockquote>
                    <strong class="blue-text">{{ $internalEvent->ContentHTML }}</strong>
                    {!! $internalEvent -> ContentHTML !!}
                </div>
                <div class="card-action">
                    <form method="post">
                        <input hidden name="Id" value="1">
                        <a href="{{ url() -> current() }}/edycja/{{ $internalEvent -> Id }}" class="btn-floating btn-small waves-effect waves-teal">
                            <i class="material-icons">edit</i></a>
                        <a href="{{ url() -> current() }}/usuwanie/{{ $internalEvent -> Id }}" class="btn-floating btn-small waves-effect waves-teal red">
                            <i class="material-icons">delete</i></a>
                    </form>
                </div>
            </div>
        </div>
    @endforeach

    </div>
</div>
@endsection
