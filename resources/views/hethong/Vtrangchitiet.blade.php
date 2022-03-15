@extends('hethong.layout.header')
@section('content')
    <link href="{{asset('css/jquerysctipttop.css')}}" rel="stylesheet" type="text/css">
    <script src="{{asset('js/jquery-3.4.1.min.js')}}" ></script>
    <script src="{{asset('css/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('zoom/jquery.exzoom.js')}}"></script>
    <link href="{{asset('zoom/jquery.exzoom.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/box_message.css')}}" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/trangchitiet.css')}}">
    <main id="main">
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="{{route('Trangchu')}}">Trang chủ</a></li>
                    <li>
                        @foreach($hangXe as $hx)
                            @if($thongTinXe[0]['dongxe']['iMa_hang_xe'] == $hx->id)
                                {{$hx->ten_hang_xe}}
                            @endif
                        @endforeach
                    </li>
                </ol>
                <h2>{{$thongTinXe[0]['dongxe']['ten_dong_xe']}}</h2>
            </div>
        </section>
        <section id="portfolio-details" class="portfolio-details">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-5">
                        <div class="portfolio-details-container">
                            <div class="exzoom hidden" id="exzoom">
                                <div class="exzoom_img_box">
                                    <ul class='exzoom_img_ul'>
                                        @foreach($thongtinAnh as $anh)
                                            <li>
                                                <img src="{{asset("uploads/images/".$anh['duong_dan'])}}"/>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="exzoom_nav"></div>
                                <p class="exzoom_btn">
                                    <a href="javascript:void(0);" class="exzoom_prev_btn"> < </a>
                                    <a href="javascript:void(0);" class="exzoom_next_btn"> > </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="portfolio-info">
                            <h3>Thông tin chi tiết xe</h3>
                            <div class="row" style="padding: 10px;">
                                <div class="col-md-6">
                                    <img src="{{asset('Logo/hangxe.png')}}" alt="Hãng xe"> <strong>Hãng xe</strong>:
                                    @foreach($hangXe as $hx)
                                        @if($thongTinXe[0]['dongxe']['iMa_hang_xe'] == $hx->id)
                                            {{$hx->ten_hang_xe}}
                                        @endif
                                    @endforeach
                                </div>
                                <div class="col-md-6">
                                    <img src="{{asset('Logo/dongxe.png')}}" alt="Hãng xe"> <strong>Dòng xe</strong>: {{$thongTinXe[0]['dongxe']['ten_dong_xe']}}
                                </div>
                            </div>
                            <div class="row" style="padding: 10px;">
                                <div class="col-md-6">
                                    <img src="{{asset('Logo/duntich.png')}}" alt="Hãng xe"> <strong>Dung tích xe</strong>: {{$thongTinXe[0]['dung_tich']}}
                                </div>
                                <div class="col-md-6">
                                    <img src="{{asset('Logo/loaixe.png')}}" alt="Hãng xe"> <strong>Loại xe</strong>:
                                    @foreach($loaiXe as $lx)
                                        @if($thongTinXe[0]['dongxe']['iMa_loai_xe'] == $lx->id)
                                            {{$lx->ten_loai_xe}}
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                            <div class="row" style="padding: 10px;">
                                <div class="col-md-6">
                                    <img src="{{asset('Logo/namdangky.png')}}" alt="Hãng xe"> <strong>Năm đăng ký</strong>: {{$thongTinXe[0]['nam_dang_ky']}}
                                </div>
                                <div class="col-md-6">
                                    <img src="{{asset('Logo/sokmchay.png')}}" alt="Hãng xe"> <strong>Số Km đã đi</strong>: {{$thongTinXe[0]['so_km_da_di']}}
                                </div>
                            </div>
                            <div class="row" style="padding: 10px;">
                                <div class="col-md-6">
                                    <img src="{{asset('Logo/buy_protection.png')}}" alt="Hãng xe"> <strong>Giá tiền</strong>: {{$thongTinXe[0]['gia_dang_web']}}
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-description">
                            <h2>Quyền lợi khách hàng</h2>
                            <div class="row" style="padding: 10px;">
                                <div class="col-md-12">
                                    <strong><span style="background: #ffbd46;color: #fff;padding: 5px 8px;  border-radius: 2px;"><i class="mdi mdi-checkbox-multiple-marked-outline" aria-hidden="true"></i></span></strong> Xe có nguồn gốc rõ ràng
                                </div>
                            </div>
                            <div class="row" style="padding: 10px;">
                                <div class="col-md-12">
                                    <strong><span style="background: #ffbd46;color: #fff;padding: 5px 8px;  border-radius: 2px;"><i class="mdi mdi-checkbox-multiple-marked-outline" aria-hidden="true"></i></span></strong> Cửa hàng có đầy đủ dịch vụ Sang tên, đổi biển, cấp lại đăng ký cho khách trong thời gian ngắn nhất
                                </div>
                            </div>
                            <div class="row" style="padding: 10px;">
                                <div class="col-md-12">
                                    <strong><span style="background: #ffbd46;color: #fff;padding: 5px 8px;  border-radius: 2px;"><i class="mdi mdi-checkbox-multiple-marked-outline" aria-hidden="true"></i></span></strong> Mua lại xe giá cao khi khách không có nhu cầu sử dụng.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="portfolio-details" class="portfolio-details" style="background: #f3f5fa;">
            <div class="container">
                <div class="row">
                    <div class="col-md-8"  style="border: 1px solid #f1f1f1;color: #000; background: #fff;padding: 5px;">
                        <div class="row" style="padding: 20px;">
                            <form method="post" id="them-binh-luan" action="{{route('quanlybinhluan.create')}}">
                                @csrf
                                <input type="text" style="display: none;" name="sMaxe" value="{{$id}}">
                                <div class="col-md-12"style="position: relative;">
                                    <input type="text" name="comment" @guest value="Vui lòng đăng nhập để bình luận"@else value="" @endguest placeholder="Thêm bình luận ..."  style="height: 70px;border: 1px solid #ccc;box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);width:100%;">
                                    <button type="button" class="msg_send_btn" data-url="{{route('quanlybinhluan.create')}}" ><i class="mdi mdi-telegram"></i></button>
                                </div>
                            </form>
                            <div class="error error-comment"></div>
                        </div>
                        <div class="row" style="padding: 0px 20px;">
                            @foreach($binhluan as $iterm)
                            <div class="incoming_msg">
                                <div class="incoming_msg_img"> <img src="{{asset('Logo/user-profile.png')}}" alt="sunil"> </div>
                                <div class="received_msg">
                                    <div class="received_withd_msg">
                                        <p class="border-bot border-toprs"><strong>{{$iterm->users->name}}</strong></p>
                                        <p class="border-buttomrs">{{$iterm->noi_dung}}</p>
                                        <span class="time_date">
                                        <button type="button" class="khongmau" name="dislike">{{ format_thoi_gian($iterm->thoi_gian_binh_luan) }}</button>
                                    </span>
                                    </div>
                                </div>
                            </div>
                            @if(!empty($iterm->binh_luan_tra_loi))
                                <div class="outgoing_msg">
                                    <div class="sent_msg">
                                        <p class="border-bot border-toprs"><strong>Chủ cửa hàng</strong></p>
                                        <p>{{$iterm->binh_luan_tra_loi}}</p>
                                    </div>
                                </div>
                            @endif
                            @endforeach
                        </div>
                        <div class="row">
                            <div class="col-lg-12" >
                                <div class="paginate float-right text-right" style="padding: 10px 20px;float: right;">
                                    {{$binhluan->appends(request()->all())->links()}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" >
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.2132888514643!2d105.83606691424458!3d20.984085694679415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac5d747a4447%3A0xcdd3ca11fe77c6ba!2zMTY4IMSQ4buLbmggQ8O0bmcsIFRoYW5oIFh1w6JuLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1627551955816!5m2!1svi!2s" width="100%" height="300px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script type="text/javascript">
        $('.container').imagesLoaded( function() {
            $("#exzoom").exzoom({
                autoPlay: false,
            });
            $("#exzoom").removeClass('hidden')
        });
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-36251023-1']);
        _gaq.push(['_setDomainName', 'jqueryscript.net']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();

    </script>
    <script type="module" src="{{asset('js/nguoidung/them_binh_luan.js')}}"></script>
@endsection




