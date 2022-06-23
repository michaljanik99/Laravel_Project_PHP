@extends('main', ['title' => 'Posty wewnętrzne nowy'])

@section('content')
    <div class="container">
        <div class="row">
            <form class="col s12" method="post" action="/tasks/add">
                @csrf

                <div class="input-field col s4">
                    <i class="material-icons prefix">input</i>
                    <input id="Title" type="text" name="Title" value="{{old('Title')}}">
                    <label for="Title">Title</label>
                    @error('Title')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input-field col s4">
                    <i class="material-icons prefix">insert_link</i>
                    <input id="Description" type="text" name="Description" value="{{old('Description')}}">
                    <label for="lDescriptionink">Description</label>
                    @error('Description')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input-field col s12">
                    <select id="User" name="User" >
                        <option value="" disabled selected>Choose your users</option>
                        @foreach($users as $user)
                            <option value="{{$user->Id}}" @if(old('User') == $user->Id ) selected @endif>{{$user->Name}} {{$user->Surname}}</option>
                        @endforeach
                    </select>
                    <label>User</label>
                    @error('User')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input-field col s12">
                    <select id="Priority" name="Priority" >
                        <option value="" disabled selected>Choose your users</option>
                        @foreach($priorityes as $priority)
                            <option value="{{$priority->Id}}" @if(old('Priority') == $priority->Id ) selected @endif>{{$priority->Title}}</option>
                        @endforeach
                    </select>
                    <label>Priority</label>
                    @error('Priority')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input-field col s12">
                    <select id="Sprint" name="Sprint" >
                        <option value="" disabled selected>Choose your users</option>
                        @foreach($sprints as $sprint)
                            <option value="{{$sprint->Id}}" @if(old('Sprint') == $sprint->Id ) selected @endif>{{$sprint->Title}}</option>
                        @endforeach
                    </select>
                    <label>Sprint</label>
                    @error('Sprint')
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
