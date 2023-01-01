<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    public function checkAnswer(Request $request)
    {
        // Validate the request data
        $request->validate([
            'word_id' => 'required|integer',
            'user_answer' => 'required|string',
        ]);

        // Retrieve the word pair with the given ID
        $wordPair = Word::findOrFail($request->word_id);

        // Check if the user's answer is correct
        if ($request->user_answer == $wordPair->english || $request->user_answer == $wordPair->serbian) {
            // Increase the number of correct answers

        } else {
            // Increase the number of incorrect answers
        }

        // Save the updated word pair


        // Return a success response
        return response()->json([
            'status' => 'success',
        ]);
    }

}
