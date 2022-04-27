<div class="table-div">
    <div class="table-responsive pt-3">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>STT</th>
                <th>Dịch vụ</th>
                <th>Giá tiền(VNĐ)</th>
                <th>Thời gian cập nhật</th>
                <th>Tác vụ</th>
            </tr>
            </thead>
            <tbody class="danh-sach-load">
            <p style="display: none;">{{$stt = 1}}</p>
            @if(count($listService)>0)
                @foreach($listService as $iterm)
                <tr>
                    <td>{{$stt}}</td>
                    <td>{{$iterm->ten_dich_vu}}</td>
                    <td>{{$iterm->gia_dich_vu}}</td>
                    <td>{{ format_thoi_gian($iterm->updated_at)}}</td>
                    <td>
                        <button type="button" class="btn btn-info model-update-dich-vu" data-url="{{route('quanlysuachua.show-dich-vu',$iterm->id)}}" title="Sửa dịch vụ">
                            <i class="far fa-edit"></i>
                        </button>
                        <form action="{{route('quanlysuachua.delete-dich-vu',$iterm->id)}}" id="delete-dich-vu-form-{{$iterm->id}}" method="POST"  style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="btn btn-danger xoa-dich-vu" title="xóa bình luận" data-id="{{$iterm->id}}" >
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                <p style="display: none;">{{$stt = $stt + 1}}</p>
            @endforeach
            @else
                <tr>
                    <td colspan="5" class="text-center">Không có dữ liệu</td>
                </tr>
            @endif
            </tbody>
        </table>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="paginate float-right text-right paginate-page" style="padding: 10px 0px;">
            {{$listService->appends(request()->all())->links()}}
        </div>
    </div>
</div>
