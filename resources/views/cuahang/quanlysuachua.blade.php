@extends('header.quanly')
@section('content')
    <style>
        .btn-width{
            width: 200px!important;
        }
    </style>
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Quản lý sửa chữa</h4>
                        <form action="{{route('quanlysuachua.quanlycuahang')}}" method="GET">
                            <div class="row" style="padding-top: 20px;">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <select class="js-example-basic-single w-100" name="trangthai">
                                            <option value="">Trạng thái hóa đơn</option>
                                            <option value="dahoanthanh" @if($request->trangthai=="dahoanthanh") selected @endif>Đã hoàn thành</option>
                                            <option value="chonhan" @if($request->trangthai=="chonhan") selected @endif>Chờ nhận</option>
                                            <option value="huyhoadon" @if($request->trangthai=="huyhoadon") selected @endif>Hủy hóa đơn</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <select class="js-example-basic-single w-100" name="xe">
                                            <option value="">Chọn xe</option>
                                            @foreach($danhsachXe as $xe)
                                                <option value="{{$xe->iMa_xe}}" @if($request->xe==$xe->iMa_xe) selected @endif>{{$xe->xe->bien_so}} - {{$xe->xe->dongxe->ten_dong_xe}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary" id="add-hang-xe" >Tìm kiếm</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="table-div">
                            <div class="table-responsive pt-3">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Cửa hàng</th>
                                        <th>Biển số</th>
                                        <th>Tác vụ</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($danhsach as $key => $iterm)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$iterm->cuahang->ten_cua_hang}}</td>
                                            <td>{{$iterm->xe->bien_so}}</td>
                                            <td>
                                                @if($iterm->trang_thai== 'chonhan')
                                                    <a href="{{route("quanlysuachua.showhoadon",$iterm->id)}}" class="btn btn-primary btn-width" >Chờ nhận đơn</a>
                                                @elseif($iterm->trang_thai== 'danhandon')
                                                    <a href="{{route("quanlysuachua.showhoadon",$iterm->id)}}" class="btn btn-success btn-width" >Cửa hàng đã nhận đơn</a>
                                                @elseif($iterm->trang_thai== 'huyhoadon')
                                                    <a href="{{route("quanlysuachua.showhoadon",$iterm->id)}}" class="btn btn-danger btn-width" >Cửa hàng đã hủy đơn</a>
                                                @elseif($iterm->trang_thai== 'dahoanthanh')
                                                    <a href="{{route("quanlysuachua.showhoadon",$iterm->id)}}" class="btn btn-success btn-width" >Đơn đã hoàn thành</a>
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
                                        {{$danhsach->appends(request()->all())->links()}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
