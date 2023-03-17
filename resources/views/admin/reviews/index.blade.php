@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table table-striped table-borderless table-hover mt-5">
        <thead class="table-dark">
            <tr>
                <th scope="col">#id</th>
                <th scope="col">Name</th>
                <th scope="col">Surname</th>
                <th scope="col">Text</th>
                <th scope="col">Vote</th>
                <th scope="col">
                    <a href="{{ route('admin.reviews.create') }}" class="btn btn-sm btn-primary">
                        Create new review
                    </a>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reviews as $review)
            <tr>
                <td>{{ $review->id }}</td>
                <td>{{ $review->name }}</td>
                <td>{{ $review->surname }}</td>
                <td>{{ $review->text }}</td>
                <td>{{ $review->vote }}</td>
                <td>
                    <a href="{{ route('admin.reviews.edit', $review->id) }}" class="btn btn-sm btn-success">
                        Edit
                    </a>

                    <form action="{{ route('admin.reviews.destroy', $review->id) }}" method="POST" class="d-inline-block">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-sm btn-danger">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection