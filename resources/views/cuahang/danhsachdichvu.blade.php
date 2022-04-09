@extends('header.quanly')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Quản lý dịch vụ</h4>
                        <button type="button" class="btn btn-primary btn-click-hangxe" data-toggle="modal" data-target="#add-dich-vu-modal">Thêm dịch vụ</button>
                        <div class="row" style="padding-top: 20px;">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="text" class="form-control ten_dich_vu-search" name="ten_dich_vu_search" placeholder="Dịch vụ">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary" id="add-hang-xe" >Tìm kiếm</button>
                                </div>
                            </div>
                        </div>
                        <div class="table-div">
                            <div class="table-responsive pt-3">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Dịch vụ</th>
                                            <th>Giá tiền(VNĐ)</th>
                                            <th>Thời gian cập nhật</th>
                                            <th>Tác vụ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <p style="display: none;">{{$stt = 1}}</p>
                                        @foreach($ListService as $iterm)
                                            <tr>
                                                <td>{{$stt}}</td>
                                                <td>{{$iterm->ten_dich_vu}}</td>
                                                <td>{{$iterm->gia_dich_vu}}</td>
                                                <td>{{ format_thoi_gian($iterm->updated_at)}}</td>
                                                <td>
                                                    <button type="button" class="btn btn-info model-update-dich-vu" data-url="{{route('quanlysuachua.show-dich-vu',$iterm->id)}}" title="Sửa dịch vụ">
                                                        <i class="far fa-edit"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-danger xoa-dich-vu" title="xóa bình luận"  data-url="{{route('quanlysuachua.delete-dich-vu',$iterm->id)}}">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <p style="display: none;">{{$stt = $stt + 1}}</p>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="paginate float-right text-right" style="padding: 10px 0px;">
                                    {{$ListService->appends(request()->all())->links()}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="add-dich-vu-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Thêm dịch vụ</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="form-add-dich-vu-post">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Tên dịch vụ</label>
                            <input type="text" class="form-control ten_dich_vu" name="ten_dich_vu" placeholder="Dịch vụ">
                            <div class="error error-ten_dich_vu"></div>
                        </div>
                        <div class="form-group">
                            <label for="">Giá dịch vụ</label>
                            <input type="text" class="form-control gia_dich_vu" name="gia_dich_vu" placeholder="Giá dịch vụ" maxlength="14">
                            <div class="error error-gia_dich_vu"></div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                        <button type="button" class="btn btn-primary" id="add-dich-vu" data-url="{{route('quanlysuachua.them-dich-vu')}}">Lưu</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="dich-vu-update-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Thêm dịch vụ</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div id="dich-vu-update">

                </div>
            </div>
        </div>
    </div>

    <script type="module" src="{{asset('js/admin/dich_vu.js')}}"></script>
    <script>

        function formatCurrency(number){
            var n = number.split('').reverse().join("");
            var n2 = n.replace(/\d\d\d(?!$)/g, "$&,");
            return  n2.split('').reverse().join('') + 'VNĐ';
        }
        $(".gia_dich_vu").on('input', function(e){
            $(this).val(formatCurrency(this.value.replace(/[,VNĐ]/g,'')));
        }).on('keypress',function(e){
            if(!$.isNumeric(String.fromCharCode(e.which))) e.preventDefault();
        }).on('paste', function(e){
            var cb = e.originalEvent.clipboardData || window.clipboardData;
            if(!$.isNumeric(cb.getData('text'))) e.preventDefault();
        });
    </script>
@endsection
