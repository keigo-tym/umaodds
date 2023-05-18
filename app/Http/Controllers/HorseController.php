<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// ホースモデルを使用
use App\Models\Horse;
// redirectを使用
use Illuminate\Support\Facades\Redirect;
// routeを使用
use Illuminate\Support\Facades\Route;
// httpを使用
use Illuminate\Support\Facades\Http;

class HorseController extends Controller
{
    public function index(Request $request)
    {
        // race_idによる検索
        $race_id = $request->input('race_id');
        $horses = Horse::where('race_id', $race_id)->get();
        return view('horse.index', ['horses' => $horses, 'race_id' => $race_id, 'request' => $request]);
    }

    // graphアクションを追加
    public function graph(Request $request)
    {
        $race_id = $request->input('race_id');
        $horses = Horse::where('race_id', $race_id)->get();

        $horseData = [];
        $horseNames = [];
        $horseColors = [];

        foreach ($horses as $horse) {
            $horseData[] = [
                'advance_odds' => $horse->advance_odds,
                'previous_odds' => $horse->previous_odds,
                'twelve_odds' => $horse->twelve_odds,
                'fifteen_odds' => $horse->fifteen_odds,
            ];

        $horseNames[] = $horse->name;
        $horseColors[] = $horse->color;
        }    

        // viewに値を渡す
        return view('horse.graph', compact('horseData', 'horseNames', 'horseColors'));
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
    // idごとにホースを表示する
    public function edit($id)
    {
        $horse = Horse::find($id);
        return view('horse.edit', ['horse' => $horse]);
    }

    public function update(Request $request, $id)
    {
        // 入力はオッズのみ
        $this->validate($request, ['advance_odds' => 'nullable|numeric', 'previous_odds' => 'nullable|numeric', 'twelve_odds' => 'nullable|numeric', 'fifteen_odds' => 'nullable|numeric']);

        // ホースidごとにオッズを更新
        $horse = Horse::find($id);
        $form = $request->all();
        unset($form['_token']);
        $horse->fill($form)->save();

        // race_idを取得し、horse.indexへリダイレクト
        $race_id = $horse->race_id;
        return redirect()->route('horse.index', ['race_id' => $race_id]);
    }

    // race_idごとにホースを更新する
    // advance_oddsのみ更新
    public function editAll($race_id)
    {
        $horses = Horse::where('race_id', $race_id)->get();
        return view('horse.edit_all', ['horses' => $horses, 'race_id' => $race_id]);
    }

    // race_idごとのupdate
    public function updateAll(Request $request, $race_id)
    {
        // dd($request->all());
        $horsesData = $request->input('horses');
    
        foreach ($horsesData as $horseData) {
            $horse = Horse::find($horseData['id']);
            if ($horse) {
                $horse->advance_odds = $horseData['advance_odds'];
                $horse->save();
            }
        }
        return redirect()->route('horse.index', ['race_id' => $race_id]);
    }
}
