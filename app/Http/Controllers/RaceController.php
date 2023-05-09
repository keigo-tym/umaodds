<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// レースモデルを使用
use App\Models\Race;

class RaceController extends Controller
{
    public function index(Request $request)
    {
        $items = Race::all();
        return view('race.index', ['items' => $items]);
    }
}
