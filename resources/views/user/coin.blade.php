@extends('user/header-footer-user')

@push('styles')
<!-- Link css user/coin -->
<link href="{{ asset('/css/user/coin.css') }}" rel="stylesheet">
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
            <a href="{{route('user.voucher-wallet')}}" class="main__account--nav-items d-flex justify-content-between align-items-center text-dark mb-3">
                <div class="main__account--nav-items-img me-2">
                    <img src="{{ asset('/img/user/account/user-account-4.png') }}" alt="">
                </div>
                <div class="main__account--nav-items-title">
                    Kho Voucher
                </div>
            </a>
            <a href="" class="main__account--nav-items d-flex justify-content-between align-items-center text-dark mb-3">
                <div class="main__account--nav-items-img me-2">
                    <img src="{{ asset('/img/user/account/user-account-5.png') }}" alt="">
                </div>
                <div class="main__account--nav-items-title active">
                    Shopee Xu
                </div>
            </a>
        </div>
        <div class="main__account--main card py-3 px-4 mb-5">
            <div class="main__account--main-title border-bottom d-flex justify-content-between py-3 mb-3">
                <div class="d-flex align-items-center">
                    <div class="main__account--main-title-img me-2">
                        <img src="{{ asset('/img/user/user-coin-1.png') }}" alt="">
                    </div>
                    <h2 class="m-0 me-2">0</h2>
                    <div class="">
                        <h5 class="m-0">
                            Xu đang có
                        </h5>
                        <p class="m-0">0 Shopee Xu sẽ hết hạn vào ...</p>
                    </div>
                </div>
                <a href="">
                    Nhận thêm Xu!
                    <i class="fa-solid fa-chevron-right"></i>
                </a>
            </div>
            <div class="main__account--main-content d-flex justify-content-center align-items-center">
                <p class="mb-4">Bạn chưa có Xu nào.</p>
                <button class="btn text-white" type="button">
                    Làm sao để kiếm Xu?
                </button>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<!-- Link script user/coin -->
<script src="{{ asset('/js/user/coin.js') }}"></script>
@endpush