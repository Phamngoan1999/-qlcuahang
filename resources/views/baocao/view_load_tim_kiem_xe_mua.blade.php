
<div class="table-responsive pt-3">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>STT</th>
            <th>Xe</th>
            <th>Giá Mua</th>
            <th>Trạng Thái</th>
            <th>Thông tin chi tiêt</th>
        </tr>
        </thead>
        <tbody id="danh-sach-binh-luan">
        @if(count($resultXeMua)>0)
            @foreach($resultXeMua as $key => $xe)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>
                        {{$xe->bien_so}}
                        <br><br> {{$xe->dongxe->ten_dong_xe}}
                        <br><br> {{$xe->khachhang->ho_ten}}
                    </td>
                    <td>
                        {{ currency_format($xe->gia_mua) }}
                    </td>
                    <td>
                        <label for="" class="badge badge-info">{{$xe->trangthai->ten_trang_thai}}</label>
                    </td>
                    <td>
                        <a href="{{route('quanlyxe.editthongtinxe',$xe->id)}}" class="btn btn-primary">Thông tin chi tiết</a>
                    </td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="5" class="text-center">Không có dữ liệu</td>
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
