$(document).ready(function(){
    let initData = {
        'provinsi': [],
        'total'   : [],        
    };    

    showChart(initData, '');

    $('#barTahun').change(function(e){  
        // console.log(window.location.origin+"/api/lineChart?tahun="+$(this).val())
        let year = $(this).val();
          $.get( window.location.origin+"/api/barChart?tahun="+$(this).val(), function( response ) {
            
            showChart(response.data, year);    
            // console.log(response);            
          }, 'JSON');
    });

    function showChart(response, year){
        let label = 'GRAFIK HOTSPOT DI INDONESIA PERPROVINSI';
        if(year !== '' ){
            let label = 'GRAFIK HOTSPOT DI INDONESIA PERPROVINSI TAHUN '+year;
        }
        

        Highcharts.chart('barchart', {
            chart: {
                type: 'bar'
            },
            title: {
                text: label
            },
            subtitle: {
                text: 'Source: http://sipongi.menlhk.go.id/hotspot/sebaran_arsip#'
            },
            xAxis: {
                categories: response.provinsi,
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
                valueSuffix: ' Hotspot'
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
                align: 'left',
                verticalAlign: 'left',
                x: -10,
                y: 30,
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
                data: response.total    
            }]
        });
    }    
});