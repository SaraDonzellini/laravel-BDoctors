<section id="doctor-curriculum">
    <div class="d-flex justify-content-center">

        {{-- Route to Doctor's show --}}
        <a href="{{ route('admin.doctors.show', $doctor->id) }}" class="btn-dash position-dash">
            Curriculum
        </a>
    </div>

    <div class="d-flex justify-content-center">
        <a href="{{asset("storage/$doctor->curriculum")}}"><img src="{{asset("storage/$doctor->curriculum")}}" alt="{{$doctor->user->name}}'s curriculum" class="img-fluid rounded"></a>
    </div>
</section>