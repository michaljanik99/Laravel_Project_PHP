@extends('main', ['title' => 'Posty wewnętrzne edytuj'])

@section('content')
    <div class="container">
        <div class="row">
            <form class="col s12" method="post" action="/sprints/update/{{ $sprints -> Id }}">
                @csrf
                <div class="row">
                    <div class="input-field col s12">
                        <input id="Title" type="text" value="{{ $sprints -> Title }}" name="Title" class="validate validator-required" required>
                        <label for="Title">Tytuł</label>
                    </div>
                </div>
                <div class="row">
                    <div>Start time</div>
                    <div class="input-field col s6">
                        <input value="{{ date('m-d-y', strtotime($sprints -> StartDateTime)) }}" id="StartDate" name="StartDate" type="text" class="datepicker">
                        <label for="StartDate">StartDate</label>
                    </div>
                    <div class="input-field col s6">
                        <input value="{{ date('H:i:s', strtotime($sprints -> StartDateTime)) }}" id="StartTime" name="StartTime" type="text" class="timepicker">
                        <label for="StartTime">StartTime</label>
                    </div>

                </div>
                <div class="row">
                    <div>End time</div>
                    <div class="input-field col s6">
                        <input value="{{ date('m-d-y', strtotime($sprints -> EndDateTime)) }}" id="EndDate" name="EndDate" type="text" class="datepicker">
                        <label for="EndDate">EndDate</label>
                    </div>
                    <div class="input-field col s6">
                        <input value="{{ date('H:i:s', strtotime($sprints -> EndDateTime)) }}" id="EndTime" name="EndTime" type="text" class="timepicker">
                        <label for="EndTime">EndTime</label>
                    </div>
                </div>
                <div class="input-field col s12">
                    <select id="User" name="User" required>
                        <option value="" disabled selected>Choose your users</option>
                        @foreach($users as $user)
                            <option value="{{$user->Id}}" @if($user->Id == $sprints -> UsersId ) selected @endif>{{$user->Name}} {{$user->Surname}}</option>
                        @endforeach
                    </select>
                    <label>User</label>
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
