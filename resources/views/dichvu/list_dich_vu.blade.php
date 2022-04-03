{{--<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">--}}
{{--<link rel="stylesheet" type="text/css" href="{{asset("datatable/css/dataTables.bootstrap4.css")}}">--}}
{{--<link rel="stylesheet" type="text/css" href="{{asset("datatable/css/shCore.css")}}">--}}
{{--<link rel="stylesheet" type="text/css" href="{{asset("datatable/css/demo.css")}}">--}}
{{--<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>--}}
{{--<script type="text/javascript" src="{{asset("datatable/js/jquery.dataTables.js")}}"></script>--}}
{{--<script type="text/javascript" src="{{asset("datatable/js/dataTables.bootstrap4.js")}}"></script>--}}
{{--<script type="text/javascript" src="{{asset("datatable/js/shCore.js")}}"></script>--}}
{{--<script type="text/javascript" src="{{asset("datatable/js/demo.js")}}"></script>--}}
{{--<script type="text/javascript">--}}

{{--    $(document).ready(function() {--}}
{{--        var table = $('#example').DataTable();--}}
{{--    } );--}}

{{--</script>--}}
<div class="table-modal">
    <table class="table table-striped table-bordered table-modal" style="width:100%">
        <thead>
        <tr>
            <th>STT</th>
            <th>Dịch Vụ</th>
            <th>Giá dịch vụ</th>
            <th>Tác vụ</th>
        </tr>
        </thead>
        <tbody id="danh-sach-load-modal">
        <p style="display: none">{{$stt = 1}}</p>
        @foreach($list as $key => $iterm)
            <tr>
                <td>{{$stt}}</td>
                <td>{{$iterm->ten_dich_vu}}</td>
                <td>{{$iterm->gia_dich_vu}}</td>
                <td>
                    <p style="display: none;">{{$display = "no"}}</p>
                    @foreach($listSelectNotFinal as $key)
                        @if($key->sMa_dich_vu == $iterm->id)
                            <input type="checkbox" name="dich_vu[]" value="{{$iterm->id}}"
                                   data-name-service="{{$iterm->ten_dich_vu}}"
                                   data-cost-service="{{$iterm->gia_dich_vu}}"
                                   class="option-input checkbox data-click" data-url="{{route('quanlysuachua.them-dich-vu-select')}}" checked/>
                            <p style="display: none;">{{$display = "ok"}}</p>
                        @endif
                    @endforeach
                    @if($display == "no")
                        <input type="checkbox" name="dich_vu[]" value="{{$iterm->id}}"
                            data-name-service="{{$iterm->ten_dich_vu}}"
                            data-cost-service="{{$iterm->gia_dich_vu}}"
                            class="option-input checkbox data-click"  data-url="{{route('quanlysuachua.them-dich-vu-select')}}"/>
                    @endif
                </td>
            </tr>
            <p style="display: none">{{$stt = $stt + 1}}</p>
        @endforeach
        </tbody>
    </table>
    <div class="id-Cua-hang" style="display: none;">
        <input type="text" name="idCuahang" id="idCuaHangSelect" value="{{$request->iMa_cua_hang}}">
        <input type="text" name="idDichVu" id="idHoaDonSelect" value="{{$request->iMa_hoa_don}}">
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="paginate float-right text-right paginate-page-modal" style="padding: 10px 0px;">
                {{$list->appends(request()->all())->links()}}
            </div>
        </div>
    </div>
</div>
