@extends('layouts.layout')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Registration</h1>

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
            <form action="{{ route('register') }}" method="POST" class="needs-validation" novalidate>
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Username:</label>
                    <input type="text" id="name" name="name" class="form-control" required>
                    <div class="invalid-feedback">
                        Please enter your name.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                    <div class="invalid-feedback">
                        Please enter a valid email.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password:</label>
                    <input type="password" id="password" name="password" class="form-control" required>
                    <div class="invalid-feedback">
                        Please enter your password.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Confirm Password:</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required>
                    <div class="invalid-feedback">
                        Please confirm your password.
                    </div>
                </div>

                <button type="submit" class="btn btn-primary w-100">Register</button>
            </form>
        </div>
    </div>

    <p class="mt-3 text-center">Already have an account? <a href="{{ route('login.show') }}">Login</a></p>
</div>
@endsection
