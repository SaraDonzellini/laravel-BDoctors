@extends('layouts.app')

@section('content')
<div class="container py-5">

    @if (session('message'))
        <div class="alert alert-{{ session('alert-type') }}">
            {{ session('message')  }}
        </div>
    @endif

    <div class="mb-3 d-flex justify-content-end ">
        <a class="btn btn-success me-3" href="{{route('admin.sponsorships.create')}}"><i
            class="fa-solid fa-plus"></i></a>
    </div>


    <table class="table w-75 m-auto">
        <thead>
            <tr class="text-dark">
                <th scope="col">id</th>
                <th scope="col">Price</th>
                <th scope="col">Duration</th>
                <th scope="col">Specifics</th>
                <th scope="col"><i class="fa-sharp fa-solid fa-ellipsis"></i></th>
            </tr>
        </thead>

        @foreach ($sponsorships as $sponsorship)
        <tbody>
            <tr class="text-dark">
                <td>{{ $sponsorship->id }}</td>
                <td>{{ $sponsorship->price }}</td>
                <td>{{ $sponsorship->duration }}</td>
                <td>{{ $sponsorship->specifics}}</td>
                <td>
                 <a class = "btn btn-sm btn-primary " href=" {{ route ( 'admin.sponsorships.show' , $sponsorship->id ) }}" >Show</a>
                 <a class = "btn btn-sm btn-warning " href=" {{ route ( 'admin.sponsorships.edit' , $sponsorship->id ) }}" >Edit</a>
                    <form class="d-inline" data-element="{{ $sponsorship->title }}" action="{{ route ( 'admin.sponsorships.destroy' , $sponsorship->id ) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
        </tbody>
        @endforeach 
    </table> 
</div>
@endsection
