@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card mb-3 mt-5 shadow-lg">
            <div class="card bg-message p-3 text-start">
                <div class="text text-light my-4">
                    <span>Id: {{ $message->id }}</span>
                    <h3 class="card-title fw-bold my-3">{{ $message->user->name }} {{ $message->user->surname }}</h3>
                    <p>{{ $message->text }}</p>
                    <a href="{{ route('admin.messages.index', $message->id) }}" class="btn btn-primary">
                      <i class="fa-solid fa-backward"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection