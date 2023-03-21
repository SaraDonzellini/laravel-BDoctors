@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card mb-3 mt-5 shadow-lg">
            <div class="card text-center">
                <div class="text my-4">
                    <span>Id: {{ $message->id }}</span>
                    <h3 class="card-title fw-bold my-3">{{ $message->user->name }} {{ $message->user->surname }}</h3>
                    <p>Testo <br> {{ $message->text }}</p>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection