@extends('layouts.umaodds')

@section('title', 'Horse.add')

@section('menubar')
    @parent
    出走馬追加ページ
@endsection

@section('content')
<form id="dynamic-form" action="{{ route('horse.create_all') }}" method="post">
    @csrf
    <table id="form-container">    
        <tr><th>枠番</th><th>馬番</th><th>名前</th><th>色</th></tr>
        <button type="button" id="add-field-button">入力枠の追加</button>
    </table>
    <button type="submit">出走馬追加(※各馬情報入力後に押す)</button>
</form>

<script> var raceId = "{{ request()->get('race_id') }}"; </script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset('js/add.js') }}"></script>

{{-- horse.indexへ戻るボタン --}}
<a href="{{ route('horse.index', ['race_id' => request()->get('race_id')]) }}">
    <button type="button">戻る</button>
</a>
@endsection

@section('footer')
copyright 2023 kei
@endsection