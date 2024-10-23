@extends('layouts.layout')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Profile</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">User Information</h5>
            <p class="card-text"><strong>Name:</strong> {{ $user->name }}</p>
            <p class="card-text"><strong>Email:</strong> {{ $user->email }}</p>
        </div>
    </div>
</div>
@endsection
