@extends('main', ['title' => 'New User'])

@section('content')
    <div class="container">
        <div class="row">
            <form class="col s12" method="post" action="/users/add">
                @csrf
                <div class="input-field col s4">
                    <i class="material-icons prefix">input</i>
                    <input id="Name" type="text" name="Name" class="validate validator-required" required>
                    <label for="Name">Name</label>
                </div>
                <div class="input-field col s4">
                    <i class="material-icons prefix">insert_link</i>
                    <input id="Surname" type="text" name="Surname"class="validate" required>
                    <label for="Surname">Surname</label>
                </div>
                <div class="input-field col s12">
                    <select id="Position" name="Position" required>
                        <option value="" disabled selected>Choose your option</option>
                        @foreach($positions as $position)
                        <option value="{{$position->Id}}">{{$position->Title}}</option>
                        @endforeach
                    </select>
                    <label>Materialize Select</label>
                </div>
                <div class="input-field col s12">
                    <textarea id="Adress" class="materialize-textarea" name="Adress" placeholder="Adress" required></textarea>
                    <label for="Adress"></label>
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
