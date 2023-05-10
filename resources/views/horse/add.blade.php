@extends('layouts.umaodds')

@section('title', 'Horse.add')
    
@section('menubar')
    @parent
    出走馬追加ページ
@endsection

@section('content')
    <form action="/horse/add" method="post">
    <table>
        @csrf
        {{-- race_idの入力 --}}
        <tr><th>race_id:</th><td><input type="number" name="race_id" value="{{old('race_id')}}"></td></tr>
        {{-- frame_numberの入力 --}}
        <tr><th>frame_number:</th><td><input type="number" name="frame_number" value="{{old('frame_number')}}"></td></tr>
        {{-- horse_numberの入力 --}}
        <tr><th>horse_number:</th><td><input type="number" name="horse_number" value="{{old('horse_number')}}"></td></tr>
        {{-- nameの入力 --}}
        <tr><th>name:</th><td><input type="text" name="name" value="{{old('name')}}"></td></tr>
        {{-- advance_oddsの入力 --}}
        <tr><th>advance_odds:</th><td><input type="number" step="0.1" name="advance_odds" value="{{old('advance_odds')}}"></td></tr>
        {{-- previous_oddsの入力 --}}
        <tr><th>previous_odds:</th><td><input type="number" step="0.1" name="previous_odds" value="{{old('previous_odds')}}"></td></tr>
        {{-- twelve_oddsの入力 --}}
        <tr><th>twelve_odds:</th><td><input type="number" step="0.1" name="twelve_odds" value="{{old('twelve_odds')}}"></td></tr>
        {{-- fifteen_oddsの入力 --}}
        <tr><th>fifteen_odds:</th><td><input type="number" step="0.1" name="fifteen_odds" value="{{old('fifteen_odds')}}"></td></tr>
        <tr><th></th><td><input type="submit" value="send"></td></tr>
    </table>
    </form>
    {{-- horse.indexへ戻るボタン --}}
    <a href="{{ route('horse.index') }}">
        <button type="button">戻る</button>
    </a>
@endsection

@section('footer')
copyright 2023 kei
@endsection