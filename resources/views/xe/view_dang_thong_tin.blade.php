<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Đăng thông tin xe lên trang web</h4>
                <form method="POST" id="form-dang-thong-tin-xe-web">
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Số loại <span class="obligatory">*</span></label>
                                <input type="text" class="form-control" name="so_loai"  placeholder="Số loại" value="{{$thongTinXe[0]['so_loai']}}">
                                <div class="error error-so_loai"></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Màu sơn <span class="obligatory">*</span></label>
                                <input type="text" class="form-control" name="mau_son"  placeholder="Màu sơn" value="{{$thongTinXe[0]['mau_son']}}">
                                <div class="error error-mau_son"></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Dung tích <span class="obligatory">*</span></label>
                                <input type="text" class="form-control" name="dung_tich"  placeholder="Dung tích"  value="{{$thongTinXe[0]['dung_tich']}}">
                                <div class="error error-dung_tich"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Biển số <span class="obligatory">*</span></label>
                                <input type="text" class="form-control" name="bien_so"  placeholder="Biển số"  value="{{$thongTinXe[0]['bien_so']}}">
                                <div class="error error-bien_so"></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Đăng ký tại <span class="obligatory">*</span></label>
                                <input type="text" class="form-control" name="dang_ky_tai"  placeholder="Đăng ký tại"  value="{{$thongTinXe[0]['dang_ky_tai']}}">
                                <div class="error error-dang_ky_tai"></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Số máy <span class="obligatory">*</span></label>
                                <input type="text" class="form-control" name="so_may"  placeholder="Số máy"  value="{{$thongTinXe[0]['so_may']}}">
                                <div class="error error-so_may"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Số khung <span class="obligatory">*</span></label>
                                <input type="text" class="form-control" name="so_khung"  placeholder="Số khung" value="{{$thongTinXe[0]['so_khung']}}">
                                <div class="error error-so_khung"></div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Dòng xe <span class="obligatory">*</span></label>
                                <select class="form-control js-example-basic-single"  name="iMa_dong_xe">
                                    <option value="">Chọn Dòng xe</option>
                                    @foreach($dongXe as $dongxe)
                                        <option value="{{$dongxe->id}}" @if($dongxe->id == $thongTinXe[0]['iMa_dong_xe']) selected @endif>{{$dongxe->ten_dong_xe}}</option>
                                    @endforeach
                                </select>
                                <div class="error error-iMa_dong_xe"></div>
                            </div>
                        </div>
                        <div class="col-md-2" >
                            <div class="form-group">
                                <div class="row" style="padding: 10px;">
                                    <label>
                                        <input type="checkbox" name="bao_hiem_xe" class="option-input checkbox" @if($thongTinXe[0]['bao_hiem_xe'] == 'checked') checked @endif/>
                                        Bảo hiểm
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="">Hãng xe<span class="obligatory">*</span></label>
                                @foreach($hangXe as $hx)
                                    @if($thongTinXe[0]['dongxe']['iMa_hang_xe'] == $hx->id)
                                        <input type="text" class="form-control" name="gia_mua" id="gia_mua" placeholder="Dòng xe"  value="{{$hx->ten_hang_xe}}" disabled>
                                    @endif
                                @endforeach<div class="error error-gia_mua"></div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="">Loại xe<span class="obligatory">*</span></label>
                                @foreach($loaiXe as $lx)
                                    @if($thongTinXe[0]['dongxe']['iMa_loai_xe'] == $lx->id)
                                        <input type="text" class="form-control" name="gia_mua" id="gia_mua" placeholder="Loại xe"  value=" {{$lx->ten_loai_xe}}" disabled>
                                    @endif
                                @endforeach

                                <div class="error error-gia_mua"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Giá đăng lên trang web<span class="obligatory">*</span></label>
                                <input type="text" class="form-control" name="gia_dang_web"  placeholder="Giá đăng trên web"  value="{{$thongTinXe[0]['gia_dang_web']}}">
                                <div class="error error-gia_dang_web"></div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Năm đăng ký<span class="obligatory">*</span></label>
                                <select class="form-control  js-example-basic-single" placeholder="Nhân viên" name="nam_dang_ky" >
                                    <option value="">Chọn đăng ký</option>
                                    @for ($i = $namhientai; $i >1900; $i--)
                                        <option value="{{$i}}" @if($thongTinXe[0]['nam_dang_ky']==$i) selected @endif>{{$i}}</option>
                                    @endfor
                                </select>
                                <div class="error error-nam_dang_ky"></div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Số km đã đi<span class="obligatory">*</span></label>
                                <input type="text" class="form-control" name="so_km_di"  placeholder="Số km đã đi"  value="{{$thongTinXe[0]['gia_dang_web']}}">
                                <div class="error error-so_km_di"></div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Xe thuộc khoảng giá </label>
                                <select class="js-example-basic-single w-100" name="khoang_gia">
                                    <option value="Từ 10Đ - 20Đ" @if($thongTinXe[0]['khoang_gia'] == "Từ 10Đ - 20Đ") selected @endif>Từ 10Đ - 20Đ</option>
                                    <option value="Dưới 10Đ" @if($thongTinXe[0]['khoang_gia'] == "Dưới 10Đ") selected @endif>Dưới 10Đ</option>
                                    <option value="Từ 20Đ - 30Đ" @if($thongTinXe[0]['khoang_gia'] == "Từ 20Đ - 30Đ") selected @endif>Từ 20Đ - 30Đ</option>
                                    <option value="Trên 30Đ" @if($thongTinXe[0]['khoang_gia'] == "Trên 30Đ") selected @endif>Trên 30Đ</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Ảnh avatar xe</label>
                            </div>
                        </div>
                        <div class="image_avatar">
                            @if(isset($thongtinAnh))
                                @foreach($thongtinAnh as $anh)
                                    @if($anh['iMa_loai_anh'] == 4)
                                        <img src="{{ asset('uploads/images/'.$anh['duong_dan']) }}" alt="" width="100%" height="100%" id="thumbnail">
                                        <p style="display: none;">{{$k = 1}}</p>
                                    @endif
                                @endforeach
                            @endif
                            @if($thongTinXe[0]['iMa_trang_thai'] == 1)
                                <img src="{{ asset('Logo/avarta.jpg') }}" alt="" width="100%" height="100%" id="thumbnail">
                            @endif
                            <input type="file"  id="gallery-photo-avata-web" name="files_avata_xe">
                            <i class="mdi mdi-cloud-upload ikon-upload"></i>
                            <p class="tai-anh" >Tải ảnh avatar</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="error error-files_avata_xe"></div>
                        </div>
                    </div>
                    <div class="row" style="padding-top: 20px;">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Ảnh đăng trên web</label>
                                <input type="file"  id="gallery-photo-add-web" class="form-control" name="files_anh_dang_web[]" multiple>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="image_preview" width="100%" style="margin-top: 5px;border: 1px solid #f1f1f1;min-height: 200px;">
                                @if(isset($thongtinAnh))
                                    @foreach($thongtinAnh as $anh)
                                        @if($anh['iMa_loai_anh'] == 1)
                                            <div class="themanh">
                                                <image src="{{ asset('uploads/images/'.$anh['duong_dan']) }}" class="anh"  width="150px" height="150px"/>
                                                <button type="button" class="btn btn-danger xoa-anh-web" title = "Xóa ảnh"
                                                        data-url = "{{route('quanlyxe.xoaanhweb',$anh['id'])}}">
                                                    <i class="fas fa-trash-alt" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        @endif
                                    @endforeach
                                @endif
                            </div>
                            <div class="error error-files_anh_dang_web"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group" style="padding-top: 10px;">
                                <label for="">Ghi chú</label>
                                <textarea class="form-control" rows="9" name="ghi_chu" >{{$thongTinXe[0]['ghi_chu']}}
                                        </textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group button-hide" style="padding-top: 10px;">
                                @if($thongTinXe[0]['iMa_trang_thai'] == 1)
                                    <button type="button" id="update-thong-tin" data-url="{{route('quanlyxe.dangthongtinxeweb',$thongTinXe[0]['id'])}}" class="btn btn-primary" >Đăng thông tin xe</button>
                                @elseif($thongTinXe[0]['iMa_trang_thai'] == 2)
                                    <button type="button" id="update-thong-tin-web" data-url="{{route('quanlyxe.updatetthongtinxeweb',$thongTinXe[0]['id'])}}" class="btn btn-primary" >Update thông tin xe</button>
                                    <button type="button" id="delete-thong-tin-web" data-url="{{route('quanlyxe.deletetthongtinxeweb',$thongTinXe[0]['id'])}}" class="btn btn-danger" >Gỡ thông tin xe trên web</button>
                                    <a href="{{route('trangchitiet',$thongTinXe[0]['id'])}}" class="btn btn-primary">Trang chi tiết xe</a>
                                @elseif($thongTinXe[0]['iMa_trang_thai'] == 4)
                                    <button type="button" id="update-thong-tin-web" data-url="{{route('quanlyxe.updatetthongtinxeweb',$thongTinXe[0]['id'])}}" class="btn btn-primary" >Đăng lại thông tin xe</button>
                                @endif
                            </div>
                            <div class="group-button" style="display: none !important;">
                                <button type="button" id="update-thong-tin" data-url="{{route('quanlyxe.dangthongtinxeweb',$thongTinXe[0]['id'])}}" class="btn btn-primary" >Update thông tin xe</button>

                                <a href="{{route('trangchitiet',$thongTinXe[0]['id'])}}" class="btn btn-primary">Trang chi tiết xe</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
