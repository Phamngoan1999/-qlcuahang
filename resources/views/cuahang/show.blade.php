<form id="form-update-cua-hang">
    <div class="modal-body">
        <div class="form-group">
            <label for="">Tên cửa hàng <span class="obligatory">*</span></label>
            <input type="text" class="form-control" name="name"  placeholder="Tên cửa hàng" value="{{$cuahang->ten_cua_hang}}">
            <div class="error error-name"></div>
        </div>
        <div class="form-group">
            <label for="">Số điện thoại <span class="obligatory">*</span></label>
            <input type="text" class="form-control" name="email"  placeholder="Số điện thoại" value="{{$cuahang->so_dien_thoai}}">
            <div class="error error-email"></div>
        </div>
        <div class="form-group">
            <label for="">Địa chỉ cửa hàng <span class="obligatory">*</span></label>
            <input type="text" class="form-control" name="diachi"  placeholder="Địa chỉ" value="{{$cuahang->dia_chi_cua_hang}}">
            <div class="error error-diachi"></div>
        </div>
        <div class="form-group">
            <label for="">Mật khẩu</label>
            <input type="password" class="form-control" name="matkhau"  placeholder="Mật khẩu">
            <div class="error error-matkhau"></div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary update-cua-hang" data-url="{{route("quanlytaikhoan.update",$cuahang->id)}}" >Update</button>
    </div>
</form>
