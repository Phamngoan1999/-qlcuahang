@extends('header.quanly')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Thêm phụ tùng sửa chữa</h4>
                        <form action="{{route('quanlysuachua.luuhoadon')}}" id="form-hoa-don" class="chi-tiet-hoa-don" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Chọn cửa hàng sửa chữa</label>
                                                <select class="js-example-basic-single w-100 ma-cua-hang" name="iMa_cua_hang">
                                                    <option value="">Chọn cửa hàng</option>
                                                    @foreach($danhsachCuaHang as $cuahang)
                                                        <option value="{{$cuahang->id}}">{{$cuahang->ten_cua_hang}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="error error-iMa_cua_hang"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Chọn xe sửa chữa</label>
                                                <select class="js-example-basic-single w-100 xe-sua-chua"  name="iMa_xe" >
                                                    <option value="">Chọn xe sửa chữa</option>
                                                    @foreach($danhsachXe as$xe)
                                                        <option value="{{$xe->id}}">{{$xe->dongxe->ten_dong_xe}}-{{$xe->bien_so}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="error error-iMa_xe"></div>
                                        </div>
                                    </div>
                                    <div class="row" style="padding-bottom: 20px;">
                                        <div class="col-md-5">
                                            <button type="button" class="btn btn-info" id="add-phu-tung" data-url="{{route('quanlysuachua.list-dich-vu')}}">
                                                <i class="fa-solid fa-plus"></i> Thêm phụ tùng</button>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="error error-phutung"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div id="list-phu-tung"></div>
                                    <div class="col-md-7">
                                        <div class="error error-phutung-rong"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row group-btn">
                                <div class="col-md-12">
                                    <button type="button" class="btn btn-primary" id="add-luu-thong-tin" >Lưu thông tin</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-list-dich-vu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Thêm phụ tùng</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                    <button type="button" class="btn btn-primary" id="luu-dich-vu" data-url="{{route("quanlysuachua.list-dich-vu-select")}}">Lưu dịch vụ</button>
                </div>
            </div>
        </div>
    </div>
    <style>
        @media (min-width: 576px)
        {
            .modal-dialog {
                max-width: 800px!important;
                margin: 30px auto;
            }
        }
    </style>
    <script type="module" src="{{asset('js/admin/hoa_don.js')}}"></script>
@endsection
