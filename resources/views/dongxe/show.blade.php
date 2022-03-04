
<form id="form-update-dong-xe-post">
    <div class="modal-body">
        <div class="form-group">
            <label for="">Tên dòng xe</label>
            <input type="text" class="form-control" name="ten_dong_xe"  placeholder="Dòng xe" value="{{$dongXe->ten_dong_xe}}">
            <div class="error error-ten_dong_xe"></div>
        </div>
        <div class="form-group">
            <label for="">Tên hãng xe</label>
            <div class="row" style="padding: 10px 15px;">
                <select class="js-example-basic-single" name="iMa_hang_xe" style="width: 440px!important;">
                    <option value="">Hãng xe</option>
                    @foreach($hangXeAll as $iterm)
                        <option value="{{ $iterm->id }}" {{ $dongXe->iMa_hang_xe == $iterm->id ? 'selected' : ''}}>{{ $iterm->ten_hang_xe }}</option>
                    @endforeach
                </select>
            </div>
            <div class="error error-iMa_hang_xe"></div>
        </div>
        <div class="form-group">
            <label for="">Loại xe</label>
            <div class="row" style="padding: 10px 15px;">
                <select class="js-example-basic-single" name="iMa_loai_xe" style="width: 440px!important;">
                    <option value="">Loại xe</option>
                    @foreach($loaiXeAll as $iterm)
                        <option value="{{ $iterm->id }}" {{ $dongXe->iMa_loai_xe == $iterm->id ? 'selected' : ''}}>{{ $iterm->ten_loai_xe }}</option>
                    @endforeach
                </select>
            </div>
            <div class="error error-iMa_loai_xe"></div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
        <button type="button" class="btn btn-primary update-dong-xe" data-url="{{route('danhmuc.update-dong-xe',$dongXe->id)}}">Save</button>
    </div>
</form>
