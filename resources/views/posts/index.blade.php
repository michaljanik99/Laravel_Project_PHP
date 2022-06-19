@extends('main', ['title' => 'Posty wewnętrzne'])

@section('menu')

    <div class="container">
        <div class="row">
            <div class="col s12">
                <a href="/" class="btn waves-effect waves-light">Home
                    <i class="material-icons right">home</i>
                </a>
                <a href="/posty-wewnetrzne/nowe" class="btn waves-effect waves-light">Nowy Post
                    <i class="material-icons right">add</i>
                </a>
            </div>
        </div>
    </div>

@endsection

@section('content')
    <div class="container">
        <div class="row">

            @foreach($posts as $post)
                <div class="col s12 m4 l3">
                    <div class="card">
                        <div class="card-content">
                            <span class="card-title">{{ $post->Title }}</span>
                            <blockquote>Krótki opis: {{ $post->ShortDescription }}</blockquote>
                            <blockquote>Opis meta: {{ $post->MetaDescription }}</blockquote>
                            <blockquote>Meta tagi: {{ $post->MetaTags }}</blockquote>
                            <blockquote>Notatki: {{ $post->Notes }}</blockquote>
                            <strong class="blue-text">{{ $post->ContentHTML }}</strong>
                            {!! $post -> ContentHTML !!}

                        </div>
                        <div class="card-action">
                            <form method="post">
                                <a href="{{$post->Link}}">Link posta</a>
                                <a href="{{ url() -> current() }}/edycja/{{ $post -> Id }}" class="btn-floating btn-small waves-effect waves-teal">
                                    <i class="material-icons">edit</i></a>
                                <a href="{{ url() -> current() }}/usuwanie/{{ $post -> Id }}" class="btn-floating btn-small waves-effect waves-teal red">
                                    <i class="material-icons">delete</i></a>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
