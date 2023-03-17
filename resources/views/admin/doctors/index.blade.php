@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @if (session('message'))
                <div class="alert alert-{{ session('alert-type') }}">
                    {{ session('message') }}
                </div>
            @endif
            <table class="table mt-3">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Surname</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Specialization</th>
                        <th scope="col">Visibility</th>
                        <th scope="col" class="text-end">
                            <a href="{{ route('admin.doctors.create') }}" class="btn btn-secondary"><i
                                    class="fa-solid fa-plus"></i></a>
                        </th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($doctors as $doctor)
                        <tr>
                            <th scope="row">{{ $doctor->id }}</th>
                            <td>{{ $doctor->user->name }}</td>
                            <td>{{ $doctor->user->surname }}</td>
                            <td>{{ $doctor->phone }}</td>
                            <td>
                                @foreach ($doctor->specializations as $specialization)
                                    #{{ $specialization->title }}
                                @endforeach
                            </td>
                            <td>todo: toggle</td>
                            <td class="text-end">
                                {{-- View --}}
                                <a href="{{ route('admin.doctors.show', $doctor->id) }}" class="btn btn-primary"><i
                                        class="fa-solid fa-eye"></i></a>

                                {{-- Edit --}}
                                <a href="{{ route('admin.doctors.edit', $doctor->id) }}" class="btn btn-warning"><i
                                        class="fa-solid fa-edit"></i></a>

                                {{-- Delete --}}
                                <form class="d-inline-block form-delete"
                                    action="{{ route('admin.doctors.destroy', $doctor->id) }}" method="POST"
                                    data-element-name="{{ $doctor->name }}">
                                    @csrf
                                    @method('DELETE')
                                    <button title="Delete" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
