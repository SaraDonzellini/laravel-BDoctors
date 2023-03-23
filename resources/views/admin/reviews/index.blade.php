@extends('layouts.app')

@section('title', 'Recensioni')

@section('content')

<div class="container">
        @foreach ($reviews as $review)
        <div class="card mb-3 mt-5 shadow-lg">
            <div class="card bg-review  p-3 text-start">
                <div class="text text-light my-4">
                    <h3 class="card-title fw-bold my-3">{{ $review->name }} {{ $review->surname }}</h3>
                    <span class="mb-2">Voto: {{ $review->vote }}</span>
                    <p>{{ $review->text }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection