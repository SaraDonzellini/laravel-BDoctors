<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::all();
        return response()->json([
            'success' => true,
            'response' => $reviews
        ]);
    }


    public function store(Request $request)
    {
        $review = new Review();
        $review->user_id = $request->userId;
        $review->name = $request->input('name');
        $review->surname = $request->input('surname');
        $review->vote = $request->input('vote');
        $review->text = $request->input('content');
        $review->save();

        return response()->json(['success' => true]);
    }
}
