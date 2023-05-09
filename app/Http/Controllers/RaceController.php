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

    public function add(Request $request)
    {
        return view('race.add');
    }

    public function create(Request $request)
    {
        $this->validate($request, Race::$rules);
        $race = new Race;
        $form = $request->all();
        unset($form['_token']);
        $race->fill($form)->save();
        return redirect('/race');
    }
}
