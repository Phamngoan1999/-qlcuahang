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
                                    <div class="form-group">
                                        <label for="">Từ ngày</label>
                                        <input type="date" class="form-control" name="from_date">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Đến ngày</label>
                                        <input type="date" class="form-control" name="to_date" >
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="">&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</label>
                                        <button type="button" class="btn btn-primary" id="tim-kiem" data-url="{{route('baocaothongke.timkiem_theobaocao')}}">Tìm kiếm</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="table">
                            <div class="table-responsive pt-3">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th  class="text-center">Số xe mua</th>
                                        <th  class="text-center">Tổng tiền mua</th>
                                        <th  class="text-center">Số xe bán</th>
                                        <th  class="text-center">Tổng tiền bán xe</th>
                                        <th  class="text-center">Số tiền chi cho sửa chữa</th>
                                    </tr>
                                    </thead>
                                    <tbody id="report">
                                        <tr>
                                            <td class="text-center">{{$tongtienmua[0]->slXeMua}}</td>
                                            <td class="text-center">@if($tongtienmua[0]->sumtienmua != null){{currency_format($tongtienmua[0]->sumtienmua)}} @else 0 @endif</td>
                                            <td class="text-center">{{$tongtienmua[0]->slXeBan}}</td>
                                            <td class="text-center">@if($tongtienmua[0]->sumtienban != null){{currency_format($tongtienmua[0]->sumtienban)}} @else 0 @endif</td>
                                            <td class="text-center">@if($tongtienSuaChua[0]->tong_tien_sua_chua != null){{currency_format($tongtienSuaChua[0]->tong_tien_sua_chua)}}@else 0 @endif</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="module" src="{{asset('js/admin/bao_cao_thong_ke.js')}}"></script>
@endsection
