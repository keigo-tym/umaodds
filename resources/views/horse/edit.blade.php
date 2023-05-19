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
        <tr><th>枠番</th><td><input type="number" name="frame_number" value="{{$horse->frame_number}}"></td></tr>
        <tr><th>馬番</th><td><input type="number" name="horse_number" value="{{$horse->horse_number}}"></td></tr>
        <tr><th>馬名</th><td><input type="text" name="name" value="{{$horse->name}}"></td></tr>
        <tr><th>前売りオッズ</th><td><input type="number" step="0.1" name="advance_odds" value="{{$horse->advance_odds}}"></td></tr>
        <tr><th>前日オッズ</th><td><input type="number" step="0.1" name="previous_odds" value="{{$horse->previous_odds}}"></td></tr>
        <tr><th>12時オッズ</th><td><input type="number" step="0.1" name="twelve_odds" value="{{$horse->twelve_odds}}"></td></tr>
        <tr><th>15時オッズ</th><td><input type="number" step="0.1" name="fifteen_odds" value="{{$horse->fifteen_odds}}"></td></tr>
        <tr><th>着順</th><td><input type="number" name="result" value="{{$horse->result}}"></td></tr>
        <tr>
            <th>色</th>
            <td>
                <select name="color">
                    <option value="">-----</option>
                    <option value="white" {{ $horse->color === 'white' ? 'selected' : '' }}>White</option>
                    <option value="black" {{ $horse->color === 'black' ? 'selected' : '' }}>Black</option>
                    <option value="red" {{ $horse->color === 'red' ? 'selected' : '' }}>Red</option>
                    <option value="blue" {{ $horse->color === 'blue' ? 'selected' : '' }}>Blue</option>
                    <option value="yellow" {{ $horse->color === 'yellow' ? 'selected' : '' }}>Yellow</option>
                    <option value="green" {{ $horse->color === 'green' ? 'selected' : '' }}>Green</option>
                    <option value="orange" {{ $horse->color === 'orange' ? 'selected' : '' }}>Orange</option>
                    <option value="pink" {{ $horse->color === 'pink' ? 'selected' : '' }}>Pink</option>
                </select>
            </td>
        </tr>
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