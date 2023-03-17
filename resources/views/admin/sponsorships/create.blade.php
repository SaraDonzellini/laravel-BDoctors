@extends('layouts.app')

@section('content')
<div class="container">
    @include('admin.sponsorships.partials.create_edit', [
        'method' => 'POST',
        'route' => 'admin.sponsorships.store',
    ])
</div>

@endsection