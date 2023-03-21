@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
@if (Auth::user())
    <div class="container">
    <h2 class="fs-4 text-secondary my-4">
        {{ __('Dashboard') }}
    </h2>
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">{{ __('User Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('Accesso effettuato!') }}
                </div>

                <a href="{{route("profile.edit")}}" class="btn btn-success btn-sm" type="button">Entra nel pannello di controllo</a>
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
