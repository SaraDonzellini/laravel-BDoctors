<?php

namespace App\Http\Controllers\Api;

use app\Models\Doctor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index() {
        $doctor = Doctor::with('user', 'specializations')->get();
        return response()->json([
            'success' => true,
            'response' => $doctor
        ]);
    }
}
