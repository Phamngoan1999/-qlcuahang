<div class="table-responsive pt-3">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>STT</th>
            <th>Khách hàng bán xe</th>
            <th>Ngày bán</th>
            <th>Xe</th>
            <th>Khách hàng mua xe</th>
            <th>Ngày mua</th>
            <th>Tác vụ</th>
        </tr>
        </thead>
        <tbody id="danh-sach-khach-hang">
        <p style="display: none;">{{$stt = 0}}</p>
        @foreach($danhsachBanXe as $key => $iterm)
            <tr>
                <td>{{$stt + 1}}</td>
                <td>
                    {{$iterm->khachhang->ho_ten}}
                    <br>
                    <br>
                    {{$iterm->khachhang->so_CMND}}
                    <br>
                    <br>
                    {{$iterm->khachhang->so_dien_thoai}}
                </td>
                <td>{{ substr(format_thoi_gian($iterm->ngay_mua),0,10)}}</td>
                <td>
                    {{$iterm->bien_so}}
                    <br>
                    <br>
                    {{$iterm->dongxe->ten_dong_xe}}
                </td>
                <td>
                    @if(isset($iterm->khachhangmuaxe))
                    {{$iterm->khachhangmuaxe->ho_ten}}
                    <br>
                    <br>
                    {{$iterm->khachhangmuaxe->so_CMND}}
                    <br>
                    <br>
                    {{$iterm->khachhangmuaxe->so_dien_thoai}}
                    @endif
                </td>
                <td>@if(isset($iterm->ngay_ban)){{ substr(format_thoi_gian($iterm->ngay_ban),0,10)}}@endif</td>
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
            <p style="display: none;">{{$stt = $stt + 1}}</p>
        @endforeach
        @foreach($danhsachMuaXe as $key => $iterm)
            <tr>
                <td>{{$stt + 1}}</td>
                <td>
                    {{$iterm->khachhang->ho_ten}}
                    <br>
                    <br>
                    {{$iterm->khachhang->so_CMND}}
                    <br>
                    <br>
                    {{$iterm->khachhang->so_dien_thoai}}
                </td>
                <td>{{ substr(format_thoi_gian($iterm->ngay_mua),0,10)}}</td>
                <td>
                    {{$iterm->bien_so}}
                    <br>
                    <br>
                    {{$iterm->dongxe->ten_dong_xe}}
                </td>
                <td>
                    {{$iterm->khachhangmuaxe->ho_ten}}
                    <br>
                    <br>
                    {{$iterm->khachhangmuaxe->so_CMND}}
                    <br>
                    <br>
                    {{$iterm->khachhangmuaxe->so_dien_thoai}}
                </td>
                <td>@if(isset($iterm->ngay_ban)){{ substr(format_thoi_gian($iterm->ngay_ban),0,10)}}@endif</td>
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
            <p style="display: none;">{{$stt = $stt + 1}}</p>
        @endforeach
        @if($stt == 0)
            <tr>
                <td colspan="7" class="text-center">Không có dữ liệu</td>
            </tr>
            @endif
        </tbody>
    </table>
</div>
