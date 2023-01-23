@extends('buyer/header-footer-buyer')

@section('title')
<title>Đăng ký ngay | Shopee Việt Nam</title>
@endsection

@push('styles')
<!-- Link css buyer/register -->
<link href="{{ asset('/css/buyer/register.css') }}" rel="stylesheet">
@endpush

@section('header')
Đăng ký
@endsection

@section('main')
<div class="main d-flex justify-content-center align-items-center">
    <div class="main__form--wrapper d-flex justify-content-end align-items-center">
        <form action="{{ route('buyer.register.store') }}" method="post" class="main__form card p-4">
            @csrf
            <div class="main__form--title mb-3">
                Đăng ký
            </div>
            <div class="main__form--div">
                <div class="mb-3">
                    <input id="email" class="w-100 form-control" type="text" placeholder="Email" autocomplete="off" name="email">
                    @if($errors->get('email'))
                    @foreach($errors->get('email') as $errorEmail)
                    <span class="text-danger">* {{$errorEmail}}</span>
                    @endforeach
                    @endif
                </div>
                <div class="mb-3">
                    <input id="password" class="w-100 form-control" type="text" placeholder="Mật khẩu" autocomplete="off" name="password">
                    @if($errors->get('password'))
                    @foreach($errors->get('password') as $errorPassword)
                    <span class="text-danger">* {{$errorPassword}}</span>
                    @endforeach
                    @endif
                </div>
            </div>
            <button id="register" class="main__form--insert mb-4" type="submit">
                TIẾP THEO
            </button>
            <div class="main__form--or d-flex justify-content-between align-items-center mb-4">
                <div class="main__form--or-line w-100"></div>
                <span class="main__form--or-span mx-3">
                    HOẶC
                </span>
                <div class="main__form--or-line w-100"></div>
            </div>
            <div class="mb-3">
                <div id="loading">Loading...</div>
                <div id="loaded" class="hidden">
                    <div id="main">
                        <div id="user-signed-in" class="hidden">
                            <div id="user-info">
                                <div id="photo-container">
                                    <img id="photo">
                                </div>
                                <div id="name"></div>
                                <div id="email"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div id="user-signed-out" class="hidden">
                            <div id="firebaseui-spa">
                                <div id="firebaseui-container"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main__form--terms-security text-center mx-5 mb-4">
                Bằng việc đăng kí, bạn đã đồng ý với Shopee về <a>Điều khoản dịch vụ</a> & <a>Chính sách bảo mật</a>
            </div>
            <div class="main__form--nav text-center">
                Bạn đã có tài khoản? <a href="{{route('buyer.login')}}">Đăng nhập</a>
            </div>
        </form>
    </div>
</div>
@endsection

@section('modal')
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                Mã xác thực (OTP) sẽ được gửi qua tin nhắn số điện thoại bạn
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Trở lại</button>
                <button id="register" type="button" class="btn btn-primary" data-bs-dismiss="modal">Gửi</button>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<!-- Script firebase -->
<script src="https://www.gstatic.com/firebasejs/4.3.1/firebase.js"></script>
<script>
    // Initialize Firebase
    var config = {
        apiKey: "AIzaSyAZPRuZo_Ouy5wMUUHZs_4Up4CWq7u7tSk",
        authDomain: "login-8bb97.firebaseapp.com",
        projectId: "login-8bb97",
        storageBucket: "login-8bb97.appspot.com",
        messagingSenderId: "559992000787",
        appId: "1:559992000787:web:22869cc41d6a430435cae6",
        measurementId: "G-X23GK1RTWK"
    };
    firebase.initializeApp(config);
</script>
<script src="https://cdn.firebase.com/libs/firebaseui/2.3.0/firebaseui.js"></script>
<!-- Link script buyer/register -->
<script src="{{ asset('/js/buyer/register.js') }}"></script>
@endpush