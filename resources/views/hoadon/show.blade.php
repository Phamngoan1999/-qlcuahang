@extends('header.quanly')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Thêm phụ tùng sửa chữa</h4>
                        <form action="" id="form-hoa-don">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Chọn cửa hàng sửa chữa</label>
                                                <select class="js-example-basic-single w-100" name="iMa_cua_hang">
                                                    <option value="AL">Chọn cửa hàng</option>
                                                    @foreach($danhsachCuaHang as $cuahang)
                                                        <option value="{{$cuahang->id}}" @if($cuahang->id==$thongtinXe[0]->iMa_cua_hang) selected @endif>{{$cuahang->ten_cua_hang}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Chọn xe sửa chữa</label>
                                                <select class="js-example-basic-single w-100"  name="iMa_xe">
                                                    <option value="AL">Chọn xe sửa chữa</option>
                                                    @foreach($danhsachXe as$xe)
                                                        <option value="{{$xe->id}}" @if($xe->id==$thongtinXe[0]->iMa_xe) selected @endif>{{$xe->dongxe->ten_dong_xe}}-{{$xe->bien_so}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <button type="button" class="btn btn-primary" id="add-phu-tung" ><i class="fa-solid fa-plus"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div id="list-phu-tung">
                                        @foreach($thongtinXe[0]->phutung as $key => $iterm)
                                            <div class="row them-phu-tung" >
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="">Phụ tùng</label>
                                                        <input type="text" class="form-control" name="phutung[]"  placeholder="Phụ tùng" value="{{$iterm->ten_phu_tung}}">
                                                    </div>
                                                </div>
                                                @hasRole("admin")
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label for="" style="visibility: hidden;">Phụ tùng</label>
                                                        <button type="button" class="btn btn-danger xoa-phu-tung"><i class="fas fa-trash-alt"></i></button>
                                                    </div>
                                                </div>
                                                @endhasRole
                                                @hasRole("cuahanglienket")
                                                @if($thongtinXe[0]->trang_thai == 'danhandon' || $thongtinXe[0]->trang_thai == 'dahoanthanh')
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
                                </div>
                            </div>
                            <div class="phu-tung" style="display: none;">
                                <div class="row them-phu-tung" >
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="">Phụ tùng</label>
                                            <input type="text" class="form-control" name="phutung[]"  placeholder="Phụ tùng">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="" style="visibility: hidden;">Phụ tùng</label>
                                            <button type="button" class="btn btn-danger xoa-phu-tung"><i class="fas fa-trash-alt"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    @hasRole("cuahanglienket")
                                    @if($thongtinXe[0]->trang_thai == 'chonhan')
                                        <button type="button" class="btn btn-primary" id="nhan-don-sua-chua" data-url="{{route('quanlysuachua.updatenhandon',$id)}}" >Nhận đơn sửa chữa</button>
                                        <button type="button" class="btn btn-primary" id="huy-don-sua-chua" data-url="{{route('quanlysuachua.updatenhandon',$id)}}" >Hủy đơn sửa chữa</button>
                                    @endif

                                    @if($thongtinXe[0]->trang_thai == 'danhandon')
                                        <button type="button" class="btn btn-primary" id="len-hoa-don-sua-chua" data-url="{{route('quanlysuachua.lenhoadon',$id)}}" >Lên hóa đơn sửa chữa</button>
                                    @endif
                                    @endhasRole
                                    @hasRole("admin")
                                    @if($thongtinXe[0]->trang_thai == 'chonhan')
                                        <button type="button" class="btn btn-primary" id="add-luu-thong-tin" data-url="{{route('quanlysuachua.luuhoadon',$id)}}" >Update thông tin</button>
                                    @endif
                                    @endhasRole
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
