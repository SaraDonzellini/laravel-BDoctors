@extends('layouts.app')

@section('title')
    Benvenuto {{ $doctor->user->name }}!
@endsection

@section('content')
    <section class="creat-doctor">
        <div class="doctor">
            <div class="container py-4">
                <div class="row justify-content-around">
                    <div class="col-12 text-center mb-3">
                        <h2>
                            Crea il tuo account da dottore
                        </h2>
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
    </section>
@endsection
