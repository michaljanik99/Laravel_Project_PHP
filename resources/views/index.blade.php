@extends('main', ['title' => 'Zadanie Laravel Michał Janik'])

@section('content')
<div class="container">
    <div class="row">
        <div class="col s12 m4 l3">
            <a href="/posty-wewnetrzne">
                <div class="card-panel hoverable center">
                    <h5>Posty wewnętrzne</h5>
                </div>
            </a>
            <a href="/wydarzenia-wewnetrzne">
                <div class="card-panel hoverable center">
                    <h5>Wydarzenia wewnętrzne</h5>
                </div>
            </a>
            <a href="/users">
                <div class="card-panel hoverable center">
                    <h5>Users</h5>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection
