@extends('layouts.app')

@section('content')

<section class="messages">

    <div class="container py-4">

        <div class="row">

            <table class="table">
                <!--Table head -->
                <thead>
                    <tr>
                        <th scope="col">#id</th>
                        <th scope="col">#user_id</th>
                        <th scope="col">name</th>
                        <th scope="col">surname</th>
                        <th scope="col">email</th>
                        {{-- <th scope="col">
                            <a href="{{ route('admin.messages.create')}}" class="btn btn-primary px-4">
                                <i class="fa-solid fa-plus"></i>
                            </a>
                        </th> --}}
                    </tr>
                </thead>

                <!--Table body-->
                <tbody>
                    @foreach ($messages as $message)
                    <tr>
                        <td>{{ $message->id }}</td>
                        <td>{{ $message->user_id }}</td>
                        <td>{{ $message->name }}</td>
                        <td>{{ $message->surname }}</td>
                        <td>{{ $message->email }}</td>
                        <td>
                            {{-- <a href="{{ route('admin.messages.show', $message->id)}}" class="btn btn-primary">
                                <i class="fa-regular fa-eye"></i>
                            </a>

                            <form class="d-inline delete" action="{{ route('admin.messages.destroy', $message->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                
                                <button class="btn btn-danger">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            
                            </form> --}}
                        </td>
                
                    </tr>
                    @endforeach
                </tbody>

            </table>

        </div>
       
    </div>
    
</section>

@endsection