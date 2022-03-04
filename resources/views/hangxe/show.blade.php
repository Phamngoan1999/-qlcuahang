

    <div class="modal-body">
        <div class="form-group">
            <label for="">Tên hãng xe</label>
            <input type="text" class="form-control" name="hangxe" value="{{$hangXe->ten_hang_xe}}" placeholder="Hãng xe">
        </div>
    </div>
    @error('hangxe')
    <p>{{$message}}</p>
    @enderror
    <div class="error-reset error-category_ids">
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
            <button type="button" class="btn btn-primary edit-hang-xe" data-url="{{route('danhmuc.edit-hang-xe',$hangXe->id)}}">Save</button>
        </div>
    </div>
