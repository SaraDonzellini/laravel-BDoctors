@if ($errors->any())
    <div class="alert alert-danger">
        <h4>Check errors</h4>
    </div>
@endif

<form action="{{ route($route, $doctor->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method($method)

    <!--Address-->
    <div class="mb-3">
        <label for="address" class="form-label">Indirizzo</label>
        <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" value="{{ old('address', $doctor->address )}}">

        <!--catch Errors-->
        @error ('address')
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror
    </div>

    <!--Bio-->
    <div class="mb-3">
        <label for="bio" class="form-label">Bio</label>
        <textarea name="bio" placeholder="Inserire una bio" class="form-control @error('bio') is-invalid @enderror"></textarea>

        <!--catch Errors-->
        @error ('bio')
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror
    </div>

    <!--Performances-->
    <div class="form-group d-flex ">
        <label class="mb-3 me-4" for="performance">Prestazioni:</label>
        @foreach ($performances as $performance)
            <div class="form-check me-4">
                <input type="radio" class="form-check-input me-2 @error('performance') is-invalid @enderror" name="performance" value="{{ $performance }}"
                />
                <label class="form-check-label mb-2" for="performance">{{ $performance }}</label>
            </div>
        @endforeach

    </div>

    <!--N° Telephone-->
    <div class="mb-3">

        <label for="phone">Recapito Telefonico</label>
        <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" placeholder="Inserire Recapito Telefonico" />

        <!--catch Errors-->
        @error ('phone')
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror
    </div>

    <!--Pic Profile-->
    <div class="mb-3">
        <label for="photo" class="form-label">Foto Profilo</label>
        <input type="file" name="photo" id="photo" class="form-control @error('photo') is-invalid @enderror" value="{{'photo', $doctor->photo}}">

        <!--catch error-->
        @error ('photo')
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror
    </div>

    <!--Curriculum-->
    <div class="mb-3">
        <label for="curriculum" class="form-label">Curriculum Vitae</label>
        <input type="file" name="curriculum" id="curriculum" class="form-control @error('curriculum') is-invalid @enderror" value="{{'curriculum', $doctor->curriculum}}">

        <!--catch error-->
        @error ('curriculum')
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror
    </div>

    <!--Visibility-->
    <div class="mb-3">
        <label for="visibility" class="form-label me-3">Visibile</label>
        <input type="checkbox" class="form-check-input @error('visibility') is-invalid @enderror" id="visibility" name="visibility" value="1" {{ old('visibility', $doctor->visibility) ? 'checked' : ''}}>
    </div>

    <!--Specializations-->
    <div class="form-group">
        <label class="mb-3" for="specializations">Specializzazioni:</label>
        @foreach ($specializations as $specialization)
            <div class="form-check">
                <input type="checkbox" class="form-check-input @error('specialization') is-invalid @enderror" id="specialization{{ $specialization->id }}" name="specializations[]" value="{{ $specialization->id }}"
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


    <!--Buttons-->
    <div class="buttons my-3">
        <a href="{{route('admin.doctors.index')}}" class="btn btn-dark me-2"><i class="fa-solid fa-arrow-left"></i> Torna indietro</a>
        <button type="submit" class="btn btn-primary">Avanti</button>
    </div>
</form>