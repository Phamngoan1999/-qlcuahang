@extends('header.quanly')
@section('content')
    <link rel="stylesheet" href="{{asset('css/checkbox.css')}}">
    <link rel="stylesheet" href="{{asset('css/dangthongtin.css')}}">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Đăng thông tin xe lên trang web</h4>
                        <form method="POST" id="form-dang-thong-tin-xe-web">
                            @csrf
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Dung tích <span class="obligatory">*</span></label>
                                        <input type="text" class="form-control" name="dung_tich" id="dung_tich"  placeholder="Dung tích" value="{{$thongTinXe[0]['dung_tich']}}">
                                        <div class="error error-dung_tich"></div>
                                    </div>
                                </div>
                                <div class="col-md-3">
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
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Hãng xe<span class="obligatory">*</span></label>
                                        @foreach($hangXe as $hx)
                                            @if($thongTinXe[0]['dongxe']['iMa_hang_xe'] == $hx->id)
                                                <input type="text" class="form-control" placeholder="Dòng xe"  value="{{$hx->ten_hang_xe}}" disabled>
                                            @endif
                                        @endforeach<div class="error error-gia_mua"></div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Loại xe<span class="obligatory">*</span></label>
                                        @foreach($loaiXe as $lx)
                                            @if($thongTinXe[0]['dongxe']['iMa_loai_xe'] == $lx->id)
                                               <input type="text" class="form-control"  placeholder="Loại xe" maxlength="12" value=" {{$lx->ten_loai_xe}}" disabled>
                                            @endif
                                        @endforeach
                                        <div class="error error-gia_mua"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Giá đăng lên trang web <span class="obligatory">*</span></label>
                                        <input type="text" class="form-control" name="gia_dang_web" id="gia_dang_web" placeholder="Giá đăng trên web"  maxlength="12" value="{{$thongTinXe[0]['gia_dang_web']}}">
                                        <div class="error error-gia_dang_web"></div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Năm đăng ký <span class="obligatory">*</span></label>
                                        <select class="form-control  js-example-basic-single" placeholder="Nhân viên" name="nam_dang_ky" >
                                            <option value="">Chọn đăng ký</option>
                                            @for ($i = $namhientai; $i >1900; $i--)
                                                <option value="{{$i}}" @if($thongTinXe[0]['nam_dang_ky']==$i) selected @endif>{{$i}}</option>
                                            @endfor
                                        </select>
                                        <div class="error error-nam_dang_ky"></div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Số km đã đi <span class="obligatory">*</span></label>
                                        <input type="text" class="form-control" name="so_km_di"  placeholder="Số km đã đi" id="so_km_di" value="{{$thongTinXe[0]['so_km_da_di']}}">
                                        <div class="error error-so_km_di"></div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Xe thuộc khoảng giá </label>
                                        <select class="js-example-basic-single w-100" name="khoang_gia">
                                            <option value="Từ 10Đ - 20Đ" @if($thongTinXe[0]['khoang_gia'] == "Từ 10Đ - 20Đ") selected @endif>Từ 10Đ - 20Đ</option>
                                            <option value="Dưới 10Đ" @if($thongTinXe[0]['khoang_gia'] == "Dưới 10Đ") selected @endif>Dưới 10Đ</option>
                                            <option value="Từ 20Đ - 30Đ" @if($thongTinXe[0]['khoang_gia'] == "Từ 20Đ - 30Đ") selected @endif>Từ 20Đ - 30Đ</option>
                                            <option value="Trên 30Đ" @if($thongTinXe[0]['khoang_gia'] == "Trên 30Đ") selected @endif>Trên 30Đ</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Ảnh avatar xe</label>
                                    </div>
                                </div>
                                <div class="image_avatar">
                                    <p style="display: none;">{{$stt = 0}}</p>
                                    @if(isset($thongtinAnh))
                                        @foreach($thongtinAnh as $anh)
                                            @if($anh['iMa_loai_anh'] == 4)
                                                <img src="{{ asset('uploads/images/'.$anh['duong_dan']) }}" alt="" width="100%" height="100%" id="thumbnail">
                                                <input type="file"  id="gallery-photo-avata-web"  accept="image/*" value="{{$anh['duong_dan']}}" name="files_avata_xe">
                                                <p style="display: none;">{{$stt = 1}}</p>
                                            @endif
                                        @endforeach
                                    @endif
                                    @if($stt == 0)
                                        <img src="{{ asset('Logo/avarta.jpg') }}" alt="" width="100%" height="100%" id="thumbnail">
                                        <input type="file"  id="gallery-photo-avata-web"  accept="image/*" value="" name="files_avata_xe">
                                    @endif
                                    <i class="mdi mdi-cloud-upload ikon-upload"></i>
                                    <p class="tai-anh" >Tải ảnh avatar</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="error error-files_avata_xe"></div>
                                </div>
                            </div>
                            <div class="row" style="padding-top: 20px;">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Ảnh đăng trên web</label>
                                        <input type="file"  id="gallery-photo-add-web" accept="image/*" class="form-control" name="files_anh_dang_web[]" multiple>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="image_preview" width="100%" style="margin-top: 5px;border: 1px solid #f1f1f1;min-height: 200px;">
                                        @if(isset($thongtinAnh))
                                            @foreach($thongtinAnh as $anh)
                                                @if($anh['iMa_loai_anh'] == 1)
                                                    <div class="themanh">
                                                        <a href="{{ asset('uploads/images/'.$anh['duong_dan']) }}">
                                                            <image src="{{ asset('uploads/images/'.$anh['duong_dan']) }}" class="anh"  width="150px" height="150px"/>
                                                        </a>
                                                        <button type="button" class="btn btn-danger xoa-anh-web" title = "Xóa ảnh"
                                                                    data-url = "{{route('quanlyxe.xoaanhweb',$anh['id'])}}">
                                                            <i class="fas fa-trash-alt" aria-hidden="true"></i>
                                                        </button>
                                                    </div>
                                                @endif
                                            @endforeach
                                        @endif
                                    </div>
                                    <div class="error error-files_anh_dang_web"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group" style="padding-top: 10px;">
                                        <label for="">Ghi chú</label>
                                        <textarea class="form-control" rows="9" name="ghi_chu" >{{$thongTinXe[0]['ghi_chu']}}
                                        </textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group button-hide" style="padding-top: 10px;">
                                        @if($thongTinXe[0]['iMa_trang_thai'] == 1 || $thongTinXe[0]['iMa_trang_thai'] == 7 || $thongTinXe[0]['iMa_trang_thai'] == 5)
                                        <button type="button" id="update-thong-tin" data-url="{{route('quanlyxe.dangthongtinxeweb',$thongTinXe[0]['id'])}}" class="btn btn-primary" >Đăng thông tin xe</button>
                                        @elseif($thongTinXe[0]['iMa_trang_thai'] == 2)
                                        <button type="button" id="update-thong-tin-web" data-url="{{route('quanlyxe.updatetthongtinxeweb',$thongTinXe[0]['id'])}}" class="btn btn-primary" >Update thông tin xe</button>
                                        <button type="button" id="delete-thong-tin-web" data-url="{{route('quanlyxe.deletetthongtinxeweb',$thongTinXe[0]['id'])}}" class="btn btn-danger" >Gỡ thông tin xe trên web</button>
                                            <a href="{{route('trangchitiet',$thongTinXe[0]['id'])}}" class="btn btn-primary" target="_blank">Trang chi tiết xe</a>
                                        @elseif($thongTinXe[0]['iMa_trang_thai'] == 4)
                                            <button type="button" id="update-thong-tin-web" data-url="{{route('quanlyxe.updatetthongtinxeweb',$thongTinXe[0]['id'])}}" class="btn btn-primary" >Đăng lại thông tin xe</button>
                                        @endif
                                    </div>
                                    <div class="group-button" style="display: none !important;">
                                        <button type="button" id="update-thong-tin" data-url="{{route('quanlyxe.dangthongtinxeweb',$thongTinXe[0]['id'])}}" class="btn btn-primary" >Update thông tin xe</button>
                                        <a href="{{route('trangchitiet',$thongTinXe[0]['id'])}}" class="btn btn-primary" target="_blank">Trang chi tiết xe</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('js/jquery-2.1.1.min.js')}}"></script>
    <script type="module" src="{{asset('js/admin/dang_thong_tin.js')}}"></script>
@endsection
