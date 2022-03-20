
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
        <tbody id="danh-sach-khach-hang">
        @if(count($listKhachHang) > 0)
            @foreach($listKhachHang as $key => $khachhang)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$khachhang->ho_ten}}</td>
                    <td>{{$khachhang->so_CMND}}</td>
                    <td>{{$khachhang->so_dien_thoai}}</td>
                    <td>{{$khachhang->noi_cu_tru}}</td>
                    <td>
                        <a href="{{route("quanlykhachhang.showkhachang",$khachhang->id)}}" class="btn btn-warning btn-width" ><i class="far fa-edit"></i>&nbsp;Sửa thông tin </a>
                        <br>
                        <br>
                        <a href="{{route("quanlykhachhang.themxeban",$khachhang->id)}}" class="btn btn-primary btn-width" >Thêm xe bán</a>
                        <br>
                        <br>
                        <button type="button" class="btn btn-danger btn-width xoa-khach-hang"
                                data-url="{{route('quanlykhachhang.xoakhachhang',$khachhang->id)}}">
                            <i class="fas fa-trash-alt"></i>&nbsp; Xóa thông tin
                        </button>

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
            {{$listKhachHang->appends(request()->all())->links()}}
        </div>
    </div>
</div>
