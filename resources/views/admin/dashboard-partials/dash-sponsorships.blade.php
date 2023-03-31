<?php
namespace App\Models;
use Illuminate\Support\Facades\Auth;

$user = Auth::user();

$sponsorships = $user->sponsorships;

?>

<section>
    <div class="d-flex justify-content-center p-4">
        {{-- Route to sponsorhips --}}
        <a href="#" class="btn-dash position-dash">
            Sponsorizzazioni
        </a>
    </div>

    <div>
        @if($sponsorships->count() > 0)
        <h5> 
            Sponsorizzazione Attiva:
        </h5>
        @foreach($sponsorships as $sponsorship)
            <h4 class="fw-bold">
                {{ $sponsorship->specifics}}
            </h4>
        @endforeach
        @else
            <p>Nessuna sponsorizzazione è stata acquistata.</p>
            <a href="{{ route('admin.sponsorships.index')}}">Acquistane una ora</a>
        @endif
    </div>
</section>