@extends('layouts.app')

@section('title')
    Dottor {{ $doctor->user->name }}! 
@endsection

@section('content')
    <div class="container card shadow-lg mt-5 mb-5">
        @if (session('message'))
            <div class="alert alert-{{ session('alert-type') }}">
                {{ session('message') }}
            </div>
        @endif
        <div class="row">
            <div class="col-12">
                <div class="my_header d-flex align-items-center m-5">
                    <img src="{{ asset("storage/imgs/$doctor->photo") }}" alt="Foto">
                    <h3 class="ms-5 text-center fw-bold text-uppercase">{{ $doctor->user->name }} {{ $doctor->user->surname }}</h3>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="my_box text-centered m-5">
                            <h4>
                                Visibilità
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
            </div>
            <div class="row">
                <div class="col-6">
                    <h5 class="m-5">Biografia: </h5>
                    <p class="m-5"> {{ $doctor->bio }}</p>
                </div>
                <div class="col-6 ">
                    <h5 class="m-5">Curriculum: </h5>
                    <img class="my_curriculum" src="{{ asset("storage/curriculum/$doctor->curriculum") }}" alt="CV">
                </div>
            </div>

            <div class="row">
                <div class="col-5 m-5">
                    <h4>Indirizzo: {{ $doctor->address }}</h4>
                </div>
                <div class="col-5 m-5">
                    <h4>Telefono: {{ $doctor->phone }}</h4>
                </div>
            </div>

            <div class="row">
                <div class="col-5 m-5">
                    <h5>Prestazione:</h5>
                    <p>{{ $doctor->performance }}</p>
                </div>
                <div class="col-5 m-5">
                    <h5>Specializzazioni:</h5>
                    @foreach ($doctor->specializations as $specialization)
                        <p>{{ $specialization->title }}</p>
                    @endforeach
                </div>
            </div>


            <div class="d-flex justify-content-between">
                <div class="my_divbox mb-4 ms-2">
                    <a href="{{ route('admin.doctors.edit', $doctor->id) }}" class="my_btn">Modifica il tuo
                        profilo</a>
                </div>
                <div class="my_divbox mb-4 ">
                    <a href="{{ route('admin.messages.index', $doctor->id) }}" class="my_btn">Leggi i tuoi
                        messaggi</a>
                </div>
                <div class="my_divbox mb-4">
                    <a href="{{ route('admin.reviews.index', $doctor->id) }}" class="my_btn">Leggi le tue
                        recensioni</a>
                </div>
                <div class="my_divbox mb-4 me-2">
                    <a href="{{ route('admin.sponsorships.index', $doctor->id) }}" class=" my_btn">Scegli una
                        sponsorizzazione</a>
                </div>

            </div>
        @endsection
