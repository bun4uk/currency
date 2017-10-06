var chartData = [];

chart.forEach(function (currentValue, index) {
    chartData[index] = [
        new Date(currentValue[0]),
        currentValue[1]
    ]
});

google.charts.load('current', {'packages': ['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
    var data = new google.visualization.DataTable();
    data.addColumn('date', 'Date');
    data.addColumn('number', 'Payment Sum');
    data.addRows(chartData);

    var options = {
        width: '80%',
        height: 500,
        curveType: 'function',
        legend: { position: 'bottom' }
    };

    var chart = new google.visualization.LineChart(document.getElementById('chart'));

    chart.draw(data, options);
}