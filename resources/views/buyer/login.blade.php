@extends('buyer/header-footer-buyer')

@section('title')
<title>Đăng nhập tài khoản - Mua sắm Online | Shopee Việt Nam</title>
@endsection

@push('styles')
<!-- Link css buyer/login -->
<link href="{{ asset('/css/buyer/login.css') }}" rel="stylesheet">
@endpush

@section('header')
Đăng nhập
@endsection

@section('main')

@if (Session::has("success"))
<script>
    alert("{{ Session::get('success') }}")
</script>
@endif

<div class="main d-flex justify-content-center align-items-center">
    <div class="main__form--wrapper d-flex justify-content-end align-items-center">
        <form action="{{ route('buyer.check-login') }}" method="post" class="main__form card p-4">
            @csrf
            <div class="main__form--title mb-4">
                Đăng nhập
            </div>
            <div class="main__form--div mb-3">
                <input id="main__form--div-input-email" type="text" class="w-100 form-control" placeholder="Email / Name / Phone" autocomplete="off" name="email">
                @if($errors->get('email'))
                @foreach($errors->get('email') as $errorEmail)
                <span class="text-danger">* {{$errorEmail}}</span>
                @endforeach
                @endif
            </div>
            <div class="main__form--div mb-3">
                <input id="main__form--div-input-pass" type="password" class="w-100 form-control" placeholder="Mật khẩu" autocomplete="off" name="password">
                @if($errors->get('password'))
                @foreach($errors->get('password') as $errorPassword)
                <span class="text-danger">* {{$errorPassword}}</span>
                @endforeach
                @endif

                @if (Session::has("failed"))
                    <span class="text-danger">*{{ Session::get('failed') }}</span>
                @endif
            </div>
            <div class="main__form--checkbox d-flex align-items-center mb-2">
                <input id="check-pass" class="me-1" type="checkbox" value="">
                <label class="m-0" for="check-pass">Hiện mật khẩu</label>
            </div>
            <button type="submit" class="main__form--insert mb-2">
                ĐĂNG NHẬP
            </button>
            <div class="main__form--reset d-flex justify-content-between mb-2">
                <a href="{{route('buyer.reset')}}">Quên mật khẩu</a>
                <a>Đăng nhập với SMS</a>
            </div>
            <div class="main__form--or d-flex justify-content-between align-items-center mb-3">
                <div class="main__form--or-line w-100"></div>
                <span class="main__form--or-span mx-3">
                    HOẶC
                </span>
                <div class="main__form--or-line w-100"></div>
            </div>
            <div class="mb-1">
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
            <div class="main__form--nav text-center">
                Bạn mới biết đến Shopee? <a href="{{route('buyer.register')}}">Đăng ký</a>
            </div>
        </form>
    </div>
</div>
@endsection

@section('modal')

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
<!-- Link script buyer/login -->
<script src="{{ asset('/js/buyer/login.js') }}"></script>
@endpush