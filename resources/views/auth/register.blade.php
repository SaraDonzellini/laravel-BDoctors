@extends('layouts.guest')

@section('title', 'Sei un dottore? Registrati')

@section('content')

    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card my_registration_card">
                    <div class="card-header">{{ __('Registrazione Utente') }}</div>

                    <div class="card-body ">
                        <form method="POST" action="{{ route('register') }}" id="myform"
                        onsubmit ="return verifyPassword()">
                            @csrf


                            <!--Email-->
                            <div class="mb-4
                            row">
                            <label for="email"
                                class="col-md-4 col-form-label text-md-right">{{ __('Indirizzo Email') }}(*)</label>

                            <div class="col-md-6">
                                <input id="email" type="email" placeholder="Inserisci un'email valida" required
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>

                    <!--Password-->
                    <div class="mb-4 row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}(*)</label>

                        <div class="col-md-6">
                            <input id="password" type="password"
                                placeholder="Inserisci una password con almeno 8 caratteri" required
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="new-password">
                                <span id = "message" style="color:red"> </span>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <!--Confirm Password-->
                    <div class="mb-4 row">
                        <label for="password-confirm"
                            class="col-md-4 col-form-label text-md-right">{{ __('Conferma Password') }}(*)</label>

                        <div class="col-md-6">
                            <input id="password2" type="password" class="form-control"
                                placeholder="Inserisci una password con almeno 8 caratteri" required
                                name="password_confirmation" required autocomplete="new-password">
                                <span id = "message2" style="color:red"> </span>
                        </div>
                    </div>

                    <!--Name-->
                    <div class="mb-4 row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}(*)</label>

                        <div class="col-md-6">
                            <input id="name" type="text" placeholder="Inserisci il tuo nome" required
                                class="form-control @error('name') is-invalid @enderror" name="name"
                                value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <!--Surname-->
                    <div class="mb-4 row">
                        <label for="surname" class="col-md-4 col-form-label text-md-right">{{ __('Cognome') }}(*)</label>

                        <div class="col-md-6">
                            <input id="surname" type="text" placeholder="Inserisci il tuo cognome" required
                                class="form-control @error('surname') is-invalid @enderror" name="surname"
                                value="{{ old('surname') }}" required autocomplete="surname" autofocus>

                            @error('surname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <!--Address-->
                    <div class="mb-4 row">
                        <label for="address"
                            class="col-md-4 col-form-label text-md-right">{{ __('Indirizzo') }}(*)</label>

                        <div class="col-md-6">
                            <input id="address" type="text" placeholder="Inserisci il tuo indirizzo" required
                                class="form-control @error('address') is-invalid @enderror" name="address"
                                value="{{ old('address') }}" required autocomplete="address" autofocus>

                            @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <!--Specializations-->
                    <div class="form-group d-flex flex-wrap justify-content-evenly gap-3">
                        <label class="mb-3" for="specializations">Specializzazioni: (*)</label>
                        @foreach ($specializations as $specialization)
                            <div class="form-group">
                                <input type="checkbox"
                                    class="form-check-input @error('specializations') is-invalid @enderror"
                                    id="specialization{{ $specialization->id }}" name="specializations[]"
                                    title="Inserisci almeno una specializzazione" value="{{ $specialization->id }}">
                                <label class="form-check-label"
                                    for="specialization{{ $specialization->id }}">{{ $specialization->title }}</label>
                            </div>
                        @endforeach

                    </div>
                    <div class="card bg-dark mt-5 mb-5">
                        (*) I campi sono obbligatori
                    </div>

                    <!--button Register-->
                    <div class="mb-4 row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Registrati') }}
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

<script>
    function verifyPassword() {
        let pw = document.getElementById("password").value;
        let pw2 = document.getElementById("password2").value;
        //check empty password field  
        if (pw == "") {
            document.getElementById("message").innerHTML = "**Fill the password please!";
            return false;
        }

        //password match 
        if (pw !== pw2) {
            document.getElementById("message2").innerHTML = "**Password must match";
            return false;
        } 
;
        
    }
</script>
