@extends('layouts.layout')

@section('content')
<div class="container mt-5">
    <h1 class="text-center">Login</h1>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card mx-auto" style="width: 400px;">
        <div class="card-body">
            <form action="{{ route('login') }}" method="POST" class="mt-4">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password:</label>
                    <input type="password" id="password" name="password" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-primary w-100">Login</button>
            </form>
        </div>
    </div>

    <p class="mt-3 text-center">Don't have an account? <a href="{{ route('register.show') }}">Register</a></p>
</div>
@endsection
