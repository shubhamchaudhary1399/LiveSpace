@extends('layouts.app')

@section('header')
<link rel="stylesheet" type="text/css" href="/css/login.css">
@endsection

@section('title', 'Login | LiveSpace')

@section('content')
<div class="top-banner">
    <div class="f-overlay">
        <div class="container py-4">
            <div class="row justify-content-center">
                <div class="col-lg-6 d-none d-lg-block">
                    <h1 class="text-heading">There is a smarter way to book rooms around</h1>
                    <span class="text-wh">Sign in with your email to book a room now</span>
                </div>
                <div class="col-lg-6">
                    <div class="card" style="max-width: 500px; margin: auto;">
                        <div class="card-header text-center my-card">{{ __('Login to LiveSpace') }}
                        </div>
                        <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                        @csrf

                            <div class="form-group">
                                <label for="email" class="col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                            
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password" class="col-form-label text-md-right">{{ __('Password') }}</label>

                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-8">
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                                <div class="col-md-4">
                                    <button type="submit" class=" btn btn-default my-btn float-right">
                                    {{ __('Login') }}
                                    </button>
                                </div>                                
                            </div>
                        </form>
                       </div>
                   </div>
               </div>
           </div>
        </div>
    </div>
</div>

@endsection
