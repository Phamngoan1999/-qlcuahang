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
