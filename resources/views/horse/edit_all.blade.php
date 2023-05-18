@extends('layouts.umaodds')

@section('title', 'Horse.edit')

@section('menubar')
    @parent
    出走馬編集ページ
@endsection

@section('content')
<form action="{{ route('horse.update_all', $race_id ) }}" method="post">
    @csrf
    <table>
        <tr><th>枠番</th><th>馬番</th><th>馬名</th><th>前売りオッズ</th></tr>
    @foreach ($horses as $index => $horse)
        <tr>
            <input type="hidden" name="horses[{{ $index }}][id]" value="{{$horse->id}}">
            <td>{{$horse->frame_number}}</td>
            <td>{{$horse->horse_number}}</td>
            <td>{{$horse->name}}</td>
            <td><input type="number" step="0.1" name="horses[{{ $index }}][advance_odds]" value="{{$horse->advance_odds}}"></td>
        </tr>
    @endforeach
    </table>
    <button type="submit">オッズ更新</button>
</form>
{{-- horse.indexへ戻るボタン --}}
<a href="{{ route('horse.index', ['race_id' => $horse->race_id]) }}">
    <button type="button">戻る</button>
</a>
@endsection

@section('footer')
copylight 2023 kei
@endsection