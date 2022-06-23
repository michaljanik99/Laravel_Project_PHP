@extends('main', ['title' => 'Edit Priority'])

@section('content')
    <div class="container">
        <div class="row" style="padding: 20px">
            <form class="col s12" method="post" action="/priorityes/update/{{ $priorityes -> Id }}">
                @csrf
                <div class="input-field col s4">
                    <input id="Title" type="text" name="Title" value="{{ $priorityes -> Title}}" class="validate" >
                    <label for="Title">Title</label>
                    @error('Title')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col s12">
                    <div class="submit-field input-field">
                        <a href="../" class="waves-effect waves-light btn blue accent-2">Return</a>
                        <button class="btn waves-effect waves-light btn blue accent-2" type="submit">Edit
                            <i class="material-icons right">edit</i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
