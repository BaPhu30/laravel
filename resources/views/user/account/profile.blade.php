@extends('user/header-footer-user')

@push('styles')
<!-- Link css user/account/profile -->
<link href="{{ asset('/css/user/account/profile.css') }}" rel="stylesheet">
@endpush

@section('main')
<div class="main__account--wrapper container">
    <div class="main__account container d-flex justify-content-between py-3">
        <div class="main__account--nav">
            <a href="" class="main__account--nav-user d-flex justify-content-between py-3 border-bottom mb-3">
                <div class="main__account--nav-user-img border rounded-circle">
                    <img src="{{ asset('/img/img-user.jpg') }}" alt="">
                </div>
                <div class="main__account--nav-user-name">
                    <h6 class="text-dark">Tên user</h6>
                    <i class="fa-solid fa-pen me-1"></i>
                    <span>Sửa Hồ Sơ</span>
                </div>
            </a>
            <a href="" class="main__account--nav-items d-flex justify-content-between align-items-center text-dark mb-3">
                <div class="main__account--nav-items-img me-2">
                    <img src="{{ asset('/img/user/account/user-account-1.png') }}" alt="">
                </div>
                <div class="main__account--nav-items-title">
                    Tài Khoản Của Tôi
                </div>
            </a>
            <a href="" class="main__account--nav-items d-flex justify-content-between align-items-center text-dark mb-3">
                <div class="main__account--nav-items-img me-2"></div>
                <div class="main__account--nav-items-title active">
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
            <div class="main__account--main-title border-bottom mb-3">
                <h5>Hồ Sơ Của Tôi</h5>
                <p>Quản lý thông tin hồ sơ để bảo mật tài khoản</p>
            </div>
            <div class="main__account--main-content d-flex justify-content-between">
                <div class="main__account--main-content-label">
                    <div class="main__account--main-content-label-content text-right mb-3">
                        Tên đăng nhập
                    </div>
                    <div class="main__account--main-content-label-content text-right mb-3">
                        Tên
                    </div>
                    <div class="main__account--main-content-label-content text-right mb-3">
                        Email
                    </div>
                    <div class="main__account--main-content-label-content text-right mb-3">
                        Số điện thoại
                    </div>
                    <div class="main__account--main-content-label-content text-right mb-3">
                        Giới tính
                    </div>
                    <div class="main__account--main-content-label-content text-right mb-3">
                        Ngày sinh
                    </div>
                </div>
                <form class="main__account--main-content-form mb-3">
                    <div class="mb-3">
                        <input id="main__account--main-content-form-content-namelogin" class="main__account--main-form-content-input w-100" type="text" placeholder="">
                    </div>
                    <div class="mb-3">
                        <input id="main__account--main-content-form-name" class="main__account--main-form-content-input w-100" type="text" placeholder="">
                    </div>
                    <div class="main__account--main-content-form-content mb-3">
                        <span>ta******@gmail.com</span>
                        <a href="">Thay Đổi</a>
                    </div>
                    <div class="main__account--main-content-form-content mb-3">
                        <span>*********12</span>
                        <a href="">Thay Đổi</a>
                    </div>
                    <div class="main__account--main-content-form-content mb-3 d-flex align-items-center">
                        <input id="male" class="me-2" type="radio">
                        <label for="male" class="mb-0 me-2">Nam</label>
                        <input id="female" class="me-2" type="radio">
                        <label for="female" class="mb-0 me-2">Nữ</label>
                        <input id="other" class="me-2" type="radio">
                        <label for="other" class="mb-0 me-2">Khác</label>
                    </div>
                    <div class="main__account--main-content-form-content d-flex justify-content-between mb-3">
                        <select>
                            <option value="">1</option>
                            <option value="">1</option>
                            <option value="">1</option>
                            <option value="">1</option>
                        </select>
                        <select>
                            <option value="">Tháng 1</option>
                            <option value="">Tháng 2</option>
                            <option value="">Tháng 3</option>
                            <option value="">Tháng 4</option>
                        </select>
                        <select>
                            <option value="">1990</option>
                            <option value="">1990</option>
                            <option value="">1990</option>
                            <option value="">1990</option>
                            <option value="">1990</option>
                        </select>
                    </div>
                    <button class="btn mb-5 px-4 text-white" type="button">Lưu</button>
                </form>
                <div class="main__account--main-content-user border-left d-flex">
                    <div class="main__account--main-content-user-img border rounded-circle my-4">
                        <img src="/img/img-user.jpg" alt="">
                    </div>
                    <button class="btn bg-white border mb-3" type="button">Chọn Ảnh</button>
                    <p class="m-0">Dụng lượng file tối đa 1 MB</p>
                    <p class="m-0">Định dạng: .JPEG, .PNG</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<!-- Link script user/account/profile -->
<script src="{{ asset('/js/user/account/profile.js') }}"></script>
@endpush