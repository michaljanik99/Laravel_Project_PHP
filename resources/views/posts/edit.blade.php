@extends('main', ['title' => 'Posty wewnętrzne edytuj'])

@section('content')
    <div class="container">
        <div class="row">
            <form class="col s12" method="post" action="/posty-wewnetrzne/aktualizacja/{{ $posts -> Id }}">
                @csrf
                <div class="input-field col s4">
                    <i class="material-icons prefix">input</i>
                    <input id="nazwa" type="text" name="Title" value="{{ $posts -> Title}}" class="validate" required>
                    <label for="nazwa">Nazwa</label>
                </div>
                <div class="input-field col s4">
                    <i class="material-icons prefix">insert_link</i>
                    <input id="link" type="text" name="Link" value="{{ $posts -> Link}}" class="validate" required>
                    <label for="link">Link</label>
                </div>
                <div class="input-field col s12">
                    <textarea id="textarea1" class="materialize-textarea" name="ShortDescription" required>{{ $posts -> ShortDescription}}</textarea>
                    <label for="textarea1">Krótki opis</label>
                </div>
                <div class="input-field col s12">
                    <textarea id="textarea2" class="materialize-textarea" name="ContentHTML" required>{{ $posts -> ContentHTML}}</textarea>
                    <label for="textarea2">Kontent HTML</label>
                </div>
                <div class="input-field col s12">
                    <textarea id="textarea1" class="materialize-textarea" name="MetaDescription" required>{{ $posts -> MetaDescription}}</textarea>
                    <label for="textarea1">Opis meta</label>
                </div>
                <div class="input-field col s12">
                    <textarea id="textarea2" class="materialize-textarea" name="MetaTags" required>{{ $posts -> MetaTags}}</textarea>
                    <label for="textarea2">Tagi meta</label>
                </div>
                <div class="input-field col s12">
                    <textarea id="textarea2" class="materialize-textarea" name="Notes" required>{{ $posts -> Notes}}</textarea>
                    <label for="textarea2">Notatki</label>
                </div>

                <div class="col s12">
                    <div class="submit-field input-field">
                        <button class="btn waves-effect waves-light" type="submit">Edytuj
                            <i class="material-icons right">edit</i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
