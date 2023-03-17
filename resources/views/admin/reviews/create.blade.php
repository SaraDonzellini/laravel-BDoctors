@extends('layouts.app')

@section('content')
<div class="container">
    @include('admin.reviews.partials.editCreate', [
        'method' => 'POST',
        'routeName' => 'admin.reviews.store'
        ])
</div>
@endsection