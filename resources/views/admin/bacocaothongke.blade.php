@extends('header.quanly')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Báo cáo thống kê</h4>
                        <form action="{{route('baocaothongke.quanly')}}" id="form-search" method="GET">
                            <div class="row" style="padding-top: 20px;">
                                <div class="col-md-3">
                                    <select class="form-group js-example-basic-single w-100" name="year_select">
                                        <option value="2022" @if($request->year_select == "2022") selected @endif>Năm 2022</option>
                                        <option value="2021" @if($request->year_select == "2021") selected @endif>Năm 2021</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary" id="tim-kiem" >Tìm kiếm</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div id="sales-legend" class="chartjs-legend mt-4 mb-2"></div>
                        <canvas id="sales-chart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type= text/javascript src="{{asset('js/template/vendor.bundle.base.js')}}"></script>
{{--    <script src="{{asset('js/template/dashboard.js')}}"></script>--}}
    <script src="{{asset('js/template/Chart.min.js')}}"></script>
    <script type="module" src="{{asset('js/admin/bao_cao_thong_ke.js')}}"></script>
    <script>
        (function($) {
            'use strict';
            $(function() {
                if ($("#sales-chart").length) {
                    var SalesChartCanvas = $("#sales-chart").get(0).getContext("2d");
                    var SalesChart = new Chart(SalesChartCanvas, {
                        type: 'bar',
                        data: {
                            labels: ["Tháng 1", "Tháng 2", "Tháng 3", "Tháng 4", "Tháng 5", "Tháng 6",
                                "Tháng 7", "Tháng 8","Tháng 9","Tháng 10", "Tháng 11", "Tháng 12",],
                            datasets: [{
                                label: 'Số tiền mua xe',
                                data: [
                                    {{$list['January']['tonggiamua']}}, {{$list['February']['tonggiamua']}},
                                    {{$list['March']['tonggiamua']}}, {{$list['April']['tonggiamua']}},
                                    {{$list['May']['tonggiamua']}}, {{$list['June']['tonggiamua']}},
                                    {{$list['July']['tonggiamua']}},{{$list['August']['tonggiamua']}},
                                    {{$list['September']['tonggiamua']}}, {{$list['October']['tonggiamua']}},
                                    {{$list['November']['tonggiamua']}},{{$list['December']['tonggiamua']}}
                                ],
                                backgroundColor: '#98BDFF'
                                },
                                {
                                    label: 'Số tiền bán xe',
                                    data: [
                                        {{$list['January']['tonggiaban']}}, {{$list['February']['tonggiaban']}},
                                        {{$list['March']['tonggiaban']}}, {{$list['April']['tonggiaban']}},
                                        {{$list['May']['tonggiaban']}}, {{$list['June']['tonggiaban']}},
                                        {{$list['July']['tonggiaban']}},{{$list['August']['tonggiaban']}},
                                        {{$list['September']['tonggiaban']}}, {{$list['October']['tonggiaban']}},
                                        {{$list['November']['tonggiaban']}},{{$list['December']['tonggiaban']}}
                                    ],
                                    backgroundColor: 'green'
                                },
                                {
                                    label: 'Số tiền sửa chữa',
                                    data: [
                                        {{$list['January']['tongsuachua']}}, {{$list['February']['tongsuachua']}},
                                        {{$list['March']['tongsuachua']}}, {{$list['April']['tongsuachua']}},
                                        {{$list['May']['tongsuachua']}}, {{$list['June']['tongsuachua']}},
                                        {{$list['July']['tongsuachua']}},{{$list['August']['tongsuachua']}},
                                        {{$list['September']['tongsuachua']}}, {{$list['October']['tongsuachua']}},
                                        {{$list['November']['tongsuachua']}},{{$list['December']['tongsuachua']}}
                                    ],
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
                                        max: {{$max}},
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
            });
        })(jQuery);
    </script>
@endsection

