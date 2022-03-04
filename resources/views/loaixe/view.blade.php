
<div class="modal fade" id="show-loai-xe-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Update loại xe</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="form-show-loai-xe">

            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-add-loai-xe" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Thêm Loại xe</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="form-add-loai-xe">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Tên loai xe</label>
                        <input type="text" class="form-control" name="loaixe"  placeholder="Loại xe">
                    </div>
                    <div class="error error-loaixe"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                    <button type="button" class="btn btn-primary" id="add-loai-xe" data-url="{{route('danhmuc.create-loai-xe')}}">Lưu</button>
                </div>
            </form>
        </div>
    </div>
</div>
