<?php
namespace App\Models;
use Illuminate\Support\Facades\Auth;

$user = Auth::user();

$sponsorships = $user->sponsorships;

?>

<section>
    <div class="d-flex justify-content-center p-4">
        {{-- Route to sponsorships --}}
        <a href="#" class="btn-dash position-dash">
            Sponsorizzazioni
        </a>
    </div>

    <div>
        @if($sponsorships->count() > 0)
        <h5 class=" text-center"> 
            Sponsorizzazione Attiva:
        </h5>
        @foreach($sponsorships as $sponsorship)
            <h4 class="fw-bold text-capitalize text-center">
                {{ $sponsorship->specifics}}
            </h4>
        @endforeach
        @else
            <p class=" text-center">Nessuna sponsorizzazione è stata acquistata. Aquistane una per rimanere in homepage!</p>
            <p class=" text-center"><a class="btn-buy p-2 text-light rounded" href="{{ route('admin.sponsorships.index')}}">Acquistane una ora</a></p>
        @endif
    </div>
</section>