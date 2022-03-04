@extends('header.quanly')
@section('content')
    <link rel="stylesheet" href="{{asset('css/checkbox.css')}}">
    <style>
        .themanh{
            width: 150px;
            height: 150px;
            border: 1px solid #f1f1f1;
            margin: 5px;
            display: inline-block;
            position: relative;
        }
        .anh{
            padding: 5px;
        }
        .xoa-anh{
            position: absolute;
            top: 5px;
            right: 5px;
        }
        .xoa-anh-web{
            position: absolute;
            top: 5px;
            right: 5px;
        }
        .error{
            padding: 5px 4px 5px 0px!important;
        }
        .ikon_xoa{
            position: absolute;
            top: 5px;
            right: 5px;
        }
        label{
            font-weight: bold;
            font-size: 13px;
            font-family-sans-serif: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        }

    </style>
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Đăng thông tin xe lên trang web</h4>
                        <form method="POST" id="form-dang-thong-tin-xe-web">
                            @csrf
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
                                        <input type="text" class="form-control" name="mau_son"  placeholder="Màu sơn" value="{{$thongTinXe[0]['mau_son']}}">
                                        <div class="error error-mau_son"></div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Dung tích <span class="obligatory">*</span></label>
                                        <input type="text" class="form-control" name="dung_tich"  placeholder="Dung tích"  value="{{$thongTinXe[0]['dung_tich']}}">
                                        <div class="error error-dung_tich"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Biển số <span class="obligatory">*</span></label>
                                        <input type="text" class="form-control" name="bien_so"  placeholder="Biển số"  value="{{$thongTinXe[0]['bien_so']}}">
                                        <div class="error error-bien_so"></div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Đăng ký tại <span class="obligatory">*</span></label>
                                        <input type="text" class="form-control" name="dang_ky_tai"  placeholder="Đăng ký tại"  value="{{$thongTinXe[0]['dang_ky_tai']}}">
                                        <div class="error error-dang_ky_tai"></div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Số máy <span class="obligatory">*</span></label>
                                        <input type="text" class="form-control" name="so_may"  placeholder="Số máy"  value="{{$thongTinXe[0]['so_may']}}">
                                        <div class="error error-so_may"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Số khung <span class="obligatory">*</span></label>
                                        <input type="text" class="form-control" name="so_khung"  placeholder="Số khung" value="{{$thongTinXe[0]['so_khung']}}">
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
                                        <input type="text" class="form-control" name="gia_mua" id="gia_mua" placeholder="Giá mua"  value="{{$thongTinXe[0]['gia_mua']}}">
                                        <div class="error error-gia_mua"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Giá đăng lên trang web</label>
                                        <input type="text" class="form-control" name="gia_dang_web"  placeholder="Giá đăng trên web"  value="{{$thongTinXe[0]['gia_dang_web']}}">
                                        <div class="error error-gia_dang_web"></div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Năm đăng ký</label>
                                        <input type="text" class="form-control" name="nam_dang_ky"  placeholder="Năm đăng ký"  value="{{$thongTinXe[0]['gia_dang_web']}}">
                                        <div class="error error-nam_dang_ky"></div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Số km đã đi</label>
                                        <input type="text" class="form-control" name="so_km_di"  placeholder="Số km đã đi"  value="{{$thongTinXe[0]['gia_dang_web']}}">
                                        <div class="error error-so_km_di"></div>
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
                                        @if(isset($thongtinAnh))
                                            @foreach($thongtinAnh as $anh)
                                                @if($anh['iMa_loai_anh'] == 1)
                                                    <div class="themanh">
                                                        <image src="{{ asset('uploads/images/'.$anh['duong_dan']) }}" class="anh"  width="150px" height="150px"/>
                                                        <button type="button" class="btn btn-danger xoa-anh-web" title = "Xóa ảnh"
                                                                data-url = "{{route('quanlyxe.xoaanh',$anh['id'])}}">
                                                            <i class="fas fa-trash-alt" aria-hidden="true"></i>
                                                        </button>
                                                    </div>
                                                @endif
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group" style="padding-top: 10px;">
                                        <label for="">Ghi chú</label>
                                        <textarea class="form-control" rows="9">
                                        </textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group button-hide" style="padding-top: 10px;">
                                        @if($thongTinXe[0]['iMa_trang_thai'] == 1)
                                        <button type="button" id="update-thong-tin" data-url="{{route('quanlyxe.dangthongtinxeweb',$thongTinXe[0]['id'])}}" class="btn btn-primary" >Đăng thông tin xe</button>
                                        @elseif($thongTinXe[0]['iMa_trang_thai'] == 2)
                                        <button type="button" id="update-thong-tin" data-url="{{route('quanlyxe.dangthongtinxeweb',$thongTinXe[0]['id'])}}" class="btn btn-primary" >Update thông tin xe</button>

                                        <a href="{{route('trangchitiet',$thongTinXe[0]['id'])}}" class="btn btn-primary">Trang chi tiết xe</a>
                                        @endif
                                    </div>
                                    <div class="group-button" style="display: none !important;">
                                        <button type="button" id="update-thong-tin" data-url="{{route('quanlyxe.dangthongtinxeweb',$thongTinXe[0]['id'])}}" class="btn btn-primary" >Update thông tin xe</button>

                                        <a href="{{route('trangchitiet',$thongTinXe[0]['id'])}}" class="btn btn-primary">Trang chi tiết xe</a>
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
    <script type="module" src="{{asset('js/admin/dang_thong_tin.js')}}"></script>
@endsection
