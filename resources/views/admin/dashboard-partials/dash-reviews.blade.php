<?php
namespace App\Models;
use Illuminate\Support\Facades\Auth;

$reviews = Review::with('user')->where('user_id', Auth::user()->id)->latest()->take(2)->get();

?>

<section>
    <div class="d-flex justify-content-center p-2">

        {{-- Route to Doctor's reviews --}}
        <a href="{{ route('admin.reviews.index', $doctor->id) }}" class="btn-dash position-dash">
            Recensioni
        </a>
        
    </div>

    {{-- Last reviews --}}
    <div class="bg-dash shadow text-light rounded p-2">
        @foreach ($reviews as $review)
        <h5>
            {{ $review->name }} {{ $review->surname }}, <span>voto: {{ $review->vote }}</span>
        </h5>
        <p>{{ $review->text }}</p>
        @endforeach
    </div>
</section>