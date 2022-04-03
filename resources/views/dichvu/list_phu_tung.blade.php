
    @foreach($dich_vu as $iterm)
        <div class="row them-phu-tung" >
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Phụ tùng</label>
                    <input type="text" class="form-control" name="phutung[]"  placeholder="Phụ tùng" value="{{$iterm['ten_phu_tung']}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Đơn giá</label>
                    <input type="text" class="form-control"  placeholder="đơn giá[]" value="{{$iterm['don_gia']}}">
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label for="" style="visibility: hidden;">Phụ tùng</label>
                    <input type="text" class="form-control" style="display: none;" name="idPhuTung[]"  placeholder="Phụ tùng" value="{{$iterm['id']}}">
                    <button type="button" class="btn btn-danger xoa-phu-tung-confirm" ><i class="fas fa-trash-alt"></i></button>
                </div>
            </div>
        </div>
    @endforeach
