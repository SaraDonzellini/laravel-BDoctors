<section id="doctor-messages">
    <div class="d-flex justify-content-center p-4">

        {{-- Route to Doctor's messages --}}
        <a href="{{ route('admin.doctors.show', $doctor->id) }}" class="btn-dash">
            Messaggi
        </a>
        
    </div>

    {{-- Last messages --}}
    <div>
        @foreach ($doctor->user->messages as $message)
        <p>{{ $message->name }}</p>
        <p>{{ $message->surname }}</p>
        <p>{{ $message->email }}</p>
        <p>{{ $message->text }}</p>
        @endforeach

    </div>

</section>