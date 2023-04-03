@if ($errors->any())
    <div class="alert alert-danger">
        <h4>Check errors</h4>
    </div>
@endif
<div class="card my_registration_card p-5">


<form action="{{ route($route, $doctor->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method($method)

    <!--Address-->
    <div class="mb-3">
        <label for="address" class="form-label">Indirizzo (*)</label>
        <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" value="{{ old('address', $doctor->address )}}" title="Inserisci un indirizzo valido" placeholder="Inserisci un indirizzo valido" required>

        <!--catch Errors-->
        @error ('address')
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror
    </div>

    <!--Bio-->
    <div class="mb-3">
        <label for="bio" class="form-label">Bio (*)</label>
        <textarea name="bio" placeholder="Inserire una biografia" required class="form-control @error('bio') is-invalid @enderror">{{ old('bio', $doctor->bio )}}</textarea>

        <!--catch Errors-->
        @error ('bio')
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror
    </div>

    <!--Performances-->
    <div class="form-group d-flex ">
        <label class="mb-3 me-4" for="performance">Prestazioni: (*)</label>
        @foreach ($performances as $performance)
            <div class="form-check me-4">
                <input type="radio"  required title="Scegli una prestazione" class="form-check-input me-2 @error('performance') is-invalid @enderror" name="performance" value="{{ $performance }}"
                @if (old('performance', $doctor->performance) == $performance) checked @endif
                />
                <label class="form-check-label mb-2" for="performance">{{ $performance }}</label>
            </div>
        @endforeach

    </div>

    <!--N° Telephone-->
    <div class="mb-3">

        <label for="phone">Recapito Telefonico (*)</label>
        <input type="text" required class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" placeholder="Inserire Recapito Telefonico" value="{{ old('phone', $doctor->phone )}}" />

        <!--catch Errors-->
        @error ('phone')
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror
    </div>

    <!--Pic Profile-->
    <div class="mb-3">
        <label for="photo" class="form-label">Foto Profilo (*)</label>
        <input type="file" required title="Inserisci una foto profilo" name="photo" id="photo" class="form-control @error('photo') is-invalid @enderror" value="{{old('photo', $doctor->photo)}}">

        <!--catch error-->
        @error ('photo')
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror
    </div>

    <!--Curriculum-->
    <div class="mb-3">
        <label for="curriculum" class="form-label">Curriculum Vitae (Richiesto formato immagine)(*)</label>
        <input type="file" required title="Inserisci un Curriculum Vitae" name="curriculum" id="curriculum" class="form-control @error('curriculum') is-invalid @enderror" value="{{old('curriculum', $doctor->curriculum)}}">

        <!--catch error-->
        @error ('curriculum')
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror
    </div>

    <!--Visibility-->
    <div class="mb-3">
        <label for="visibility" class="form-label me-3">Visibile (Decidi se renderti visibile o meno ai pazienti)(*)</label>
        <input type="checkbox" title="decidi se renderti visibile o meno ai pazienti" class="form-check-input @error('visibility') is-invalid @enderror" id="visibility" name="visibility" value="1" {{ old('visibility', $doctor->visibility) ? 'checked' : ''}}>
    </div>

    <!--Specializations-->
    
    <label class="mb-3" for="specializations">Specializzazioni:</label>
    <div class="form-group d-flex flex-wrap justify-content-evenly gap-3">
        @foreach ($specializations as $specialization)
            <div class="form-check">
                <input type="checkbox" title="Inserisci almeno una specializzazione" class="form-check-input @error('specialization') is-invalid @enderror" id="specialization{{ $specialization->id }}" name="specializations[]" value="{{ $specialization->id }}"
                @if ($errors->any())
                    @checked(in_array($specialization->id, old('specialization',[])))
                @else
                    @checked($doctor->specializations->contains($specialization->id))
                @endif
                />
                <label class="form-check-label mb-2" for="specialization{{ $specialization->id }}">{{ $specialization->title }}</label>
            </div>
        @endforeach

    </div>

    <div class="card bg-dark">
        (*) I campi sono obbligatori
    </div>


    <!--Buttons-->
    <div class="buttons my-3">
        <a href="{{route('admin.doctors.index')}}" class="btn btn-dark me-2"><i class="fa-solid fa-arrow-left"></i> Torna indietro</a>
        <button type="submit" class="btn btn-primary">Avanti</button>
    </div>
</form>

</div>