<section id="doctor-curriculum">
    <div class="d-flex justify-content-center">

        {{-- Route to Doctor's show --}}
        <a href="{{ route('admin.doctors.show', $doctor->id) }}" class="btn-dash position-dash">
            Curriculum
        </a>
    </div>

    <div class="d-flex justify-content-center">
        <img src="{{asset("storage/$doctor->curriculum")}}" alt="{{$doctor->user->name}}'s curriculum" class="img-fluid">
    </div>
</section>