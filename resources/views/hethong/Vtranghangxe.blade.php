@extends('hethong.layout.header')
@section('content')
    <link rel="stylesheet" href="{{asset('css/trangchu.css')}}">
    <section id="breadcrumbs" class="breadcrumbs" class="pricing faq section-bg">
        <div class="container" style="background: #ffff;">
            <div class="row" style="padding-top: 10px;">
                <div class="col-md-12" style="border-bottom: 1px solid #f1f1f1;">
                    <ol>
                        <li><a href="{{route('Trangchu')}}">Trang chủ</a></li>
                        @foreach($hangxe as $hxe)
                            @if($hxe->id == $id)
                                <li> {{$hxe->ten_hang_xe}}</li>
                            @endif
                        @endforeach
                    </ol>
                    @foreach($hangxe as $hxe)
                        @if($hxe->id == $id)
                            <h2>{{$hxe->ten_hang_xe}}</h2>
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="row padding-row" style="padding-top: 10px;">

                @foreach($danhsachXeNew as $xe)
                    <div class="col-md-3" style="padding: 10px;">
                        <div class="box-infor-xe padding-iterm background-hover" style="border: 1px solid #f1f1f1;">
                            <div class="iterm-chitiet">
                                <a href="">
                                    @foreach($xe->anh as $key)
                                        @if($key->iMa_loai_anh == 4)
                                            <img
                                                src="{{asset("uploads/images/".$key->duong_dan)}}"
                                                alt="" width="100%" height="100%">
                                        @endif
                                    @endforeach
                                </a>
                            </div>
                            <div class="row" style="padding-top: 0px;background: rgba(61, 77, 106, 1);">
                                <div class="link-row" style="display: inline; padding: 10px;">
                                    @foreach($xe->anh as $key)
                                        @if($key->iMa_loai_anh == 4)
                                            <a href="{{asset("uploads/images/".$key->duong_dan)}}"
                                               data-gallery="portfolioGallery"
                                               class="portfolio-lightbox preview-link css-plus"
                                               title="{{$xe->dongxe->ten_dong_xe}}">
                                                <i class="bx bx-plus"></i>
                                            </a>
                                        @endif
                                    @endforeach
                                    <a href="{{route('trangchitiet',$xe->id)}}" class="details-link  css-plus"
                                       title="More Details">
                                        <i class="bx bx-link"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="row" style="padding-top: 10px;">
                                <div class="col-row-right">
                                    <p>{{$xe->dongxe->loaixe[0]->ten_loai_xe}} - {{$xe->dongxe->ten_dong_xe}}</p>
                                </div>
                                <div class="col-row-left">
                                    <p style="color: red;font-weight: bold;">Giá: {{$xe->gia_dang_web}}</p>
                                </div>
                                <div class="col-row-right">
                                    <p>Hãng xe: {{$xe->dongxe->hangxe[0]->ten_hang_xe}}</p>
                                </div>
                                <div class="col-row-right">
                                    <p><i class="mdi mdi-av-timer"></i> {{format_thoi_gian($xe->updated_at)}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="paginate float-right text-right text-center" style="padding: 10px 0px;">
                        {{$danhsachXeNew->appends(request()->all())->links()}}
                    </div>
                </div>
            </div>
        </div>
    </section>

    </main>
@endsection




