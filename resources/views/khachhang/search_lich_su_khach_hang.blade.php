@extends('header.quanly')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tra cứu thông tin khách hàng</h4>
                        <form  id="form-search">
                            <div class="row" style="padding-top: 20px;">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="thongtin"  placeholder="Thông tin khách hàng">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <button type="button" class="btn btn-primary" id="tim-kiem" data-url="{{route("quanlykhachhang.search_lich_su_thong_tin_khach_hang")}}">Tìm kiếm</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="table">
                            <div class="table-responsive pt-3">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Họ tên khách hàng</th>
                                        <th>Số CMND/CCCD</th>
                                        <th>Số điện thoại</th>
                                        <th>Địa chỉ</th>
                                        <th>Tác vụ</th>
                                    </tr>
                                    </thead>
                                    <tbody id="danh-sach">
                                        <tr>
                                            <td colspan="7" class="text-center">Vui lòng nhập thông tin tìm kiếm</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="paginate float-right text-right" style="padding: 10px 0px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="module" src="{{asset('js/admin/lich_su_theo_khach_hang.js')}}"></script>
@endsection
