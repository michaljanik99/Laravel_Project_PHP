@extends('main', ['title' => 'Posty wewnętrzne nowy'])

@section('content')
    <div class="container">
        <div class="row">
            <form class="col s12" method="post" action="/sprints/add">
                @csrf
                <div class="row">
                <div class="input-field col s12">
                    <input id="Title" type="text" value="{{old('Title')}}" name="Title" >
                    <label for="Title">Tytuł</label>
                    @error('Title')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                </div>
                <div class="row">
                    <div>Start time</div>
                    <div class="input-field col s6">
                        <input id="StartDate"  name="StartDate" type="text" class="datepicker">
                        <label for="StartDate">StartDate</label>
                    </div>
                    @error('StartDate')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="input-field col s6">
                        <input id="StartTime" value="{{old('StartTime')}}" name="StartTime" type="text" class="timepicker">
                        <label for="StartTime">StartTime</label>
                    </div>
                    @error('StartTime')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                </div>
                <div class="row">
                    <div>End time</div>
                    <div class="input-field col s6">
                        <input  id="EndDate" name="EndDate" type="text" class="datepicker">
                        <label for="EndDate">EndDate</label>
                    </div>
                    @error('EndDate')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="input-field col s6">
                        <input id="EndTime"  value="{{old('EndTime')}}" name="EndTime" type="text" class="timepicker">
                        <label for="EndTime">EndTime</label>
                    </div>
                    @error('EndTime')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input-field col s12">
                    <select id="User" name="User">
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
