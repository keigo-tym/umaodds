<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// ホースモデルを使用
use App\Models\Horse;

class HorseController extends Controller
{
    public function index(Request $request)
    {
        $items = Horse::all();
        return view('horse.index', ['items' => $items]);
    }

    public function add(Request $request)
    {
        return view('horse.add');
    }

    public function create(Request $request)
    {
        $this->validate($request, Horse::$rules);
        $horse = new Horse;
        $form = $request->all();
        unset($form['_token']);
        $horse->fill($form)->save();
        return redirect('/horse');
    }
}
