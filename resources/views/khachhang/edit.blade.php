@extends('header.quanly')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Thông tin khách hàng</h4>
                        <form action="" id="form-update-khach-hang">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Khách hàng <span class="obligatory">*</span></label>
                                        <input type="text" class="form-control" name="ho_ten"  placeholder="Họ tên khách hàng" value="{{$inforKhachHang->ho_ten}}">
                                        <div class="error error-ho_ten"></div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Số điện thoại <span class="obligatory">*</span></label>
                                        <input type="text" class="form-control" name="so_dien_thoai" id="so_dien_thoai" maxlength="10" placeholder="Số điện thoại"  value="{{$inforKhachHang->so_dien_thoai}}">
                                        <div class="error error-so_dien_thoai"></div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="">Năm sinh  <span class="obligatory">*</span></label>
                                        <select class="form-control  js-example-basic-single" placeholder="Nhân viên" name="nam_sinh" >
                                            <option value="">Chọn năm sinh</option>
                                            @for ($i = $namhientai; $i >1900; $i--)
                                                <option value="{{$i}}" @if($inforKhachHang->nam_sinh == $i) selected @endif>{{$i}}</option>
                                            @endfor
                                        </select>
                                        <div class="error error-nam_sinh"></div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Số CMND <span class="obligatory">*</span></label>
                                        <input type="text" class="form-control" name="so_CMND" id="so_CMND" axlength="12" placeholder="Số CMND/Thẻ CCCD"  value="{{$inforKhachHang->so_CMND}}">
                                        <div class="error error-so_CMND"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Nơi cấp CMND  <span class="obligatory">*</span></label>
                                        <input type="text" class="form-control" name="noi_cap_CMND"  placeholder="Nơi cấp CMND"  value="{{$inforKhachHang->noi_cap_CMND}}">
                                        <div class="error error-noi_cap_CMND"></div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Nơi cư trú <span class="obligatory">*</span></label>
                                        <input type="text" class="form-control" name="noi_cu_tru"  placeholder="Nơi cư trú"  value="{{$inforKhachHang->noi_cu_tru}}">
                                        <div class="error error-noi_cu_tru"></div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Ngày cấp <span class="obligatory">*</span></label>
                                        <input type="date" class="form-control" name="cap_ngay"  placeholder="Ngày cấp"  value="{{$inforKhachHang->cap_ngay}}">
                                        <div class="error error-cap_ngay"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <button type="button" class="btn btn-primary" id="update-thong-tin-khach-hang" data-url="{{route('quanlykhachhang.updatekhachang',$inforKhachHang->id)}}">Update thông tin</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#so_CMND').keyup(function () {
                this.value = this.value.replace(/[^0-9\.]/g,'');
            });
            $('#so_dien_thoai').keyup(function () {
                this.value = this.value.replace(/[^0-9\.]/g,'');
            });
        })
    </script>
    <script type="module" src="{{asset('js/admin/khach_hang_update.js')}}"></script>
@endsection
