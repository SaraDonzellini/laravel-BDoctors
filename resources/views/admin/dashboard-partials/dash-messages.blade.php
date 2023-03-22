<section>
    <div class="d-flex justify-content-center p-4">

        {{-- Route to Doctor's messages --}}
        <a href="{{ route('admin.doctors.show', $doctor->id) }}" class="btn-dash">
            Messaggi
        </a>
        
        {{-- @foreach ($messages as $message)
        <p>{{ $message->id }}</p>
        <p>{{ $message->user_id }}</p>
        <p>{{ $message->name }}</p>
        <p>{{ $message->surname }}</p>
        <p>{{ $message->email }}</p>
        @endforeach --}}


     </div>
</section>