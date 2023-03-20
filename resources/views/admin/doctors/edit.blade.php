@extends('layouts.app')

@section('content')
    <div class="doctor">
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-12 text-center mb-3">
                    <h6>Inserisci i dati per modificare il tuo profilo</h6>
                </div>
                <div class="col-12">
<<<<<<< HEAD
                                        @include('admin.doctors.partials.form-create-edit',
=======
                    @include('admin.doctors.partials.form-create-edit',
>>>>>>> e8d3cc3297adf0da67b9b2c0e07277f3aea8aa79
                    ['route'=> 'admin.doctors.update', 'method'=> 'PUT', "doctor"=> $doctor])
                </div>
            </div>
        </div>
    </div>
@endsection