@extends('layouts.app')

@section('title')
    Dottor {{ $doctor->user->name }}!
@endsection

@section('content')
    @if (session('message'))
        <div class="alert alert-{{ session('alert-type') }}">
            {{ session('message') }}
        </div>
    @endif
    <div class="container card shadow-lg mt-5 mb-5">
        <div class="row ">
            <div class="col-6 ">
                <div class="my_header d-flex align-items-center m-auto mb-5 mt-5">
                    <img class="my_avatar" src="{{ asset("storage/$doctor->photo") }}"
                        alt="{{ $doctor->user->name }}'s image profile">
                </div>
            </div>
            <div class="col-6">
                <h1 class="ms-5 text-center fw-bold text-uppercase my_header d-flex align-items-center m-4">
                    {{ $doctor->user->name }} {{ $doctor->user->surname }}</h1>
                <h5>Specializzazione:</h5>
                @foreach ($doctor->specializations as $specialization)
                    <span>{{ $specialization->title }}</span>
                @endforeach
                <h5 class="mt-2">Prestazione:</h5>
                <p>{{ $doctor->performance }}</p>
                <h4>Indirizzo: {{ $doctor->address }}</h4>
                <h4>Telefono: {{ $doctor->phone }}</h4><br>

            </div>
            <div class="row">
                <div class="col-12 ">
                    <div class="blue-box w-100">
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-12 ">
                    <div class="my_box text-centered m-5">
                        <h4>
                            Visibilità (decidi se renderti visibile o meno ai pazienti)
                        </h4>
                        <form action="{{ route('admin.doctors.toggle', $doctor->id) }}" method="POST">
                            @method('PATCH')
                            @csrf
                            <button type="submit" title="{{ $doctor->visibility ? 'visibile' : 'non visibile' }}"
                                class="btn btn-outline"><i
                                    class="fa-2x fa-solid fas fa-fw {{ $doctor->visibility ? 'fa-toggle-on' : 'fa-toggle-off' }}"></i></button>
                        </form>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="blue-box w-100">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6 ">
                    <div class="box ">
                        <h5 class="m-5">Biografia: </h5>
                        <p>{{ $doctor->bio }}</p>

                    </div>
                </div>
                <div class="col-6 ">
                    <div class="box ">
                        <h5 class="m-5">Curriculum: </h5>
                        <img class="my_curriculum" src="{{ asset("storage/$doctor->curriculum") }}"
                            alt="{{ $doctor->user->name }}'s curriculum">

                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-between">
                <div class="my_divbox mt-5 mb-4 ms-2">
                    <a href="{{ route('admin.doctors.edit', $doctor->id) }}" class="my_btn">Modifica il tuo
                        profilo</a>
                </div>
                <div class="my_divbox mt-5 mb-4 ">
                    <a href="{{ route('admin.messages.index', $doctor->id) }}" class="my_btn">Leggi i tuoi
                        messaggi</a>
                </div>
                <div class="my_divbox mt-5 mb-4">
                    <a href="{{ route('admin.reviews.index', $doctor->id) }}" class="my_btn">Leggi le tue
                        recensioni</a>
                </div>
                <div class="my_divbox mt-5 mb-4 me-2">
                    <a href="{{ route('admin.sponsorships.index', $doctor->id) }}" class=" my_btn">Scegli una
                        sponsorizzazione</a>
                </div>

            </div>
        @endsection
