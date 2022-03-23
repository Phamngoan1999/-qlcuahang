<div class="table-responsive pt-3">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>STT</th>
            <th>Cửa hàng</th>
            <th>Biển số</th>
            <th>Tác vụ</th>
        </tr>
        </thead>
        <tbody>
        @foreach($danhsach as $key => $iterm)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$iterm->cuahang->ten_cua_hang}}</td>
                <td>{{$iterm->xe->bien_so}}</td>
                <td>
                    @if($iterm->trang_thai== 'chonhan')
                        <a href="{{route("quanlysuachua.showhoadon",$iterm->id)}}" class="btn btn-primary" >Chờ nhận đơn</a>
                    @elseif($iterm->trang_thai== 'danhandon')
                        <a href="{{route("quanlysuachua.showhoadon",$iterm->id)}}" class="btn btn-success" >Cửa hàng đã nhận đơn</a>
                    @elseif($iterm->trang_thai== 'huyhoadon')
                        <a href="{{route("quanlysuachua.showhoadon",$iterm->id)}}" class="btn btn-danger" >Cửa hàng đã hủy đơn</a>
                    @elseif($iterm->trang_thai== 'dahoanthanh')
                        <a href="{{route("quanlysuachua.showhoadon",$iterm->id)}}" class="btn btn-success" >Đơn đã hoàn thành</a>
                    @endif

                    @if($iterm->trang_thai== 'chonhan'||$iterm->trang_thai== 'huyhoadon')
                        <button type="button" class="btn btn-danger xoa-hoa-don" data-url="{{route("quanlysuachua.xoahoadon",$iterm->id)}}">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="paginate float-right text-right paginate-page" style="padding: 10px 0px;">
            {{$danhsach->appends(request()->all())->links()}}
        </div>
    </div>
</div>
