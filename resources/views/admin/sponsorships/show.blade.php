@extends('layouts.app')


@section('content')
    <div class="view">
        <div class="container ">
            <div class="row justify-content-center">
                <div class="col-12 p-5">
                    <div class="card p-3 text-start bg-spons">
                        <div class="card-title text-light d-flex row align-items-center">
                            <div class="col-6">
                                <h1 class="text-capitalize">
                                    {{ $sponsorship->specifics }}
                                </h1>
                                <p >
                                    {{ $sponsorship->price }} &euro;
                                </p>
                                <p>
                                    {{ $sponsorship->duration }} ore
                                </p>
                            </div>
                            <div class="col-6">
                                <a href="" class="btn btn-primary">Acquista</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
