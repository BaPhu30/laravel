@extends('buyer/header-footer-buyer')

@section('title')
<title>Shopee Việt Nam | Mua và Bán Trên Ứng Dụng Di Động Hoặc Website</title>
@endsection

@push('styles')
<!-- Link css buyer/reset -->
<link href="{{ asset('/css/buyer/reset.css') }}" rel="stylesheet">
@endpush

@section('header')
Đặt lại mật khẩu
@endsection

@section('main')
<div class="main d-flex justify-content-center align-items-center">
    <div class="main__form--wrapper d-flex justify-content-center align-items-center">
        <form class="main__form card py-4">
            <div class="main__form--title d-flex align-items-center mb-5">
                <a href="{{route('buyer.login')}}" class="fa-solid fa-arrow-left px-3"></a>
                <div class="text-center w-100">
                    Đặt lại mật khẩu
                </div>
            </div>
            <div class="main__form--div mb-4">
                <input type="text" class="main__form--div-input w-100 px-2" placeholder="Email/Số Điện thoại" autocomplete="off">
                <div class="main__form--div-danger">
                    Email không hợp lệ
                </div>
                <div class="main__form--div-danger">
                    Số điện thoại không hợp lệ
                </div>
            </div>
            <button class="main__form--insert mb-4" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                TIẾP THEO
            </button>
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
                <button id="" type="button" class="btn btn-primary" data-bs-dismiss="modal">Gửi</button>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<!-- Link script buyer/reset -->
<script src="{{ asset('/js/buyer/reset.js') }}"></script>
@endpush