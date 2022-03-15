@extends('header.quanly')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Quản lý khách hàng</h4>
                        <div class="row">
                            <div class="col-md-12">
                                <a href="{{route("quanlykhachhang.themkhachang")}}" class="btn btn-primary" >Thêm khách hàng bán xe</a>
                            </div>
                        </div>
                        <form  id="form-search">
                            <div class="row" style="padding-top: 20px;">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name"  placeholder="Họ tên">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="sodienthoai"  placeholder="Số điện thoại">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <button type="button" class="btn btn-primary" id="tim-kiem" data-url="{{route("quanlykhachhang.search")}}">Tìm kiếm</button>
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
                                        <th>Họ tên khách hàng</th>
                                        <th>Số CMND/CCCD</th>
                                        <th>Số điện thoại</th>
                                        <th>Địa chỉ</th>
                                        <th>Tác vụ</th>
                                    </tr>
                                    </thead>
                                    <tbody id="danh-sach-khach-hang">
                                    @if(count($listKhachHang) > 0)
                                        @foreach($listKhachHang as $key => $khachhang)
                                            <tr>
                                                <td>{{$key+1}}</td>
                                                <td>{{$khachhang->ho_ten}}</td>
                                                <td>{{$khachhang->so_CMND}}</td>
                                                <td>{{$khachhang->so_dien_thoai}}</td>
                                                <td>{{$khachhang->noi_cu_tru}}</td>
                                                <td>
                                                    <a href="{{route("quanlykhachhang.showkhachang",$khachhang->id)}}" class="btn btn-warning" ><i class="far fa-edit"></i></a>

                                                    <a href="{{route("quanlykhachhang.themxeban",$khachhang->id)}}" class="btn btn-primary" >Thêm xe bán</a>

                                                    <button type="button" class="btn btn-danger xoa-khach-hang"
                                                            data-url="{{route('quanlykhachhang.xoakhachhang',$khachhang->id)}}">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="6" class="text-center">Không có dữ liệu</td>
                                        </tr>
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="paginate float-right text-right" style="padding: 10px 0px;">
                                        {{$listKhachHang->appends(request()->all())->links()}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="module" src="{{asset('js/admin/khach_hang.js')}}"></script>
@endsection
