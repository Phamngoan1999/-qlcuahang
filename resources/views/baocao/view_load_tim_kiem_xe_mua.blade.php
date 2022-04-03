
<div class="table-responsive pt-3">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>STT</th>
            <th>Xe</th>
            <th>Giá Mua(VNĐ)</th>
            <th>Cửa hàng nhận đơn</th>
            <th>Giá trị hóa đơn(VNĐ)</th>
            <th>Ngày lên hóa đơn</th>
            <th>Trạng thái</th>
            <th>Giá dự kiến bán</th>
        </tr>
        </thead>
        <tbody id="danh-sach-binh-luan">
        @if(count($resultXeMua)>0)
            @foreach($resultXeMua as $key => $xe)
                <tr>
                    <td rowspan="{{count($xe->hoadon) >0 ? count($xe->hoadon) : 1}} " class="text-center"><b>{{$key+1}}</b></td>
                    <td rowspan="{{count($xe->hoadon) >0 ? count($xe->hoadon) : 1}}">{{$xe->bien_so}}
                        <br><br> {{$xe->dongxe->ten_dong_xe}}
                        <br><br> {{$xe->khachhang->ho_ten}}
                    </td>
                    <td rowspan="{{count($xe->hoadon) >0 ? count($xe->hoadon) : 1}}">
                        {{ currency_format($xe->gia_mua) }}
                    </td>
                    @if(count($xe->hoadon) >0)
                        <p style="display: none;">{{$tongsuachua = 0}}</p>
                        @foreach($xe->hoadon as $key => $iterm)
                            <td>{{$iterm->cuahang->ten_cua_hang}}</td>
                            @if($iterm->trang_thai == "huyhoadon")
                                <td class="text-center"><label for="" class="badge badge-danger">Hủy hóa đơn</label></td>
                            @else
                                <td class="text-center">{{ currency_format($iterm->tong_tien) }}</td>
                                <p style="display: none;">{{$tongsuachua = $tongsuachua + $iterm->tong_tien}}</p>
                            @endif
                            <td class="text-center">{{ substr(format_thoi_gian($iterm->updated_at),0,10) }}</td>
                            @if($key == 0)
                                <td rowspan="{{count($xe->hoadon) >0 ? count($xe->hoadon) : 1}}">
                                    <label for="" class="btn btn-success btn-sm">{{$xe->trangthai->ten_trang_thai}}</label>
                                </td>
                                <td rowspan="{{count($xe->hoadon) >0 ? count($xe->hoadon) : 1}}">
                                    {{ currency_format($tongsuachua + $xe->gia_mua) }}
                                </td>
                </tr>
                @endif
                </tr>
            @endforeach
        @else
            <td></td>
            <td></td>
            <td></td>
            <td rowspan="{{count($xe->hoadon) >0 ? count($xe->hoadon) : 1}}">
                <label for="" class="btn btn-success btn-sm">{{$xe->trangthai->ten_trang_thai}}</label>
            </td>
            <td>{{ currency_format($xe->gia_mua) }}</td>
            </tr>
        @endif
        @endforeach
        @else
            <tr>
                <td colspan="8" class="text-center">Không có dữ liệu</td>
            </tr>
        @endif
        </tbody>
    </table>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="paginate float-right text-right paginate-page" style="padding: 10px 0px;">
            {{$resultXeMua->appends(request()->all())->links()}}
        </div>
    </div>
</div>
