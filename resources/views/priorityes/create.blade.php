@extends('main', ['title' => 'Posty wewnętrzne nowy'])

@section('content')
    <div class="container">
        <div class="row">
            <form class="col s12" method="post" action="/priorityes/add">
                @csrf

                <div class="input-field col s4">
                    <i class="material-icons prefix">input</i>
                    <input id="Title" type="text" name="Title" class="validate validator-required" required>
                    <label for="Title">Title</label>
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
