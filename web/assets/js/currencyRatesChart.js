var chartBuyData = [];
var chartSellData = [];
chartBuy.forEach(function (currentValue, index) {
    chartBuyData[index] = [
        new Date(currentValue[0]),
        currentValue[1]
    ]
});

chartSell.forEach(function (currentValue, index) {
    chartSellData[index] = [
        new Date(currentValue[0]),
        currentValue[1]
    ]
});
google.charts.load('current', {'packages': ['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart(elementId) {
    var dataBuy = new google.visualization.DataTable();
    dataBuy.addColumn('date', 'Date');
    dataBuy.addColumn('number', 'Buy Price');
    dataBuy.addRows(chartBuyData);

    var dataSell = new google.visualization.DataTable();
    dataSell.addColumn('date', 'Date');
    dataSell.addColumn('number', 'Sell Price');
    dataSell.addRows(chartSellData);

    var options = {
        width: '80%',
        height: 500,
        hAxis: {
            format: 'MMM dd, yyyy',
            gridlines: {count: 15}
        },
        vAxis: {
            gridlines: {color: 'none'},
            minValue: 0
        }
    };

    var chartBuy = new google.visualization.LineChart(document.getElementById('chartBuy'));
    var chartSell = new google.visualization.LineChart(document.getElementById('chartSell'));

    chartBuy.draw(dataBuy, options);
    chartSell.draw(dataSell, options);
}