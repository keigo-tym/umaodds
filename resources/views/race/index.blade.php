@extends('layouts.umaodds')

@section('title', 'Race.index')
    
@section('menubar')
    @parent
    レースページ
@endsection

@section('content')
    <table>
    <tr><th>name</th><th>date</th><th>place</th><th>surface</th><th>distance</th></tr>
    @foreach ($items as $item)
        <tr>
            <td>{{$items->name}}</td>
            <td>{{$items->date}}</td>
            <td>{{$items->place}}</td>
            <td>{{$items->surface}}</td>
            <td>{{$items->distance}}</td>
        </tr>
    @endforeach
    </table>
@endsection

@section('footer')
copyright 2023 kei
@endsection