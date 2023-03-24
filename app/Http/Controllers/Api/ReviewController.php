<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function index(){
        $reviews = Review::all();
        return response()->json([
            'success' => true,
            'response' => $reviews
        ]);
    }
    // public function show(Doctor $doctor){
    //     $reviews = Review::with('user', 'doctor')->findOrFail($doctor->id);
    //     return response()->json([
    //         'success' => true,
    //         'response' => $reviews
    //     ]);
    // }
}