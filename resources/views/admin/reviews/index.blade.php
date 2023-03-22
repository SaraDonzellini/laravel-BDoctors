@extends('layouts.app')

@section('title', 'Recensioni')

@section('content')

<div class="container">
        @foreach ($reviews as $review)
        <div class="card mb-3 mt-5 shadow-lg">
            <div class="card bg-review  p-3 text-start">
                <div class="text text-light my-4">
                    <span>Id: {{ $review->id }}</span>
                    <h3 class="card-title fw-bold my-3">{{ $review->user->name }} {{ $review->user->surname }}</h3>
                    <p>{{ $review->text }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection