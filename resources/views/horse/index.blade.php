@extends('layouts.umaodds')

@section('title', 'Horse.index')
    
@section('menubar')
    @parent
    出走馬ページ
@endsection

@section('content')
<div class="container">
    <table class="horse-table">
        <tr><th>枠番</th><th>馬番</th><th>馬名</th><th>前売りオッズ</a></th><th>前日オッズ</th><th>12時オッズ</th><th>15時オッズ</th><th>着順</th></tr>
        @foreach ($horses as $horse)
            <tr>
                <td>{{$horse->frame_number}}</td>
                <td>{{$horse->horse_number}}</td>
                <td><a href="{{ route('horse.edit', ['id' => $horse->id]) }}">{{$horse->name}}</a></td>
                <td>{{$horse->advance_odds}}</td>
                <td>{{$horse->previous_odds}}</td>
                <td>{{$horse->twelve_odds}}</td>
                <td>{{$horse->fifteen_odds}}</td>
                <td>{{$horse->result}}</td>
            </tr>
        @endforeach
    </table>
    <div class="button-frame">
        {{-- horse追加ボタン --}}
        <a href="{{ route('horse.add', ['race_id' => request()->get('race_id')]) }}">
            <button type="button">出走馬追加</button>
        </a>
        {{-- horse.add_allへ遷移するボタン --}}
        <a href="{{ route('horse.add_all', ['race_id' => request()->get('race_id')]) }}">
            <button type="button">出走馬一斉追加</button>
        </a>
        @if($horses->isNotEmpty())
        {{-- horse.edit_allへ遷移するボタン --}}
        <a href="{{ route('horse.edit_all', ['race_id' => $request->race_id]) }}">
            <button type="button">オッズ一括編集</button>
        </a>
        {{-- horse.graphへ遷移するボタン --}}
        <a href="{{ route('horse.graph', ['race_id' => request()->get('race_id')]) }}">
            <button type="button">グラフ</button>
        </a>
        @endif
        {{-- race.indexへ戻るボタン --}}
        <a href="{{ route('race.index') }}">
            <button type="button">戻る</button>
        </a>
    </div>
</div>    
@endsection

@section('footer')
copyright 2023 kei
@endsection