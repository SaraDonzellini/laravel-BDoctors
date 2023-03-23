<?php
namespace App\Models;
use Illuminate\Support\Facades\Auth;

$sponsorships = Sponsorship::all();

?>

<section>
    <div class="d-flex justify-content-center p-4">
        {{-- Route to sponsorhips --}}
        <a href="{{ route('admin.sponsorships.index', $doctor->id) }}" class="btn-dash position-dash">
            Sponsorizzazioni
        </a>
    </div>

    <div>
        {{-- Sponsorships --}}
        @foreach ($sponsorships as $sponsorship)
        <h5>
            {{ $sponsorship->price }}
        </h5>
        <h6>
            Durata: {{ $sponsorship->duration }} ore
        </h6>
        <p>{{ $sponsorship->specifics }}</p>
        @endforeach

    </div>
</section>