@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

<div class="container">

    {{-- Welcome message --}}
    @if (Auth::user())
    <h2 class="fs-4 text-primary my-4">
        Benvenuto/a {{ $user->name }}
    </h2>

    @else
    
    <h2 class="mt-5">Non sei loggato, loggati o registrati per accedere al sito.</h2>
    @endif

    <div class="row position-relative">  

        {{-- Doctor's infos --}}
        <div class="card col-12 col-md-6 col-lg-4 mb-4 bg-white shadow rounded-lg my-card">
            
            @include('admin.dashboard-partials.dash-doctor-info')
            
        </div>  
        
        {{-- Doctor's messages --}}
        <div class="card col-12 col-md-6 col-lg-8 mb-4 bg-white shadow rounded-lg my-card">
            
            @include('admin.dashboard-partials.dash-messages')
            
        </div>
    </div>

    <div class="row row-cols-1 row-cols-md-3">
        
        {{-- Doctor's curriculum --}}
        <div class="card mb-4 bg-white shadow rounded-lg my-card">
            
            @include('admin.dashboard-partials.dash-curriculum')
            
        </div>
        
        {{-- Doctor's reviews --}}
        <div class="card mb-4 bg-white shadow rounded-lg my-card">
            
            @include('admin.dashboard-partials.dash-reviews')
            
        </div>
        
        {{-- Sponsorships --}}
        <div class="card mb-4 bg-white shadow rounded-lg my-card glass">
            
            @include('admin.dashboard-partials.dash-sponsorships')
            
        </div>
    </div>
</div>
@endsection
