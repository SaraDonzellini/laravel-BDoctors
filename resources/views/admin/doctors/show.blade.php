@extends('layouts.app')

@section('title')
    Dottor {{ $doctor->user->name }}!
@endsection

@section('content')

    <div class="container py-3">
        @if (session('message'))
                <div class="alert alert-{{ session('alert-type') }}">
                    {{ session('message') }}
                </div>
            @endif
        <div class="card mb-3 mt-5 shadow-lg">
            <div class="card text-center">
                <div class="text my-4">
                    <span>Id: {{ $doctor->id }}</span>
                    <h3 class="card-title fw-bold my-3">{{ $doctor->user->name }} {{ $doctor->user->surname }}</h3>
                    <img src="{{asset("storage/$doctor->photo")}}" alt="Foto"><br>
                    <img src="{{asset("storage/$doctor->curriculum")}}" alt="CV">
                    <h4>Indirizzo: {{ $doctor->address }}</h4>
                    <h4>Telefono: {{ $doctor->phone }}</h4>
                    <h6>Prestazioni: {{ $doctor->performances }}</h6>
                    <p>Biografia: </p><p> {{ $doctor->bio }}</p>
                    <form action="{{ route('admin.doctors.toggle', $doctor->id) }}" method="POST">
                        @method('PATCH')
                        @csrf
                        <button type="submit" title="{{ $doctor->visibility ? 'visibility' : 'not-visibility' }}"
                            class="btn btn-outline"><i
                                class="fa-2x fa-solid fas fa-fw {{ $doctor->visibility ? 'fa-toggle-on' : 'fa-toggle-off' }}"></i></button>
                    </form>
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
@endsection