@extends('user/header-footer-user')

@push('styles')
<!-- Link css user/account/payment -->
<link href="{{ asset('/css/user/account/payment.css') }}" rel="stylesheet">
@endpush

@section('main')
<div class="main__account--wrapper container">
    <div class="main__account container d-flex justify-content-between py-3">
        <div class="main__account--nav">
        <a href="{{route('user.account.profile')}}" class="main__account--nav-user d-flex justify-content-between py-3 border-bottom mb-3">
                <div class="main__account--nav-user-img border rounded-circle">
                    <img src="{{ asset('/img/img-user.jpg') }}" alt="">
                </div>
                <div class="main__account--nav-user-name">
                    <h6 class="text-dark">Tên user</h6>
                    <i class="fa-solid fa-pen me-1"></i>
                    <span>Sửa Hồ Sơ</span>
                </div>
            </a>
            <a href="{{route('user.account.profile')}}" class="main__account--nav-items d-flex justify-content-between align-items-center text-dark mb-3">
                <div class="main__account--nav-items-img me-2">
                    <img src="{{ asset('/img/user/account/user-account-1.png') }}" alt="">
                </div>
                <div class="main__account--nav-items-title">
                    Tài Khoản Của Tôi
                </div>
            </a>
            <a href="{{route('user.account.profile')}}" class="main__account--nav-items d-flex justify-content-between align-items-center text-dark mb-3">
                <div class="main__account--nav-items-img me-2"></div>
                <div class="main__account--nav-items-title account">
                    Hồ sơ
                </div>
            </a>
            <a href="" class="main__account--nav-items d-flex justify-content-between align-items-center text-dark mb-3">
                <div class="main__account--nav-items-img me-2"></div>
                <div class="main__account--nav-items-title active">
                    Ngân Hàng
                </div>
            </a>
            <a href="{{route('user.account.address')}}" class="main__account--nav-items d-flex justify-content-between align-items-center text-dark mb-3">
                <div class="main__account--nav-items-img me-2"></div>
                <div class="main__account--nav-items-title account">
                    Địa Chỉ
                </div>
            </a>
            <a href="{{route('user.account.password')}}" class="main__account--nav-items d-flex justify-content-between align-items-center text-dark mb-3">
                <div class="main__account--nav-items-img me-2"></div>
                <div class="main__account--nav-items-title account">
                    Đổi Mật Khẩu
                </div>
            </a>
            <a href="{{route('user.purchase')}}" class="main__account--nav-items d-flex justify-content-between align-items-center text-dark mb-3">
                <div class="main__account--nav-items-img me-2">
                    <img src="{{ asset('/img/user/account/user-account-2.png') }}" alt="">
                </div>
                <div class="main__account--nav-items-title">
                    Đơn Mua
                </div>
            </a>
            <a href="{{route('user.notifications.order')}}" class="main__account--nav-items d-flex justify-content-between align-items-center text-dark mb-3">
                <div class="main__account--nav-items-img me-2">
                    <img src="{{ asset('/img/user/account/user-account-3.png') }}" alt="">
                </div>
                <div class="main__account--nav-items-title">
                    Thông Báo
                </div>
            </a>
            <a href="{{route('user.voucher-wallet')}}" class="main__account--nav-items d-flex justify-content-between align-items-center text-dark mb-3">
                <div class="main__account--nav-items-img me-2">
                    <img src="{{ asset('/img/user/account/user-account-4.png') }}" alt="">
                </div>
                <div class="main__account--nav-items-title">
                    Kho Voucher
                </div>
            </a>
            <a href="{{route('user.coin')}}" class="main__account--nav-items d-flex justify-content-between align-items-center text-dark mb-3">
                <div class="main__account--nav-items-img me-2">
                    <img src="{{ asset('/img/user/account/user-account-5.png') }}" alt="">
                </div>
                <div class="main__account--nav-items-title">
                    Shopee Xu
                </div>
            </a>
        </div>
        <div class="main__account--main card py-3 px-4 mb-4">
            <div class="main__account--main-title border-bottom d-flex justify-content-between py-3 mb-3">
                <h5 class="m-0">Thẻ Tín Dụng/Ghi Nợ</h5>
                <button class="btn text-white" type="button">
                    <i class="fa-solid fa-plus"></i>
                    Thêm Thẻ Mới
                </button>
            </div>
            <div class="main__account--main-content d-flex justify-content-center align-items-center">
                Bạn chưa liên kết thẻ.
            </div>
            <div class="main__account--main-title border-bottom d-flex justify-content-between py-3 mb-3">
                <h5 class="m-0">Tài Khoản Ngân Hàng Của Tôi</h5>
                <button class="btn text-white" type="button">
                    <i class="fa-solid fa-plus"></i>
                    Thêm Thẻ Ngân Hàng
                </button>
            </div>
            <div class="main__account--main-content d-flex justify-content-center align-items-center">
                Bạn chưa có tài khoản ngân hàng.
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<!-- Link script user/account/payment -->
<script src="{{ asset('/js/user/account/payment.js') }}"></script>
@endpush