<section id="doctor-profile">
    <div class="d-flex justify-content-center">

        {{-- Route to Doctor's show --}}
        <a href="{{ route('admin.doctors.show', $doctor->id) }}" class="btn-dash position-dash position-absolute">
            Profilo Dottore
        </a>
    </div>

    {{-- Doctor's photo --}}
    <div class="d-flex justify-content-center">
        <img src="{{asset("storage/$doctor->photo")}}" alt="{{$doctor->user->name}}'s image profile" class="rounded img-fluid shadow">
    </div>
    
    {{-- Doctor's infos --}}
    <div class=" bg-message text-light mt-3 p-2 rounded">
        <h5>
            {{ $doctor->user->name }} {{ $doctor->user->surname }}
        </h5>
        
        <p>
            
            @foreach ($doctor->specializations as $specialization)
                {{ $specialization->title }} |
            @endforeach
        </p>
        <p>
            Prestazione: {{$doctor->performance}}
        </p>
        {{-- <div class="dash-bio">
            Biografia: {{$doctor->bio}}
        </div> --}}
    </div>
</section>