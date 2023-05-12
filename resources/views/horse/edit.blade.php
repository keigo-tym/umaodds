@extends('layouts.umaodds')

@section('title', 'Horse.edit')

@section('menubar')
    @parent
    出走馬編集ページ
@endsection

@section('content')
<form action="{{ route('horse.update', ['id' => $horse->id]) }}" method="post">
    @csrf
    <table>
        <tr><th>枠番</th><td>{{$horse->frame_number}}</td></tr>
        <tr><th>馬番</th><td>{{$horse->horse_number}}</td></tr>
        <tr><th>馬名</th><td>{{$horse->name}}</td></tr>
        <tr><th>前売りオッズ</th><td><input type="number" step="0.1" name="advance_odds" value="{{$horse->advance_odds}}"></td></tr>
        <tr><th>前日オッズ</th><td><input type="number" step="0.1" name="previous_odds" value="{{$horse->previous_odds}}"></td></tr>
        <tr><th>12時オッズ</th><td><input type="number" step="0.1" name="twelve_odds" value="{{$horse->twelve_odds}}"></td></tr>
        <tr><th>15時オッズ</th><td><input type="number" step="0.1" name="fifteen_odds" value="{{$horse->fifteen_odds}}"></td></tr>
    </table>
    <button type="submit">オッズ更新</button>
</form>
@endsection

@section('footer')
copylight 2023 kei
@endsection