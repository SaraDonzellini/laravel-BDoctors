<section>
    <header>
        <h2 class="text-secondary">
            {{ __('Informazioni dottore') }}
        </h2>
    </header>

    <?php
        use Illuminate\Support\Facades\Auth;
        use App\Models\Doctor;

        $user = Auth::user();
        $doctor = $user->doctor;
    ?>

    <form action="{{ route('admin.doctors.update', $doctor->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
    
        <div class="mb-3">
            <label for="address" class="form-label">Indirizzo</label>
            <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" value="{{ old('address', $doctor->address )}}">
            @error ('address')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        
        <div class="mb-3">
            <label for="bio" class="form-label">Biografia</label>
            <textarea name="bio" class="form-control @error('bio') is-invalid @enderror" rows="5">{{ old('bio', $doctor->bio) }}</textarea>
            @error ('bio')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        
        <div class="mb-3">
            <label for="phone">Telefono</label>
            <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ old('phone',$doctor->phone) }}">
            @error ('phone')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        
        <div class="mb-3">
            <label for="photo" class="form-label">Foto profilo</label>
            <input type="file" name="photo" id="photo" class="form-control @error('photo') is-invalid @enderror" value="{{ old('photo', $doctor->photo) }}">
            @error ('photo')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        
        <div class="mb-3">
            <label for="curriculum" class="form-label">Curriculum</label>
            <input type="file" name="curriculum" id="curriculum" class="form-control @error('curriculum') is-invalid @enderror" value="{{ old('curriculum', $doctor->curriculum) }}">
            @error ('curriculum')
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
            <button type="submit" class="btn btn-primary">Salva</button>
        </div>
    </form>
</section>
