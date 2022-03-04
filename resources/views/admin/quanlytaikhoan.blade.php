@extends('header.quanly')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Quản lý Tài khoản của hàng liên kết</h4>
                        <div class="row">
                            <div class="col-md-12">
                                <button type="button" class="btn btn-primary" id="them-tai-khoan" data-toggle="modal" data-target="#cap-tai-khoan-modal">
                                    Thêm của hàng liên kết
                                </button>
                            </div>
                        </div>
                        <div class="table-responsive pt-3">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên cửa hàng </th>
                                    <th>Số điện thoại</th>
                                    <th>Địa chỉ</th>
                                    <th>Tác vụ</th>
                                </tr>
                                </thead>
                                <tbody id="danh-sach-cua-hang">
                                    @foreach($listCuaHang as $key => $cuahang)
                                        <tr>
                                            <td>{{$key + 1}}</td>
                                            <td>{{$cuahang->ten_cua_hang}}</td>
                                            <td>{{$cuahang->so_dien_thoai}}</td>
                                            <td>{{$cuahang->dia_chi_cua_hang}}</td>
                                            <td>
                                                <button type="button" class="btn btn-warning show-cua-hang"
                                                        title="Update thông tin cửa hàng liên kết"
                                                        data-url="{{route("quanlytaikhoan.show",$cuahang->id)}}">
                                                    <i class="far fa-edit"></i>
                                                </button>
                                                <button type="button" class="btn btn-danger xoa-tai-khoan-cua-hang"
                                                        data-url="{{route("quanlytaikhoan.delete",$cuahang->id)}}">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="update-tai-khoan-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Update thông tin tài khoản</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="show-info-cua-hang">

                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="cap-tai-khoan-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Cấp tài khoản</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="form-add-cua-hang">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Tên cửa hàng <span class="obligatory">*</span></label>
                            <input type="text" class="form-control" name="name"  placeholder="Tên cửa hàng">
                            <div class="error error-name"></div>
                        </div>
                        <div class="form-group">
                            <label for="">Số điện thoại <span class="obligatory">*</span></label>
                            <input type="text" class="form-control" name="email"  placeholder="Số điện thoại">
                            <div class="error error-email"></div>
                        </div>
                        <div class="form-group">
                            <label for="">Địa chỉ cửa hàng <span class="obligatory">*</span></label>
                            <input type="text" class="form-control" name="diachi"  placeholder="Địa chỉ">
                            <div class="error error-diachi"></div>
                        </div>
                        <div class="form-group">
                            <label for="">Mật khẩu <span class="obligatory">*</span></label>
                            <input type="password" class="form-control" name="matkhau"  placeholder="Mật khẩu">
                            <div class="error error-matkhau"></div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary add-cua-hang" data-url="{{route("quanlytaikhoan.create")}}" >Lưu</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="content-wrapper" style="padding-top: 0px;">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Quản lý Tài khoản người dùng</h4>
                        <div class="table-responsive pt-3">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên cửa hàng </th>
                                    <th>Số điện thoại</th>
                                    <th>Thời gian đăng ký tài khoản</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($listUser as $key => $user)
                                    <tr>
                                        <td>{{$key + 1}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->created_at}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .obligatory
        {
            color: red;
        }
        .error{
            padding-top: 5px;
        }
    </style>
    <script type="module" src="{{asset('js/admin/taikhoan.js')}}"></script>
@endsection
