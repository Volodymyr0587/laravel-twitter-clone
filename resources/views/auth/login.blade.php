@extends('layout.layout')

@section('title', 'Login')

@section('content')

<div class="row justify-content-center">
    <div class="col-12 col-sm-8 col-md-6">
        <form class="form mt-5" action="{{ route('login') }}" method="post">
            @csrf
            <h3 class="text-center text-dark">Welcome back!</h3>

            <div class="form-group">
                <label for="email" class="text-dark">Email:</label><br>
                <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control">
                @error('email')
                    <spap class="d-block fs-6 text-danger mt-2">{{ $message }}</spap>
                @enderror
            </div>
            <div class="form-group mt-3">
                <label for="password" class="text-dark">Password:</label><br>
                <input type="password" name="password" id="password" class="form-control">
                @error('password')
                    <spap class="d-block fs-6 text-danger mt-2">{{ $message }}</spap>
                @enderror
            </div>
            <div class="form-group">
                <label for="remember-me" class="text-dark"></label><br>
                <input type="submit" name="submit" class="btn btn-dark btn-md" value="submit">
            </div>
            <div class="text-right mt-2">
                <a href="/register" class="text-dark">Don't have an account yet? Register now.</a>
            </div>
        </form>
    </div>
</div>

@endsection
