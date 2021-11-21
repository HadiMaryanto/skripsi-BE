$(document).ready(function(){
    let initData = [0,0,0,0,0,0,0,0,0,0,0,0];

    showChart(initData, '');

    $('#tahun').change(function(e){  
        // console.log(window.location.origin+"/api/lineChart?tahun="+$(this).val())
        let year = $(this).val();
          $.get( window.location.origin+"/api/lineChart?tahun="+$(this).val(), function( response ) {
            
            showChart(response.data, year);    
            // console.log(response);            
          }, 'JSON');
    });

    function showChart(response, year){
        let label = 'GRAFIK HOTSPOT DI INDONESIA PERTAHUN '+year;

        Highcharts.chart('chart', {
            chart: {
                type: 'line'
            },
            title: {
                text: label
            },
            subtitle: {
                text: 'Source: http://sipongi.menlhk.go.id/hotspot/sebaran_arsip#'
            },
            xAxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
            },
            yAxis: {
                title: {
                    text: 'Total Hotspot'
                }
            },
            plotOptions: {
                line: {
                    dataLabels: {
                        enabled: true
                    },
                    enableMouseTracking: false
                }
            },
            series: [{
                name: 'Hotspot',
                data: response
            }]
            // ,
        
            // {
            //     name: 'London',
            //     data: [3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8]
            // }]
        });   
    }    
});