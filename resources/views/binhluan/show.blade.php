
<form id="form-show-binh-luan">
    <div class="modal-body">
        <div class="form-group">
            <label for="">Bình luận khách hàng</label>
            <textarea rows="4"  class="form-control">
              {{$binhluan->noi_dung}}
            </textarea>
            <div class="error error-ten_dong_xe"></div>
        </div>
        <div class="form-group">
            <label for="">Trả lời</label>
            <textarea rows="9" class="form-control" name="binh_luan_tra_loi">
                {{$binhluan->binh_luan_tra_loi}}
            </textarea>
            <div class="error error-ten_dong_xe"></div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
        <button type="button" class="btn btn-primary update-binh-luan"
                data-url="{{route('quanlybinhluan.update',$binhluan->id)}}">Lưu</button>
    </div>
</form>
