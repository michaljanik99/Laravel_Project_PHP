@extends('main', ['title' => 'Add New Priority'])

@section('content')
    <div class="container">
        <div class="row" style="padding: 20px">
            <form class="col s12" method="post" action="/priorityes/add">
                @csrf

                <div class="input-field col s12">
                    <input id="Title" type="text" value="{{old('Title')}}" name="Title" class="validate validator-required" >
                    <label for="Title">Title</label>
                    @error('Title')
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
