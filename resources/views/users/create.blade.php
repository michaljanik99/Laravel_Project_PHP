@extends('main', ['title' => 'Add New User'])

@section('content')
    <div class="container">
        <div class="row" style="padding: 20px">
            <form class="col s12" method="post" action="/users/add">
                @csrf
                <div class="input-field col s6">
                    <input id="Name" type="text" name="Name" value="{{old('Name')}}" class="validate validator-required" >
                    <label for="Name">Name</label>
                    @error('Name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input-field col s6">
                    <input id="Surname" type="text" value="{{old('Surname')}}" name="Surname"class="validate" >
                    <label for="Surname">Surname</label>
                    @error('Surname')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                {{old('Position')}}
                <div class="input-field col s12">
                    <select id="Position" name="Position" >
                        <option value="" disabled selected>Choose Position</option>
                        @foreach($positions as $position)
                        <option value="{{$position->Id}}" @if(old('Position') == $position->Id ) selected @endif>{{$position->Title}}</option>
                        @endforeach
                    </select>
                    <label>Position</label>
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
                        <a href="./" class="waves-effect waves-light btn blue accent-2">Return</a>
                        <button class="btn waves-effect waves-light blue accent-2" type="submit">Add
                            <i class="material-icons right">add</i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
