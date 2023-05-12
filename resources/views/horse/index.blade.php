@extends('layouts.umaodds')

@section('title', 'Horse.index')
    
@section('menubar')
    @parent
    出走馬ページ
@endsection

@section('content')
    <table>
    <tr><th>枠番</th><th>馬番</th><th>馬名</th><th>前売りオッズ</th><th>前日オッズ</th><th>12時オッズ</th><th>15時オッズ</th></tr>
    @foreach ($horses as $horse)
        <tr>
            <td>{{$horse->frame_number}}</td>
            <td>{{$horse->horse_number}}</td>
            <td><a href="{{ route('horse.edit', ['id' => $horse->id]) }}">{{$horse->name}}</a></td>
            <td>{{$horse->advance_odds}}</td>
            <td>{{$horse->previous_odds}}</td>
            <td>{{$horse->twelve_odds}}</td>
            <td>{{$horse->fifteen_odds}}</td>
        </tr>
    @endforeach
    </table>
    {{-- horse追加ボタン --}}
    <a href="{{ route('horse.add', ['race_id' => request()->get('race_id')]) }}">
        <button type="button">出走馬追加</button>
    </a>
    <br>
    {{-- horse更新 --}}
    <a href="{{ route('horse.edit', ['id' => $horse->id]) }}">
        <button type="button">オッズ更新</button>
    </a>
    <br>
    {{-- race.indexへ戻るボタン --}}
    <a href="{{ route('race.index') }}">
        <button type="button">戻る</button>
    </a>

@endsection

@section('footer')
copyright 2023 kei
@endsection