<style>
    .themanh{
        width: 150px;
        height: 150px;
        border: 1px solid #f1f1f1;
        margin: 5px;
        display: inline-block;
        position: relative;
    }
    .anh{
        padding: 5px;
    }
    .xoa-anh{
        position: absolute;
        top: 5px;
        right: 5px;
    }
</style>
@foreach($listImage as $anh)
    <div class="themanh">
        <a href="{{ asset('uploads/images/'.$anh['duong_dan']) }}">
            <image src="{{ asset('uploads/images/'.$anh['duong_dan']) }}" class="anh"  width="150px" height="150px"/>
        </a>
        <button type="button" class="btn btn-danger xoa-anh xoa-anh-web" title = "Xóa ảnh"
                data-url = "{{route('quanlyxe.xoaanh',$anh['id'])}}">
            <i class="fas fa-trash-alt" aria-hidden="true"></i>
        </button>
    </div>
@endforeach
