var chartData = [['Квартал', 'Сумма выплат', {role: 'style'}]].concat(chart);

google.charts.load('current', {'packages': ['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
    var data = google.visualization.arrayToDataTable(
        chartData
    );
    var chart = new google.visualization.ColumnChart(
        document.getElementById('chart'));

    chart.draw(data, {});
}