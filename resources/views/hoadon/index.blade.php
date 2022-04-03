<div class="row">
    <div class="col-md-5">
        <div class="row">
            <div class="col-md-12">
                <div><input type="text" id="maHoaDon" value="{{$id}}" style="display: none;"></div>
                <div class="form-group">
                    <label for="">Chọn cửa hàng sửa chữa</label>
                    <select class="js-example-basic-single w-100  ma-cua-hang" name="iMa_cua_hang" disabled>
                        @foreach($danhsachCuaHang as $cuahang)
                            <option value="{{$cuahang->id}}" @if($cuahang->id==$thongtinHoadon->iMa_cua_hang) selected @endif>{{$cuahang->ten_cua_hang}}</option>
                        @endforeach
                    </select>
                    <input type="text" id="maCuaHang" value="{{$thongtinHoadon->iMa_cua_hang}}" style="display: none;">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="">Chọn xe sửa chữa</label>
                    <input class="form-control" type="text" value="{{$thongtinHoadon->xe->dongxe->ten_dong_xe}} - {{$thongtinHoadon->xe->bien_so}}" disabled>
                </div>
            </div>
        </div>
        @if($thongtinHoadon->trang_thai == 'dahoanthanh')
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Tổng tiền</label>
                        <input class="form-control" type="text" value="{{ currency_format($thongtinHoadon->tong_tien)}}" disabled>
                    </div>
                </div>
            </div>
        @endif
        @hasRole("admin")
        @if($thongtinHoadon->trang_thai == 'chonhan')
            <div class="row">
                <div class="col-md-12">
                    <button type="button" class="btn btn-info" id="add-phu-tung" data-url="{{route("quanlysuachua.list-dich-vu-update",$id)}}" >
                        <i class="fa-solid fa-plus"></i>Thêm phụ tùng</button>
                    <div class="error error-phutung"></div>
                </div>
            </div>
        @endif
        @endhasRole
    </div>
    <div class="col-md-7">
        <div id="list-phu-tung">
            @foreach($thongtinHoadon->phutung as $key => $iterm)
                <div class="row them-phu-tung" >
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Phụ tùng</label>
                            <input type="text" class="form-control"  placeholder="Phụ tùng" value="{{$iterm->ten_phu_tung}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Đơn giá</label>
                            <input type="text" class="form-control"  placeholder="đơn giá" value="{{$iterm->don_gia}}">
                        </div>
                    </div>
                    @hasRole("admin")
                    @if($thongtinHoadon->trang_thai == 'chonhan')
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="" style="visibility: hidden;">Phụ tùng</label>
                                <input type="text" class="form-control" style="display: none;" name="idPhuTung[]"
                                       placeholder="Phụ tùng" value="{{$iterm['id']}}">
                                <button type="button" class="btn btn-danger xoa-phu-tung-confirm"
                                        data-url="{{route("quanlysuachua.delete-phu-tung",$iterm->id)}}"><i class="fas fa-trash-alt"></i></button>
                            </div>
                        </div>
                    @endif
                    @endhasRole
                </div>
            @endforeach
        </div>
    </div>
</div>
<div class="row" style="padding-top: 10px;">
    <div class="col-md-12">
        @hasRole("cuahanglienket")
            @if($thongtinHoadon->trang_thai == 'chonhan')
                <button type="button" class="btn btn-primary" id="nhan-don-sua-chua" data-url="{{route('quanlysuachua.updatenhandon',$id)}}" >Nhận đơn sửa chữa</button>
                <button type="button" class="btn btn-primary" id="huy-don-sua-chua" data-url="{{route('quanlysuachua.updatenhandon',$id)}}" >Hủy đơn sửa chữa</button>
            @endif

            @if($thongtinHoadon->trang_thai == 'danhandon')
                <button type="button" class="btn btn-primary" id="len-hoa-don-sua-chua" data-url="{{route('quanlysuachua.lenhoadon',$id)}}" >Lên hóa đơn sửa chữa</button>
            @endif
        @endhasRole
        @hasRole("admin")
            @if($thongtinHoadon->trang_thai == 'chonhan')
                <button type="button" class="btn btn-primary update-luu-thong-tin" data-url="{{route('quanlysuachua.updatehoadon',$id)}}" >Update thông tin</button>
            @endif
        @endhasRole
        @if($thongtinHoadon->trang_thai == 'dahoanthanh')
            <button type="button" class="btn btn-success" data-url="{{route('quanlysuachua.updatehoadon',$id)}}" >Hóa đơn đã hoàn thành</button>
        @endif
    </div>
</div>
