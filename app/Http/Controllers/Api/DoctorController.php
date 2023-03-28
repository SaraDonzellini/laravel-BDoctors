<?php

namespace App\Http\Controllers\Api;

use App\Models\Specialization;
use App\Models\Doctor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use League\Flysystem\Visibility;

class DoctorController extends Controller
{
    public function index()
    {

        $allDoctors = Doctor::with('user', 'user.reviews', 'specializations')->paginate(6);
        $doctor = [];
        foreach ($allDoctors as $availableDoctor) {
            if ($availableDoctor->visibility == 1) {
                array_push($doctor, $availableDoctor);
            }
        }
        return response()->json([
            'success' => true,
            'response' => $doctor
        ]);
    }

    public function search($id)
    {
        if ($id) {
            $doctor = Specialization::findOrFail($id)->doctors()->with('user', 'specializations')->paginate(6);
        } else {
            $doctor = Doctor::with('user', 'specializations')->paginate(6);
        }
        return response()->json([
            'success' => true,
            'response' => $doctor
        ]);
    }

    public function show(Doctor $doctor)
    {
        $doctor = Doctor::with('user', 'specializations')->findOrFail($doctor->id);
        $userId = $doctor->user->id;
        $reviews = $doctor->user->reviews;
        return response()->json([
            'success' => true,
            'doctor' => $doctor,
            'reviews' => $reviews,
            'userId' => $userId
        ]);
    }
}
