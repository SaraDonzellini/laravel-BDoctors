@if ($errors->any())
<div class="alert alert-danger">
    <h4>Check errors</h4>
</div>
@endif

<form action="{{ route($route, $doctor->id) }}" method="POST" enctype="multipart/form-data">
@csrf
@method($method)

{{-- 
<div class="mb-3">
    <h3>Utente: {{ $doctor->user->name }} {{ $doctor->user->surname }} </h3>
</div> --}}

<div class="mb-3">
<label for="address" class="form-label">Address</label>
<input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" value="{{ old('address', $doctor->address )}}">
@error ('address')
    <div class="invalid-feedback">
        {{$message}}
    </div>
@enderror
</div>

<div class="mb-3">
    <label for="bio" class="form-label">Bio</label>
    <textarea name="bio" class="form-control @error('bio') is-invalid @enderror" >{{ old('bio', $doctor->bio) }}</textarea>
    @error ('bio')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror
    </div>

<div class="mb-3">
<label for="phone">Phone</label>
<input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ old('phone',$doctor->phone) }}">
@error ('phone')
    <div class="invalid-feedback">
        {{$message}}
    </div>
@enderror
</div>

<div class="mb-3">
<label for="photo" class="form-label">Profile photo file</label>
<input type="file" name="photo" id="photo" class="form-control @error('photo') is-invalid @enderror" value="{{'photo', $doctor->photo}}">
@error ('photo')
<div class="invalid-feedback">
    {{$message}}
</div>
@enderror
</div>

<div class="mb-3">
    <label for="cv" class="form-label">Curriculum file</label>
    <input type="file" name="cv" id="cv" class="form-control @error('cv') is-invalid @enderror" value="{{'cv', $doctor->cv}}">
@error ('cv')
<div class="invalid-feedback">
    {{$message}}
</div>
@enderror
</div>

<div class="mb-3">
<label for="visibility" class="form-label me-3">Visibile</label>
<input type="checkbox" class="form-check-input @error('visibility') is-invalid @enderror" id="visibility" name="visibility" value="1" {{ old('visibility', $doctor->visibility) ? 'checked' : ''}}>
</div>

<div class="buttons">
<a href="{{route('admin.doctors.index')}}" class="btn btn-dark me-2"><i class="fa-solid fa-arrow-left"></i> Cancel</a>
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>