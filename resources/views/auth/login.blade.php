@extends('layouts.app')

@section('content')
<div class="container">
    <br>
    <!-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

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
    </div> -->
    <br>
    <div class="row justify-content-center">
        <div class="col-md-12 text-left">
            <img src="/assets/img/logo.png" />
        </div>        
    </div>
    <br>
    <div class="row justify-content-left " style="margin-top:3rem; padding-left:2rem">
        <div class="col-md-6 text-left">
            <h1 class="h1" style="color:white; font-weight: bold; border-bottom : 3px solid #fff; width: 100px"> WELCOME <h1>
        </div>
        <div class="col-md-6 text-right">
            <h4 class="h4" style="color:white; font-weight: bold;"> LOGIN TO YOUR ACCOUNT <h4>
                <hr class="text-right" style="border-bottom : 5px solid #fff; width: 40px">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group row">
                        <label for="email" class="col-md-6 col-form-label text-md-right text-white">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" style="background:none; color: white" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row text-left">
                        <label for="password" class="col-md-6 col-form-label text-md-right text-white">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" style="background:none; color: white"  name="password"  required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-warning">
                                {{ __('Login') }}
                            </button>
                        </div>
                    </div>
                </form>
        </div>
        <br>
        <div class="row justify-content-center">
            <div class="col-md-6 text-left text-white">
                        <br>
                        <br>
                    <p>Human Resource Portal of PT. Arneva Teknologi Solusi! The first step towards success is through this gateway. Together, we will forge new achievements and realize dreams. Enter your credentials and let's embark on a journey towards boundless progress and innovation.</p>
                    <p>
                        <br>
                        <br>
                        <button type="submit" class="btn btn-warning">
                            {{ __('Company Website') }}
                        </button>
                    </p>
            </div>        
            <div class="col-md-6 text-left">
                    
            </div>        
        </div>



        
    </div>

</div>
@endsection
