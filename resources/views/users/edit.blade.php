@extends('main', ['title' => 'Posty wewnętrzne edytuj'])

@section('content')
    <div class="container">
        <div class="row">
            <form class="col s12" method="post" action="/users/update/{{ $users -> Id }}">
                @csrf
                <div class="input-field col s4">
                    <i class="material-icons prefix">input</i>
                    <input id="Name" type="text" name="Name" class="validate validator-required" value="{{ $users -> Name}}" required>
                    <label for="Name">Name</label>
                </div>
                <div class="input-field col s4">
                    <i class="material-icons prefix">insert_link</i>
                    <input id="Surname" type="text" name="Surname"class="validate" value="{{ $users -> Surname}}" required>
                    <label for="Surname">Surname</label>
                </div>
                <div class="input-field col s12">
                    <select id="Position" name="Position" required>
                        @foreach($positions as $position)
                            <option value="{{$position->Id}}" @if($position->Id == $users -> PositionId ) selected @endif>{{$position->Title}}</option>
                        @endforeach
                    </select>
                    <label>Materialize Select</label>
                </div>
                <div class="input-field col s12">
                    <textarea id="Adress" class="materialize-textarea" name="Adress" placeholder="Adress"  required>{{ $users -> Adress}}</textarea>
                    <label for="Adress"></label>
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
