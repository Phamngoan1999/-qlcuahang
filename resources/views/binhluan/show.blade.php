
<form id="form-show-binh-luan">
    <div class="modal-body">
        <div class="form-group">
            <label for="" class="label">Bình luận khách hàng</label>
            <textarea rows="4"  class="form-control" disabled>
              {{$binhluan->noi_dung}}
            </textarea>
        </div>
        <div class="form-group">
            <label for="" class="label">Trả lời</label>
            <textarea rows="4" class="form-control binh_luan_tra_loi" name="binh_luan_tra_loi">
                {{$binhluan->binh_luan_tra_loi}}
            </textarea>
            <div class="error error-binh_luan_tra_loi"></div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary dong-modal">Đóng</button>
        <button type="button" class="btn btn-primary update-binh-luan"
                data-url="{{route('quanlybinhluan.update',$binhluan->id)}}">Lưu</button>
    </div>
</form>
