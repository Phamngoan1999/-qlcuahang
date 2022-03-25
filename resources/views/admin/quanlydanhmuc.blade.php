@extends('header.quanly')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Quản lý hãng xe</h4>
                        <button type="button" class="btn btn-primary btn-click-hangxe" data-toggle="modal" data-target="#add-hang-xe-modal">Thêm hãng xe</button>
                        <div class="table-responsive pt-3">
                            <p style="display: none;">{{ $stt = 0 }}</p>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Hãng xe</th>
                                        <th> Tác vụ </th>
                                    </tr>
                                </thead>
                                <tbody id="danh-sach-hang-xe">
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
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Quản lý Loại Xe</h4>
                        <button type="button" class="btn btn-primary mr-2 btn-click-loaixe" data-toggle="modal" data-target="#modal-add-loai-xe">Thêm Loại Xe</button>
                        <div class="table-responsive pt-3">
                            <p style="display: none;">{{ $stt = 0 }}</p>
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Loại xe</th>
                                    <th> Tác vụ </th>
                                </tr>
                                </thead>
                                <tbody id="danh-sach-loai-xe">
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
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Quản lý dòng xe</h4>
                        <button type="button" class="btn btn-primary btn-add-dong-xe" data-toggle="modal" data-target="#btn-add-dong-xe">Thêm dòng xe</button>
                        <div class="table-responsive pt-3">
                            <p style="display: none;">{{ $stt = 0 }}</p>
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Dòng xe</th>
                                    <th>Loai xe</th>
                                    <th>Hãng xe</th>
                                    <th> Tác vụ </th>
                                </tr>
                                </thead>
                                <tbody id="danh-sach-dong-xe">
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
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="btn-add-dong-xe" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Thêm dòng xe</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="form-add-dong-xe-post">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Tên dòng xe</label>
                            <input type="text" class="form-control ten_dong_xe" name="ten_dong_xe" placeholder="Dòng xe">
                            <div class="error error-ten_dong_xe"></div>
                        </div>
                        <div class="form-group">
                            <label for="">Tên hãng xe</label>
                            <div class="row" style="padding: 10px 15px;">
                                <select class="js-example-basic-single" name="iMa_hang_xe" style="width: 440px!important;">
                                    <option value="">Hãng xe</option>
                                    @foreach($hangXe as $iterm)
                                        <option value="{{ $iterm->id }}">{{ $iterm->ten_hang_xe }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="error error-iMa_hang_xe"></div>
                        </div>
                        <div class="form-group">
                            <label for="">Loại xe</label>
                            <div class="row" style="padding: 10px 15px;">
                                <select class="js-example-basic-single" name="iMa_loai_xe" style="width: 440px!important;">
                                    <option value="">Loại xe</option>
                                    @foreach($loaiXe as $iterm)
                                        <option value="{{ $iterm->id }}">{{ $iterm->ten_loai_xe }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="error error-iMa_loai_xe"></div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                        <button type="button" class="btn btn-primary" id="add-dong-xe" data-url="{{route('danhmuc.create-dong-xe')}}">Lưu</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @include('loaixe.view')

    @include('hangxe.view')

    @include('dongxe.view')

    <script type="module" src="{{asset('js/danhmuc.js')}}"></script>
@endsection
