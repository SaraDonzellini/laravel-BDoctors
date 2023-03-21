@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card mb-3 mt-5 shadow-lg">
            <div class="card text-center">
                <div class="text my-4">
                    <span>Id: {{ $doctor->id }}</span>
                    <h3 class="card-title fw-bold my-3">{{ $doctor->user->name }} {{ $doctor->user->surname }}</h3>
                    <img src="{{asset("storage/$doctor->photo")}}" alt="Foto dottore"><br>
                    <img src="{{ asset("storage/$doctor->curriculum") }}" alt="Curriculum dottore">
                    <h4>Address: {{ $doctor->address }}</h4>
                    <h4>Phone: {{ $doctor->phone }}</h4>
                    <h6>Prestazioni: {{ $doctor->performances }}</h6>
                    <p>BIO <br> {{ $doctor->bio }}</p>
                    <p>Visibility: todo toggle</p>
                </div>

                <div class="secondary-actions mb-2">
                    {{-- Edit --}}
                    <a href="{{ route('admin.doctors.edit', $doctor->id) }}" class="btn btn-warning"><i
                            class="fa-solid fa-edit"></i></a>
                    {{-- Delete --}}
                    <form class="d-inline-block form-delete" action="{{ route('admin.doctors.destroy', $doctor->id) }}"
                        method="POST" data-element-name="{{ $doctor->name }}">
                        @csrf
                        @method('DELETE')
                        <button title="Delete" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection