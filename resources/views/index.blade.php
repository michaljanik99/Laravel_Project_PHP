@extends('main', ['title' => 'Zadanie Laravel Michał Janik'])

@section('content')
<div class="container">
    <div class="row">
        <div class="col s12 m4 l3">
            <a href="/users">
                <div class="card-panel hoverable center">
                    <h5>Users</h5>
                </div>
            </a>
            <a href="/priorityes">
                <div class="card-panel hoverable center">
                    <h5>Priorityes</h5>
                </div>
            </a>
            <a href="/sprints">
                <div class="card-panel hoverable center">
                    <h5>Sprints</h5>
                </div>
            </a>
            <a href="/tasks">
                <div class="card-panel hoverable center">
                    <h5>Tasks</h5>
                </div>
            </a>
            <a href="/positions">
                <div class="card-panel hoverable center">
                    <h5>Positions</h5>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection
