@extends('header.quanly')
@section('content')
    <link rel="stylesheet" href="{{asset('css/update_xe.css')}}">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Thêm giao dịch khách hàng mua xe </h4>
                        <form method="POST" action="" enctype="multipart/form-data" id="form-gia-dich-xe">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Số loại <span class="obligatory">*</span></label>
                                        <input type="text" class="form-control" name="so_loai"  placeholder="Số loại" value="{{$inforXe[0]['so_loai']}}" disabled>
                                        <div class="error error-so_loai"></div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Màu sơn <span class="obligatory">*</span></label>
                                        <input type="text" class="form-control" name="mau_son"  placeholder="Màu sơn" value="{{$inforXe[0]['mau_son']}}" disabled>
                                        <div class="error error-mau_son"></div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Dung tích <span class="obligatory">*</span></label>
                                        <input type="text" class="form-control" name="dung_tich"  placeholder="Dung tích"  value="{{$inforXe[0]['dung_tich']}}" disabled>
                                        <div class="error error-dung_tich"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Biển số <span class="obligatory">*</span></label>
                                        <input type="text" class="form-control" name="bien_so"  placeholder="Biển số" value="{{$inforXe[0]['bien_so']}}" disabled>
                                        <div class="error error-bien_so"></div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Đăng ký tại <span class="obligatory">*</span></label>
                                        <input type="text" class="form-control" name="dang_ky_tai"  placeholder="Đăng ký tại" value="{{$inforXe[0]['dang_ky_tai']}}" disabled>
                                        <div class="error error-dang_ky_tai"></div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Số máy <span class="obligatory">*</span></label>
                                        <input type="text" class="form-control" name="so_may"  placeholder="Số máy" value="{{$inforXe[0]['so_may']}}" disabled>
                                        <div class="error error-so_may"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div><input type="text" name="ma_xe" style="display: none;" value="{{$id}}"></div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Số khung <span class="obligatory">*</span></label>
                                        <input type="text" class="form-control" name="so_khung"  placeholder="Số khung"  value="{{$inforXe[0]['so_khung']}}" disabled>
                                        <div class="error error-so_khung"></div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="">Dòng xe <span class="obligatory">*</span></label>
                                        <select class="form-control js-example-basic-single"  name="iMa_dong_xe" disabled>
                                            <option value="">Chọn Dòng xe</option>
                                            @foreach($dongXe as $dongxe)
                                                <option value="{{$dongxe->id}}" @if($inforXe[0]['iMa_dong_xe'] == $dongxe->id) selected @endif>{{$dongxe->ten_dong_xe}}</option>
                                            @endforeach
                                        </select>
                                        <div class="error error-iMa_dong_xe"></div>
                                    </div>
                                </div>
                                <div class="col-md-2" >
                                    <div class="form-group">
                                        <div class="row" style="padding: 10px;">
                                            <label>
                                                <input type="checkbox" name="bao_hiem_xe" class="option-input checkbox" @if($inforXe[0]['bao_hiem_xe'] == 'checked') checked @endif/>
                                                Bảo hiểm
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Giá bán <span class="obligatory">*</span></label>
                                        @if(!empty($inforXe[0]['iMa_khach_hang_mua_xe']))
                                            <input type="text" class="form-control" name="gia_ban" id="gia_ban" placeholder="Giá mua"  value="{{ currency_format($inforXe[0]['gia_ban'])}}" disabled>
                                        @else
                                            <input type="text" class="form-control" name="gia_ban" id="gia_ban" placeholder="Giá mua"  value="{{ currency_format($inforXe[0]['gia_ban'])}}" >
                                        @endif
                                            <div class="error error-gia_ban"></div>
                                    </div>
                                </div>
                            </div>
                            @if(empty($inforXe[0]['iMa_khach_hang_mua_xe']))
                            <div class="row">
                                <div class="col-md-12">
                                    <h4 class="card-title">Tìm kiếm thông tin khách hang</h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <input type="text" class="form-control" name="searchCMND"  placeholder="Nhập CMND/Thẻ CCCD">
                                </div>
                                <div class="col-md-2">
                                    <button type="button" id="tim-kiem" class="btn btn-primary" data-url="{{route("quanlykhachhang.timkiem")}}">Tìm kiếm thông tin</button>
                                </div>
                            </div>
                            <div class="error error-ko-thong-tin"></div>
                            @endif
                            @if(!empty($inforXe[0]['iMa_khach_hang_mua_xe']))
                                <div id="thong-tin-khach-hang">
                                    <div class="row" style="padding-top: 20px;">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Khách hàng <span class="obligatory">*</span></label>
                                                <input type="text" class="form-control" name="ho_ten"  placeholder="Họ tên khách hàng" @if(isset($inforKhachHang))value="{{$inforKhachHang->ho_ten}}"@endif disabled>
                                                <div class="error error-ho_ten"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Số điện thoại <span class="obligatory">*</span></label>
                                                <input type="text" class="form-control" name="so_dien_thoai" id="so_dien_thoai" maxlength="10" placeholder="Số điện thoại" @if(isset($inforKhachHang))value="{{$inforKhachHang->so_dien_thoai}}"@endif disabled>
                                                <div class="error error-so_dien_thoai"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="">Năm sinh <span class="obligatory">*</span></label>
                                                <select class="form-control  js-example-basic-single" placeholder="Nhân viên" name="nam_sinh" disabled>
                                                    <option value="">Chọn năm sinh</option>
                                                    @for ($i = $namhientai; $i >1900; $i--)
                                                        <option value="{{$i}}" @if(isset($inforKhachHang) && $inforKhachHang->nam_sinh == $i) selected @endif>{{$i}}</option>
                                                    @endfor
                                                </select>
                                                <div class="error error-nam_sinh"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Số CMND <span class="obligatory">*</span></label>
                                                <input type="text" class="form-control" name="so_CMND" id="so_CMND" maxlength="12" placeholder="Số CMND/Thẻ CCCD" @if(isset($inforKhachHang))value="{{$inforKhachHang->so_CMND}}"@endif disabled>
                                                <div class="error error-so_CMND"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Nơi cấp CMND <span class="obligatory">*</span></label>
                                                <input type="text" class="form-control" name="noi_cap_CMND"  placeholder="Nơi cấp CMND"  @if(isset($inforKhachHang))value="{{$inforKhachHang->noi_cap_CMND}}" @endif disabled>
                                                <div class="error error-noi_cap_CMND"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Nơi cư trú <span class="obligatory">*</span></label>
                                                <input type="text" class="form-control" name="noi_cu_tru"  placeholder="Nơi cư trú"  @if(isset($inforKhachHang))value="{{$inforKhachHang->noi_cu_tru}}"@endif disabled>
                                                <div class="error error-noi_cu_tru"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Ngày cấp <span class="obligatory">*</span></label>
                                                <input type="date" class="form-control" name="cap_ngay"  placeholder="Ngày cấp"  @if(isset($inforKhachHang))value="{{$inforKhachHang->cap_ngay}}"@endif disabled>
                                                <div class="error error-cap_ngay"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="error error-khong-co-du-lieu"></div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Ảnh giấy tờ <span class="obligatory">*</span></label>
                                                <input type="file" multiple id="gallery-photo-add-mua-xe" class="form-control" name="files_anh_giay_to[]">
                                            </div>
                                        </div>
                                    </div>
                                    <div><input type="text" name="ma_khach_hang" style="display: none;"></div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="gallery" width="100%" style="margin-top: 5px;border: 1px solid #f1f1f1;min-height: 200px;">
                                                @foreach($inforXe[0]['anh'] as $anh)
                                                    @if($anh['iMa_loai_anh'] == 3)
                                                        <div class="themanh">
                                                            <image src="{{ asset('uploads/images/'.$anh['duong_dan']) }}" class="anh"  width="150px" height="150px"/>
                                                            @if($inforXe[0]['iMa_trang_thai'] != 3)
                                                                <button type="button" class="btn btn-danger xoa-anh" title = "Xóa ảnh"
                                                                        data-url = "{{route('quanlyxe.xoaanh',$anh['id'])}}">
                                                                    <i class="fas fa-trash-alt" aria-hidden="true"></i>
                                                                </button>
                                                            @endif
                                                        </div>
                                                    @endif
                                                @endforeach
                                            </div>
                                            <div class="error error-files_anh_giay_to">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group" style="padding-top: 10px;">
                                                @if(empty($inforXe[0]['iMa_khach_hang_mua_xe']))
                                                    <button type="button" id="them-khach-hang-mua-xe" data-url="{{route("quanlykhachhang.luuGiaDichBan",$id)}}" class="btn btn-primary" >Lưu thông tin</button>
                                                @endif
                                                <a href="{{route('quanlyxe.inthongtinbanxe',$id)}}"  class="btn btn-primary"  target="_blank">In thông tin</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div id="thong-tin-khach-hang">
                                    <div class="row" style="padding-top: 20px;">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Khách hàng <span class="obligatory">*</span></label>
                                                <input type="text" class="form-control" name="ho_ten"  placeholder="Họ tên khách hàng" @if(isset($inforKhachHang))value="{{$inforKhachHang->ho_ten}}"@endif >
                                                <div class="error error-ho_ten"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Số điện thoại <span class="obligatory">*</span></label>
                                                <input type="text" class="form-control" name="so_dien_thoai" id="so_dien_thoai" maxlength="10" placeholder="Số điện thoại" @if(isset($inforKhachHang))value="{{$inforKhachHang->so_dien_thoai}}"@endif>
                                                <div class="error error-so_dien_thoai"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="">Năm sinh <span class="obligatory">*</span></label>
                                                <select class="form-control  js-example-basic-single" placeholder="Nhân viên" name="nam_sinh" >
                                                    <option value="">Chọn năm sinh</option>
                                                    @for ($i = $namhientai; $i >1900; $i--)
                                                        <option value="{{$i}}" @if(isset($inforKhachHang) && $inforKhachHang->nam_sinh == $i) selected @endif>{{$i}}</option>
                                                    @endfor
                                                </select>
                                                <div class="error error-nam_sinh"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Số CMND <span class="obligatory">*</span></label>
                                                <input type="text" class="form-control" name="so_CMND" id="so_CMND" maxlength="12" placeholder="Số CMND/Thẻ CCCD" @if(isset($inforKhachHang))value="{{$inforKhachHang->so_CMND}}"@endif>
                                                <div class="error error-so_CMND"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Nơi cấp CMND <span class="obligatory">*</span></label>
                                                <input type="text" class="form-control" name="noi_cap_CMND"  placeholder="Nơi cấp CMND"  @if(isset($inforKhachHang))value="{{$inforKhachHang->noi_cap_CMND}}" @endif>
                                                <div class="error error-noi_cap_CMND"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Nơi cư trú <span class="obligatory">*</span></label>
                                                <input type="text" class="form-control" name="noi_cu_tru"  placeholder="Nơi cư trú"  @if(isset($inforKhachHang))value="{{$inforKhachHang->noi_cu_tru}}"@endif>
                                                <div class="error error-noi_cu_tru"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Ngày cấp <span class="obligatory">*</span></label>
                                                <input type="date" class="form-control" name="cap_ngay"  placeholder="Ngày cấp"  @if(isset($inforKhachHang))value="{{$inforKhachHang->cap_ngay}}"@endif>
                                                <div class="error error-cap_ngay"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="error error-khong-co-du-lieu"></div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Ảnh giấy tờ <span class="obligatory">*</span></label>
                                                <input type="file" multiple id="gallery-photo-add-mua-xe" class="form-control" name="files_anh_giay_to[]">
                                            </div>
                                        </div>
                                    </div>
                                    <div><input type="text" name="ma_khach_hang" style="display: none;"></div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="gallery" width="100%" style="margin-top: 5px;border: 1px solid #f1f1f1;min-height: 200px;">
                                                @foreach($inforXe[0]['anh'] as $anh)
                                                    @if($anh['iMa_loai_anh'] == 3)
                                                        <div class="themanh">
                                                            <image src="{{ asset('uploads/images/'.$anh['duong_dan']) }}" class="anh"  width="150px" height="150px"/>
                                                            @if($inforXe[0]['iMa_trang_thai'] != 3)
                                                                <button type="button" class="btn btn-danger xoa-anh" title = "Xóa ảnh"
                                                                        data-url = "{{route('quanlyxe.xoaanh',$anh['id'])}}">
                                                                    <i class="fas fa-trash-alt" aria-hidden="true"></i>
                                                                </button>
                                                            @endif
                                                        </div>
                                                    @endif
                                                @endforeach
                                            </div>
                                            <div class="error error-files_anh_giay_to">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group" style="padding-top: 10px;">
                                                @if(empty($inforXe[0]['iMa_khach_hang_mua_xe']))
                                                    <button type="button" id="them-khach-hang-mua-xe" data-url="{{route("quanlykhachhang.luuGiaDichBan",$id)}}" class="btn btn-primary" >Lưu thông tin</button>
                                                @else
                                                    <a href="{{route('quanlyxe.inthongtinbanxe',$id)}}"  class="btn btn-primary"  target="_blank">In thông tin</a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        label{
            font-weight: bold;
            font-size: 13px;
            font-family-sans-serif: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        }
    </style>
    <script>
        $(document).ready(function() {
            $('#so_CMND').keyup(function () {
                this.value = this.value.replace(/[^0-9\.]/g,'');
            });
            $('#so_dien_thoai').keyup(function () {
                this.value = this.value.replace(/[^0-9\.]/g,'');
            });
        })
        function formatCurrency(number){
            var n = number.split('').reverse().join("");
            var n2 = n.replace(/\d\d\d(?!$)/g, "$&,");
            return  n2.split('').reverse().join('') + 'VNĐ';
        }
        $("#gia_ban").on('input', function(e){
            $(this).val(formatCurrency(this.value.replace(/[,VNĐ]/g,'')));
        }).on('keypress',function(e){
            if(!$.isNumeric(String.fromCharCode(e.which))) e.preventDefault();
        }).on('paste', function(e){
            var cb = e.originalEvent.clipboardData || window.clipboardData;
            if(!$.isNumeric(cb.getData('text'))) e.preventDefault();
        });
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script type="module" src="{{asset('js/admin/giao_dich_mua_xe.js')}}"></script>
@endsection
