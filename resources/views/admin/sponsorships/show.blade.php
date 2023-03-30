@extends('layouts.app')

@section('title', "Sponsorizzazioni")

@section('content')
    <div class="view">
        <div class="container ">
            @if (session('message'))
                <div class="alert alert-{{ session('alert-type') }}">
                    {{ session('message') }}
                </div>
            @endif
            <div class="row justify-content-center">
                <div class="col-12 p-5">
                    <div class="card p-5 text-start bg-spons">
                        <div class="card-title text-light d-flex row align-items-center">
                            <div class="col-6">
                                <h1 class="text-capitalize">
                                    {{ $sponsorship->specifics }}
                                </h1>
                                <p>
                                    {{ $sponsorship->price }} &euro;
                                </p>
                                <p>
                                    Una sponsorizzazione che dura {{ $sponsorship->duration }} ore per rimanere in homepage!
                                </p>
                            </div>
                        </div>
                        <script src="https://js.braintreegateway.com/web/dropin/1.36.0/js/dropin.js"></script>
                        
                        <div id="dropin-container"></div>
                        <button id="submit-button" class="button button--small button--green">Purchase</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
