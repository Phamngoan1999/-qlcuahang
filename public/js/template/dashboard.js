(function($) {
    'use strict';
    $(function() {
        if ($("#sales-chart").length) {
            var SalesChartCanvas = $("#sales-chart").get(0).getContext("2d");
            var SalesChart = new Chart(SalesChartCanvas, {
                type: 'bar',
                data: {
                    labels: ["Tháng 1", "Feb", "Mar", "Apr", "May", "Jun", "July"],
                    datasets: [{
                            label: 'Số tiền mua xe',
                            data: [48000000, 48000000, 47000000, 210, 330, 0, 0],
                            backgroundColor: '#98BDFF'
                        },
                        {
                            label: 'Số tiền bán xe',
                            data: [48000000, 34000000, 55000000, 480, 170, 0, 0],
                            backgroundColor: '#4B49AC'
                        }
                    ]
                },
                options: {
                    cornerRadius: 5,
                    responsive: true,
                    maintainAspectRatio: true,
                    layout: {
                        padding: {
                            left: 0,
                            right: 0,
                            top: 20,
                            bottom: 0
                        }
                    },
                    scales: {
                        yAxes: [{
                            display: true,
                            gridLines: {
                                display: true,
                                drawBorder: false,
                                color: "#F2F2F2"
                            },
                            ticks: {
                                display: true,
                                min: 0,
                                max: 100000000,
                                callback: function(value, index, values) {
                                    return  value + 'VND' ;
                                },
                                autoSkip: true,
                                maxTicksLimit: 10,
                                fontColor:"#6C7383"
                            }
                        }],
                        xAxes: [{
                            stacked: false,
                            ticks: {
                                beginAtZero: true,
                                fontColor: "#6C7383"
                            },
                            gridLines: {
                                color: "rgba(0, 0, 0, 0)",
                                display: false
                            },
                            barPercentage: 1
                        }]
                    },
                    legend: {
                        display: false
                    },
                    elements: {
                        point: {
                            radius: 0
                        }
                    }
                },
            });
            document.getElementById('sales-legend').innerHTML = SalesChart.generateLegend();
        }
        $('#example tbody').on('click', 'td.details-control', function () {
            var tr = $(this).closest('tr');
            var row = table.row( tr );

            if ( row.child.isShown() ) {
                // This row is already open - close it
                row.child.hide();
                tr.removeClass('shown');
            }
            else {
                // Open this row
                row.child( format(row.data()) ).show();
                tr.addClass('shown');
            }
        } );

    });
})(jQuery);
