@extends('layouts.app')

@section('title', 'Messaggi Ricevuti')

@section('content')

<section class="messages">
    <div class="container">
            @foreach ($messages as $message)
            <div class="card mb-3 mt-5 shadow-lg">
                <div class="card bg-review  p-3 text-start">
                    <div class="text text-light my-4">
                        {{-- <span>Id: {{ $message->id }}</span> --}}
                        <h3 class="card-title fw-bold my-3">{{ $message->name }} {{ $message->surname }}</h3>
                        <h4>{{ $message->email }}</h4>
                        <p>{{ $message->text }}</p>
                        {{-- <a href="{{ route('admin.messages.show', $message->id) }}" class="btn btn-primary">
                            <i class="fa-solid fa-eye"></i>
                        </a> --}}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection