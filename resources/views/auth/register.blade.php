@extends('layout.layout')

@section('title', 'Register')

@section('content')

<div class="row justify-content-center">
    <div class="col-12 col-sm-8 col-md-6">
        <form class="form mt-5" action="{{ route('register') }}" method="post">
            @csrf
            <h3 class="text-center text-dark">{{ __('login-register.register') }}</h3>
            <div class="form-group">
                <label for="name" class="text-dark">{{ __('login-register.name') }}:</label><br>
                <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control">
                @error('name')
                    <spap class="d-block fs-6 text-danger mt-2">{{ $message }}</spap>
                @enderror
            </div>
            <div class="form-group mt-3">
                <label for="email" class="text-dark">{{ __('login-register.email') }}:</label><br>
                <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control">
                @error('email')
                    <spap class="d-block fs-6 text-danger mt-2">{{ $message }}</spap>
                @enderror
            </div>
            <div class="form-group mt-3">
                <label for="password" class="text-dark">{{ __('login-register.password') }}:</label><br>
                <input type="password" name="password" id="password" class="form-control">
                @error('password')
                    <spap class="d-block fs-6 text-danger mt-2">{{ $message }}</spap>
                @enderror
            </div>
            <div class="form-group mt-3">
                <label for="password_confirmation" class="text-dark">{{ __('login-register.confirm_password') }}:</label><br>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                @error('password_confirmation')
                    <spap class="d-block fs-6 text-danger mt-2">{{ $message }}</spap>
                @enderror
            </div>
            <div class="form-group">
                <label for="remember-me" class="text-dark"></label><br>
                <input type="submit" name="submit" class="btn btn-dark btn-md" value="{{ __('buttons.submit') }}">
            </div>
            <div class="text-right mt-2">
                <a href="/login" class="text-dark">{{ __('login-register.login_here') }}</a>
            </div>
        </form>
    </div>
</div>

@endsection
