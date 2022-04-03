
<div class="table" >
    <div class="table-responsive pt-3">
        <table class="table table-bordered" >
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
            <div class="paginate float-right text-right paginate-page" style="padding: 10px 0px;">
                {{$listBinhLuan->appends(request()->all())->links()}}
            </div>
        </div>
    </div>
</div>
