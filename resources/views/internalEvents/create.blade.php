@extends('main', ['title' => 'Wydarzenia wewnętrzne nowy'])

@section('content')
<div class="container">
              <div class="row">
                    <form class="col s12" method="post" action="/wydarzenia-wewnetrzne/dodaj">
                    @csrf
                        <div class="input-field col s4">
                            <i class="material-icons prefix">input</i>
                            <input id="nazwa" type="text" name="Title" class="validate validator-required" required>
                            <label for="nazwa">Nazwa</label>
                        </div>
                        <div class="input-field col s4">
                            <i class="material-icons prefix">insert_link</i>
                            <input id="link" type="text" name="Link"class="validate" required>
                            <label for="link">Link</label>
                        </div>
                        <div class="input-field col s12">
                            <textarea id="textarea1" class="materialize-textarea" name="ShortDescription" placeholder="Opis" required></textarea>
                            <label for="textarea1"></label>
                        </div>
                        <div class="input-field col s12">
                            <textarea id="textarea2" class="materialize-textarea" name="ContentHTML" placeholder="Zawartość" required></textarea>
                            <label for="textarea2"></label>
                        </div>

                        <div class="col s12">
                            <div class="submit-field input-field">
                                <button class="btn waves-effect waves-light" type="submit">Dodaj
                                    <i class="material-icons right">add</i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
@endsection
