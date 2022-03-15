@extends('header.quanly')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Báo cáo thống kê xe mua</h4>
                        <form action="" id="form-search">
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
                                        <button type="button" class="btn btn-primary" id="tim-kiem" data-url="{{route('baocaothongke.timkiem_xemua')}}">Tìm kiếm</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="table">
                            <div class="table-responsive pt-3">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Xe</th>
                                        <th>Giá Mua</th>
                                        <th>Trạng Thái</th>
                                        <th>Thông tin chi tiêt</th>
                                    </tr>
                                    </thead>
                                    <tbody id="danh-sach-binh-luan">
                                        @if(count($resultXeMua)>0)
                                            @foreach($resultXeMua as $key => $xe)
                                            <tr>
                                                <td>{{$key+1}}</td>
                                                <td>
                                                    {{$xe->bien_so}}
                                                    <br><br> {{$xe->dongxe->ten_dong_xe}}
                                                    <br><br> {{$xe->khachhang->ho_ten}}
                                                </td>
                                                <td>
                                                    {{ currency_format($xe->gia_mua) }}
                                                </td>
                                                <td>
                                                    <label for="" class="badge badge-info">{{$xe->trangthai->ten_trang_thai}}</label>
                                                </td>
                                                <td>
                                                    <a href="{{route('quanlyxe.editthongtinxe',$xe->id)}}" class="btn btn-primary">Thông tin chi tiết</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        @else
                                            <tr>
                                                <td colspan="5" class="text-center">Không có dữ liệu</td>
                                            </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="paginate float-right text-right" style="padding: 10px 0px;">
                                        {{$resultXeMua->appends(request()->all())->links()}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-show-binh-luan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title label" id="exampleModalLongTitle">Trả lời bình luận</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div id="form-binh-luan">

                </div>
            </div>
        </div>
    </div>
    <script type="module" src="{{asset('js/admin/bao_cao_xe_mua.js')}}"></script>
@endsection
