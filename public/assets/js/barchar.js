Highcharts.chart('barchart', {
    chart: {
        type: 'bar'
    },
    title: {
        text: 'GRAFIK HOTSPOT DI INDONESIA PERTAHUN'
    },
    subtitle: {
        text: 'Source: http://sipongi.menlhk.go.id/hotspot/sebaran_arsip#'
    },
    xAxis: {
        categories: ['Africa', 'America', 'Asia', 'Europe', 'Oceania'],
        title: {
            text: null
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Total Hotspot',
            align: 'high'
        },
        labels: {
            overflow: 'justify'
        }
    },
    tooltip: {
        valueSuffix: ' millions'
    },
    plotOptions: {
        bar: {
            dataLabels: {
                enabled: true
            }
        }
    },
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'top',
        x: -40,
        y: 80,
        floating: true,
        borderWidth: 1,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',
        shadow: true
    },
    credits: {
        enabled: false
    },
    series: [{
        name: 'Provinsi',
        data: [107, 31, 45, 20, 2]    
    }]
});