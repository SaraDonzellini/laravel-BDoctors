@extends('layouts.app')

@section('title', 'Sponsorizzazioni')
@section('content')
<div class="container py-5">

    @if (session('message'))
        <div class="alert alert-{{ session('alert-type') }}">
            {{ session('message')  }}
        </div>
    @endif

    <h2 class="text-center">Acquista un sponsorizzazione per rimanere in homepage!</h2>
    <table class="table w-75 m-auto text-center">
        <thead>
            <tr class="text-dark">
                <th scope="col">Price</th>
                <th scope="col">Duration</th>
                <th scope="col">Specifics</th>
                <th scope="col"><i class="fa-sharp fa-solid fa-ellipsis"></i></th>
            </tr>
        </thead>

        @foreach ($sponsorships as $sponsorship)
        <tbody>
            <tr class="text-dark">
                <td>{{ $sponsorship->price }} &euro;</td>
                <td>{{ $sponsorship->duration }} ore</td>
                <td class="text-capitalize">{{ $sponsorship->specifics}}</td>
                <td>
                    <a class = "btn btn-sm btn-primary " href=" {{ route ( 'admin.sponsorships.show' , $sponsorship->id ) }}" >Acquista</a>
                    
                </td>
            </tr>
        </tbody>
        @endforeach 
    </table> 
</div>
@endsection
