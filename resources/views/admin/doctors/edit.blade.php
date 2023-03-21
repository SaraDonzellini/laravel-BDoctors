@extends('layouts.app')

@section('title')
    Modifica Profilo {{ $doctor->user->name }}!
@endsection

@section('content')
    <div class="doctor">
        <div class="container py-4">
            <div class="row justify-content-around">
                <div class="col-12 text-center mb-3 mt-3">
                    <h3>Inserisci i dati per modificare il tuo profilo</h3>
                </div>
                <div class="col-12">
                    @include('admin.doctors.partials.form-create-edit',
                    ['route'=> 'admin.doctors.update', 'method'=> 'PUT', "doctor"=> $doctor])
                </div>
            </div>
        </div>
    </div>
@endsection