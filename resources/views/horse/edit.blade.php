@extends('layouts.umaodds')

@section('title', 'Horse.edit')

@section('menubar')
    @parent
    出走馬編集ページ
@endsection

@section('content')
<form action="{{ route('horse.update', ['race_id' => $race_id]) }}" method="post">
    @csrf
    @method('PUT')
    <table>
        <thead>
            <tr>
                <th>枠番</th>
                <th>馬番</th>
                <th>馬名</th>
                <th>前売りオッズ</th>
                <th>前日オッズ</th>
                <th>12時オッズ</th>
                <th>15時オッズ</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($horses as $horse)
            <tr>
                <td>{{ $horse->frame_number }}</td>
                <td>{{ $horse->horse_number }}</td>
                <td>{{ $horse->name }}</td>
                <td><input type="number" step="0.1" name="advance_odds[]" value="{{ $horse->advance_odds }}"></td>
                <td><input type="number" step="0.1" name="previous_odds[]" value="{{ $horse->previous_odds }}"></td>
                <td><input type="number" step="0.1" name="twelve_odds[]" value="{{ $horse->twelve_odds }}"></td>
                <td><input type="number" step="0.1" name="fifteen_odds[]" value="{{ $horse->fifteen_odds }}"></td>
                {{-- idをhiddenで渡す --}}
                <input type="hidden" name="id[]" value="{{ $horse->id }}">
            </tr>
            @endforeach
        </tbody>
    </table>
    <button type="submit">オッズ更新</button>
</form>
@endsection

@section('footer')
copylight 2023 kei
@endsection