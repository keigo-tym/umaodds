@extends('layouts.umaodds')

@section('title', 'Horse.add')
    
@section('menubar')
    @parent
    出走馬追加ページ
@endsection

@section('content')
<div class="container">
    <form action="/horse/add" method="post">
    <table class="horse-table">
        @csrf
        {{-- race_idの入力 hidden要素を用いて、race_idを渡す --}}
        <input type="hidden" name="race_id" value="{{ request()->get('race_id') }}">
        {{-- frame_numberの入力 --}}
        <tr><th>frame_number:</th><td><input type="number" name="frame_number" id="frame_number" value="{{old('frame_number')}}"></td></tr>
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
        {{-- resultの入力 --}}
        <tr><th>result:</th><td><input type="number" name="result" value="{{old('result')}}"></td></tr>
        {{-- colorの入力 --}}
        <tr>
            <th>color:</th>
            <td>
                <select name="color" id="color">
                    <option value="">-----</option>
                    <option value="white">White</option>
                    <option value="black">Black</option>
                    <option value="red">Red</option>
                    <option value="blue">Blue</option>
                    <option value="yellow">Yellow</option>
                    <option value="green">Green</option>
                    <option value="orange">Orange</option>
                    <option value="pink">Pink</option>
                </select>
            </td>
        <tr><th></th><td><input type="submit" value="send"></td></tr>
    </table>
    </form>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('js/color.js') }}"></script>
    <div class="button-frame">
        {{-- horse.indexへ戻るボタン --}}
        <a href="{{ route('horse.index', ['race_id' => request()->get('race_id')]) }}">
            <button type="button">戻る</button>
        </a>
    </div>
</div>
@endsection

@section('footer')
copyright 2023 kei
@endsection