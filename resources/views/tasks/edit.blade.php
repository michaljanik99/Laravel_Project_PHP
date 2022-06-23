@extends('main', ['title' => 'Posty wewnętrzne edytuj'])

@section('content')
    <div class="container">
        <div class="row">
            <form class="col s12" method="post" action="/tasks/update/{{ $tasks -> Id }}">
                @csrf
                <div class="input-field col s4">
                    <i class="material-icons prefix">input</i>
                    <input id="Title" type="text" name="Title" value="{{ $tasks -> Title }}" class="validate validator-required" required>
                    <label for="Title">Title</label>
                </div>
                <div class="input-field col s4">
                    <i class="material-icons prefix">insert_link</i>
                    <input id="Description" type="text" value="{{ $tasks -> Description }}" name="Description"class="validate" required>
                    <label for="lDescriptionink">Description</label>
                </div>
                <div class="input-field col s12">
                    <select id="User" name="User" required>
                        <option value="" disabled selected>Choose your users</option>
                        @foreach($users as $user)
                            <option value="{{$user->Id}}" @if($user->Id == $tasks -> UserId ) selected @endif>{{$user->Name}} {{$user->Surname}}</option>
                        @endforeach
                    </select>
                    <label>User</label>
                </div>
                <div class="input-field col s12">
                    <select id="Priority" name="Priority" required>
                        <option value="" disabled selected>Choose your users</option>
                        @foreach($priorityes as $priority)
                            <option value="{{$priority->Id}}" @if($priority->Id == $tasks -> PriorityId ) selected @endif>{{$priority->Title}}</option>
                        @endforeach
                    </select>
                    <label>Priority</label>
                </div>
                <div class="input-field col s12">
                    <select id="Sprint" name="Sprint" required>
                        <option value="" disabled selected>Choose your users</option>
                        @foreach($sprints as $sprint)
                            <option value="{{$sprint->Id}}" @if($sprint->Id == $tasks -> SprintId  ) selected @endif>{{$sprint->Title}}</option>
                        @endforeach
                    </select>
                    <label>Sprint</label>
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
