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
    // race_idごとにホースを表示する
    public function edit($race_id)
    {
        $horses = Horse::where('race_id', $race_id)->get();
        return view('horse.edit', compact('horses', 'race_id'));
    }

    public function update(Request $request, $race_id)
    {
        // 入力はオッズのみ
        $this->validate($request, ['advance_odds' => 'nullable|numeric', 'previous_odds' => 'nullable|numeric', 'twelve_odds' => 'nullable|numeric', 'fifteen_odds' => 'nullable|numeric']);
        $form = $request->all();
        unset($form['_token']);

        // ホースidごとにオッズを更新
        foreach($form['id'] as $key => $value) {
            $horse = Horse::find($value);
            $horse->advance_odds = $form['advance_odds'][$key];
            $horse->previous_odds = $form['previous_odds'][$key];
            $horse->twelve_odds = $form['twelve_odds'][$key];
            $horse->fifteen_odds = $form['fifteen_odds'][$key];
            $horse->save();
        }
            return redirect()->route('horse.index', ['race_id' => $race_id]);
    }

}
