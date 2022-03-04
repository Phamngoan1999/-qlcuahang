<p style="display: none;">{{ $stt = 0 }}</p>
@foreach($dongXe as $dong)
    <tr>
        <td>{{$stt+1}}</td>
        <td>{{$dong->ten_dong_xe}}</td>
        <td>
            @foreach($dong->hangxe as $hang)
                {{$hang->ten_hang_xe}}
            @endforeach
        </td>
        <td>
            @foreach($dong->loaixe as $loai)
                {{$loai->ten_loai_xe}}
            @endforeach
        </td>
        <td>
            <button type="button" class="btn btn-warning show-dong-xe" data-url="{{route('danhmuc.show-dong-xe',$dong->id)}}" value="{{$dong->id}}"><i class="far fa-edit"></i>
            </button>
            <button type="button" class="btn btn-danger xoa-dong-xe" data-url="{{route('danhmuc.delete-dong-xe',$dong->id)}})}}">
                <i class="fas fa-trash-alt"></i>
            </button>
        </td>
    </tr>
    <p style="display: none;">{{ $stt=$stt+1 }}</p>
@endforeach
