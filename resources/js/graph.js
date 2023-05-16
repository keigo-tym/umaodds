import Chart from 'chart.js';

// 1月から6月までの売り上げデータを用意する
const salesData = {
    labels: ['1月', '2月', '3月', '4月', '5月', '6月'],
    datasets: [{
        label: '売り上げ',
        data: [100, 200, 300, 400, 500, 600],
    }]
};

// 折れ線グラフのオプションを指定する
const lineGraphOptions = {
    scales: {
        yAxes: [{
            ticks: {
                suggestedMax: 1000,
                suggestedMin: 0,
                stepSize: 200,
                callback: function(value, index, values){
                    return  value +  '円'
                }
            }
        }]
    }
};

// チャートを描画する
const lineChart = new Chart(document.getElementById('lineGraph'), {
    type: 'line',
    data: salesData,
    options: lineGraphOptions
});

