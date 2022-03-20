@extends('header.quanly')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Quản lý thông tin xe</h4>
                        <form action="" id="form-search">
                            <div class="row" style="padding-top: 20px;">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="bien_so_search"
                                               placeholder="Biển số">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="khach_hang_search"
                                               placeholder="Thông tin khách hàng">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <select class="js-example-basic-single w-100" name="trang_thai_search">
                                            <option value="">Chọn trạng thái xe</option>
                                            <option value="1">Xe mới mua</option>
                                            <option value="2">Xe đang đăng web</option>
                                            <option value="3">Xe đã có khách mua</option>
                                            <option value="4">Gỡ thông tin trên web</option>
                                            <option value="6">Đang sửa chữa</option>
                                            <option value="5">Hủy đơn sửa chữa</option>
                                            <option value="7">Đã hoàn thành sửa chữa</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <button type="button" class="btn btn-primary" id="search"
                                                data-url="{{route('quanlyxe.search')}}">Tìm kiếm
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="danh-sach-load">
                            <div class="table-responsive pt-3">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Xe</th>
                                        <th>Đăng ký tại</th>
                                        <th>Ngày mua</th>
                                        <th>Trạng Thái</th>
                                        <th>Tác vụ</th>
                                    </tr>
                                    </thead>
                                    <tbody id="danh-sach">
                                    @foreach($listXe as $key => $iterm)
                                        <tr>
                                            <td>{{$key + 1}}</td>
                                            <td>{{$iterm->bien_so}}
                                                <br>
                                                <br>
                                                {{$iterm->dongxe->ten_dong_xe}}
                                                <br>
                                                <br>
                                                {{$iterm->khachhang->ho_ten}}
                                            </td>
                                            <td>{{$iterm->dang_ky_tai}}</td>
                                            <td>{{ substr(format_thoi_gian($iterm->ngay_mua),0,10)}}</td>
                                            <td><label
                                                    class="btn btn-success btn-sm">{{$iterm->trangthai->ten_trang_thai}}</label>
                                            </td>
                                            <td>
                                                @if($iterm->iMa_trang_thai != 6 && $iterm->iMa_trang_thai != 3 )
                                                    <a href="{{route("quanlyxe.khachhangmuaxe",$iterm->id)}}"
                                                       class="btn btn-primary btn-width">Khách hàng mua xe</a>
                                                    <br><br>
                                                @elseif($iterm->iMa_trang_thai == 3)
                                                    <a href="{{route("quanlyxe.khachhangmuaxe",$iterm->id)}}"
                                                       class="btn btn-success btn-width">Thông tin giao dịch bán</a>
                                                    <br><br>
                                                @endif
                                                @if($iterm->iMa_trang_thai == 2)
                                                    <a href="{{route("quanlyxe.dangthongtinxe",$iterm->id)}}"
                                                       class="btn btn-info btn-width">Update thông tin xe trên web</a>
                                                        <br><br>
                                                @elseif($iterm->iMa_trang_thai != 6 && $iterm->iMa_trang_thai != 3)
                                                    <a href="{{route("quanlyxe.dangthongtinxe",$iterm->id)}}"
                                                       class="btn btn-primary btn-width">Đăng thông tin xe</a>
                                                        <br><br>
                                                @endif
                                                @if($iterm->iMa_trang_thai == 3)
                                                <a href="{{route("quanlyxe.editthongtinxe",$iterm->id)}}"
                                                   class="btn btn-info btn-width">
                                                    Thông tin xe mua
                                                </a>
                                                <br><br>
                                                    @else
                                                <a href="{{route("quanlyxe.editthongtinxe",$iterm->id)}}"
                                                   class="btn btn-warning btn-width">
                                                    <i class="far fa-edit"></i>&nbsp;Sửa thông tin xe
                                                </a>
                                                <br><br>
                                                @endif
                                                @if($iterm->iMa_trang_thai == 1)
                                                    <button type="button" class="btn btn-danger btn-width xoa-thong-tin-xe"
                                                            data-url="{{route("quanlyxe.xoathongtinxe",$iterm->id)}}">
                                                        <i class="fas fa-trash-alt"> </i>&nbsp; Xóa thông tin xe
                                                    </button>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="paginate float-right text-right" style="padding: 10px 0px;">
                                        {{$listXe->appends(request()->all())->links()}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="module" src="{{asset('js/admin/xe.js')}}"></script>
@endsection
