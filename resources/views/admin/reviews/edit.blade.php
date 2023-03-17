@extends('layouts.app')

@section('content')
<div class="container">
    @include('admin.reviews.partials.editCreate', [
        'method' => 'PUT',
        'routeName' => 'admin.reviews.update'
        ])
</div>
@endsection