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
                                                <input class="form-control" type="text" value="{{$thongtinHoadon[0]->xe->dongxe->ten_dong_xe}} - {{$thongtinHoadon[0]->xe->bien_so}}" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    @hasRole("admin")
                                        @if($thongtinHoadon[0]->trang_thai == 'dahoanthanh')
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="">Tổng tiền</label>
                                                    <input class="form-control" type="text" value="{{ currency_format($thongtinHoadon[0]->tong_tien)}}" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
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
                                                            <input type="text" class="form-control don-gia-validate" name="dongia[{{$iterm->id}}]"  placeholder="đơn giá" value="{{$iterm->don_gia}}">
                                                        </div>
                                                    </div>
                                                @endif
                                                @endhasRole
                                            </div>
                                        @endforeach
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="error error-phutung"></div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="error error-don-gia"></div>
                                            </div>
                                        </div>
                                    </div>
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
                                        <a href="" class="btn btn-success">Hóa đơn đã hoàn thành</a>
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
    <script type="text/javascript" src="//code.jquery.com/jquery-1.8.3.js"></script>
    <script>
        function formatCurrency(number){
            var n = number.split('').reverse().join("");
            var n2 = n.replace(/\d\d\d(?!$)/g, "$&,");
            return  n2.split('').reverse().join('') + 'VNĐ';
        }
        $(".don-gia-validate").on('input', function(e){
            $(this).val(formatCurrency(this.value.replace(/[,VNĐ]/g,'')));
        }).on('keypress',function(e){
            if(!$.isNumeric(String.fromCharCode(e.which))) e.preventDefault();
        }).on('paste', function(e){
            var cb = e.originalEvent.clipboardData || window.clipboardData;
            if(!$.isNumeric(cb.getData('text'))) e.preventDefault();
        });
    </script>
@endsection
