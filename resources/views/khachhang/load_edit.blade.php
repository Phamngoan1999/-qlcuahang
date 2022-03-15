
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Thông tin khách hàng</h4>
                <form action="" id="form-update-khach-hang">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Khách hàng <span class="obligatory">*</span></label>
                                <input type="text" class="form-control" name="ho_ten"  placeholder="Họ tên khách hàng" value="{{$xe->khachhang->ho_ten}}">
                                <div class="error error-ho_ten"></div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Số điện thoại <span class="obligatory">*</span></label>
                                <input type="text" class="form-control" name="so_dien_thoai" id="so_dien_thoai" maxlength="10" placeholder="Số điện thoại"  value="{{$xe->khachhang->so_dien_thoai}}">
                                <div class="error error-so_dien_thoai"></div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="">Năm sinh  <span class="obligatory">*</span></label>
                                <select class="form-control  js-example-basic-single" placeholder="Nhân viên" name="nam_sinh" >
                                    <option value="">Chọn năm sinh</option>
                                    @for ($i = $namhientai; $i >1900; $i--)
                                    <option value="{{$i}}" @if($xe->khachhang->nam_sinh == $i) selected @endif>{{$i}}</option>
                                    @endfor
                                </select>
                                <div class="error error-nam_sinh"></div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Số CMND <span class="obligatory">*</span></label>
                                <input type="text" class="form-control" name="so_CMND" id="so_CMND" axlength="12" placeholder="Số CMND/Thẻ CCCD"  value="{{$xe->khachhang->so_CMND}}">
                                <div class="error error-so_CMND"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Nơi cấp CMND  <span class="obligatory">*</span></label>
                                <input type="text" class="form-control" name="noi_cap_CMND"  placeholder="Nơi cấp CMND"  value="{{$xe->khachhang->noi_cap_CMND}}">
                                <div class="error error-noi_cap_CMND"></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Nơi cư trú <span class="obligatory">*</span></label>
                                <input type="text" class="form-control" name="noi_cu_tru"  placeholder="Nơi cư trú"  value="{{$xe->khachhang->noi_cu_tru}}">
                                <div class="error error-noi_cu_tru"></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Ngày cấp <span class="obligatory">*</span></label>
                                <input type="date" class="form-control" name="cap_ngay"  placeholder="Ngày cấp"  value="{{$xe->khachhang->cap_ngay}}">
                                <div class="error error-cap_ngay"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Số loại <span class="obligatory">*</span></label>
                                <input type="text" class="form-control" name="so_loai"  placeholder="Số loại" value="{{$xe->so_loai}}">
                                <div class="error error-so_loai"></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Màu sơn <span class="obligatory">*</span></label>
                                <input type="text" class="form-control" name="mau_son"  placeholder="Màu sơn" value="{{$xe->mau_son}}">
                                <div class="error error-mau_son"></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Dung tích <span class="obligatory">*</span></label>
                                <input type="text" class="form-control" name="dung_tich"  placeholder="Dung tích"  value="{{$xe->dung_tich}}">
                                <div class="error error-dung_tich"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Biển số <span class="obligatory">*</span></label>
                                <input type="text" class="form-control" name="bien_so"  placeholder="Biển số"  value="{{$xe->bien_so}}">
                                <div class="error error-bien_so"></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Đăng ký tại <span class="obligatory">*</span></label>
                                <input type="text" class="form-control" name="dang_ky_tai"  placeholder="Đăng ký tại"  value="{{$xe->dang_ky_tai}}">
                                <div class="error error-dang_ky_tai"></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Số máy <span class="obligatory">*</span></label>
                                <input type="text" class="form-control" name="so_may"  placeholder="Số máy"  value="{{$xe->so_may}}">
                                <div class="error error-so_may"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Số khung <span class="obligatory">*</span></label>
                                <input type="text" class="form-control" name="so_khung"  placeholder="Số khung" value="{{$xe->so_khung}}">
                                <div class="error error-so_khung"></div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="">Dòng xe <span class="obligatory">*</span></label>
                                <select class="form-control js-example-basic-single"  name="iMa_dong_xe">
                                    <option value="">Chọn Dòng xe</option>
                                    @foreach($dongXe as $dongxe)
                                        <option value="{{$dongxe->id}}" @if($dongxe->id == $xe->iMa_dong_xe) selected @endif>{{$dongxe->ten_dong_xe}}</option>
                                    @endforeach
                                </select>
                                <div class="error error-iMa_dong_xe"></div>
                            </div>
                        </div>
                        <div class="col-md-2" >
                            <div class="form-group">
                                <div class="row" style="padding: 10px;">
                                    <label>
                                        <input type="checkbox" name="bao_hiem_xe" class="option-input checkbox" @if($xe->bao_hiem_xe == 'checked') checked @endif/>
                                        Bảo hiểm
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Giá mua <span class="obligatory">*</span></label>
                                <input type="text" class="form-control" name="gia_mua" id="gia_mua" placeholder="Giá mua"  value="{{ currency_format($xe->gia_mua)}}">
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
                                @if(isset($xe))
                                    @foreach($xe->anh as $iterm)
                                        @if($iterm->iMa_loai_anh == 2||$iterm->iMa_loai_anh == 3)
                                            <div class="themanh">
                                                <image src="{{ asset('uploads/images/'.$iterm->duong_dan) }}" class="anh"  width="150px" height="150px"/>
                                                <button type="button" class="btn btn-danger xoa-anh" title = "Xóa ảnh"
                                                        data-url = "{{route('quanlyxe.xoaanh',$iterm->id)}}">
                                                    <i class="fas fa-trash-alt" aria-hidden="true"></i>
                                                </button>
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
                                <button type="button" id="update-thong-tin-khach-hang" data-url="{{route('quanlyxe.updatethongtinxe',$xe->id)}}" class="btn btn-primary" >Update thông tin</button>
                                <button type="button" id="in-thong-tin-xe-ban" data-url="{{route('quanlyxe.inthongtin',$xe->id)}}" class="btn btn-primary" >In thông tin</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
