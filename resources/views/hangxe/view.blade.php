
<div class="modal fade" id="show-hang-xe-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Thêm hãng xe</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="form-show-hang-xe">

            </form>
        </div>
    </div>
</div>


<div class="modal fade" id="add-hang-xe-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Thêm hãng xe</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="form-add-hang-xe">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Tên hãng xe</label>
                        <input type="text" class="form-control" name="hangxe"  placeholder="Hãng xe" id="hangxe">
                    </div>
                    <div class="error error-hangxe"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                    <button type="button" class="btn btn-primary" id="add-hang-xe" data-url="{{route('danhmuc.create-hang-xe')}}">Lưu</button>
                </div>
            </form>
        </div>
    </div>
</div>
