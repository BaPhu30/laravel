@extends('user/header-footer-user')

@push('styles')
<!-- Link css user/account/password -->
<link href="{{ asset('/css/user/account/password.css') }}" rel="stylesheet">
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
            <a href="{{route('user.account.payment')}}" class="main__account--nav-items d-flex justify-content-between align-items-center text-dark mb-3">
                <div class="main__account--nav-items-img me-2"></div>
                <div class="main__account--nav-items-title account">
                    Ngân Hàng
                </div>
            </a>
            <a href="{{route('user.account.address')}}" class="main__account--nav-items d-flex justify-content-between align-items-center text-dark mb-3">
                <div class="main__account--nav-items-img me-2"></div>
                <div class="main__account--nav-items-title account">
                    Địa Chỉ
                </div>
            </a>
            <a href="" class="main__account--nav-items d-flex justify-content-between align-items-center text-dark mb-3">
                <div class="main__account--nav-items-img me-2"></div>
                <div class="main__account--nav-items-title active">
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
        <div class="main__account--main card py-3 px-4">
            <div class="main__account--main-title border-bottom mb-3">
                <h5>Đổi Mật Khẩu</h5>
                <p>Để bảo mật tài khoản, vui lòng không chia sẻ mật khẩu cho người khác</p>
            </div>
            <div class="main__account--main-content d-flex justify-content-between">
                <div class="main__account--main-content-label">
                    <div class="main__account--main-content-label-content text-right mb-3">
                        Mật Khẩu Hiện Tại
                    </div>
                    <div class="main__account--main-content-label-content text-right mb-3">
                        Mật Khẩu Mới
                    </div>
                    <div class="main__account--main-content-label-content text-right mb-3">
                        Xác Nhận Mật Khẩu
                    </div>
                </div>
                <form class="main__account--main-content-form mb-3">
                    <div class="mb-3">
                        <input id="" class="main__account--main-content-form-content-input w-100" type="text" placeholder="">
                    </div>
                    <div class="mb-3">
                        <input id="" class="main__account--main-content-form-content-input w-100" type="text" placeholder="">
                    </div>
                    <div class="mb-3">
                        <input id="" class="main__account--main-content-form-content-input w-100" type="text" placeholder="">
                    </div>
                    <button class="btn mb-3 px-4 text-white">Xác Nhận</button>
                </form>
                <a href="" class="main__account--main-content-forgot">
                    Quên mật khẩu?
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<!-- Link script user/account/password -->
<script src="{{ asset('/js/user/account/password.js') }}"></script>
@endpush