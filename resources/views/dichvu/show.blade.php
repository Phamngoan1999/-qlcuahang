<form id="form-update-dich-vu-post">
    <div class="modal-body">
        <div class="form-group">
            <label for="">Tên dịch vụ</label>
            <input type="text" class="form-control ten_dich_vu" name="ten_dich_vu" placeholder="Dịch vụ" value="{{$dichvu->ten_dich_vu}}">
            <div class="error error-ten_dich_vu"></div>
        </div>
        <div class="form-group">
            <label for="">Giá dịch vụ</label>
            <input type="text" class="form-control gia_dich_vu" name="gia_dich_vu" placeholder="Giá dịch vụ" maxlength="14" value="{{$dichvu->gia_dich_vu}}">
            <div class="error error-gia_dich_vu"></div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
        <button type="button" class="btn btn-primary" id="update-dich-vu" data-url="{{route('quanlysuachua.update-dich-vu',$dichvu->id)}}">Update</button>
    </div>
</form>
