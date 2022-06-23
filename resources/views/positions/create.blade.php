@extends('main', ['title' => 'Positions new'])

@section('content')
    <div class="container">
        <div class="row">
            <form class="col s12" method="post" action="/positions/add">
                @csrf
                <div class="input-field col s4">
                    <i class="material-icons prefix">input</i>
                    <input id="Title" type="text" name="Title" value="{{old('Title')}}" class="validate validator-required">
                    <label for="Title">Title</label>
                    @error('Title')
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
