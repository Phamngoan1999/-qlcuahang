@extends('header.quanly')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Thông tin phụ tùng sửa chữa</h4>
                        <form action="" id="form-hoa-don" class="chi-tiet-hoa-don">
                            <div class="row" id="chi-tiet-hoa-don">
                                <div class="col-md-5">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Chọn cửa hàng sửa chữa</label>
                                                @hasRole("admin")
                                                @if($thongtinHoadon[0]->trang_thai != 'chonhan')
                                                    <select class="js-example-basic-single w-100" name="iMa_cua_hang" disabled>
                                                        @foreach($danhsachCuaHang as $cuahang)
                                                            <option value="{{$cuahang->id}}" @if($cuahang->id==$thongtinHoadon[0]->iMa_cua_hang) selected @endif>{{$cuahang->ten_cua_hang}}</option>
                                                        @endforeach
                                                    </select>
                                                @else
                                                    <select class="js-example-basic-single w-100" name="iMa_cua_hang">
                                                        @foreach($danhsachCuaHang as $cuahang)
                                                            <option value="{{$cuahang->id}}" @if($cuahang->id==$thongtinHoadon[0]->iMa_cua_hang) selected @endif>{{$cuahang->ten_cua_hang}}</option>
                                                        @endforeach
                                                    </select>
                                                @endif
                                                @endhasRole
                                                @hasRole("cuahanglienket")
                                                <select class="js-example-basic-single w-100" name="iMa_cua_hang" disabled>
                                                    @foreach($danhsachCuaHang as $cuahang)
                                                        <option value="{{$cuahang->id}}" @if($cuahang->id==$thongtinHoadon[0]->iMa_cua_hang) selected @endif>{{$cuahang->ten_cua_hang}}</option>
                                                    @endforeach
                                                </select>
                                                @endhasRole
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Chọn xe sửa chữa</label>
                                                <select class="js-example-basic-single w-100"  name="iMa_xe" disabled>
                                                    <option value="">Chọn xe sửa chữa</option>
                                                    @foreach($danhsachXe as$xe)
                                                        <option value="{{$xe->id}}" @if($xe->id==$thongtinHoadon[0]->iMa_xe) selected @endif>{{$xe->dongxe->ten_dong_xe}}-{{$xe->bien_so}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    @hasRole("admin")
                                        @if($thongtinHoadon[0]->trang_thai == 'chonhan')
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <button type="button" class="btn btn-primary" id="add-phu-tung" ><i class="fa-solid fa-plus"></i>Thêm phụ tùng</button>
                                                </div>
                                            </div>
                                        @endif
                                    @endhasRole
                                </div>
                                <div class="col-md-7">
                                    <div id="list-phu-tung">
                                        @foreach($thongtinHoadon[0]->phutung as $key => $iterm)
                                            <div class="row them-phu-tung" >
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="">Phụ tùng</label>
                                                        <input type="text" class="form-control"  placeholder="Phụ tùng" value="{{$iterm->ten_phu_tung}}">
                                                    </div>
                                                </div>
                                                @hasRole("admin")
                                                    @if($thongtinHoadon[0]->trang_thai == 'chonhan')
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <label for="" style="visibility: hidden;">Phụ tùng</label>
                                                                <button type="button" class="btn btn-danger xoa-phu-tung-confirm" data-url="{{route("quanlysuachua.delete-phu-tung",$iterm->id)}}"><i class="fas fa-trash-alt"></i></button>
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endhasRole
                                                @hasRole("admin")
                                                    @if($thongtinHoadon[0]->trang_thai == 'danhandon' || $thongtinHoadon[0]->trang_thai == 'dahoanthanh')
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="">Đơn giá</label>
                                                                <input type="text" class="form-control"  placeholder="đơn giá" value="{{$iterm->don_gia}}">
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endhasRole
                                                @hasRole("cuahanglienket")
                                                @if($thongtinHoadon[0]->trang_thai == 'danhandon' || $thongtinHoadon[0]->trang_thai == 'dahoanthanh')
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="">Đơn giá</label>
                                                            <input type="text" class="form-control" name="dongia[{{$iterm->id}}]"  placeholder="đơn giá" value="{{$iterm->don_gia}}">
                                                        </div>
                                                    </div>
                                                @endif
                                                @endhasRole
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="error error-phutung"></div>
                                </div>
                            </div>
                            <div class="row" style="padding-top: 10px;">
                                <div class="col-md-12">
                                    @hasRole("cuahanglienket")
                                        @if($thongtinHoadon[0]->trang_thai == 'chonhan')
                                            <button type="button" class="btn btn-primary" id="nhan-don-sua-chua" data-url="{{route('quanlysuachua.updatenhandon',$id)}}" >Nhận đơn sửa chữa</button>
                                            <button type="button" class="btn btn-primary" id="huy-don-sua-chua" data-url="{{route('quanlysuachua.huyhoadon',$id)}}" >Hủy đơn sửa chữa</button>
                                        @endif

                                        @if($thongtinHoadon[0]->trang_thai == 'danhandon')
                                            <button type="button" class="btn btn-primary" id="len-hoa-don-sua-chua" data-url="{{route('quanlysuachua.lenhoadon',$id)}}" >Lên hóa đơn sửa chữa</button>
                                        @endif
                                    @endhasRole
                                    @hasRole("admin")
                                        @if($thongtinHoadon[0]->trang_thai == 'chonhan')
                                            <button type="button" class="btn btn-primary update-luu-thong-tin" data-url="{{route('quanlysuachua.updatehoadon',$id)}}" >Update thông tin</button>
                                        @endif
                                    @endhasRole
                                    @if($thongtinHoadon[0]->trang_thai == 'dahoanthanh')
                                        <button type="button" class="btn btn-success" data-url="{{route('quanlysuachua.updatehoadon',$id)}}" >Đã hoàn thành</button>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="module" src="{{asset('js/admin/hoa_don.js')}}"></script>
@endsection
