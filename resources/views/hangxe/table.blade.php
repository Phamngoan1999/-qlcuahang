<p style="display: none;">{{ $stt = 0 }}</p>
@foreach($hangXe as $hang)
    <tr>
        <td>{{$stt+1}}</td>
        <td>{{$hang->ten_hang_xe}}</td>
        <td>
            <button type="button" class="btn btn-warning show-modal-hang-xe"
                    data-url-show="{{route('danhmuc.show-hang-xe',$hang->id)}}"
                    value="{{$hang->id}}"><i class="far fa-edit"></i>
            </button>
            <button type="button" class="btn btn-danger xoa-hang-xe"
                    data-url-delete="{{route('danhmuc.delete-hang-xe',$hang->id)}}" >
                <i class="fas fa-trash-alt"></i>
            </button>
        </td>
    </tr>
    <p style="display: none;">{{ $stt=$stt+1 }}</p>
@endforeach
