@extends('main', ['title' => 'Posty wewnętrzne nowy'])

@section('content')
    <div class="container">
        <div class="row">
            <form class="col s12" method="post" action="/tasks/add">
                @csrf

                <div class="input-field col s4">
                    <i class="material-icons prefix">input</i>
                    <input id="Title" type="text" name="Title" class="validate validator-required" required>
                    <label for="Title">Title</label>
                </div>
                <div class="input-field col s4">
                    <i class="material-icons prefix">insert_link</i>
                    <input id="Description" type="text" name="Description"class="validate" required>
                    <label for="lDescriptionink">Description</label>
                </div>
                <div class="input-field col s12">
                    <select id="User" name="User" required>
                        <option value="" disabled selected>Choose your users</option>
                        @foreach($users as $user)
                            <option value="{{$user->Id}}">{{$user->Name}} {{$user->Surname}}</option>
                        @endforeach
                    </select>
                    <label>User</label>
                </div>
                <div class="input-field col s12">
                    <select id="Priority" name="Priority" required>
                        <option value="" disabled selected>Choose your users</option>
                        @foreach($priorityes as $priority)
                            <option value="{{$priority->Id}}">{{$priority->Title}}</option>
                        @endforeach
                    </select>
                    <label>Priority</label>
                </div>
                <div class="input-field col s12">
                    <select id="Sprint" name="Sprint" required>
                        <option value="" disabled selected>Choose your users</option>
                        @foreach($sprints as $sprint)
                            <option value="{{$sprint->Id}}">{{$sprint->Title}}</option>
                        @endforeach
                    </select>
                    <label>Sprint</label>
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
