@extends('user/header-footer-user')

@push('styles')
<!-- Link css user/account/address -->
<link href="{{ asset('/css/user/account/address.css') }}" rel="stylesheet">
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
            <a href="" class="main__account--nav-items d-flex justify-content-between align-items-center text-dark mb-3">
                <div class="main__account--nav-items-img me-2"></div>
                <div class="main__account--nav-items-title active">
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
                <h5 class="m-0">Địa chỉ của tôi</h5>
                <button class="btn text-white" type="button">
                    <i class="fa-solid fa-plus"></i>
                    Thêm địa chỉ mới
                </button>
            </div>
            <div class="main__account--main-content d-flex justify-content-center align-items-center">
                <svg class="mb-3" fill="none" viewBox="0 0 121 120" class="PET0NN default_cursor_cs">
                    <path d="M16 79.5h19.5M43 57.5l-2 19" stroke="#BDBDBD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M56.995 78.791v-.001L41.2 38.195c-2.305-5.916-2.371-12.709.44-18.236 1.576-3.095 4.06-6.058 7.977-8 5.061-2.5 11.038-2.58 16.272-.393 3.356 1.41 7 3.92 9.433 8.43v.002c2.837 5.248 2.755 11.853.602 17.603L60.503 78.766v.001c-.617 1.636-2.88 1.643-3.508.024Z" fill="#fff" stroke="#BDBDBD" stroke-width="2" class="default_cursor_cs"></path>
                    <path d="m75.5 58.5 7 52.5M13 93h95.5M40.5 82.5 30.5 93 28 110.5" stroke="#BDBDBD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="default_cursor_cs"></path>
                    <path d="M44.5 79.5c0 .55-.318 1.151-1.038 1.656-.717.502-1.761.844-2.962.844-1.2 0-2.245-.342-2.962-.844-.72-.505-1.038-1.105-1.038-1.656 0-.55.318-1.151 1.038-1.656.717-.502 1.761-.844 2.962-.844 1.2 0 2.245.342 2.962.844.72.505 1.038 1.105 1.038 1.656Z" stroke="#BDBDBD" stroke-width="2"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M48.333 68H18.5a1 1 0 1 0 0 2h30.667l-.834-2Zm20.5 2H102a1 1 0 0 0 0-2H69.667l-.834 2Z" fill="#BDBDBD"></path>
                    <path d="M82 73h20l3 16H84.5L82 73ZM34.5 97H76l1.5 13H33l1.5-13ZM20.5 58h18l-1 7h-18l1-7Z" fill="#E8E8E8" class="default_cursor_cs"></path>
                    <path clip-rule="evenodd" d="M19.5 41a4 4 0 1 0 0-8 4 4 0 0 0 0 8ZM102.5 60a4 4 0 1 0 0-8 4 4 0 0 0 0 8Z" stroke="#E8E8E8" stroke-width="2" class="default_cursor_cs"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M93.5 22a1 1 0 0 0-1 1v3h-3a1 1 0 1 0 0 2h3v3a1 1 0 1 0 2 0v-3h3a1 1 0 1 0 0-2h-3v-3a1 1 0 0 0-1-1Z" fill="#E8E8E8"></path>
                    <circle cx="58.5" cy="27" r="7" stroke="#BDBDBD" stroke-width="2" class="default_cursor_cs"></circle>
                </svg>
                Bạn chưa có địa chỉ.
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<!-- Link script user/account/address -->
<script src="{{ asset('/js/user/account/address.js') }}"></script>
@endpush