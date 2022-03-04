

<div class="modal-body">
    <div class="form-group">
        <label for="">Tên loại xe</label>
        <input type="text" class="form-control" name="loaixeUpdate" value="{{$loaiXe->ten_loai_xe}}" placeholder="Loại xe">
    </div>
</div>
<div class="error-reset error-category_ids">
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
        <button type="button" class="btn btn-primary edit-loai-xe" data-url="{{route('danhmuc.edit-loai-xe',$loaiXe->id)}}">Save</button>
    </div>
</div>
