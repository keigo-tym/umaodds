@extends('layouts.umaodds')

@section('title', 'Horse.index')
    
@section('menubar')
    @parent
    出走馬ページ
@endsection

@section('content')
    <table>
    <tr><th>race_id</th><th>frame_number</th><th>horse_number</th><th>name</th><th>advance_odds</th></tr>
    @foreach ($horses as $horse)
        <tr>
            <td>{{$horse->race_id}}</td>
            <td>{{$horse->frame_number}}</td>
            <td>{{$horse->horse_number}}</td>
            <td>{{$horse->name}}</td>
            <td>{{$horse->advance_odds}}</td>
        </tr>
    @endforeach
    </table>
@endsection

@section('footer')
copyright 2023 kei
@endsection