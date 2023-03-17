@extends('layouts.app')

@section('content')
    <div class="doctor">
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-12 text-center mb-3">
                    <h6>Inserisci i dati per create il tuo profilo.</h6>
                </div>
                <div class="col-12">
                    @include('admin.doctors.partials.form-create-edit',
                    ['route'=> 'admin.doctors.store',
                    'method'=>'POST', 
                    'doctor'=> $doctor ])
                </div>
            </div>
        </div>
    </div>
@endsection
