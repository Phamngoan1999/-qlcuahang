<p style="display: none;">{{ $stt = 0 }}</p>
@foreach($loaiXe as $loai)
    <tr>
        <td>{{$stt+1}}</td>
        <td>{{$loai->ten_loai_xe}}</td>
        <td>
            <button type="button" class="btn btn-warning show-modal-loai-xe" data-url="{{route('danhmuc.show-loai-xe',$loai->id)}})}}" value="{{$loai->id}}"><i class="far fa-edit"></i>
            </button>
            <button type="button" class="btn btn-danger xoa-loai-xe" data-url="{{route('danhmuc.delete-loai-xe',$loai->id)}})}}">
                <i class="fas fa-trash-alt"></i>
            </button>
        </td>
    </tr>
    <p style="display: none;">{{ $stt=$stt+1 }}</p>
@endforeach
