@extends('header.login')

@section('content')
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth px-0">
            <div class="row w-100 mx-0">
                <div class="col-lg-4 mx-auto">
                    <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                        <h4 class="text-center">Đăng nhập hệ thống</h4>
                        <form method="POST" action="{{ route('login') }}" class="pt-3">
                            @csrf
                            <div class="form-group">
                                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" maxlength="10">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    @if($message == "The email field is required.")
                                    <strong>Vui lòng nhập chính xác số điện thoại</strong>
                                        @else
                                    <strong>{{ $message }}</strong>
                                    @endif
                                </span>
                                @enderror

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>Vui lòng nhập chính xác số điện thoại</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password">
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                    <label class="form-check-label text-muted">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        Lưu mật khẩu
                                    </label>
                                </div>
                            </div>
                            <div class="mt-3">
                                <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">
                                    Đăng nhập
                                </button>
                            </div>
                            <div class="text-center mt-4 font-weight-light">
                                <a href="{{route('register')}}" class="text-primary">Tạo tài khoản để bình luận? </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .invalid-feedback{
        padding-top: 10px!important;
    }
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    $(document).ready(function() {
        $('#email').keyup(function () {
            this.value = this.value.replace(/[^0-9\.]/g,'');
        });
    })
</script>
@endsection