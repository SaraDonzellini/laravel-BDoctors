<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DoctorController extends Controller
{
    public $customValidations = [
        'bio.required' => 'La biografia è obbligatoria',
        'bio.min' => 'Il campo Bio deve contenere almeno :min caratteri',
        'cv.required' => 'Il Curriculum è necessario',
        'cv.image' => 'Il formato del curriculum è errato',
        'photo.image' => 'Il formato della foto è errato',
        'address.required' => 'L\'indirizzo è obbligatorio',
        'address.min' => 'L\'indirizzo deve contenere almeno :min caratteri',
        'address.max' => 'L\'indirizzo non può contenere più di :max caratteri',
        'phone.required' => 'Il numero di telefono è obbligatorio',
        'phone.numeric' => 'Il campo telefono deve contenere solo numeri',
        // 'phone.max' => 'Il numero di telefono non può contenere più di :max caratteri',
    ];

    public $validationRules = [
        'bio' => 'required|min:10',
        'cv' => 'required|image',
        'photo' => 'nullable|image',
        'address' => 'required|min:3|max:100',
        'phone' => 'required|numeric',
        'visibility' => 'nullable',
    ];


    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $users = User::all();
        $doctors = Doctor::with('user')->where('user_id', Auth::user()->id)->get();
        return view('admin.doctors.index', compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.doctors.create', ["doctor" => new Doctor()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate($this->validationRules, $this->customValidations);
        if (!array_key_exists('visibility', $data)){
            $data['visibility'] = false;
        };
        
        $data['photo'] = Storage::put('imgs/', $data['photo']);
        $data['cv'] = Storage::put('cv/', $data['cv']);

        $newDoctor = new Doctor();
        $newDoctor->fill($data);
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
        $doctors = Doctor::with('user')->get();
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
        return view('admin.doctors.edit', ["doctor" => $doctor]);
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
        if (!array_key_exists('visibility', $data)){
            $data['visibility'] = false;
        };
        
        $data['photo'] = Storage::put('imgs/', $data['photo']);
        if (!str_starts_with($doctor->photo, 'http')){
            Storage::delete($doctor->photo);
        }

        $doctor->specializations()->sync($data['specializations'] ?? []);
        $doctor->update($data);
        
        return redirect()->route('admin.doctors.index')->with('message', "Il profilo è stato aggiornato con successo")->with('alert-type', 'info');
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

        if (!str_starts_with($doctor->photo, 'http')){
            Storage::delete($doctor->photo);
        }

        return redirect()->route('admin.doctors.index')->with('message', "Il profilo è stato cancellato")->with('alert-type', 'danger');
    }
}