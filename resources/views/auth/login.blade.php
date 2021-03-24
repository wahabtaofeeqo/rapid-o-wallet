@extends('layouts.app')

@section('content')
<div class="container h-100">
    <div class="row justify-content-center align-items-center h-100">
        <div class="col-md-5 col-lg-4">

            <div class="logo text-center mb-5">
                <img class="logo-light" src="{{asset('main/logo/logo.jpeg')}}" alt="Enrmous Logo" style="width: 200px;">
            </div>

            <div>
                <form method="POST" action="{{route('login')}}" autocomplete="off" id="loginForm">
                    @csrf

                    <div class="input-group mb-4 auth-input">
                    
                        <div class="input-group-prepend">
                            <span class="input-group-text icon">
                                <i class="fa fa-user"></i>
                            </span>
                        </div>

                        <input type="email" name="email" placeholder="Username" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus>

                         @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    <div class="input-group mb-4 auth-input">
                        
                        <div class="input-group-prepend">
                            <span class="input-group-text icon">
                                <i class="fa fa-lock"></i>
                            </span>
                        </div>

                        <input type="password" name="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <button class="btn btn-danger btn-block auth-btn mb-4">Login</button>

                     <div class="form-group row">
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label text-muted" for="remember">
                                    {{ __('Keep Me Logged In') }}
                                </label>
                            </div>
                        </div>

                         <div class="col-md-6 text-md-right">
                            @if (Route::has('password.request'))
                                <a class="btn text-muted" href="{{ route('password.request') }}">
                                    {{ __('Forgot Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>

                     <div class="">
                        <a href="{{route('register')}}" class="btn btn-outline-light btn-block auth-btn">Create Account</a>
                    </div>

                </form>
            </div>


            <div class="d-none">
                <form method="POST" action="{{ route('login') }}">
                        @csrf

                    <div class="form-group">
                        <label for="username">{{ __('Username/Email') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>


                        <div class="form-group">
                            <label for="password">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>

                        <div class="form-group">
                            <div class="mb-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                            </div>
                            <div class="">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection
