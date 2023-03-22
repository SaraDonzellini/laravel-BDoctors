<?php
namespace App\Models;
use Illuminate\Support\Facades\Auth;

$messages = Review::with('user')->where('user_id', Auth::user()->id)->latest()->take(2)->get();

?>

<section>
    <div class="d-flex justify-content-center p-4">

        {{-- Route to Doctor's reviews --}}
        <a href="{{ route('admin.reviews.index', $doctor->id) }}" class="btn-dash">
            Recensioni
        </a>
        
    </div>

    {{-- Last messages --}}
    <div>
        @foreach ($messages as $message)
        <p>{{ $message->name }}</p>
        <p>{{ $message->surname }}</p>
        <p>{{ $message->email }}</p>
        <p>{{ $message->text }}</p>
        @endforeach

    </div>
</section>