@extends('layouts.umaodds')

@section('title', 'Race.index')
    
@section('menubar')
    @parent
    レース一覧ページ
@endsection

@section('content')
    <table>
    <tr><th>name</th><th>date</th><th>place</th><th>surface</th><th>distance</th></tr>
    @foreach ($items as $item)
        <tr>
            <td>{{$item->name}}</td>
            <td>{{$item->date}}</td>
            <td>{{$item->place}}</td>
            <td>{{$item->surface}}</td>
            <td>{{$item->distance}}</td>
        </tr>
    @endforeach
    </table>
    <a href="{{ route('race.add') }}">
        <button type="button">レース追加</button>
    </a>
@endsection

@section('footer')
copyright 2023 kei
@endsection