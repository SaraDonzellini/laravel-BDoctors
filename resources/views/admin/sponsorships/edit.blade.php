@extends('layouts.app')

@section('content')
  <div class="container">
    @include('admin.sponsorships.partials.create_edit', [
      'method' => 'PUT',
      'route' => 'admin.sponsorships.update',
    ])
  </div>

@endsection