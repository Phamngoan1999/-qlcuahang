@extends('header.quanly')
@section('content')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Cập nhật thông tin xe</h4>
                        <form method="POST" id="form-update-thong-tin-xe">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Khách hàng  <span class="obligatory">*</span></label>
                                        <input type="text" class="form-control" name="ho_ten"  placeholder="Họ tên khách hàng" value="{{$thongTinXe[0]['khachhang']['ho_ten']}}">
                                        <div class="error error-ho_ten"></div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Số điện thoại <span class="obligatory">*</span></label>
                                        <input type="text" class="form-control" name="so_dien_thoai" id="so_dien_thoai" maxlength="10" placeholder="Số điện thoại" value="{{$thongTinXe[0]['khachhang']['so_dien_thoai']}}" >
                                        <div class="error error-so_dien_thoai"></div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="">Năm sinh <span class="obligatory">*</span></label>
                                        <select class="form-control  js-example-basic-single" placeholder="Nhân viên" name="nam_sinh" >
                                            <option value="">Chọn năm sinh</option>
                                            @for ($i = $namhientai; $i >1900; $i--)
                                                <option value="{{$i}}" @if($thongTinXe[0]['khachhang']['nam_sinh'] == $i) selected @endif>{{$i}}</option>
                                            @endfor
                                        </select>
                                        <div class="error error-nam_sinh"></div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Số CMND <span class="obligatory">*</span></label>
                                        <input type="text" class="form-control" name="so_CMND" id="so_CMND" maxlength="12" placeholder="Số CMND/Thẻ CCCD" value="{{$thongTinXe[0]['khachhang']['so_CMND']}}">
                                        <div class="error error-so_CMND"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Nơi cấp CMND <span class="obligatory">*</span></label>
                                        <input type="text" class="form-control" name="noi_cap_CMND"  placeholder="Nơi cấp CMND"  value="{{$thongTinXe[0]['khachhang']['noi_cap_CMND']}}">
                                        <div class="error error-noi_cap_CMND"></div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Nơi cư trú <span class="obligatory">*</span></label>
                                        <input type="text" class="form-control" name="noi_cu_tru"  placeholder="Nơi cư trú" value="{{$thongTinXe[0]['khachhang']['noi_cu_tru']}}">
                                        <div class="error error-noi_cu_tru"></div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Ngày cấp <span class="obligatory">*</span></label>
                                        <input type="date" class="form-control" name="cap_ngay"  placeholder="Ngày cấp" value="{{$thongTinXe[0]['khachhang']['cap_ngay']}}">
                                        <div class="error error-cap_ngay"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Số loại <span class="obligatory">*</span></label>
                                        <input type="text" class="form-control" name="so_loai"  placeholder="Số loại" value="{{$thongTinXe[0]['so_loai']}}">
                                        <div class="error error-so_loai"></div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Màu sơn <span class="obligatory">*</span></label>
                                        <input type="text" class="form-control" name="mau_son" maxlength="100"  placeholder="Màu sơn" value="{{$thongTinXe[0]['mau_son']}}">
                                        <div class="error error-mau_son"></div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Dung tích <span class="obligatory">*</span></label>
                                        <input type="text" class="form-control" name="dung_tich" id="dung_tich"  placeholder="Dung tích" maxlength="10" value="{{$thongTinXe[0]['dung_tich']}}">
                                        <div class="error error-dung_tich"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Biển số <span class="obligatory">*</span></label>
                                        <input type="text" class="form-control" name="bien_so" id="bien_so"  placeholder="Biển số"  value="{{$thongTinXe[0]['bien_so']}}" maxlength="11">
                                        <div class="error error-bien_so"></div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Đăng ký tại <span class="obligatory">*</span></label>
                                        <input type="text" class="form-control" name="dang_ky_tai" id="dang_ky_tai" maxlength="255" placeholder="Đăng ký tại"  value="{{$thongTinXe[0]['dang_ky_tai']}}">
                                        <div class="error error-dang_ky_tai"></div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Số máy <span class="obligatory">*</span></label>
                                        <input type="text" class="form-control" name="so_may"  placeholder="Số máy" id="so_may" maxlength="8" value="{{$thongTinXe[0]['so_may']}}">
                                        <div class="error error-so_may"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Số khung <span class="obligatory">*</span></label>
                                        <input type="text" class="form-control" name="so_khung" maxlength="17"  placeholder="Số khung" id="so_khung" value="{{$thongTinXe[0]['so_khung']}}">
                                        <div class="error error-so_khung"></div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="">Dòng xe <span class="obligatory">*</span></label>
                                        <select class="form-control js-example-basic-single"  name="iMa_dong_xe">
                                            <option value="">Chọn Dòng xe</option>
                                            @foreach($dongXe as $dongxe)
                                                <option value="{{$dongxe->id}}" @if($dongxe->id == $thongTinXe[0]['iMa_dong_xe']) selected @endif>{{$dongxe->ten_dong_xe}}</option>
                                            @endforeach
                                        </select>
                                        <div class="error error-iMa_dong_xe"></div>
                                    </div>
                                </div>
                                <div class="col-md-2" >
                                    <div class="form-group">
                                        <div class="row" style="padding: 10px;">
                                            <label>
                                                <input type="checkbox" name="bao_hiem_xe" class="option-input checkbox" @if($thongTinXe[0]['bao_hiem_xe'] == 'checked') checked @endif/>
                                                Bảo hiểm
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Giá mua <span class="obligatory">*</span></label>
                                        <input type="text" class="form-control" name="gia_mua" id="gia_mua" placeholder="Giá mua" maxlength="14" value="{{ currency_format($thongTinXe[0]['gia_mua'])}}">
                                        <div class="error error-gia_mua"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Ảnh giấy tờ  <span class="obligatory">*</span></label>
                                        <input type="file" multiple id="gallery-photo-add" class="form-control" name="files_anh_giay_to[]">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="gallery" width="100%">
                                        @if(isset($thongtinAnh))
                                            @foreach($thongtinAnh as $anh)
                                                @if($anh['iMa_loai_anh'] == 2||$anh['iMa_loai_anh'] == 3)
                                                    <div class="themanh">
                                                        <image src="{{ asset('uploads/images/'.$anh['duong_dan']) }}" class="anh"  width="150px" height="150px"/>
                                                        @if($thongTinXe[0]['iMa_trang_thai'] != 3)
                                                        <button type="button" class="btn btn-danger xoa-anh" title = "Xóa ảnh"
                                                                data-url = "{{route('quanlyxe.xoaanh',$anh['id'])}}">
                                                                <i class="fas fa-trash-alt" aria-hidden="true"></i>
                                                        </button>
                                                        @endif
                                                    </div>
                                                @endif
                                            @endforeach
                                        @endif
                                    </div>
                                    <div class="error error-files_anh_giay_to">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group" style="padding-top: 10px;">
                                        @if($thongTinXe[0]['iMa_trang_thai'] != 3)
                                        <button type="button" id="update-thong-tin" data-url="{{route('quanlyxe.updatethongtinxe',$thongTinXe[0]['id'])}}" class="btn btn-primary" >Update thông tin</button>
                                        @endif
                                        <a href="{{route('quanlyxe.inthongtin',$thongTinXe[0]['id'])}}" class="btn btn-primary" target="_blank">In thông tin</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function formatCurrency(number){
            var n = number.split('').reverse().join("");
            var n2 = n.replace(/\d\d\d(?!$)/g, "$&,");
            return  n2.split('').reverse().join('') + 'VNĐ';
        }
        $("#gia_mua").on('input', function(e){
            $(this).val(formatCurrency(this.value.replace(/[,VNĐ]/g,'')));
        }).on('keypress',function(e){
            if(!$.isNumeric(String.fromCharCode(e.which))) e.preventDefault();
        }).on('paste', function(e){
            var cb = e.originalEvent.clipboardData || window.clipboardData;
            if(!$.isNumeric(cb.getData('text'))) e.preventDefault();
        });
    </script>
    <script src="{{asset('js/jquery-2.1.1.min.js')}}"></script>
    <script type="module" src="{{asset('js/admin/create_xe_mua.js')}}"></script>
    <script type="module" src="{{asset('js/admin/update_thong_tin_xe.js')}}"></script>
@endsection
