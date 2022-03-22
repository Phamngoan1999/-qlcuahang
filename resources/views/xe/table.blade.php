
<div class="table-responsive pt-3">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>STT</th>
            <th>Xe</th>
            <th>Đăng ký tại</th>
            <th>Ngày mua</th>
            <th>Trạng Thái</th>
            <th>Tác vụ</th>
        </tr>
        </thead>
        <tbody id="danh-sach">
        @if(count($listXe)>0)
            @foreach($listXe as $key => $iterm)
            <tr>
                <td>{{$key + 1}}</td>
                <td>{{$iterm->bien_so}}
                    <br>
                    <br>
                    {{$iterm->dongxe->ten_dong_xe}}
                    <br>
                    <br>
                    {{$iterm->khachhang->ho_ten}}
                </td>
                <td>{{$iterm->dang_ky_tai}}</td>
                <td>{{ substr(format_thoi_gian($iterm->ngay_mua),0,10)}}</td>
                <td><label
                        class="btn btn-success btn-sm">{{$iterm->trangthai->ten_trang_thai}}</label>
                </td>
                <td>
                    @if($iterm->iMa_trang_thai != 6 && $iterm->iMa_trang_thai != 3 )
                        <a href="{{route("quanlyxe.khachhangmuaxe",$iterm->id)}}"
                           class="btn btn-primary btn-width">Khách hàng mua xe</a>
                        <br><br>
                    @elseif($iterm->iMa_trang_thai == 3)
                        <a href="{{route("quanlyxe.khachhangmuaxe",$iterm->id)}}"
                           class="btn btn-success btn-width">Thông tin giao dịch bán</a>
                        <br><br>
                    @endif
                    @if($iterm->iMa_trang_thai == 2)
                        <a href="{{route("quanlyxe.dangthongtinxe",$iterm->id)}}"
                           class="btn btn-info btn-width">Update thông tin xe trên web</a>
                        <br><br>
                    @elseif($iterm->iMa_trang_thai != 6 && $iterm->iMa_trang_thai != 3)
                        <a href="{{route("quanlyxe.dangthongtinxe",$iterm->id)}}"
                           class="btn btn-primary btn-width">Đăng thông tin xe</a>
                        <br><br>
                    @endif
                    @if($iterm->iMa_trang_thai == 3)
                        <a href="{{route("quanlyxe.editthongtinxe",$iterm->id)}}"
                           class="btn btn-info btn-width">
                            Thông tin xe mua
                        </a>
                        <br><br>
                    @else
                        <a href="{{route("quanlyxe.editthongtinxe",$iterm->id)}}"
                           class="btn btn-warning btn-width">
                            <i class="far fa-edit"></i>&nbsp;Sửa thông tin xe
                        </a>
                        <br><br>
                    @endif
                    @if($iterm->iMa_trang_thai == 1)
                        <button type="button" class="btn btn-danger btn-width xoa-thong-tin-xe"
                                data-url="{{route("quanlyxe.xoathongtinxe",$iterm->id)}}">
                            <i class="fas fa-trash-alt"> </i>&nbsp; Xóa thông tin xe
                        </button>
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
            {{$listXe->appends(request()->all())->links()}}
        </div>
    </div>
</div>
