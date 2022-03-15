    @if(!isset($inforKhachHang))
    <div class="error">Không có dữ liệu</div>
    @endif
    <div class="row" style="padding-top: 20px;">
        <div class="col-md-4">
            <div class="form-group">
                <label for="">Khách hàng <span class="obligatory">*</span></label>
                <input type="text" class="form-control" name="ho_ten"  placeholder="Họ tên khách hàng" @if(isset($inforKhachHang))value="{{$inforKhachHang->ho_ten}}"@endif>
                <div class="error error-ho_ten"></div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="">Số điện thoại <span class="obligatory">*</span></label>
                @if(isset($inforKhachHang))
                    <input type="text" class="form-control" name="so_dien_thoai" id="so_dien_thoai" maxlength="10" placeholder="Số điện thoại" value="{{$inforKhachHang->so_dien_thoai}}" disabled>
                    <input type="text" class="form-control" name="so_dien_thoai" maxlength="10" placeholder="Số CMND/Thẻ CCCD" value="{{$inforKhachHang->so_dien_thoai}}" style="display: none;">
                @else
                    <input type="text" class="form-control" name="so_dien_thoai" id="so_dien_thoai" maxlength="10" placeholder="Số điện thoại" value="">
                @endif
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
                @if(isset($inforKhachHang))
                <input type="text" class="form-control" name="so_CMND" id="so_CMND" maxlength="12" placeholder="Số CMND/Thẻ CCCD" value="{{$inforKhachHang->so_CMND}}" disabled>
                <input type="text" class="form-control" name="so_CMND" id="so_CMND" maxlength="12" placeholder="Số CMND/Thẻ CCCD" value="{{$inforKhachHang->so_CMND}}" style="display: none;">
                @else
                    <input type="text" class="form-control" name="so_CMND" id="so_CMND" maxlength="12" placeholder="Số CMND/Thẻ CCCD" value="" >
                @endif
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
                <input type="file" multiple id="gallery-photo-add-mua-xe" class="form-control" name="files_anh_giay_to[]" >
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="gallery" width="100%" style="margin-top: 5px;border: 1px solid #f1f1f1;min-height: 200px;"></div>
            <div class="error error-files_anh_giay_to">
            </div>
        </div>
    </div>
    @if(isset($inforKhachHang))
        <div><input type="text" name="ma_khach_hang" style="display: none;" value="{{$inforKhachHang->id}}"></div>
    @endif
    <div class="row">
        <div class="col-md-12">
            <div class="form-group" style="padding-top: 10px;">
                @if(empty($inforXe[0]['iMa_khach_hang_mua_xe']))
                    <button type="button" id="them-khach-hang-mua-xe" data-url="{{route("quanlykhachhang.luuGiaDichBan_dacothongtinkhachhang",$idXe)}}" class="btn btn-primary" >Lưu thông tin</button>
                @endif
                <a href="{{route('quanlyxe.inthongtinbanxe',$idXe)}}"  class="btn btn-primary">In thông tin</a>
            </div>
        </div>
    </div>
