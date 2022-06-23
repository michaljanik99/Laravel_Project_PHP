@extends('main', ['title' => 'New User'])

@section('content')
    <div class="container">
        <div class="row">
            <form class="col s12" method="post" action="/users/add">
                @csrf
                <div class="input-field col s4">
                    <i class="material-icons prefix">input</i>
                    <input id="Name" type="text" name="Name" value="{{old('Name')}}" class="validate validator-required" >
                    <label for="Name">Name</label>
                    @error('Name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input-field col s4">
                    <i class="material-icons prefix">insert_link</i>
                    <input id="Surname" type="text" value="{{old('Surname')}}" name="Surname"class="validate" >
                    <label for="Surname">Surname</label>
                    @error('Surname')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                {{old('Position')}}
                <div class="input-field col s12">
                    <select id="Position" name="Position" >
                        <option value="" disabled selected>Choose your option</option>
                        @foreach($positions as $position)
                        <option value="{{$position->Id}}" @if(old('Position') == $position->Id ) selected @endif>{{$position->Title}}</option>
                        @endforeach
                    </select>
                    <label>Materialize Select</label>
                    @error('Position')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input-field col s12">
                    <textarea id="Adress" class="materialize-textarea" name="Adress" placeholder="Adress" ></textarea>
                    <label for="Adress"></label>
                    @error('Adress')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
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
