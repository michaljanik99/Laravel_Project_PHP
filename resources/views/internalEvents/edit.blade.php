@extends('main', ['title' => 'Wydarzenia wewnętrzne edytuj'])

@section('content')
<div class="container">
              <div class="row">
                    <form class="col s12" method="post" action="/wydarzenia-wewnetrzne/aktualizacja/{{ $internalEvents -> Id }}">
                    @csrf
                        <div class="input-field col s4">
                            <i class="material-icons prefix">input</i>
                            <input id="nazwa" type="text" name="Title" value="{{ $internalEvents -> Title}}" class="validate" required>
                            <label for="nazwa">Nazwa</label>
                        </div>
                        <div class="input-field col s4">
                            <i class="material-icons prefix">insert_link</i>
                            <input id="link" type="text" name="Link" value="{{ $internalEvents -> Link}}" class="validate" required>
                            <label for="link">Link</label>
                        </div>
                        <div class="input-field col s12">
                            <textarea id="textarea1" class="materialize-textarea" name="ShortDescription" required>{{ $internalEvents -> ShortDescription}}</textarea>
                            <label for="textarea1">Krótki opis</label>
                        </div>
                        <div class="input-field col s12">
                            <textarea id="textarea2" class="materialize-textarea" name="ContentHTML" required>{{ $internalEvents -> ContentHTML}}</textarea>
                            <label for="textarea2">Kontent HTML</label>
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
