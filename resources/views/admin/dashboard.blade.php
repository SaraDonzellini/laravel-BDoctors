@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

    @if (Auth::user())
        <div class="container">
            <h2 class="fs-4 text-primary my-4">
                Benvenuto/a {{ $user->name }}
            </h2>

            <p class="text-info">Sei loggato/a!</p>

            {{-- <a href="" class="btn btn-success btn-sm" type="button">Ultima ora il tuo account</a> --}}
        </div>
    @else
        <div class="container">

            <h2 class="mt-5">Non sei loggato, loggati o registrati per accedere al sito.</h2>
        </div>
    @endif

@endsection
