@extends('layouts.guest')

@section('title', 'Accedi al tuo account')

@section('content')

<section class="login">
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">
                            Accedi
                        </h2>
                    </div>
    
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            
                            <!--Email-->
                            <div class="mb-4 row">
                                <label for="email" class="col-12 col-form-label text-center">{{ __('Indirizzo E-mail') }}</label>
    
                                <div class="col-4 m-auto">
                                    <input id="email" type="email" class="text-center form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Inserire Email">
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <!--Password-->
                            <div class="mb-4 row">
                                <label for="password" class="col-12 col-form-label text-md-right text-center">{{ __('Password') }}</label>
    
                                <div class="col-4 m-auto">
                                    <input id="password" type="password" class="text-center form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Inserire Password">
    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="mb-4 row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
    
                                        <label class="form-check-label" for="remember">
                                            {{ __('Ricordati di me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>
    
                            <div class="mb-4 row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Accedi') }}
                                    </button>
    
                                    @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Hai dimenticato la password?') }}
                                    </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

@endsection
