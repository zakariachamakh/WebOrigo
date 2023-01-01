<?php

namespace App\Http\Controllers;

use App\Http\Resources\WordResource;
use App\Models\Word;
use Illuminate\Http\Request;
use mysql_xdevapi\Collection;

class WordController extends Controller
{
    public function index()
    {
        return  WordResource::collection(Word::inRandomOrder()->paginate(20));
    }
}
