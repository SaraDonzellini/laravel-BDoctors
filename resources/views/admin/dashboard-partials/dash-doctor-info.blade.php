<section id="doctor-profile">
    <div class="d-flex justify-content-center">
       {{--  <h3>
            Profilo Dottore
        </h3> --}}
    </div>
    <div class="d-flex justify-content-center">
        <img src="{{asset("storage/$doctor->photo")}}" alt="{{$doctor->user->name}}'s image profile" class="doctor-profile-img img-fluid">
    </div>
    <div class="p-4">
        <h5>
            {{ $doctor->user->name }} {{ $doctor->user->surname }}
        </h5>
        
        <p>
            @foreach ($doctor->specializations as $specialization)
                {{ $specialization->title }}
            @endforeach
        </p>
        <p>
            {{$doctor->performance}}
        </p>
        <div class="dash-bio">
            La mia biografia: bioasdasdasdasdasdasda
        </div>
    </div>
</section>