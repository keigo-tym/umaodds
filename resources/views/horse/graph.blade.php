@extends('layouts.umaodds')

@section('title', 'Odds.graph')

@section('menubar')
    @parent
    グラフページ
@endsection

@section('content')
    <canvas id="lineChart"></canvas>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var horseData = {!! json_encode($horseData) !!};
        var horseNames = {!! json_encode($horseNames) !!};
        var horseColors = {!! json_encode($horseColors) !!};

        var ctx = document.getElementById('lineChart').getContext('2d');
        var lineChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['前売りオッズ', '前日オッズ', '12時オッズ', '15時オッズ'],
                datasets: horseNames.map((horseName, index) => ({
                    label: horseName,
                    borderColor: horseColors[index],
                    data: [
                        horseData[index].advance_odds,
                        horseData[index].previous_odds,
                        horseData[index].twelve_odds,
                        horseData[index].fifteen_odds,
                    ],
                    hidden: true,
                    fill: false,
                })),
            },
            options: {
                scales: {
                    x: {
                        display: true,
                        title: {
                            display: true,
                            text: 'Odds',
                        },
                        ticks: {
                            stepSize: 1,
                        },
                    },
                    y: {
                        display: true,
                        title: {
                            display: true,
                            text: '倍率',
                        },
                        ticks: {
                            stepSize: 1,
                            callback: function (value) {
                                if (value === 0) return '0';
                                if (value === 1) return '1';
                                if (value === 10) return '10';
                                if (value === 100) return '100';
                                return value.toString();
                            },
                        },
                    },
                },
                plugins: {
                    legend: {
                        display: true,
                        position: 'top',
                    },
                },
            },
        });
    </script>
    {{-- horse.indexへ戻るボタン --}}
    <a href="{{ route('horse.index', ['race_id' => request()->get('race_id')]) }}">
        <button type="button">戻る</button>
    </a>
@endsection

@section('footer')
copyright 2023 kei
@endsection