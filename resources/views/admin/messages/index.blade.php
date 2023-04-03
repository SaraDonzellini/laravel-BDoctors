@extends('layouts.app')

@section('title', 'Messaggi Ricevuti')

@section('content')

<section class="messages">
    <div class="container">
        <div class="text-center text-message-index p-3">
            <h1>I tuoi messaggi</h1>
        </div>
            @foreach ($messages as $message)
            <div class="card mb-3  shadow-lg">
                <div class="card bg-review  p-3 text-start">
                    <div class="text text-light my-4">
                        {{-- <span>Id: {{ $message->id }}</span> --}}
                        <h4 class="card-title fw-bold my-3">{{ $message->name }} {{ $message->surname }}</h4>
                        <span>From : < {{$message->email}} ></span>
                        <p>a Ccn: me</p>
                        <p>{{ $message->text }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection