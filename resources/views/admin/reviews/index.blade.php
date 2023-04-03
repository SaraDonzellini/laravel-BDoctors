@extends('layouts.app')

@section('title', 'Recensioni')

@section('content')

<div class="container">
        <div class="text-center text-review-index p-3">
            <h1>Le tue recensioni</h1>
        </div>
        @foreach ($reviews as $review)
        <div class="card mb-3 shadow-lg">
            <div class="card bg-review  p-3 text-start">
                <div class="text text-light my-4">
                    <h4 class="card-title fw-bold ">{{ $review->name }} {{ $review->surname }}</h4>
                    <p class="mb-3">Voto: {{ $review->vote }}</p>
                    <p>{{ $review->text }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection