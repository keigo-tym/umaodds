<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// ホースモデルを使用
use App\Models\Horse;
// redirectを使用
use Illuminate\Support\Facades\Redirect;
// routeを使用
use Illuminate\Support\Facades\Route;

class HorseController extends Controller
{
    public function index(Request $request)
    {
        // race_idによる検索
        $race_id = $request->input('race_id');
        $horses = Horse::where('race_id', $race_id)->get();
        return view('horse.index', ['horses' => $horses]);
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
        $race_id = $request->input('race_id');
        return Redirect::to(Route::has('horse.index') ? route('horse.index', ['race_id' => $race_id]) : '/horse?race_id=' . $race_id);
    }
}
