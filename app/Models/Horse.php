<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horse extends Model
{
    use HasFactory;

    // idを自動で取得
    protected $guarded = array('id');

    // バリデージョンルールを設定
    public static $rules = array(
        'race_id' => 'required|integer',
        'frame_number' => 'required|integer',
        'horse_number' => 'required|integer',
        'name' => 'required',
        'advance_odds' => 'nullable|numeric',
        'previous_odds' => 'nullable|numeric',
        'twelve_odds' => 'nullable|numeric',
        'fifteen_odds' => 'nullable|numeric',
    );
}
