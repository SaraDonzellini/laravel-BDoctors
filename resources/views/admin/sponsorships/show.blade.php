@extends('layouts.app')


@section('content')
    <div class="view">
        <div class="container ">
            <div class="row justify-content-center">
                <div class="col-12 p-5">
                    <div class="card p-3 text-start bg-spons">
                        <div class="card-title text-light">
                            <h1>
                                {{ $sponsorship->specifics }}
                            </h1>
                            <p>
                                {{ $sponsorship->price }}
                            </p>
                            <p>
                                {{ $sponsorship->duration }} ore
                            </p>
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
