@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

<div class="container">

    {{-- Welcome message --}}
    @if (Auth::user())
    <h2 class="fs-4 text-primary my-5">
        Benvenuto/a {{ $user->name }}
    </h2>

    @else
    
    <h2 class="mt-5">Non sei loggato, loggati o registrati per accedere al sito.</h2>
    @endif

    
    
    <div class="row position-relative justify-content-around mb-5">  
        
        @foreach ($doctor as $key)        
            @if(empty($key))
                <div class="w-100 bg-light border border-danger rounded-3 p-3 shadow d-flex justify-content-between align-items-center mb-4">
                    <span>
                        Ricordati di completare il tuo profilo dottore!
                    </span>
                    <a class="btn-dash" href="{{ route('admin.doctors.create', $doctor->id) }}">Completa profilo</a>
                </div>
                @break
            @endif
        @endforeach
        {{-- Doctor's infos --}}
        <div class="card col-12 col-md-5 col-lg-4 mb-5 bg-white shadow rounded-lg my-card">
            
            @include('admin.dashboard-partials.dash-doctor-info')
            
        </div>  
        
        {{-- Doctor's messages --}}
        <div class="card col-12 col-md-6 col-lg-7 mb-5 bg-white shadow rounded-lg my-card">
            
            @include('admin.dashboard-partials.dash-messages')
            
        </div>
    </div>

    <div class="row justify-content-around">
        
        {{-- Doctor's curriculum --}}
        <div class="card col-12 col-md-3 mb-5 bg-white shadow rounded-lg my-card">
            
            @include('admin.dashboard-partials.dash-curriculum')
            
        </div>
        
        {{-- Doctor's reviews --}}
        <div class="card col-12 col-md-4 mb-5 bg-white shadow rounded-lg my-card">
            
            @include('admin.dashboard-partials.dash-reviews')
            
        </div>
        
        {{-- Sponsorships --}}
        <div class="card col-12 col-md-3 mb-5 bg-white shadow rounded-lg my-card glass">
            
            @include('admin.dashboard-partials.dash-sponsorships')
            
        </div>
    </div>
</div>
@endsection
