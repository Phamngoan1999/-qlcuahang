
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
                                <input type="text" class="form-control" name="gia_ban" id="gia_ban" placeholder="Giá mua"  value="{{ currency_format($inforXe[0]['gia_ban'])}}" disabled>
                                <div class="error error-gia_ban"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="padding-top: 10px;">
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
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Ảnh giấy tờ <span class="obligatory">*</span></label>
                                <input type="file" multiple id="gallery-photo-add-mua-xe" class="form-control" name="files_anh_giay_to[]" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="gallery" width="100%" style="margin-top: 5px;border: 1px solid #f1f1f1;min-height: 200px;">
                                @foreach($inforXe[0]['anh'] as $anh)
                                    @if($anh['iMa_loai_anh'] == 3)
                                        <div class="themanh">
                                            <image src="{{ asset('uploads/images/'.$anh['duong_dan']) }}" class="anh"  width="150px" height="150px"/>
                                        </div>
                                    @endif
                                @endforeach</div>
                            <div class="error error-files_anh_giay_to">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group" style="padding-top: 10px;"><a href="{{route('quanlyxe.inthongtinbanxe',$id)}}"  class="btn btn-primary" target="_blank">In thông tin</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
