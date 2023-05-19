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
        <tr>
            {{-- race_idをhiddenで渡す --}}
            <input type="hidden" name="race_id" value="{{ request()->get('race_id') }}">
            <td><input type="number" name="horses[0][frame_number]" value="{{old('horses.0.frame_number')}}"></td>
            <td><input type="number" name="horses[0][horse_number]" value="{{old('horses.0.horse_number')}}"></td>
            <td><input type="text" name="horses[0][name]" value="{{old('horse.0.name')}}"></td>
            <td>
                <select name="horses[0][color]">
                    <option value="">-----</option>
                    <option value="white" {{ old('horses.0.color') === 'white' ? 'selected' : '' }}>White</option>
                    <option value="black" {{ old('horses.0.color') === 'black' ? 'selected' : '' }}>Black</option>
                    <option value="red" {{ old('horses.0.color') === 'red' ? 'selected' : '' }}>Red</option>
                    <option value="blue" {{ old('horses.0.color') === 'blue' ? 'selected' : '' }}>Blue</option>
                    <option value="yellow" {{ old('horses.0.color') === 'yellow' ? 'selected' : '' }}>Yellow</option>
                    <option value="green" {{ old('horses.0.color') === 'green' ? 'selected' : '' }}>Green</option>
                    <option value="orange" {{ old('horses.0.color') === 'orange' ? 'selected' : '' }}>Orange</option>
                    <option value="pink" {{ old('horses.0.color') === 'pink' ? 'selected' : '' }}>Pink</option>
                </select>
            </td>
        </tr>
        <button type="button" id="add-field-button">フォームの追加</button>
    </table>
    <button type="submit">出走馬追加</button>
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