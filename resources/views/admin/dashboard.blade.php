@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

@if (Auth::user())
    <div class="container">
    <h2 class="fs-4 text-secondary my-4">
        Benvenuto/a {{ $user->name }}
    </h2>

    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">{{ __('I Tuoi Dati') }}</div>

                <div class="card-body">
                    <div class="name d-flex">
                        <p class="fw-bold me-3">
                            Nome: 
                        </p>

                        <p>
                            {{ $user->name }}
                        </p>
                    </div>
                    
                    <div class="surname d-flex">
                        <p class="fw-bold me-3">
                            Cognome: 
                        </p>

                        <p>
                            {{ $user->surname }}
                        </p>
                    </div>

                    <div class="email d-flex">
                        <p class="fw-bold me-3">
                            Email: 
                        </p>

                        <p>
                            {{ $user->email }}
                        </p>
                    </div>

                    <div class="address d-flex">
                        <p class="fw-bold me-3">
                            Indirizzo: 
                        </p>

                        <p>
                            {{ $user->doctor->address }}
                        </p>
                    </div>


                    <h2>
                        Ancora un piccolo passo! Inserisci i tuoi dati (raga qui lo cambiamo in tra sono le 3.22 ho sonno)
                    </h2>

                    <!--Action da definire-->
                    <form method="POST" action="">
                        @csrf


                        <!--Bio-->
                        <div class="mb-4 row">
                            <label for="bio"
                                class="col-md-4 col-form-label text-md-right">{{ __('Biografia') }}</label>

                            <div class="col-md-6">
                                <textarea id="bio" type="text"
                                    class="form-control @error('bio') is-invalid @enderror" name="bio" placeholder="Racconta qualcosa di te">{{$doctor->bio}}</textarea>

                                @error('bio')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!--N° Telephone-->
                        <div class="mb-4 row">
                            <label for="phone"
                                class="col-md-4 col-form-label text-md-right">{{ __('N° Telefonico') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="text"
                                    class="form-control @error('phone') is-invalid @enderror" name="phone"
                                    value="{{ old('phone') ?? $user->doctor->phone}}">

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>





                </div>

                <a href="" class="btn btn-success btn-sm" type="button">Ultima ora il tuo account</a>
            </div>
        </div>
    </div>
</div>
@else
<div class="container">

    <h2 class="mt-5">Non sei loggato, loggati o registrati per accedere al sito.</h2>
</div>
@endif

@endsection
