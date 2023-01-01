<?php

namespace App\Http\Controllers;

use App\Models\Counter;
use Illuminate\Http\Request;

class CounterController extends Controller
{
    public function storeCounter(Request $request)
    {
        // Validate the request data
        $request->validate([
            'good_answers' => 'required|integer',
            'wrong_answers' => 'required|integer',
            'user_id' => 'required|integer',
        ]);

        // Create a new counter record in the database
        $counter = new Counter;
        $counter->good_count = $request->good_answers;
        $counter->wrong_count = $request->wrong_answers;
        $counter->total_count = ($request->good_answers+$request->wrong_answers);
        $counter->user_id = $request->user_id;
        $counter->save();

        // Return a success response
        return response()->json([
            'message' => 'Counter data stored successfully.'
        ], 200);
    }

}
