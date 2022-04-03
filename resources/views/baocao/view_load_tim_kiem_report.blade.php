

<div class="table-responsive pt-3">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th  class="text-center">Số xe mua</th>
            <th  class="text-center">Tổng tiền mua</th>
            <th  class="text-center">Số xe bán</th>
            <th  class="text-center">Tổng tiền bán xe</th>
            <th  class="text-center">Số tiền chi cho sửa chữa</th>
            <th  class="text-center">Thống kê lãi</th>
        </tr>
        </thead>
        <tbody id="report">
        <tr>
            <td class="text-center">{{$tongtienmua[0]->slXeMua}}</td>
            <td class="text-center">@if($tongtienmua[0]->sumtienmua != null){{currency_format($tongtienmua[0]->sumtienmua)}} @else 0 @endif</td>
            <td class="text-center">{{$tongtienmua[0]->slXeBan}}</td>
            <td class="text-center">@if($tongtienmua[0]->sumtienban != null){{currency_format($tongtienmua[0]->sumtienban)}} @else 0 @endif</td>
            <td class="text-center">@if($tongtienSuaChua[0]->tong_tien_sua_chua != null){{currency_format($tongtienSuaChua[0]->tong_tien_sua_chua)}}@else 0 @endif</td>
            <td>{{ currency_format($tongtienmua[0]->sumtienban - $tongtienSuaChua[0]->tong_tien_sua_chua - $tongtienmua[0]->sumtienmua) }}</td>
        </tr>
        </tbody>
    </table>
</div>
