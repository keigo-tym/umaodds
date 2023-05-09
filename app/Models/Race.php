<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Race extends Model
{
    use HasFactory;

    // idを自動で取得
    protected $guarded = array('id');

    // バリデージョンルールを設定
    public static $rules = array(
        'name' => 'required',
        'date' => 'required',
        'place' => 'required',
        'surface' => 'required',
        'distance' => 'required|integer',
    );

    // Horseモデルへのリレーションを設定
    public function horses()
    {
        return $this->hasMany('App\Models\Horse');
    }
}
