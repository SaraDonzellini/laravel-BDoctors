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

                <div class="secondary-actions mb-2">
                    {{-- Edit --}}
                    {{-- <a href="{{ route('admin.messages.edit', $message->id) }}" class="btn btn-warning"><i
                            class="fa-solid fa-edit"></i></a> --}}
                    {{-- Delete --}}
                    <form class="d-inline-block form-delete" action="{{ route('admin.messages.destroy', $message->id) }}"
                        method="POST" data-element-name="{{ $message->name }}">
                        @csrf
                        @method('DELETE')
                        <button title="Delete" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection