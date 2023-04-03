<?php
namespace App\Models;
use Illuminate\Support\Facades\Auth;

$messages = Message::with('user')->where('user_id', Auth::user()->id)->latest()->take(3)->get();

?>


<section id="doctor-messages">
    <div class="d-flex justify-content-center p-2">

        {{-- Route to Doctor's messages --}}
        <a href="{{ route('admin.messages.index', $doctor->id) }}" class="btn-dash position-dash">
            Messaggi
        </a>
        
    </div>

    {{-- Last messages --}}
    <div class="bg-dash rounded p-2 shadow mb-2">
        <div class="text-light">
            @foreach ($messages as $message)
            <h5>
                {{ $message->name }} {{ $message->surname }} <span>({{ $message->email }})</span>
            </h5>
            <p>{{ $message->text }}</p>
            @endforeach
        </div>
    </div>
</section>