@extends('layouts.umaodds')

@section('title', 'Horse.index')
    
@section('menubar')
    @parent
    出走馬ページ
@endsection

@section('content')
    <table>
    <tr><th>race_id</th><th>frame_number</th><th>horse_number</th><th>name</th><th>advance_odds</th></tr>
    @foreach ($items as $item)
        <tr>
            <td>{{$item->race_id}}</td>
            <td>{{$item->frame_number}}</td>
            <td>{{$item->horse_number}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->advance_odds}}</td>
        </tr>
    @endforeach
    </table>
@endsection

@section('footer')
copyright 2023 kei
@endsection