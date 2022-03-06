@extends('header.quanly')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Thông tin tài khoản</h4>
                        <form action="" id="update-thong-tin-tai-khoan">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Tên tài khoản <span class="obligatory">*</span></label>
                                        <input type="text" class="form-control" name="ho_ten"  placeholder="Họ tên khách hàng" value="{{ Auth::user()->name }}">
                                        <div class="error error-ho_ten"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Số điện thoại <span class="obligatory">*</span></label>
                                        <input type="text" class="form-control"  placeholder="Họ tên khách hàng" value="{{ Auth::user()->email }}" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Mật khẩu <span class="obligatory">*</span></label>
                                        <input type="password" class="form-control" name="mat_khau"  placeholder="Mật khẩu">
                                        <div class="error error-mat_khau"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group" style="padding-top: 10px;">
                                        <button type="button" id="update-thong-tin" data-url="{{route('quanlytaikhoan.update-thong-tin')}}" class="btn btn-primary" >Update thông tin</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script type="module" src="{{asset('js/nguoidung/taikhoan.js')}}"></script>
@endsection
