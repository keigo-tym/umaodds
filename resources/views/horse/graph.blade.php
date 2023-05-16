@extends('layouts.umaodds')

@section('title', 'Horse.graph')

@section('menubar')
    @parent
    グラフページ
@endsection

@section('content')
    <canvas id="lineChart"></canvas>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var labels = {!! json_encode($labels) !!};
        var data = {!! json_encode($data) !!};

        var ctx = document.getElementById('lineChart').getContext('2d');
        var lineChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Odds',
                    data: data,
                    borderColor: 'rgb(75, 192, 192)',
                    tension: 0.1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
@endsection
