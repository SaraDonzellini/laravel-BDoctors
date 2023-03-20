@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card mb-3 mt-5 shadow-lg">
            <div class="card text-center">
                <div class="text my-4">
                    <span>Id: {{ $doctor->id }}</span>
                    <h3 class="card-title fw-bold my-3">{{ $doctor->user->name }} {{ $doctor->user->surname }}</h3>
                    <img :src="$doctor->photo" alt="">
                    <img :src="$doctor->cv" alt="">
                    <h4>Indirizzo: {{ $doctor->address }}</h4>
                    <h4>Telefono: {{ $doctor->phone }}</h4>
                    <h6>Prestazioni: {{ $doctor->performances }}</h6>
                    <p>Biografia: </p><p> {{ $doctor->bio }}</p>
                    <p>Visibilià: todo toggle</p>
                </div>

                    <div class="d-flex justify-content-between">
                        <div class="mb-2 ms-2">
                            <a href="{{ route('admin.doctors.edit', $doctor->id) }}" class="btn btn-warning">Modifica il tuo profilo</a>
                        </div>
                        <div class="mb-2 ">
                            <a href="{{ route('admin.messages.index', $doctor->id) }}" class="btn btn-info">Leggi i tuoi messaggi</a>
                        </div>
                        <div class="mb-2">
                            <a href="{{ route('admin.reviews.index', $doctor->id) }}" class="btn btn-success">Leggi le tue recensioni</a>
                        </div>
                        <div class="mb-2 me-2">
                            <a href="{{ route('admin.sponsorships.index', $doctor->id) }}" class="btn btn-primary">Scegli una sponsorizzazione</a>
                        </div>
                        
                    </div>
                    

                    {{-- Delete
                    <form class="d-inline-block form-delete" action="{{ route('admin.doctors.destroy', $doctor->id) }}"
                        method="POST" data-element-name="{{ $doctor->name }}">
                        @csrf
                        @method('DELETE')
                        <button title="Delete" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                    </form> --}}
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection