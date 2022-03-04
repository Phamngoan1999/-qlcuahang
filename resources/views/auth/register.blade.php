@extends('header.login')

@section('content')
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <div class="form-group text-center" style="font-weight: bold;">
                                Đăng ký tài khoản
                            </div>
                            <form method="POST" action="{{ route('register') }}" class="pt-3">
                                @csrf
                                <div class="form-group">
                                    <label for="">Họ tên <span class="obligatory">*</span></label>
                                    <input id="name" type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Username" autofocus>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Số điện thoại <span class="obligatory">*</span></label>
                                    <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"  placeholder="Số điện thoại">
                                    @error('email')
                                        @if($message == 'The email has already been taken.')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>Số điện thoại đã được đăng ký</strong>
                                            </span>
                                        @else
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @endif
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Mật khẩu <span class="obligatory">*</span></label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"  placeholder="Mật khẩu">
                                    @error('password')
                                        @if( $message =="The password confirmation does not match.")
                                            <span class="invalid-feedback" role="alert">
                                                <strong>Vui lòng nhập lại mật khẩu</strong>
                                            </span>
                                        @else
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @endif
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Xác nhận mật khẩu<span class="obligatory">*</span></label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"  placeholder="Xác nhận mật khẩu">
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group text-center">
                                            <button type="submit" class="btn btn-primary">
                                                Đăng ký tài khoản
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        label
        {
            font-weight: bold;
        }
        .obligatory
        {
            color: red;
        }
    </style>
@endsection
