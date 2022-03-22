@extends('header.quanly')
@section('content')
    <style>
        .btn-width{
            width: 200px!important;
        }
        .label{
            font-weight: bold;
        }
    </style>
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Quản lý bình luận</h4>
                        <form action="" id="form-search">
                            <div class="row" style="padding-top: 20px;">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <select class="js-example-basic-single w-100" name="trang_thai_search">
                                            <option value="">Chọn trạng thái bình luận</option>
                                            <option value="tra-loi">Bình luận đã trả lời</option>
                                            <option value="chua-tra-loi">Bình luận chưa trả lời</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <select class="js-example-basic-single w-100" name="ma_xe">
                                            <option value="">Chọn xe</option>
                                            @foreach($listXe as $key => $xe)
                                                <option value="{{$xe['id']}}">{{$xe['dongxe']['ten_dong_xe']}} - {{$xe['bien_so']}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <button type="button" class="btn btn-primary" id="tim-kiem"
                                                data-url="{{route('quanlybinhluan.search')}}">Tìm kiếm</button>
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
                                        <th>Khách hàng</th>
                                        <th>Bình luận</th>
                                        <th>Thời gian</th>
                                        <th>Thông tin xe</th>
                                        <th>Tác vụ</th>
                                    </tr>
                                    </thead>
                                    <tbody id="danh-sach-binh-luan">
                                    @if(count($listBinhLuan) > 0)
                                    @foreach($listBinhLuan as $key => $bl)
                                        <tr>
                                            <td>{{$key + 1}}</td>
                                            <td>{{$bl->users->name}}</td>
                                            <td>{{ format_binh_luan($bl->noi_dung) }}</td>
                                            <td>{{ format_thoi_gian($bl->thoi_gian_binh_luan) }}</td>
                                            <td>
                                                @if(isset($bl->iMa_xe))
                                                    <a href="{{route("quanlyxe.editthongtinxe",$bl->iMa_xe)}}" class="btn btn-primary btn-width" >Thông tin chi tiết xe</a>
                                                    <br>
                                                    <br>
                                                    @if($bl->xe->iMa_trang_thai == 2)
                                                        <a href="{{route("trangchitiet",$bl->iMa_xe)}}" class="btn btn-primary btn-width" >Thông tin xe trên trang web</a>
                                                    @else
                                                        <a  class="btn btn-info btn-width" >{{$bl->xe->trangthai->ten_trang_thai}}</a>
                                                    @endif
                                                @endif
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-danger xoa-binh-luan" data-url="{{route('quanlybinhluan.delete',$bl->id)}}" title="xóa bình luận">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                                @if(isset($bl->iMa_xe))
                                                    @if(empty($bl->binh_luan_tra_loi))
                                                        <button type="button" class="btn btn-info model-tra-loi" data-url="{{route('quanlybinhluan.show',$bl->id)}}" title="Trả lời bình luận">
                                                            <i class="far fa-edit"></i>
                                                        </button>
                                                    @else
                                                        <button type="button" class="btn btn-success model-tra-loi" data-url="{{route('quanlybinhluan.show',$bl->id)}}" title="Update bình luận">
                                                            <i class="far fa-edit"></i>
                                                        </button>
                                                    @endif
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                    @else
                                        <tr>
                                            <td colspan="6" class="text-center">Không có dữ liệu</td>
                                        </tr>
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="paginate float-right text-right" style="padding: 10px 0px;">
                                        {{$listBinhLuan->appends(request()->all())->links()}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-show-binh-luan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title label" id="exampleModalLongTitle">Trả lời bình luận</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div id="form-binh-luan">

                </div>
            </div>
        </div>
    </div>
    <script type="module" src="{{asset('js/admin/binhluan.js')}}"></script>
@endsection
