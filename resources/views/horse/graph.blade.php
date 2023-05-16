@extends('layouts.umaodds')

@section('title', 'Horse.graph')

@section('menubar')
    @parent
    グラフページ
@endsection

@section('content')

<canvas id="lineGraph" width="400" height="400"></canvas>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="{{ asset('js/graph.js') }}"></script>
@endsection