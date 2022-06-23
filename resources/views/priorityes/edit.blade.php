@extends('main', ['title' => 'Posty wewnętrzne edytuj'])

@section('content')
    <div class="container">
        <div class="row">
            <form class="col s12" method="post" action="/priorityes/update/{{ $priorityes -> Id }}">
                @csrf
                <div class="input-field col s4">
                    <i class="material-icons prefix">input</i>
                    <input id="Title" type="text" name="Title" value="{{ $priorityes -> Title}}" class="validate" >
                    <label for="Title">Nazwa</label>
                    @error('Title')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
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
