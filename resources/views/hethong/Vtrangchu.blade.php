@extends('Hethong.layout.header')
@section('content')
    <style>
        .select2-container--default .select2-selection--single .select2-selection__rendered {
            line-height: 20px;
        }
    </style>
    <link rel="stylesheet" href="{{asset('css/trangchu.css')}}">
{{--    <link rel="stylesheet" href="{{asset('css/trangchubutton.css')}}">--}}
    <script src="{{asset('js/nguoidung/hethong.js')}}"></script>
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                     data-aos="fade-up" data-aos-delay="200">
                    <h1>Cửa hàng chuyên mua bán xe máy cũ <br>Hồng Hoan</h1>
                    <h2>Chúng tôi rất vinh hạnh khi được phục vụ quý khách</h2>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="#contact" class="btn-get-started scrollto">Thông tin liên hệ</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <form action="{{route('Trangchu')}}" method="GET" id="tim-kiem-theo-dieu-kien">
                        <div class="box-timkiem">
                            <div class="row-input">
                                <select class="js-example-basic-single w-100" name="hang_xe">
                                    <option value="">Hãy chọn hãng xe</option>
                                    @foreach($hangxe as $hxe)
                                        <option value="{{$hxe->id}}" @if($request->hang_xe == $hxe->id) selected @endif>{{$hxe->ten_hang_xe}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="row-input">
                                <select class="js-example-basic-single w-100" name="loai_xe">
                                    <option value="">Hãy chọn loại xe</option>
                                    @foreach($loaixe as $lxe)
                                    <option value="{{$lxe->id}}"  @if($lxe->id == $request->loai_xe) selected @endif>{{$lxe->ten_loai_xe}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="row-input">
                                <select class="js-example-basic-single w-100" name="khoang_gia">
                                    <option value="">Xe có khoảng giá</option>
                                    <option value="Dưới 10Đ" @if($request->khoang_gia == "Dưới 10Đ") selected @endif>Dưới 10Đ</option>
                                    <option value="Từ 10Đ - 20Đ" @if($request->khoang_gia == "Từ 10Đ - 20Đ") selected @endif>Từ 10Đ - 20Đ</option>
                                    <option value="Từ 20Đ - 30Đ" @if($request->khoang_gia == "Từ 20Đ - 30Đ") selected @endif>Từ 20Đ - 30Đ</option>
                                    <option value="Trên 30Đ" @if($request->khoang_gia == "Trên 30Đ") selected @endif>Trên 30Đ</option>
                                </select>
                            </div>
                            <div class="row-input">
                                <div class="form-group text-center">
{{--                                    <button type="button" id="tim-kiem" class="btn-search btn-search-3 hover-border-3" >--}}
{{--                                        <span>Tìm kiếm</span>--}}
{{--                                    </button>--}}
                                    <button type="button" id="tim-kiem" class="btn btn-primary btn-get-started scrollto" style="border: none;"><i class="icon-search"></i> Tìm kiếm</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <main id="main">
        <section id="cliens" class="cliens section-bg">
            <div class="container">
                <div class="row" data-aos="zoom-in">
                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{asset('Logo/hoda.png')}}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{asset('Logo/yamaha.png')}}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{asset('Logo/Kawasaki.jpg')}}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{asset('Logo/sym.png')}}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{asset('Logo/sujuky.png')}}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{asset('Logo/triumky.jpg')}}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section id="pricing" class="pricing faq section-bg">
            <div class="container" style="background: #ffff;">
                <div class="row" style="padding-top: 10px;">
                    <div class="col-md-12" style="border-bottom: 1px solid #f1f1f1;">
                        <h3>Tin đăng mới nhất</h3>
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

        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Liên hệ với chúng tôi</h2>

                </div>
                <div class="row">
                    <div class="col-lg-5 d-flex align-items-stretch">
                        <div class="info">
                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Liên hệ:</h4>
                                <p>+(084) 0339845495</p>
                            </div>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                                frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                        </div>

                    </div>

                    <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                        <form method="post" class="php-email-form" action="{{route("quanlybinhluan.luuphanhoi")}}"  id="luu-phan-hoi">
                            @csrf
                            <p>Hãy liên hệ với chúng tôi để nhận tư vấn phù hợp nhất với bạn</p>
                            <div class="form-group">
                                <p>Nội dung phản hồi</p>
                                <textarea class="form-control" name="noidung" rows="10" ></textarea>
                            </div>
                            <div class="error error-noidung"></div>
                            <div class="text-center">
                                <button type="button" id="luu-binh-luan" class="btn btn-primary">Lưu phản hồi</button>
                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </section>
    </main>
    <script type="module" src="{{asset('js/nguoidung/trangchu.js')}}"></script>
@endsection
