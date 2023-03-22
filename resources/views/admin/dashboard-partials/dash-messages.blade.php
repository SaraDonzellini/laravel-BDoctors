<?php
namespace App\Models;
use Illuminate\Support\Facades\Auth;

$messages = Message::with('user')->where('user_id', Auth::user()->id)->latest()->take(3)->get();

?>


<section id="doctor-messages">
    <div class="d-flex justify-content-center p-4">

        {{-- Route to Doctor's messages --}}
        <a href="{{ route('admin.messages.index', $doctor->id) }}" class="btn-dash">
            Messaggi
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