@extends('layouts.app')

@section('title')
    Dottor {{ $doctor->user->name }}
@endsection

@section('content')
    @if (session('message'))
        <div class="alert alert-{{ session('alert-type') }}">
            {{ session('message') }}
        </div>
    @endif
    <div class="container card shadow-lg mt-5 mb-5">
        <div class="row ">
            <div class="col-12  col-sm-12 col-lg-6">
                <div class="my_header align-items-center m-auto mb-5 mt-5">
                    <div><img class="my_avatar card shadow-lg d-block" src="{{ asset("storage/$doctor->photo") }}"
                        alt="{{ $doctor->user->name }}'s image profile">
                    </div>
                    <div>
                        <form class="d-block" action="{{ route('admin.doctors.toggle', $doctor->id) }}" method="POST">
                            @method('PATCH')
                            @csrf
                            <button type="submit" title="{{ $doctor->visibility ? 'visibile' : 'non visibile' }}"
                                class=" btn btn-outline"><i
                                    class="fa-2x fa-solid fas fa-fw {{ $doctor->visibility ? 'fa-toggle-on' : 'fa-toggle-off' }}"></i></button>
                                    <span>
                                        (renditi visibile o meno ai pazienti)
                                    </span>
                        </form>
                    </div>
                </div>
                
            </div>
            <div class="col-12  col-sm-12 col-lg-6">
                <h1 class="ms-5 text-center fw-bold text-uppercase my_header d-flex align-items-center m-4">
                    {{ $doctor->user->name }} {{ $doctor->user->surname }}</h1>
                <h5>Specializzazione:</h5>
                @foreach ($doctor->specializations as $specialization)
                    <span>| {{ $specialization->title }}</span> |
                @endforeach
                <h5 class="mt-2">Prestazione:</h5>
                <p>{{ $doctor->performance }}</p>
                <div class="my_divbox mt-5 mb-4 ">
                    <a href="{{ route('admin.messages.index', $doctor->id) }}" class="my_btn">Leggi i tuoi
                        messaggi</a>
                    <a href="{{ route('admin.reviews.index', $doctor->id) }}" class="my_btn">Leggi le tue
                        recensioni</a>
                </div>
                <div class="my_divbox mt-5 mb-4 ">
                    <a href="{{ route('admin.doctors.edit', $doctor->id) }}" class="my_btn">Modifica il tuo
                        profilo</a>
                    <a class="sponsorship" href="{{ route('admin.sponsorships.index', $doctor->id) }}">Scegli una
                        sponsorizzazione</a>
                </div>


            </div>
            {{-- <div class="row">
                <div class="col-12 ">
                    <div class="blue-box w-100">
                        <h2>Visibilità</h2>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-12 ">
                    <div class="my_box text-centered m-5">
                        <h5>
                            (decidi se renderti visibile o meno ai pazienti)
                        </h5>
                        <form action="{{ route('admin.doctors.toggle', $doctor->id) }}" method="POST">
                            @method('PATCH')
                            @csrf
                            <button type="submit" title="{{ $doctor->visibility ? 'visibile' : 'non visibile' }}"
                                class="btn btn-outline"><i
                                    class="fa-2x fa-solid fas fa-fw {{ $doctor->visibility ? 'fa-toggle-on' : 'fa-toggle-off' }}"></i></button>
                        </form>

                    </div>
                </div>
            </div> --}}
            <div class="row">
                <div class="col-12">
                    <div class="blue-box text-center">
                        <h2>Informazioni formazione e lavoro</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12  col-sm-12 col-lg-6 ">
                    <div class="box m-5">
                        <h5 class="">Biografia: </h5>
                        <p class="">{{ $doctor->bio }}</p>
                        <h5>Indirizzo: </h5>
                        <p>{{ $doctor->address }}</p>
                        <h5>Telefono: </h5>
                        <p>{{ $doctor->phone }}</p>

                    </div>
                </div>
                <div class="col-12 col-sm-12 col-lg-6 ">
                    <div class="box ">
                        <h5 class="m-5">Curriculum: </h5>
                        <img class="my_curriculum card" src="{{ asset("storage/$doctor->curriculum") }}"
                            alt="{{ $doctor->user->name }}'s curriculum">

                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
