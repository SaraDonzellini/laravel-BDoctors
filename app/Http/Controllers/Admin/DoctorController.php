<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Specialization;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DoctorController extends Controller
{
    public $customValidations = [
        'bio.required' => 'La biografia è obbligatoria',
        'bio.min' => 'Il campo Bio deve contenere almeno :min caratteri',
        'curriculum.required' => 'Il Curriculum è necessario',
        'curriculum.image' => 'Il formato del curriculum è errato',
        'photo.required' => 'La foto è richiesta',
        'photo.image' => 'Il formato della foto è errato',
        'address.required' => 'L\'indirizzo è obbligatorio',
        'address.min' => 'L\'indirizzo deve contenere almeno :min caratteri',
        'address.max' => 'L\'indirizzo non può contenere più di :max caratteri',
        'phone.required' => 'Il numero di telefono è obbligatorio',
        'phone.numeric' => 'Il campo telefono deve contenere solo numeri',
        'specializations.required' => 'Il campo di specializzazioni è obbligatorio',
        'performance.required' => 'Il campo performance è richiesto'
        // 'phone.max' => 'Il numero di telefono non può contenere più di :max caratteri',
    ];

    public $validationRules = [
        'bio' => 'required|min:10',
        'curriculum' => 'required|image',
        'photo' => 'required|image',
        'address' => 'required|min:3|max:100',
        'phone' => 'required|numeric',
        'visibility' => 'nullable',
        'specializations' => ['required', 'array', 'min:1', 'exists:specializations,id'],
        'performance' => ['required', 'string']
    ];



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $doctor = $user->doctor;
        // dd($doctor);
        return view('admin.doctors.show', compact('user', 'doctor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Doctor $doctor)
    {
        $user = Auth::user();
        $doctor = $user->doctor;
        $specializations = Specialization::all();
        $performances = ['Visita specialistica', 'Consulenza', 'Diagnosi', 'Certificazione'];
        return view('admin.doctors.create', compact('specializations', 'doctor', 'performances'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $data = $request->validate($this->validationRules, $this->customValidations);
        if (!array_key_exists('visibility', $data)) {
            $data['visibility'] = false;
        };

        // dd($request->hasFile('photo'));
        if ($request->hasFile('photo')) {
            // Salvo l'immagine caricata dall'utente
            $data['photo'] = Storage::put('imgs/', $data['photo']);
        } else {
            // Imposto un'immagine di default
            $data['photo'] = 'imgs/avatar_placeholder.jpg';
        }

        $data['curriculum'] = Storage::put('curriculum/', $data['curriculum']);

        $currentUser = Auth::user();
        // dd($currentUser);

        $newDoctor = $currentUser->doctor;
        // dd($newDoctor);
        $newDoctor->fill($data);
        //dd($newDoctor);
        $newDoctor->specializations()->sync($data['specializations'] ?? []);
        $newDoctor->save();

        return redirect()->route('admin.doctors.index')->with('message', "Il profilo è stato creato con successo")->with('alert-type', 'success');
    }

    /**
     * Display the specified resource.
     *
     * @param  Doctor $doctor
     * @return \Illuminate\Http\Response
     */
    public function show(Doctor $doctor)
    {
        $doctors = Doctor::with('user', 'specializations')->get();

        return view('admin.doctors.show', compact('doctor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Doctor $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit(Doctor $doctor)
    {
        $user = Auth::user();
        $doctor = $user->doctor;
        $specializations = Specialization::all();
        $performances = ['Visita specialistica', 'Consulenza', 'Diagnosi', 'Certificazione'];
        return view('admin.doctors.edit', compact('specializations', 'doctor', 'performances'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Doctor $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doctor $doctor)
    {
        $data = $request->validate($this->validationRules, $this->customValidations);
        //dd($data);
        if (!array_key_exists('visibility', $data)) {
            $data['visibility'] = false;
        };

        $data['photo'] = Storage::put('imgs/', $data['photo']);
        // if (!str_starts_with($doctor->photo, 'http')) {
        //     Storage::delete($doctor->photo);
        // }
        $data['curriculum'] = Storage::put('curriculum/', $data['curriculum']);
        // if (!str_starts_with($doctor->curriculum, 'http')) {
        //     Storage::delete($doctor->curriculum);
        // }

        $doctor->specializations()->sync($data['specializations'] ?? []);
        $doctor->update($data);
        // dd($doctor);
        // dd($request->all());

        return redirect()->route('admin.doctors.show', $doctor->id)->with('message', "Il profilo è stato aggiornato con successo")->with('alert-type', 'info');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Doctor $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctor $doctor)
    {

        $doctor->delete();

        if (!str_starts_with($doctor->photo, 'http')) {
            Storage::delete($doctor->photo);
        }
        if (!str_starts_with($doctor->curriculum, 'http')) {
            Storage::delete($doctor->curriculum);
        }

        return redirect()->route('admin.doctors.index')->with('message', "Il profilo è stato cancellato")->with('alert-type', 'danger');
    }

    public function enableToggle(Doctor $doctor)
    {
        $doctor->visibility = !$doctor->visibility;
        $doctor->save();

        $message = ($doctor->visibility) ? "visibility" : "not-visibility";
        return redirect()->back()->with('alert-type', 'success');
    }
}
