@extends('header.quanly')
@section('content')
    <link rel="stylesheet" href="{{asset('css/checkbox.css')}}">
    <style>
        .themanh{
            width: 150px;
            height: 150px;
            border: 1px solid #f1f1f1;
            padding: 5px;
            margin-right: 5px;
            display: inline-block;
            position: relative;
        }
        .error{
            padding: 5px 4px 5px 0px!important;
        }
    </style>
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Thêm giao dịch khách hàng mua xe </h4>
                        <form method="POST" action="" enctype="multipart/form-data" id="form-them-xe">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Số loại <span class="obligatory">*</span></label>
                                        <input type="text" class="form-control" name="so_loai"  placeholder="Số loại" value="{{$inforXe[0]['so_loai']}}">
                                        <div class="error error-so_loai"></div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Màu sơn <span class="obligatory">*</span></label>
                                        <input type="text" class="form-control" name="mau_son"  placeholder="Màu sơn" value="{{$inforXe[0]['mau_son']}}">
                                        <div class="error error-mau_son"></div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Dung tích <span class="obligatory">*</span></label>
                                        <input type="text" class="form-control" name="dung_tich"  placeholder="Dung tích"  value="{{$inforXe[0]['dung_tich']}}">
                                        <div class="error error-dung_tich"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Biển số <span class="obligatory">*</span></label>
                                        <input type="text" class="form-control" name="bien_so"  placeholder="Biển số" value="{{$inforXe[0]['bien_so']}}">
                                        <div class="error error-bien_so"></div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Đăng ký tại <span class="obligatory">*</span></label>
                                        <input type="text" class="form-control" name="dang_ky_tai"  placeholder="Đăng ký tại" value="{{$inforXe[0]['dang_ky_tai']}}">
                                        <div class="error error-dang_ky_tai"></div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Số máy <span class="obligatory">*</span></label>
                                        <input type="text" class="form-control" name="so_may"  placeholder="Số máy" value="{{$inforXe[0]['so_may']}}">
                                        <div class="error error-so_may"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Số khung <span class="obligatory">*</span></label>
                                        <input type="text" class="form-control" name="so_khung"  placeholder="Số khung"  value="{{$inforXe[0]['so_khung']}}">
                                        <div class="error error-so_khung"></div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="">Dòng xe <span class="obligatory">*</span></label>
                                        <select class="form-control js-example-basic-single"  name="iMa_dong_xe">
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
                                        <label for="">Giá mua <span class="obligatory">*</span></label>
                                        <input type="text" class="form-control" name="gia_mua" id="gia_mua" placeholder="Giá mua"  value="{{$inforXe[0]['gia_mua']}}">
                                        <div class="error error-gia_mua"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Giá đăng lên trang web</label>
                                        <input type="text" class="form-control" name="gia_dang_web"  placeholder="Giá đăng trên web" value="{{$inforXe[0]['gia_dang_web']}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Ảnh giấy tờ <span class="obligatory">*</span></label>
                                        <input type="file" multiple id="gallery-photo-add" class="form-control" name="files_anh_giay_to[]">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="gallery" width="100%" style="margin-top: 5px;border: 1px solid #f1f1f1;height: 200px;">
                                        @foreach($inforXe[0]['anh'] as $anh)
                                            @if($anh['iMa_loai_anh'] == 1)
                                                <img src="{{ asset('uploads/images/'.$anh['duong_dan']) }}" >
                                            @endif
                                        @endforeach</div>
                                    <div class="error error-files_anh_giay_to">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Ảnh đăng trên web</label>
                                        <input type="file"  id="gallery-photo-add-web" class="form-control" name="files_anh_dang_web[]" multiple>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="image_preview" width="100%" style="margin-top: 5px;border: 1px solid #f1f1f1;height: 200px;">
                                        @foreach($inforXe[0]['anh'] as $anh)
                                            @if($anh['iMa_loai_anh'] == 2)
                                                <img src="{{ asset('uploads/images/'.$anh['duong_dan']) }}" >
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="padding-top: 10px;">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Khách hàng <span class="obligatory">*</span></label>
                                        <input type="text" class="form-control" name="ho_ten"  placeholder="Họ tên khách hàng">
                                        <div class="error error-ho_ten"></div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Số điện thoại <span class="obligatory">*</span></label>
                                        <input type="text" class="form-control" name="so_dien_thoai" id="so_dien_thoai" placeholder="Số điện thoại" >
                                        <div class="error error-so_dien_thoai"></div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="">Năm sinh <span class="obligatory">*</span></label>
                                        <select class="form-control  js-example-basic-single" placeholder="Nhân viên" name="nam_sinh" >
                                            <option value="">Chọn năm sinh</option>
                                            @for ($i = $namhientai; $i >1900; $i--)
                                                <option value="{{$i}}">{{$i}}</option>
                                            @endfor
                                        </select>
                                        <div class="error error-nam_sinh"></div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Số CMND <span class="obligatory">*</span></label>
                                        <input type="text" class="form-control" name="so_CMND" id="so_CMND"  placeholder="Số CMND/Thẻ CCCD" >
                                        <div class="error error-so_CMND"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Nơi cấp CMND <span class="obligatory">*</span></label>
                                        <input type="text" class="form-control" name="noi_cap_CMND"  placeholder="Nơi cấp CMND">
                                        <div class="error error-noi_cap_CMND"></div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Nơi cư trú <span class="obligatory">*</span></label>
                                        <input type="text" class="form-control" name="noi_cu_tru"  placeholder="Nơi cư trú" >
                                        <div class="error error-noi_cu_tru"></div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Ngày cấp <span class="obligatory">*</span></label>
                                        <input type="date" class="form-control" name="cap_ngay"  placeholder="Ngày cấp">
                                        <div class="error error-cap_ngay"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group" style="padding-top: 10px;">
                                        <button type="button" id="them-khach-hang-mua-xe" data-url="{{route("quanlykhachhang.themxeban",$id)}}" class="btn btn-primary" >Lưu thông tin</button>
                                    </div>
                                </div>
                            </div>
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
            $('#gia_mua').keyup(function () {
                this.value = this.value.replace(/[^0-9\.]/g,'');
            });
            $('#so_dien_thoai').keyup(function () {
                this.value = this.value.replace(/[^0-9\.]/g,'');
            });
        })
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script type="module" src="{{asset('js/admin/giao_dich_mua_xe.js')}}"></script>
@endsection