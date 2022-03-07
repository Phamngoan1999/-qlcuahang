@extends('header.quanly')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Quản lý sửa chữa</h4>
                        <div class="row">
                            <div class="col-md-12">
                                <a href="{{route("quanlysuachua.themhoadon")}}" class="btn btn-primary" >Thông tin hóa đơn</a>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 20px;">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <select class="js-example-basic-single w-100">
                                        <option value="AL">Trạng thái hóa đơn</option>
                                        <option value="dahoanthanh">Đã hoàn thành</option>
                                        <option value="chonhan">Chờ nhận</option>
                                        <option value="huyhoadon">Hủy hóa đơn</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <select class="js-example-basic-single w-100">
                                        <option value="AL">Chọn xe</option>
                                        <option value="WY">Wyoming</option>
                                        <option value="AM">America</option>
                                        <option value="CA">Canada</option>
                                        <option value="RU">Russia</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <button type="button" class="btn btn-primary" id="add-hang-xe" >Tìm kiếm</button>
                                </div>
                            </div>
                        </div>
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
                                                    <a href="{{route("quanlysuachua.showhoadon",$iterm->id)}}" class="btn btn-primary" >Chờ nhận đơn</a>
                                                @elseif($iterm->trang_thai== 'danhandon')
                                                    <a href="{{route("quanlysuachua.showhoadon",$iterm->id)}}" class="btn btn-success" >Cửa hàng đã nhận đơn</a>
                                                @elseif($iterm->trang_thai== 'huyhoadon')
                                                    <a href="{{route("quanlysuachua.showhoadon",$iterm->id)}}" class="btn btn-danger" >Cửa hàng đã hủy đơn</a>
                                                @elseif($iterm->trang_thai== 'dahoanthanh')
                                                    <a href="{{route("quanlysuachua.showhoadon",$iterm->id)}}" class="btn btn-success" >Đơn đã hoàn thành</a>
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

    <div class="modal fade" id="add-dong-xe" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Thêm hóa đơn</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="form-add-hang-xe">
                    <div class="modal-body">
                        <div class="form-group">
                            <div class="row" style="padding: 10px 15px;">
                                <select class="js-example-basic-single" style="width: 420px!important;">
                                    <label for="">Chọn cửa hàng sửa chữa</label>
                                    <option value="AL">Chọn xe</option>
                                    <option value="WY">Wyoming</option>
                                    <option value="AM">America</option>
                                    <option value="CA">Canada</option>
                                    <option value="RU">Russia</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Loại xe</label>
                            <div class="row" style="padding: 10px 15px;">
                                <select class="js-example-basic-single w-100"  style="width: 420px!important;">
                                    <option value="AL">Chọn xe</option>
                                    <option value="WY">Wyoming</option>
                                    <option value="AM">America</option>
                                    <option value="CA">Canada</option>
                                    <option value="RU">Russia</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                        <button type="button" class="btn btn-primary" id="add-hang-xe">Lưu</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
