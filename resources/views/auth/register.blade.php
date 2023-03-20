@extends('layouts.app')

@section('content')
<?php
        $specializations = [
            [
                'title' => 'Medico di base',
                'color' => '#D6F8D6'
            ],
            [
                'title' => 'Ginecologo',
                'color' => '#7FC6A4'
            ],
            [
                'title' => 'Ortopedico',
                'color' => '#A6C48A'
            ],
            [
                'title' => 'Dermatologo',
                'color' => '#F6E7CB'
            ],
            [
                'title' => 'Psicologo',
                'color' => '#DD9787'
            ],
            [
                'title' => 'Oculista',
                'color' => '#74D3AE'
            ],
            [
                'title' => 'Urologo',
                'color' => '#EDE6E3'
            ],
            [
                'title' => 'Otorino',
                'color' => '#DADAD9'
            ],
            [
                'title' => 'Dentista',
                'color' => '#5BC3EB'
            ],
            [
                'title' => 'Endocrinologo',
                'color' => '#EEE0CB'
            ],
            [
                'title' => 'Neurologo',
                'color' => '#BAA898'
            ],
            [
                'title' => 'Fisioterapista',
                'color' => '#BFD7EA'
            ],
            [
                'title' => 'Pediatra',
                'color' => '#FAF8D4'
            ],
            [
                'title' => 'Psicoterapeuta',
                'color' => '#EBDCCB'
            ],
            [
                'title' => 'Andrologo',
                'color' => '#C3BAAA'
            ],
            [
                'title' => 'Proctologo',
                'color' => '#B2A3B5'
            ],
            [
                'title' => 'Logopedista',
                'color' => '#B098A4'
            ],
            [
                'title' => 'Medico competente',
                'color' => '#DBD9DB'
            ],
            [
                'title' => 'Sessuologo',
                'color' => '#E5EBEA'
            ],
            [
                'title' => 'Chirurgo pediatrico',
                'color' => '#F0A202'
            ],
            [
                'title' => 'Medico genetista',
                'color' => '#DB995A'
            ],
        ];
?>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf



                            <div class="mb-4 row">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-4 row">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-4 row">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="mb-4 row">
                                <label for="name"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-4 row">
                                <label for="surname"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Surname') }}</label>

                                <div class="col-md-6">
                                    <input id="surname" type="text"
                                        class="form-control @error('surname') is-invalid @enderror" name="surname"
                                        value="{{ old('surname') }}" required autocomplete="surname" autofocus>

                                    @error('surname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-4 row">
                                <label for="address"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                                <div class="col-md-6">
                                    <input id="address" type="text"
                                        class="form-control @error('address') is-invalid @enderror" name="address"
                                        value="{{ old('address') }}" required autocomplete="address" autofocus>

                                    @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-4 row">
                                <label for="specialization"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Specializations') }}</label>

                                <div class="col-md-6">
                                    @foreach ($specializations as $specialization)
                                        <p><label for="specialization">{{$specialization['title']}}</label>
                                        <input id="specialization" type="checkbox"
                                            class="form-check-input @error('specialization') is-invalid @enderror"
                                            name="specialization[]" value="{{ old('specialization') }}"></p>
                                    @endforeach
                                    @error('specialization')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="mb-4 row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
