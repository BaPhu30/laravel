@extends('user/header-footer-user')

@push('styles')
<!-- Link css user/notifications/wallet -->
<link href="{{ asset('/css/user/notifications/wallet.css') }}" rel="stylesheet">
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
            <a href="{{route('user.notifications.order')}}" class="main__account--nav-items d-flex justify-content-between align-items-center text-dark mb-3">
                <div class="main__account--nav-items-img me-2"></div>
                <div class="main__account--nav-items-title account">
                    Cập Nhật Đơn Hàng
                </div>
            </a>
            <a href="{{route('user.notifications.promotion')}}" class="main__account--nav-items d-flex justify-content-between align-items-center text-dark mb-3">
                <div class="main__account--nav-items-img me-2"></div>
                <div class="main__account--nav-items-title account">
                    Khuyến Mãi
                </div>
            </a>
            <a href="" class="main__account--nav-items d-flex justify-content-between align-items-center text-dark mb-3">
                <div class="main__account--nav-items-img me-2"></div>
                <div class="main__account--nav-items-title active">
                    Cập Nhật Ví
                </div>
            </a>
            <a href="{{route('user.notifications.activity')}}" class="main__account--nav-items d-flex justify-content-between align-items-center text-dark mb-3">
                <div class="main__account--nav-items-img me-2"></div>
                <div class="main__account--nav-items-title account">
                    Hoạt Động
                </div>
            </a>
            <a href="{{route('user.notifications.rating')}}" class="main__account--nav-items d-flex justify-content-between align-items-center text-dark mb-3">
                <div class="main__account--nav-items-img me-2"></div>
                <div class="main__account--nav-items-title account">
                    Cập Nhật Đánh Giá
                </div>
            </a>
            <a href="{{route('user.notifications.shopee')}}" class="main__account--nav-items d-flex justify-content-between align-items-center text-dark mb-3">
                <div class="main__account--nav-items-img me-2"></div>
                <div class="main__account--nav-items-title account">
                    Cập Nhật Shopee
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
        <div class="main__account--main card py-3 px-4">
            <div class="main__account--main-content d-flex justify-content-center align-items-center">
                <div class="main__account--main-content-img">
                    <img src="{{ asset('/img/user/notifications/user-notifications-1.png') }}" alt="">
                </div>
                Chưa có cập nhật ví
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<!-- Link script user/notifications/wallet -->
<script src="{{ asset('/js/user/notifications/wallet.js') }}"></script>
@endpush