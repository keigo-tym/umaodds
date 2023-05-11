@extends('layouts.umaodds')

@section('title', 'Race.add')
    
@section('menubar')
    @parent
    レース作成ページ
@endsection

@section('content')
    <form action="/race/add" method="post">
    <table>
        @csrf
        <tr><th>name: </th><td><input type="text" name="name" value="{{old('name')}}"></td></tr>
        <tr><th>date: </th><td><input type="text" name="date" value="{{old('date')}}"></td></tr>
        <tr><th>place: </th><td><input type="text" name="place" value="{{old('place')}}"></td></tr>
        <tr><th>surface: </th><td><input type="text" name="surface" value="{{old('surface')}}"></td></tr>
        <tr><th>distance: </th><td><input type="number" name="distance" value="{{old('distance')}}"></td></tr>
        <tr><th></th><td><input type="submit" value="send"></td></tr>
    </table>
    </form>
    {{-- race.indexへ戻るボタン --}}
    <a href="{{ route('race.index') }}">
        <button type="button">戻る</button>
    </a>
@endsection

@section('footer')
copyright 2023 kei
@endsection