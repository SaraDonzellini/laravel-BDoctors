@extends('layouts.app')

@section('title')
    Dottor {{ $doctor->user->name }}
@endsection

@section('content')
    <section class="profile">
        @if (session('message'))
            <div class="alert alert-{{ session('alert-type') }}">
                {{ session('message') }}
            </div>
        @endif
        <div class="container card px-0 shadow-lg mt-5 mb-5">
            <div class="row">
                <div class="col-12  col-sm-12 col-lg-6">
                    <div class="my_header m-auto mb-5 mt-5">
                        <div><img class="my_avatar card shadow d-block" src="{{ asset("storage/$doctor->photo") }}"
                                alt="{{ $doctor->user->name }}'s image profile">
                        </div>
                        <div class="d-flex justify-content-center align-items-center">
                            <span>Seleziona la tua visibilità:</span>
                            <form action="{{ route('admin.doctors.toggle', $doctor->id) }}" method="POST">
                                @method('PATCH')
                                @csrf
                                <button type="submit" title="{{ $doctor->visibility ? 'visibile' : 'non visibile' }}"
                                    class=" btn btn-outline"><i class="fa-2x fa-solid fas fa-fw {{ $doctor->visibility ? 'fa-toggle-on' : 'fa-toggle-off' }}"></i></button>
                            </form>
                        </div>
                    </div>

                </div>
                <div class="col-12  col-sm-12 col-lg-6">
                    <div class="d-flex align-items-center mt-5">
                        <h1 class=" text-center fw-bold">
                            {{ $doctor->user->name }} {{ $doctor->user->surname }}
                        </h1>
                    </div>
                    <div class="mt-3">
                        <h5>Specializzazione:</h5>
                        @foreach ($doctor->specializations as $specialization)
                            <span>{{ $specialization->title }} |</span>
                        @endforeach
                        <h5 class="mt-2">Prestazione:</h5>
                        <p>{{ $doctor->performance }}</p>
                    </div>
                    <div class="mt-5">
                        <a href="{{ route('admin.doctors.edit', $doctor->id) }}" id="my-edit-btn" class="my-btn">Modifica il tuo
                            profilo</a>
                    </div>
                    <div class="my_divbox mt-5 ">
                        <a href="{{ route('admin.messages.index', $doctor->id) }}" class="my-btn me-3">Leggi i tuoi
                            messaggi </a>
                        <a href="{{ route('admin.reviews.index', $doctor->id) }}" class="my-btn">Leggi le tue
                            recensioni</a>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="blue-box pt-2 pb-2 text-center">
                        <h3>Informazioni formazione e lavoro</h3>
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
                    <div class="box mb-5">
                        <h5 class="text-center my-3">Curriculum</h5>
                        <img class="my_curriculum card mx-auto" src="{{ asset("storage/$doctor->curriculum") }}" alt="{{ $doctor->user->name }}'s curriculum">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
