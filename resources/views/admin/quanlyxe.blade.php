@extends('header.quanly')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Quản lý thông tin xe</h4>
                        <form action="" id="form-search">
                            <div class="row" style="padding-top: 20px;">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="bien_so_search"  placeholder="Biển số">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="ten_khach_hang"  placeholder="Tên khách hàng">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <button type="button" class="btn btn-primary" id="search" data-url="{{route('quanlyxe.search')}}">Tìm kiếm</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="table-responsive pt-3">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Biển số</th>
                                        <th>Đăng ký tại</th>
                                        <th>Ngày mua</th>
                                        <th>Tác vụ</th>
                                    </tr>
                                </thead>
                                <tbody id="danh-sach">
                                    @foreach($listXe as $key => $iterm)
                                        <tr>
                                            <td>{{$key + 1}}</td>
                                            <td>{{$iterm->bien_so}}</td>
                                            <td>{{$iterm->dang_ky_tai}}</td>
                                            <td>{{$iterm->ngay_mua}}</td>
                                            <td>
                                                <a href="{{route("quanlyxe.editthongtinxe",$iterm->id)}}" class="btn btn-warning" ><i class="far fa-edit"></i></a>

                                                <a href="{{route("quanlyxe.khachhangmuaxe",$iterm->id)}}" class="btn btn-primary" >Khách hàng mua xe</a>

                                                <a href="{{route("quanlyxe.dangthongtinxe",$iterm->id)}}" class="btn btn-primary" >Đăng thông tin xe</a>

                                                <button type="button" class="btn btn-danger xoa-thong-tin-xe"
                                                        data-url="{{route("quanlyxe.xoathongtinxe",$iterm->id)}}">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="paginate float-right text-right" style="padding: 10px 0px;">
                                    {{$listXe->appends(request()->all())->links()}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        // $('.pagination a').unbind('click').on('click', function(e) {
        //     e.preventDefault();
        //     var page = $(this).attr('href').split('page=')[1];
        //     getPosts(page);
        // });
        //
        // function getPosts(page)
        // {
        //     $.ajax({
        //         type: "GET",
        //         url: '?page='+ page
        //     })
        //     .done(function (response) {
        //         console.log(response);
        //         $('danh-sach').html(response);
        //     });
        // }
    </script>
    <script type="module" src="{{asset('js/admin/xe.js')}}"></script>
@endsection
