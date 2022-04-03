<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Cửa hàng mua bán xe máy cũ Hồng Hoan</title>
    <link rel="icon" href="{{asset('Logo/lg.jpg')}}" type="image/x-icon">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" href="{{ asset('template/vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('template/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('template/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{ asset('template/vendors/select2/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/vendors/select2-bootstrap-theme/select2-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/vertical-layout-light/style.css')}}">
    <link rel="stylesheet" href="{{ asset('css/project.css')}}">
    <link rel="stylesheet" href="{{asset('font-awesome/all.css')}}">
    <link rel="stylesheet" href="{{asset('font-awesome/all.min.css')}}">
    <script src="{{ asset('js/jquery.min.js') }}" ></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <link rel="stylesheet" href="{{asset('template/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/checkbox.css')}}">
    <link rel="stylesheet" href="{{asset('css/box_image.css')}}">
    <link rel="stylesheet" href="{{asset('css/label.css')}}">
    <link rel="stylesheet" href="{{asset('css/slide.css')}}">
</head>
<body>
@if(\Session::has('message'))
    <script>
        $(document).ready(function (){
            toastr.success("{{ \Session::get('message') }}");
        });
    </script>
@endif
<div class="modal fade" id="show-modal"tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div style="text-align: center;margin: 100px;"><img src="{{asset('Logo/loading.gif')}}" alt="Loading" width="100px" height="100px"></div>
    </div>
</div>
<div class="container-scroller">
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
            <a class="navbar-brand brand-logo mr-5"><img src="{{asset('Logo/logo.png')}}" class="mr-2" alt="logo" width="200%"/></a>
            <a class="navbar-brand brand-logo-mini" href="#"><img src="{{asset('Logo/lg.jpg')}}" alt="logo" style="height: 34px!important;"/></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                <span class="icon-menu"></span>
            </button>
            <ul class="navbar-nav mr-lg-2">
                <li class="nav-item nav-search d-none d-lg-block">
                    <div class="input-group">
                        <div class="input-group-prepend hover-cursor" id="navbar-search-icon">

                        </div>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item nav-profile dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                        <i class="mdi mdi-account"></i>{{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                        <a class="dropdown-item"  href="{{ route('quanlytaikhoan.thongtintaikhoan') }}">
                            <i class="ti-settings text-primary"></i>
                            Thông tin tài khoản
                        </a>
                        <a class="dropdown-item"  href="{{ route('logout') }}"   onclick="event.preventDefault();  document.getElementById('logout-form').submit();">
                            <i class="ti-power-off text-primary"></i>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                            Logout
                        </a>
                    </div>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                <span class="icon-menu"></span>
            </button>
        </div>
    </nav>
    <div class="container-fluid page-body-wrapper">
        <div class="theme-setting-wrapper">
            <div id="settings-trigger"><i class="ti-settings"></i></div>
            <div id="theme-settings" class="settings-panel">
                <i class="settings-close ti-close"></i>
                <p class="settings-heading">SIDEBAR SKINS</p>
                <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
                <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
                <p class="settings-heading mt-2">HEADER SKINS</p>
                <div class="color-tiles mx-0 px-4">
                    <div class="tiles success"></div>
                    <div class="tiles warning"></div>
                    <div class="tiles danger"></div>
                    <div class="tiles info"></div>
                    <div class="tiles dark"></div>
                    <div class="tiles default"></div>
                </div>
            </div>
        </div>
        <div id="right-sidebar" class="settings-panel">
            <i class="settings-close ti-close"></i>
            <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
                </li>
            </ul>
            <div class="tab-content" id="setting-content">
                <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
                    <div class="add-items d-flex px-3 mb-0">
                        <form class="form w-100">
                            <div class="form-group d-flex">
                                <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                                <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                            </div>
                        </form>
                    </div>
                    <div class="list-wrapper px-3">
                        <ul class="d-flex flex-column-reverse todo-list">
                            <li>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox">
                                        Team review meeting at 3.00 PM
                                    </label>
                                </div>
                                <i class="remove ti-close"></i>
                            </li>
                            <li>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox">
                                        Prepare for presentation
                                    </label>
                                </div>
                                <i class="remove ti-close"></i>
                            </li>
                            <li>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox">
                                        Resolve all the low priority tickets due today
                                    </label>
                                </div>
                                <i class="remove ti-close"></i>
                            </li>
                            <li class="completed">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox" checked>
                                        Schedule meeting for next week
                                    </label>
                                </div>
                                <i class="remove ti-close"></i>
                            </li>
                            <li class="completed">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox" checked>
                                        Project review
                                    </label>
                                </div>
                                <i class="remove ti-close"></i>
                            </li>
                        </ul>
                    </div>
                    <h4 class="px-3 text-muted mt-5 font-weight-light mb-0">Events</h4>
                    <div class="events pt-4 px-3">
                        <div class="wrapper d-flex mb-2">
                            <i class="ti-control-record text-primary mr-2"></i>
                            <span>Feb 11 2018</span>
                        </div>
                        <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
                        <p class="text-gray mb-0">The total number of sessions</p>
                    </div>
                    <div class="events pt-4 px-3">
                        <div class="wrapper d-flex mb-2">
                            <i class="ti-control-record text-primary mr-2"></i>
                            <span>Feb 7 2018</span>
                        </div>
                        <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
                        <p class="text-gray mb-0 ">Call Sarah Graves</p>
                    </div>
                </div>
                <!-- To do section tab ends -->
                <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
                    <div class="d-flex align-items-center justify-content-between border-bottom">
                        <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
                        <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See All</small>
                    </div>
                    <ul class="chat-list">
                        <li class="list active">
{{--                            <div class="profile"><img src="../../images/faces/face1.jpg" alt="image"><span class="online"></span></div>--}}
                            <div class="info">
                                <p>Thomas Douglas</p>
                                <p>Available</p>
                            </div>
                            <small class="text-muted my-auto">19 min</small>
                        </li>
                        <li class="list">
{{--                            <div class="profile"><img src="../../images/faces/face2.jpg" alt="image"><span class="offline"></span></div>--}}
                            <div class="info">
                                <div class="wrapper d-flex">
                                    <p>Catherine</p>
                                </div>
                                <p>Away</p>
                            </div>
                            <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                            <small class="text-muted my-auto">23 min</small>
                        </li>
                        <li class="list">
{{--                            <div class="profile"><img src="../../images/faces/face3.jpg" alt="image"><span class="online"></span></div>--}}
                            <div class="info">
                                <p>Daniel Russell</p>
                                <p>Available</p>
                            </div>
                            <small class="text-muted my-auto">14 min</small>
                        </li>
                        <li class="list">
{{--                            <div class="profile"><img src="../../images/faces/face4.jpg" alt="image"><span class="offline"></span></div>--}}
                            <div class="info">
                                <p>James Richardson</p>
                                <p>Away</p>
                            </div>
                            <small class="text-muted my-auto">2 min</small>
                        </li>
                        <li class="list">
{{--                            <div class="profile"><img src="../../images/faces/face5.jpg" alt="image"><span class="online"></span></div>--}}
                            <div class="info">
                                <p>Madeline Kennedy</p>
                                <p>Available</p>
                            </div>
                            <small class="text-muted my-auto">5 min</small>
                        </li>
                        <li class="list">
{{--                            <div class="profile"><img src="../../images/faces/face6.jpg" alt="image"><span class="online"></span></div>--}}
                            <div class="info">
                                <p>Sarah Graves</p>
                                <p>Available</p>
                            </div>
                            <small class="text-muted my-auto">47 min</small>
                        </li>
                    </ul>
                </div>
                <!-- chat tab ends -->
            </div>
        </div>
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                @hasRole('admin')
                <li class="nav-item">
                    <a class="nav-link"  href="{{route("danhmuc.quanly")}}">
                        <i class="mdi mdi-file-multiple menu-icon"></i>
                        <span class="menu-title">Quản lý danh mục</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  href="{{route("quanlytaikhoan.quanly")}}">
                        <i class="mdi mdi-account-plus menu-icon"></i>
                        <span class="menu-title">Quản lý tài khoản</span>
                    </a>
                </li>
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link"  href="{{route("quanlykhachhang.khachang")}}">--}}
{{--                        <i class="mdi mdi-format-align-justify menu-icon"></i>--}}
{{--                        <span class="menu-title">Quản lý khách hàng</span>--}}
{{--                    </a>--}}
{{--                </li>--}}

                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#kh-basic" aria-expanded="false" aria-controls="ui-basic">
                        <i class="icon-layout menu-icon"></i>
                        <span class="menu-title">Quản lý khách hàng</span>&nbsp;&nbsp;
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="kh-basic">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item" > <a class="nav-link" style="background: #4b49ac;" href="{{route("quanlykhachhang.khachang")}}">Quản lý khách hàng</a></li>
                            <li class="nav-item"> <a class="nav-link" style="background: #4b49ac;" href="{{route('quanlykhachhang.search_lich_su_khach_hang')}}">Tra cứu thông tin</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route("quanlyxe.quanly")}}">
                        <i class="mdi mdi-format-align-justify menu-icon"></i>
                        <span class="menu-title">Quản lý thông tin xe</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route("quanlybinhluan.quanly")}}">
                        <i class="mdi mdi-message-text menu-icon"></i>
                        <span class="menu-title">Quản lý bình luận</span>
                    </a>
                </li>
                @endhasRole
                @hasRole('admin')
                <li class="nav-item">
                    <a class="nav-link" href="{{route("quanlysuachua.quanly")}}" aria-expanded="false"  aria-controls="ui-basic">
                        <i class="icon-grid menu-icon" ></i>
                        <span class="menu-title">Quản lý sửa chữa</span>
                    </a>
                </li>
                @endhasRole
                @hasRole('cuahanglienket')
                <li class="nav-item">
                    <a class="nav-link" href="{{route("quanlysuachua.quanlycuahang")}}" aria-expanded="false"  aria-controls="ui-basic">
                        <i class="icon-grid menu-icon" ></i>
                        <span class="menu-title">Quản lý sửa chữa</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route("quanlysuachua.quanlydichvu")}}" aria-expanded="false"  aria-controls="ui-basic">
                        <i class="icon-grid menu-icon" ></i>
                        <span class="menu-title">Quản lý dịch vụ</span>
                    </a>
                </li>
                @endhasRole
                @hasRole('admin')
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                        <i class="icon-layout menu-icon"></i>
                        <span class="menu-title">Báo cáo thống kê</span>&nbsp;&nbsp;
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-basic">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item" > <a class="nav-link" style="background: #4b49ac;" href="{{route('baocaothongke.quanly')}}">Báo cáo thống kê </a></li>
                            <li class="nav-item"> <a class="nav-link" style="background: #4b49ac;" href="{{route('baocaothongke.baocaoxemua')}}">Thống kê xe mua</a></li>
                            <li class="nav-item"> <a class="nav-link" style="background: #4b49ac;" href="{{route('baocaothongke.baocaoxeban')}}">Thống kê xe bán</a></li>
                        </ul>
                    </div>
                </li>
                @endhasRole
            </ul>
        </nav>
        <div class="main-panel">
        @yield('content')
            <!-- partial -->
        </div>
    </div>
</div>
<script src="{{ asset('template/vendors/js/vendor.bundle.base.js')}}"></script>
<script src="{{ asset('template/vendors/typeahead.js/typeahead.bundle.min.js')}}"></script>
<script src="{{ asset('template/vendors/select2/select2.min.js')}}"></script>
<script src="{{ asset('template/js/off-canvas.js')}}"></script>
<script src="{{ asset('template/js/hoverable-collapse.js')}}"></script>
<script src="{{ asset('template/js/template.js')}}"></script>
<script src="{{ asset('template/js/settings.js')}}"></script>
<script src="{{ asset('template/js/todolist.js')}}"></script>
<script src="{{ asset('template/js/file-upload.js')}}"></script>
<script src="{{ asset('template/js/typeahead.js')}}"></script>
<script src="{{ asset('template/js/select2.js')}}"></script>
</body>
</html>
