@extends('main', ['title' => 'Positions edit'])

@section('content')
    <div class="container">
        <div class="row">
            <form class="col s12" method="post" action="/positions/update/{{ $positions -> Id }}">
                @csrf
                <div class="input-field col s4">
                    <i class="material-icons prefix">input</i>
                    <input id="nazwa" type="text" name="Title" value="{{ $positions -> Title}}" class="validate" required>
                    <label for="nazwa">Nazwa</label>
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
