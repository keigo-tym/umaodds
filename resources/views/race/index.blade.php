@extends('layouts.umaodds')

@section('title', 'Race.index')
    
@section('menubar')
    @parent
    レース一覧ページ
@endsection

@section('content')
<div class="container">
    <table class="horse-table">
        <tr><th>name</th><th>date</th><th>place</th><th>surface</th><th>distance</th></tr>
        @foreach ($items as $item)
            <tr>
                <td><a href="{{ route('horse.index', ['race_id' => $item->id]) }}">{{$item->name}}</a></td>
                <td>{{$item->date}}</td>
                <td>{{$item->place}}</td>
                <td>{{$item->surface}}</td>
                <td>{{$item->distance}}</td>
            </tr>
        @endforeach
    </table>
    <div class="button-frame">
        <a href="{{ route('race.add') }}">
            <button type="button">レース追加</button>
        </a>
    </div>
</div>
@endsection

@section('footer')
copyright 2023 kei
@endsection