@extends('header.quanly')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Quản lý bình luận</h4>
                        <div class="row" style="padding-top: 20px;">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <select class="js-example-basic-single w-100">
                                        <option value="tra-loi">Bình luận đã trả lời</option>
                                        <option value="chua-tra-loi">Bình luận chưa trả lời</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <select class="js-example-basic-single w-100">
                                        <option value="AL">Chọn xe</option>
                                        <option value="WY">Wyoming</option>
                                        <option value="AM">America</option>
                                        <option value="CA">Canada</option>
                                        <option value="RU">Russia</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <button type="button" class="btn btn-primary" id="add-hang-xe" >Tìm kiếm</button>
                                </div>
                            </div>
                        </div>
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
                                <tbody>
                                @foreach($listBinhLuan as $key => $bl)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$bl->users->name}}</td>
                                        <td>{{ format_binh_luan($bl->noi_dung) }}</td>
                                        <td><p style="display: none;">{{$date = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$bl->thoi_gian_binh_luan)}}</p>
                                            {{$date->format('d/m/Y H:i:s')}}
                                        </td>
                                        <td>
                                            <a href="{{route("quanlyxe.editthongtinxe",$bl->iMa_xe)}}" class="btn btn-primary" >Thông tin chi tiết xe</a>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-danger xoa-binh-luan" data-url="{{route('quanlybinhluan.delete',$bl->id)}}">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                            @if(empty($bl->binh_luan_tra_loi))
                                                <button type="button" class="btn btn-warning model-tra-loi" data-url="{{route('quanlybinhluan.show',$bl->id)}}">
                                                    Trả lời bình luận
                                                </button>
                                            @else
                                                <button type="button" class="btn btn-success model-tra-loi" data-url="{{route('quanlybinhluan.show',$bl->id)}}">
                                                    Update bình luận
                                                </button>
                                            @endif
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
    <div class="modal fade" id="modal-show-binh-luan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Trả lời bình luận</h5>
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
