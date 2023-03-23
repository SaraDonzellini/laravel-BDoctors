<?php

namespace App\Http\Controllers\Api;

use App\Models\Doctor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index() {
        $doctor = Doctor::with('user', 'specializations')->paginate(3);
        return response()->json([
            'success' => true,
            'response' => $doctor
        ]);
    }
}
