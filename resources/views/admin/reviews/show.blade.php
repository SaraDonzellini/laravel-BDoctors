@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card mb-3 mt-5 shadow-lg">
            <div class="card text-center">
                <div class="text my-4">
                    <span>Id: {{ $review->id }}</span>
                    <h3 class="card-title fw-bold my-3">{{ $review->user->name }} {{ $review->user->surname }}</h3>
                    <p>Testo <br> {{ $review->text }}</p>
                </div>

            </div>
        </div>
    </div>
    </div>
@endsection