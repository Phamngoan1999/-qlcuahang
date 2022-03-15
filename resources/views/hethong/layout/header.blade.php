<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Cửa hàng mua bán xe máy cũ Hồng Hoan</title>
    <link rel="icon" href="{{asset('Logo/lg.jpg')}}" type="image/x-icon">
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link href="{{asset('Template/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link href="{{asset('Template/assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('Template/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('Template/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('Template/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('Template/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('Template/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('Template/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
    <link href="{{asset('Template/assets/css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('template/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{ asset('template/vendors/feather/feather.css') }}">


    <link rel="stylesheet" href="{{ asset('template/vendors/select2/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/vendors/select2-bootstrap-theme/select2-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hethong.css')}}">
    <script src="{{ asset('js/jquery.min.js') }}" ></script>
    <link rel="stylesheet" href="{{ asset('toast/demos/css/jquery.toast.css') }}" >
    <link rel="stylesheet" href="{{ asset('template/vendors/ti-icons/css/themify-icons.css') }}">
    <script type="text/javascript" src="{{asset('toast/demos/js/jquery.toast.js')}}"></script>
</head>
<body id="body">
<header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">
        <h1 class="logo me-auto"><a href="index.html">HỒng Hoan</a></h1>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto " href="{{route('Trangchu')}}">Trang chủ</a></li>
                <li class="dropdown"><a href="#"><span>Hãng xe</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        @foreach($hangxe as $hxe)
                            <li><a href="{{route('tranghangxe',$hxe->id)}}">{{$hxe->ten_hang_xe}}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="#contact">Liên hệ</a></li>
                @guest
                    <li><a class="getstarted scrollto" href="/login">Đăng nhập</a></li>
                @else
                    <li><a class="getstarted scrollto"
                           href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">Đăng xuất</a></li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @endguest
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
    </div>
</header>

@if(\Session::has('message'))
    <script>
        $.toast({
            heading: 'Success',
            text: "{{ \Session::get('message') }}",
            showHideTransition: 'slide',
            icon: 'success',
            position: 'top-right',
        });
    </script>
@endif
<div class="modal fade" id="show-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div style="text-align: center;margin: 100px;"><img src="{{asset('Logo/loading.gif')}}" alt="Loading" width="100px" height="100px"></div>
    </div>
</div>
@yield('content')

<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 footer-contact">
                    <h3>HỒNG HOAN</h3>
                    <p>
                        Đông La, Đông Hưng<br>
                        Thái Bình<br><br>
                        <strong>Điện thoại:</strong> 0339845495<br>
                    </p>
                </div>
                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Thông tin </h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{route("Trangchu")}}">Trang chủ</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{route("thongtincuahang")}}">Thông tin cửa hàng</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#contact">Liên hệ</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">

                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Thông tin liên hệ</h4>
                    <div class="social-links mt-3">
                        <a href="https://twitter.com/home" class="twitter"><i class="bx bxl-twitter"></i></a>
                        <a href="https://www.facebook.com/profile.php?id=100028165189199" class="facebook"><i class="bx bxl-facebook"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container footer-bottom clearfix">
        <div class="copyright">
            &copy; Copyright <strong><span>Arsha</span></strong>. All Rights Reserved
        </div>
        <div class="credits">Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
        <div class="credits">

            Distributed by <a href="https://themewagon.com/">Themewagon</a>

        </div>
    </div>
</footer>
<script src="{{asset('Template/assets/vendor/aos/aos.js')}}"></script>
<script src="{{ asset('template/vendors/select2/select2.min.js')}}"></script>
<script src="{{ asset('template/js/select2.js')}}"></script>
<script src="{{asset('Template/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('Template/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset('Template/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('Template/assets/vendor/php-email-form/validate.js')}}"></script>
<script src="{{asset('Template/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('Template/assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
<script src="{{asset('Template/assets/js/main.js')}}"></script>
</body>
</html>
