<?php

namespace App\Http\Controllers\Api;
use App\Models\Specialization;
use App\Models\Doctor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index() {

        $doctor = Doctor::with('user', 'specializations')->paginate(6);
        return response()->json([
            'success' => true,
            'response' => $doctor
        ]);
    }

    public function search($id) {
        if ($id){
            $doctor = Specialization::findOrFail($id)->doctors()->with('user','specializations')->paginate(6);
        }else{
            $doctor = Doctor::with('user', 'specializations')->paginate(6); 
        }
        return response()->json([
            'success' => true,
            'response' => $doctor
        ]);
    }

    public function show(Doctor $doctor){
        $doctor = Doctor::with('user', 'specializations')->findOrFail($doctor->id);
        return response()->json([
            'success' => true,
            'results' => $doctor
        ]);
    }
}
