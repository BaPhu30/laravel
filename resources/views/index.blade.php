@extends('header-footer-index')
<link rel="stylesheet" href="../../">
<!-- Link css index -->
@push('styles')
<link href="{{ asset('/css/index.css') }}" rel="stylesheet">
@endpush

@section('main')
<!-- Begin main banner-->
<div class="main__banner-hotword--wrapper">
    <div class="main__banner container d-flex justify-content-between py-3">
        <div class="main__banner--slide">
            <div id="main__banner--slide-1" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#main__banner--slide-1" data-bs-slide-to="0" class="active me-1" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#main__banner--slide-1" data-bs-slide-to="1" class="me-1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#main__banner--slide-1" data-bs-slide-to="2" class="me-1" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#main__banner--slide-1" data-bs-slide-to="3" class="me-1" aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#main__banner--slide-1" data-bs-slide-to="4" class="me-1" aria-label="Slide 5"></button>
                    <button type="button" data-bs-target="#main__banner--slide-1" data-bs-slide-to="5" class="me-1" aria-label="Slide 6"></button>
                    <button type="button" data-bs-target="#main__banner--slide-1" data-bs-slide-to="6" class="me-1" aria-label="Slide 7"></button>
                    <button type="button" data-bs-target="#main__banner--slide-1" data-bs-slide-to="7" class="me-1" aria-label="Slide 8"></button>
                    <button type="button" data-bs-target="#main__banner--slide-1" data-bs-slide-to="8" class="me-1" aria-label="Slide 9"></button>
                    <button type="button" data-bs-target="#main__banner--slide-1" data-bs-slide-to="9" class="me-1" aria-label="Slide 10"></button>
                    <button type="button" data-bs-target="#main__banner--slide-1" data-bs-slide-to="10" class="me-1" aria-label="Slide 11"></button>
                    <button type="button" data-bs-target="#main__banner--slide-1" data-bs-slide-to="11" class="me-1" aria-label="Slide 12"></button>
                    <button type="button" data-bs-target="#main__banner--slide-1" data-bs-slide-to="12" class="me-1" aria-label="Slide 13"></button>
                    <button type="button" data-bs-target="#main__banner--slide-1" data-bs-slide-to="13" class="me-1" aria-label="Slide 14"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block" src="{{ asset('/img/index/index-slide/index-slide-1.jfif') }}" alt="">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" src="{{ asset('/img/index/index-slide/index-slide-2.jfif') }}" alt="">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" src="{{ asset('/img/index/index-slide/index-slide-3.jfif') }}" alt="">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" src="{{ asset('/img/index/index-slide/index-slide-4.jfif') }}" alt="">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" src="{{ asset('/img/index/index-slide/index-slide-5.jfif') }}" alt="">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" src="{{ asset('/img/index/index-slide/index-slide-6.jfif') }}" alt="">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" src="{{ asset('/img/index/index-slide/index-slide-7.jfif') }}" alt="">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" src="{{ asset('/img/index/index-slide/index-slide-8.jfif') }}" alt="">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" src="{{ asset('/img/index/index-slide/index-slide-9.jfif') }}" alt="">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" src="{{ asset('/img/index/index-slide/index-slide-10.jfif') }}" alt="">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" src="{{ asset('/img/index/index-slide/index-slide-11.jfif') }}" alt="">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" src="{{ asset('/img/index/index-slide/index-slide-12.jfif') }}" alt="">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" src="{{ asset('/img/index/index-slide/index-slide-13.jfif') }}" alt="">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" src="{{ asset('/img/index/index-slide/index-slide-14.jfif') }}" alt="">
                    </div>

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#main__banner--slide-1" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#main__banner--slide-1" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="main__banner--img">
            <div class="main__banner--img-top">
                <img class="" src="/img/index/index-slide/index-slide-15.jfif" alt="">
            </div>
            <div class="main__banner--img-bottom">
                <img class="" src="/img/index/index-slide/index-slide-16.jfif" alt="">
            </div>
        </div>
    </div>
    <div class="main__hotword container d-flex justify-content-around pb-4">
        <a class="main__hotword--content">
            <div class="main__hotword--content-img mb-2">
                <img src="/img/index/index-hotword/index-hotword-1.gif" alt="">
            </div>
            <div class="main__hotword--content-title text-center">
                Khung Giờ Săn Sale
            </div>
        </a>
        <a class="main__hotword--content">
            <div class="main__hotword--content-img mb-2">
                <img src="/img/index/index-hotword/index-hotword-2.png" alt="">
            </div>
            <div class="main__hotword--content-title text-center">
                Gì Cũng Rẻ - Mua Là Freeship
            </div>
        </a>
        <a class="main__hotword--content">
            <div class="main__hotword--content-img mb-2">
                <img src="/img/index/index-hotword/index-hotword-3.png" alt="">
            </div>
            <div class="main__hotword--content-title text-center">
                Miễn Phí Vận Chuyển
            </div>
        </a>
        <a class="main__hotword--content">
            <div class="main__hotword--content-img mb-2">
                <img src="/img/index/index-hotword/index-hotword-4.png" alt="">
            </div>
            <div class="main__hotword--content-title text-center">
                Bắt Trend - Giá Sốc
            </div>
        </a>
        <a class="main__hotword--content">
            <div class="main__hotword--content-img mb-2">
                <img src="/img/index/index-hotword/index-hotword-5.png" alt="">
            </div>
            <div class="main__hotword--content-title text-center">
                Hoàn Xu Xtra Từ 100k
            </div>
        </a>
        <a class="main__hotword--content">
            <div class="main__hotword--content-img mb-2">
                <img src="/img/index/index-hotword/index-hotword-6.png" alt="">
            </div>
            <div class="main__hotword--content-title text-center">
                Hàng Hiệu Giá Tốt
            </div>
        </a>
        <a class="main__hotword--content">
            <div class="main__hotword--content-img mb-2">
                <img src="/img/index/index-hotword/index-hotword-7.png" alt="">
            </div>
            <div class="main__hotword--content-title text-center">
                Hàng Quốc Tế
            </div>
        </a>
        <a class="main__hotword--content">
            <div class="main__hotword--content-img mb-2">
                <img src="/img/index/index-hotword/index-hotword-8.png" alt="">
            </div>
            <div class="main__hotword--content-title text-center">
                Nạp Thẻ & Dịch Vụ
            </div>
        </a>
        <a class="main__hotword--content">
            <div class="main__hotword--content-img mb-2">
                <img src="/img/index/index-hotword/index-hotword-9.png" alt="">
            </div>
            <div class="main__hotword--content-title text-center">
                Trúng 10 Triệu Tiền Mặt
            </div>
        </a>
    </div>
</div>
<!-- End main banner -->

<!-- Begin main category-->
<div class="main__category--wrapper py-4">
    <h6 class="container bg-white p-3 mb-0">DANH MỤC</h6>
    <div class="main__category--slider d-flex justify-content-between container bg-white">
        <i class="main__category--slider-prev fa-solid fa-chevron-left"></i>
        <i class="main__category--slider-next fa-solid fa-chevron-right"></i>
        <div class="main__category--slider-main-wrapper">
            <div class="main__category--slider-main">
                <div class="d-flex">
                    @foreach ($CategoryDad1 as $CategoryDad1)
                    <div class="main__category--slider-main-item">
                        <div>
                            <a href="{{ route('category-dad', ['id' => $CategoryDad1->id]) }}">
                                <div class="main__category--slider-main-item-div">
                                    <div class="main__category--slider-main-item-div-img">
                                        <img src="{{ $CategoryDad1->img }}" alt="">
                                    </div>
                                    <div class="main__category--slider-main-item-div-title text-center">
                                        {{ $CategoryDad1->name }}
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="d-flex">
                    @foreach ($CategoryDad2 as $CategoryDad2)
                    <div class="main__category--slider-main-item">
                        <div>
                            <a href="{{ route('category-dad', ['id' => $CategoryDad2->id]) }}">
                                <div class="main__category--slider-main-item-div">
                                    <div class="main__category--slider-main-item-div-img">
                                        <img src="{{ $CategoryDad2->img }}" alt="">
                                    </div>
                                    <div class="main__category--slider-main-item-div-title text-center">
                                        {{ $CategoryDad2->name }}
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End main category -->

<!-- Begin main flashsale-->
<div class="main__flashsale--wrapper pb-4">
    <div class="main__flashsale--title d-flex justify-content-between align-items-center container bg-white">
        <div class="main__flashsale--title-img">
            <img src="/img/index/index-flashsale/index-flashsale-title.png" alt="">
        </div>
        <a class="main__flashsale--title-seemore justify-content-between align-items-center d-flex">
            Xem Tất Cả
            <i class="fa-solid fa-chevron-right p-2"></i>
        </a>
    </div>
    <div class="d-flex justify-content-between container bg-white">
        <div class="main__flashsale--slider">
            <i class="main__flashsale--slider-prev fa-solid fa-chevron-left"></i>
            <i class="main__flashsale--slider-next fa-solid fa-chevron-right"></i>
            <div class="main__flashsale--slider-main-wrapper">
                <div class="main__flashsale--slider-main d-flex">
                    @foreach ($FlashSales as $FlashSale)
                    <a href="{{ route('product', ['id' => $FlashSale->id]) }}" class="main__flashsale--slider-main-item">
                        <div class="main__flashsale--slider-main-item-img position-relative">
                            <div class="main__flashsale--slider-main-item-img-percent position-absolute">
                                <div class="main__flashsale--slider-main-item-img-percent-top text-center">0%</div>
                                <div class="main__flashsale--slider-main-item-img-percent-bottom text-center text-white">Giảm</div>
                            </div>
                            <div class="main__flashsale--slider-main-item-img-background position-absolute">
                                <img src="/img/index/index-flashsale/index-flashsale-bg.png" alt="">
                            </div>
                            <div class="main__flashsale--slider-main-item-img-product position-absolute">
                                @php
                                $img = explode(', ', $FlashSale->img);
                                echo "<img src='$img[0]'>" ;
                                @endphp
                            </div>
                        </div>
                        <div class="main__flashsale--slider-main-item-price">
                            <div class="main__flashsale--slider-main-item-price-main d-flex justify-content-center align-items-center">
                                <span>₫</span>
                                <p class="m-0">{{ $FlashSale->sold }}</p>
                            </div>
                            <div class="main__flashsale--slider-main-item-price-sold position-relative">
                                <div class="main__flashsale--slider-main-item-price-sold-main position-absolute text-white text-center w-100">
                                    ĐÃ BÁN 0
                                </div>
                                <div class="main__flashsale--slider-main-item-price-sold-live position-absolute"></div>
                                <div class="main__flashsale--slider-main-item-price-sold-background position-absolute w-100"></div>
                            </div>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End main flashsale -->

<!-- Begin main advertisement-->
<div class="main__advertisement--wrapper pb-4">
    <div class="main__advertisement container">
        <img src="/img/index/index-advertisement/index-advertisement-1.png" alt="">
    </div>
</div>
<!-- End main advertisement -->

<!-- Begin main shopeemall-->
<div class="main__shopeemall--wrapper pb-4">
    <div class="main__shopeemall--title d-flex justify-content-between align-items-center container bg-white border-bottom">
        <div class="main__shopeemall--title-main d-flex align-items-center">
            <div class="border-right pe-3 me-3">
                <a href="">SHOPEE MALL</a>
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex justify-content-between align-items-center me-3">
                    <div class="main__shopeemall--title-main-img">
                        <img src="/img/index/index-shopeemall/index-shopeemall-title-1.png" alt="">
                    </div>
                    <p class="m-0">
                        7 Ngày Miễn Phí Trả Hàng
                    </p>
                </div>
                <div class="d-flex justify-content-between align-items-center me-3">
                    <div class="main__shopeemall--title-main-img">
                        <img src="/img/index/index-shopeemall/index-shopeemall-title-2.png" alt="">
                    </div>
                    <p class="m-0">
                        Hàng Chính Hãng 100%
                    </p>
                </div>
                <div class="d-flex justify-content-between align-items-center me-3">
                    <div class="main__shopeemall--title-main-img">
                        <img src="/img/index/index-shopeemall/index-shopeemall-title-3.png" alt="">
                    </div>
                    <p class="m-0">
                        Miễn Phí Vận Chuyển
                    </p>
                </div>
            </div>
        </div>
        <a href="" class="main__shopeemall--title-seemore justify-content-between align-items-center d-flex">
            Xem Tất Cả
            <i class="fa-solid fa-chevron-right p-2"></i>
        </a>
    </div>
    <div class="d-flex justify-content-between container bg-white pt-3">
        <div class="main__shopeemall--slider-banner">
            <div id="main__shopeemall--slider-banner" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#main__shopeemall--slider-banner" data-bs-slide-to="0" class="active me-1" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#main__shopeemall--slider-banner" data-bs-slide-to="1" class="me-1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#main__shopeemall--slider-banner" data-bs-slide-to="2" class="me-1" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#main__shopeemall--slider-banner" data-bs-slide-to="3" class="me-1" aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#main__shopeemall--slider-banner" data-bs-slide-to="4" class="me-1" aria-label="Slide 5"></button>
                    <button type="button" data-bs-target="#main__shopeemall--slider-banner" data-bs-slide-to="5" class="me-1" aria-label="Slide 6"></button>
                    <button type="button" data-bs-target="#main__shopeemall--slider-banner" data-bs-slide-to="6" class="me-1" aria-label="Slide 7"></button>
                    <button type="button" data-bs-target="#main__shopeemall--slider-banner" data-bs-slide-to="7" class="me-1" aria-label="Slide 8"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block" src="/img/index/index-shopeemall/index-shopeemall-banner-1.png" alt="">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" src="/img/index/index-shopeemall/index-shopeemall-banner-2.png" alt="">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" src="/img/index/index-shopeemall/index-shopeemall-banner-3.png" alt="">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" src="/img/index/index-shopeemall/index-shopeemall-banner-4.png" alt="">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" src="/img/index/index-shopeemall/index-shopeemall-banner-5.png" alt="">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" src="/img/index/index-shopeemall/index-shopeemall-banner-6.png" alt="">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" src="/img/index/index-shopeemall/index-shopeemall-banner-7.png" alt="">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" src="/img/index/index-shopeemall/index-shopeemall-banner-8.png" alt="">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#main__shopeemall--slider-banner" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#main__shopeemall--slider-banner" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="main__shopeemall--slider-shop">
            <i class="main__shopeemall--slider-shop-prev fa-solid fa-chevron-left"></i>
            <i class="main__shopeemall--slider-shop-next fa-solid fa-chevron-right"></i>
            <div class="main__shopeemall--slider-shop-main-wrapper">
                <div class="main__shopeemall--slider-shop-main d-flex">
                    <div class="main__shopeemall--slider-shop-main-item">
                        <div>
                            @foreach ($ShopeeMall1 as $ShopeeMall1)
                            <a href="">
                                <div class="main__shopeemall--slider-shop-main-item-div mb-4">
                                    <div class="main__shopeemall--slider-shop-main-item-div-product d-flex justify-content-center align-items-center">
                                        @php
                                        $img = explode(', ', $ShopeeMall1->img);
                                        echo "<img src='$img[0]'>" ;
                                        @endphp
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <div class="main__shopeemall--slider-shop-main-item-div-shop d-flex justify-content-center align-items-center border rounded-pill">
                                            <img src="{{ $ShopeeMall1->avatar }}">
                                        </div>
                                    </div>
                                    <div class="main__shopeemall--slider-shop-main-item-div-title text-center">
                                        Mua là có quà
                                    </div>
                                </div>
                            </a>
                            @endforeach
                        </div>
                    </div>
                    <div class="main__shopeemall--slider-shop-main-item">
                        <div>
                            @foreach ($ShopeeMall2 as $ShopeeMall2)
                            <a href="">
                                <div class="main__shopeemall--slider-shop-main-item-div mb-4">
                                    <div class="main__shopeemall--slider-shop-main-item-div-product d-flex justify-content-center align-items-center">
                                        @php
                                        $img = explode(', ', $ShopeeMall2->img);
                                        echo "<img src='$img[0]'>" ;
                                        @endphp
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <div class="main__shopeemall--slider-shop-main-item-div-shop d-flex justify-content-center align-items-center border rounded-pill">
                                            <img src="{{ $ShopeeMall2->avatar }}">
                                        </div>
                                    </div>
                                    <div class="main__shopeemall--slider-shop-main-item-div-title text-center">
                                        Mua là có quà
                                    </div>
                                </div>
                            </a>
                            @endforeach
                        </div>
                    </div>
                    <div class="main__shopeemall--slider-shop-main-item">
                        <div>
                            @foreach ($ShopeeMall3 as $ShopeeMall3)
                            <a href="">
                                <div class="main__shopeemall--slider-shop-main-item-div mb-4">
                                    <div class="main__shopeemall--slider-shop-main-item-div-product d-flex justify-content-center align-items-center">
                                        @php
                                        $img = explode(', ', $ShopeeMall3->img);
                                        echo "<img src='$img[0]'>" ;
                                        @endphp
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <div class="main__shopeemall--slider-shop-main-item-div-shop d-flex justify-content-center align-items-center border rounded-pill">
                                            <img src="{{ $ShopeeMall3->avatar }}">
                                        </div>
                                    </div>
                                    <div class="main__shopeemall--slider-shop-main-item-div-title text-center">
                                        Mua là có quà
                                    </div>
                                </div>
                            </a>
                            @endforeach
                        </div>
                    </div>
                    <div class="main__shopeemall--slider-shop-main-item">
                        <div>
                            @foreach ($ShopeeMall4 as $ShopeeMall4)
                            <a href="">
                                <div class="main__shopeemall--slider-shop-main-item-div mb-4">
                                    <div class="main__shopeemall--slider-shop-main-item-div-product d-flex justify-content-center align-items-center">
                                        @php
                                        $img = explode(', ', $ShopeeMall4->img);
                                        echo "<img src='$img[0]'>" ;
                                        @endphp
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <div class="main__shopeemall--slider-shop-main-item-div-shop d-flex justify-content-center align-items-center border rounded-pill">
                                            <img src="{{ $ShopeeMall4->avatar }}">
                                        </div>
                                    </div>
                                    <div class="main__shopeemall--slider-shop-main-item-div-title text-center">
                                        Mua là có quà
                                    </div>
                                </div>
                            </a>
                            @endforeach
                        </div>
                    </div>
                    <div class="main__shopeemall--slider-shop-main-item">
                        <div>
                            @foreach ($ShopeeMall5 as $ShopeeMall5)
                            <a href="">
                                <div class="main__shopeemall--slider-shop-main-item-div mb-4">
                                    <div class="main__shopeemall--slider-shop-main-item-div-product d-flex justify-content-center align-items-center">
                                        @php
                                        $img = explode(', ', $ShopeeMall5->img);
                                        echo "<img src='$img[0]'>" ;
                                        @endphp
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <div class="main__shopeemall--slider-shop-main-item-div-shop d-flex justify-content-center align-items-center border rounded-pill">
                                            <img src="{{ $ShopeeMall5->avatar }}">
                                        </div>
                                    </div>
                                    <div class="main__shopeemall--slider-shop-main-item-div-title text-center">
                                        Mua là có quà
                                    </div>
                                </div>
                            </a>
                            @endforeach
                        </div>
                    </div>
                    <div class="main__shopeemall--slider-shop-main-item">
                        <div>
                            @foreach ($ShopeeMall6 as $ShopeeMall6)
                            <a href="">
                                <div class="main__shopeemall--slider-shop-main-item-div mb-4">
                                    <div class="main__shopeemall--slider-shop-main-item-div-product d-flex justify-content-center align-items-center">
                                        @php
                                        $img = explode(', ', $ShopeeMall6->img);
                                        echo "<img src='$img[0]'>" ;
                                        @endphp
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <div class="main__shopeemall--slider-shop-main-item-div-shop d-flex justify-content-center align-items-center border rounded-pill">
                                            <img src="{{ $ShopeeMall6->avatar }}">
                                        </div>
                                    </div>
                                    <div class="main__shopeemall--slider-shop-main-item-div-title text-center">
                                        Mua là có quà
                                    </div>
                                </div>
                            </a>
                            @endforeach
                        </div>
                    </div>
                    <div class="main__shopeemall--slider-shop-main-item">
                        <div>
                            @foreach ($ShopeeMall7 as $ShopeeMall7)
                            <a href="">
                                <div class="main__shopeemall--slider-shop-main-item-div mb-4">
                                    <div class="main__shopeemall--slider-shop-main-item-div-product d-flex justify-content-center align-items-center">
                                        @php
                                        $img = explode(', ', $ShopeeMall7->img);
                                        echo "<img src='$img[0]'>" ;
                                        @endphp
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <div class="main__shopeemall--slider-shop-main-item-div-shop d-flex justify-content-center align-items-center border rounded-pill">
                                            <img src="{{ $ShopeeMall7->avatar }}">
                                        </div>
                                    </div>
                                    <div class="main__shopeemall--slider-shop-main-item-div-title text-center">
                                        Mua là có quà
                                    </div>
                                </div>
                            </a>
                            @endforeach
                            <a class="main__shopeemall--slider-shop-main-item-seemore d-flex justify-content-center align-items-center">
                                Xem Tất Cả
                                <i class="fa-solid fa-chevron-right p-2"></i>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- End main shopeemall -->

<!-- Begin main topsearch-->
<div class="main__topsearch--wrapper pb-4">
    <div class="main__topsearch--title d-flex justify-content-between align-items-center container bg-white border-bottom">
        <div class="main__topsearch--title-main d-flex align-items-center">
            <div>
                <a>TÌM KIẾM HÀNG ĐẦU</a>
            </div>
        </div>
        <a href="" class="main__topsearch--title-seemore justify-content-between align-items-center d-flex">
            Xem Tất Cả
            <i class="fa-solid fa-chevron-right p-2"></i>
        </a>
    </div>
    <div class="d-flex justify-content-between container bg-white">
        <div class="main__topsearch--slider">
            <i class="main__topsearch--slider-prev fa-solid fa-chevron-left"></i>
            <i class="main__topsearch--slider-next fa-solid fa-chevron-right"></i>
            <div class="main__topsearch--slider-main-wrapper">
                <div class="main__topsearch--slider-main d-flex">
                    @foreach ($TopSearchs as $TopSearch)
                    <a href="{{ route('product', ['id' => $TopSearch->id]) }}" class="main__topsearch--slider-main-item">
                        <div class="main__topsearch--slider-main-item-img position-relative">
                            <div class="main__topsearch--slider-main-item-img-percent position-absolute">
                                <img src="/img/index/index-topsearch/index-topsearch-percent.png" alt="">
                            </div>
                            <div class="main__topsearch--slider-main-item-img-product position-absolute">
                                @php
                                $img = explode(', ', $TopSearch->img);
                                echo "<img src='$img[0]'>" ;
                                @endphp
                            </div>
                            <div class="main__topsearch--slider-main-item-img-background position-absolute text-center text-white">
                                Bán 0 / tháng
                            </div>
                        </div>
                        <div class="main__topsearch--slider-main-item-name">
                            {{ $TopSearch->title }}
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End main topsearch -->

<!-- Begin main suggestions-->
<div class="main__suggestions--wrapper pb-4">
    <div class="main__suggestions--title d-flex justify-content-center align-items-center container bg-white mb-2">
        GỢI Ý HÔM NAY
    </div>
    <div class="main__suggestions--main d-flex flex-wrap container mb-4">
        @foreach ($Suggestions as $Suggestion)
        <a href="{{ route('product', ['id' => $Suggestion->id]) }}">
            <div class="main__suggestions--main-post bg-white">
                <div class="main__suggestions--main-post-img position-relative">
                    <div class="main__suggestions--main-post-img-percent position-absolute">
                        <div class="main__suggestions--main-post-img-percent-top text-center">63%</div>
                        <div class="main__suggestions--main-post-img-percent-bottom text-center text-white">Giảm</div>
                    </div>
                    <div class="main__suggestions--main-post-img-background position-absolute">
                        <img src="/img/index/index-flashsale/index-flashsale-bg.png" alt="">
                    </div>
                    <div class="main__suggestions--main-post-img-product position-absolute">
                        @php
                        $img = explode(', ', $Suggestion->img);
                        echo "<img src='$img[0]'>" ;
                        @endphp
                    </div>
                </div>
                <div class="main__suggestions--main-post-main">
                    <div class="main__suggestions--main-post-main-title text-dark">
                        {{ $Suggestion->title }}
                    </div>
                    <div class="main__suggestions--main-post-main-space"></div>
                    <div class="main__suggestions--main-post-main-detail d-flex justify-content-between align-items-center">
                        <div class="main__suggestions--main-post-main-detail-price d-flex justify-content-center align-items-center">
                            <span>₫</span>
                            <p class="m-0">{{ $Suggestion->sold }}</p>
                        </div>
                        <div class="main__suggestions--main-post-main-detail-sold d-flex justify-content-center align-items-center">
                            Đã bán 0
                        </div>
                    </div>
                </div>
                <a href="{{ route('category-child', ['id' => $Suggestion->categoryChild->id]) }}" class="main__suggestions--main-post-hover text-center text-white  position-absolute">
                    Tìm sản phẩm tương tự
                </a>
            </div>
        </a>
        @endforeach
    </div>
    <div class="main__suggestions--seemore d-flex justify-content-center align-items-center container mb-4">
        <button class="bg-white text-center">
            Xem Thêm
        </button>
    </div>
</div>
<!-- End main suggestions -->

<!-- Begin main contentinfo-->
<div class="main__contentinfo--wrapper pb-4">
    <div class="main__contentinfo container border-bottom pb-5">
        <h5 class="mt-5 mb-2">
            SHOPEE - GÌ CŨNG CÓ, MUA HẾT Ở SHOPEE
        </h5>
        <p>
            Shopee - ứng dụng mua sắm trực tuyến thú vị, tin cậy, an toàn và miễn phí! Shopee là nền tảng giao dịch trực tuyến hàng đầu ở Đông Nam Á, có trụ sở chính ở Singapore, đã có mặt ở khắp các khu vực <a href="" class="text-dark">Singapore</a>, <a href="" class="text-dark">Malaysia</a>, <a href="" class="text-dark">Indonesia</a>, <a href="" class="text-dark">Thái Lan</a>, <a href="" class="text-dark">Philippines</a>, <a href="" class="text-dark">Đài Loan</a>, <a href="" class="text-dark">Brazil</a>, <a href="" class="text-dark">México</a>, <a href="" class="text-dark">Colombia</a>, <a href="" class="text-dark">Poland</a> & <a href="" class="text-dark">Spain</a>. Với sự đảm bảo của Shopee, bạn sẽ mua hàng trực tuyến an tâm và nhanh chóng hơn bao giờ hết!
        </p>
        <h6>
            MUA SẮM VÀ BÁN HÀNG ONLINE ĐƠN GIẢN, NHANH CHÓNG VÀ AN TOÀN
        </h6>
        <p>
            Nếu bạn đang tìm kiếm một trang web để mua và bán hàng trực tuyến thì Shopee.vn là một sự lựa chọn tuyệt vời dành cho bạn. Shopee là trang thương mại điện tử cho phép người mua và người bán tương tác và trao đổi dễ dàng thông tin về sản phẩm và chương trình khuyến mãi của shop. Do đó, việc mua bán trên Shopee trở nên nhanh chóng và đơn giản hơn. Bạn có thể trò chuyện trực tiếp với nhà bán hàng để hỏi trực tiếp về mặt hàng cần mua. Còn nếu bạn muốn tìm mua những dòng sản phẩm chính hãng, uy tín, <a href="" class="text-primary">Shopee Mall</a> chính là sự lựa chọn lí tưởng dành cho bạn. Để bạn có thể dễ dàng khi tìm hiểu và sử dụng sản phẩm, <a href="" class="text-primary">Shopee Blog - trang blog thông tin chính thức của Shopee</a> - sẽ giúp bạn có thể tìm được cho mình các kiến thức về xu hướng thời trang, review công nghệ, mẹo làm đẹp, tin tức tiêu dùng và deal giá tốt bất ngờ.
            Đến với Shopee, cơ hội để trở thành một nhà bán hàng dễ dàng hơn bao giờ hết. Chỉ với vài thao tác trên ứng dụng, bạn đã có thể đăng bán ngay những sản phẩm của mình. Không những thế, các nhà bán hàng có thể tự <a href="" class="text-primary">tạo chương trình khuyến mãi trên Shopee</a> để thu hút người mua với những sản phẩm có mức giá hấp dẫn. Khi đăng nhập tại Shopee Kênh người bán, bạn có thể dễ dàng phân loại sản phẩm, theo dõi đơn hàng, chăm sóc khách hàng và cập nhập ngay các hoạt động của shop.
        </p>
        <h6>
            TẢI ỨNG DỤNG SHOPEE NGAY ĐỂ MUA BÁN ONLINE MỌI LÚC, MỌI NƠI
        </h6>
        <p>
            Ưu điểm của ứng dụng Shopee là cho phép bạn mua và bán hàng mọi lúc, mọi nơi. Bạn có thể tải ứng dụng Shopee cũng như đăng sản phẩm bán hàng một cách nhanh chóng và tiện lợi. Ngoài ra, ứng dụng Shopee còn có những ưu điểm sau:
        </p>
        <p>
            Giao diện thân thiện, đơn giản, dễ sử dụng. Bạn sẽ dễ dàng thấy được ngay những sản phẩm nổi bật cũng như dễ dàng tìm đến các ô tìm kiếm, giỏ hàng hoặc tính năng chat liền tay.
        </p>
        <p>
            Ứng dụng tích hợp công nghệ quản lý đơn mua và bán hàng tiện lợi trên cùng một tài khoản. Bạn sẽ vừa là người mua hàng, vừa là người bán hàng rất linh hoạt, dễ dàng.
        </p>
        <p>
            Cập nhập thông tin khuyến mãi, <a href="" class="text-primary">Shopee flash sale</a> nhanh chóng và liên tục.
        </p>
        <p>
            Tại Shopee, bạn có thể lưu các <a href="" class="text-primary">mã giảm giá Shopee</a> và <a href="" class="text-primary">mã miễn phí vận chuyển toàn quốc</a>. Bên cạnh đó, Shopee cũng sẽ có những chiến dịch khuyến mãi lớn hằng năm như <a href="" class="text-primary">Siêu hội tiêu dùng 15.3</a>, <a href="" class="text-primary">Shopee 4.4 sale</a>, <a href="" class="text-primary">Shopee 5.5 sale</a>, <a href="" class="text-primary">Shopee sale 7.7</a>, <a href="" class="text-primary">Shopee sale 8.8</a>, <a href="" class="text-primary">Shopee sale 9.9</a>, <a href="" class="text-primary">Shopee 10.10 sale</a>, <a href="" class="text-primary">Shopee 11.11 sale</a>, <a href="" class="text-primary">Shopee Sale sinh nhật</a>, <a href="" class="text-primary">Shopee Tết Sale</a>. Đây là thời điểm để người mua hàng có thể nhanh tay chọn ngay cho mình những mặt hàng ưa thích với mức giá giảm kỉ lục. Ngoài ra, bạn còn có thể thỏa thích săn sale vào các ngày trong tháng như <a href="" class="text-primary">Sale đồng giá giữa tháng</a> và <a href="" class="text-primary">Sale cuối tháng</a>.
        </p>
        <h6>
            MUA HÀNG HIỆU CAO CẤP GIÁ TỐT TẠI SHOPEE
        </h6>
        <p>
            Bên cạnh <a href="" class="text-primary">Shopee Premium</a>, Shopee còn có rất nhiều khuyến mãi khủng cho <a href="" class="text-primary">hàng hiệu giảm đến 50%</a>. Cộng với mã giao hàng miễn phí, Shopee cũng có các mã giảm giá được phân phối mỗi tháng từ rất nhiều gian hàng chính hãng tham gia chương trình khuyến mãi này. Bên cạnh đó, Shopee còn tập hợp rất nhiều thương hiệu đình đám được các nhà bán lẻ uy tín phân phối bán trên Shopee, <a href="" class="text-primary">top sản phẩm hot deal cho bạn săn sale</a> luôn cập nhật mỗi giờ, mỗi ngày, đem đến cho bạn sự lựa chọn đa dạng, từ các hãng mỹ phẩm nổi tiếng hàng đầu như <a href="" class="text-primary">Kiehl's</a>, <a href="" class="text-primary">MAC</a>, <a href="" class="text-primary">Foreo</a>, <a href="" class="text-primary">SK-II</a>, <a href="" class="text-primary">Estee Lauder</a>,... Đến những thương hiệu công nghệ nổi tiếng như <a href="" class="text-primary">camera hành trình Gopro</a>, <a href="" class="text-primary">máy ảnh Fuifilm</a>, <a href="" class="text-primary">webcam Hikvision</a>, <a href="" class="text-primary">máy đọc sách Kindle</a>,... Tại Shopee, bạn có thể dễ dàng tìm thấy các thương hiệu giày thể thao phổ biến hiện nay như: <a href="" class="text-primary">Converse</a>, <a href="" class="text-primary">New Balance</a>, <a href="" class="text-primary">Nike</a>, <a href="" class="text-primary">Vans</a>, <a href="" class="text-primary">Crocs</a>,...
        </p>
        <h6>
            MUA HÀNG CHÍNH HÃNG TỪ CÁC THƯƠNG HIỆU LỚN VỚI SHOPEE
        </h6>
        <p>
            Mua hàng trên Shopee luôn là một trải nghiệm ấn tượng. Dù bạn đang có nhu cầu mua bất kỳ mặt hàng <a href="" class="text-primary">thời trang nam</a>, <a href="" class="text-primary">thời trang nữ</a>, <a href="" class="text-primary">đồng hồ</a>, <a href="" class="text-primary">điện thoại</a>, <a href="" class="text-primary">nước rửa tay khô</a> hay <a href="" class="text-primary">khẩu trang N95</a> thì Shopee cũng sẽ đảm bảo cung cấp cho bạn những sản phẩm ưng ý. Bên cạnh đó, Shopee cũng có sự tham gia của các thương hiệu hàng đầu thế giới ở đa dạng nhiều lĩnh vực khác nhau. Trong đó có thể kể đến Samsung, OPPO, Xiaomi, Innisfree, Unilever, P&G, Biti’s,...Các thương hiệu này hiện cũng đã có cửa hàng chính thức trên Shopee Mall với hàng trăm mặt hàng chính hãng, được cập nhập liên tục. Là một kênh bán hàng uy tín, Shopee luôn cam kết mang lại cho khách hàng những trải nghiệm mua sắm online giá rẻ, an toàn và tin cậy. Mọi thông tin về người bán và người mua đều được bảo mật tuyệt đối. Các hoạt động giao dịch thanh toán tại Shopee luôn được đảm bảo diễn ra nhanh chóng, an toàn. Một vấn đề nữa khiến cho các khách hàng luôn quan tâm đó chính là mua hàng trên Shopee có đảm bảo không.
        </p>
        <p>
            Shopee luôn cam kết mọi sản phẩm trên Shopee, đặc biệt là Shopee Mall đều là những sản phẩm chính hãng, đầy đủ tem nhãn, bảo hành từ nhà bán hàng. Ngoài ra, Shopee bảo vệ người mua và người bán bằng cách giữ số tiền giao dịch đến khi người mua xác nhận đồng ý với đơn hàng và không có yêu cầu khiếu nại, trả hàng hay hoàn tiền nào. Thanh toán sau đó sẽ được chuyển đến cho người bán. Đến với Shopee ngay hôm nay để mua hàng online giá rẻ và trải nghiệm dịch vụ chăm sóc khách hàng tuyệt vời tại đây. Đặc biệt khi mua sắm trên Shopee Mall, bạn sẽ được miễn phí vận chuyển, giao hàng tận nơi và 7 ngày miễn phí trả hàng. Ngoài ra, khách hàng có thể sử dụng <a href="" class="text-primary">Shopee Xu</a> để đổi lấy mã giảm giá có giá trị cao và voucher dịch vụ hấp dẫn. Tiếp đến là <a href="" class="text-primary">Shopee Home Club</a>, <a href="" class="text-primary">Shopee Mum Club</a>, <a href="" class="text-primary">Shopee Beauty Club</a> và <a href="" class="text-primary">Shopee Book Club</a> với các ưu đãi độc quyền từ các thương hiệu lớn có những khách hàng đã đăng ký làm thành viên. Hãy truy cập ngay Shopee.vn hoặc tải ngay ứng dụng Shopee về điện thoại ngay hôm nay!
        </p>
    </div>
</div>
<!-- End main contentinfo -->

<!-- Begin main category-child -->
<div class="main__category--child-wrapper py-5">
    <div class="main__category--child container">
        <h5 class="main__category--child-title">
            Danh Mục
        </h5>
        <div class="main__category--child-main d-flex justify-content-between">
            <div class="main__category--child-main-div">
                @foreach ($CategoryChild1 as $Dad1)
                <a href="{{ route('category-dad', ['id' => $Dad1->id]) }}" class="main__category--child-main-div-title">
                    {{ $Dad1->name }}
                </a>
                <div class="main__category--child-main-div-main mb-3">
                    @foreach ($Dad1->categoryChildren as $Child1)
                    <a href="{{ route('category-child', ['id' => $Child1->id]) }}">{{ $Child1->name }}</a>
                    |
                    @endforeach
                </div>
                @endforeach
            </div>
            <div class="main__category--child-main-div">
                @foreach ($CategoryChild2 as $Dad2)
                <a href="{{ route('category-dad', ['id' => $Dad2->id]) }}" class="main__category--child-main-div-title">
                    {{ $Dad2->name }}
                </a>
                <div class="main__category--child-main-div-main mb-3">
                    @foreach ($Dad2->categoryChildren as $Child2)
                    <a href="{{ route('category-child', ['id' => $Child2->id]) }}">{{ $Child2->name }}</a>
                    |
                    @endforeach
                </div>
                @endforeach
            </div>
            <div class="main__category--child-main-div">
                @foreach ($CategoryChild3 as $Dad3)
                <a href="{{ route('category-dad', ['id' => $Dad3->id]) }}" class="main__category--child-main-div-title">
                    {{ $Dad3->name }}
                </a>
                <div class="main__category--child-main-div-main mb-3">
                    @foreach ($Dad3->categoryChildren as $Child3)
                    <a href="{{ route('category-child', ['id' => $Child3->id]) }}">{{ $Child3->name }}</a>
                    |
                    @endforeach
                </div>
                @endforeach
            </div>
            <div class="main__category--child-main-div">
                @foreach ($CategoryChild4 as $Dad4)
                <a href="{{ route('category-dad', ['id' => $Dad4->id]) }}" class="main__category--child-main-div-title">
                    {{ $Dad4->name }}
                </a>
                <div class="main__category--child-main-div-main mb-3">
                    @foreach ($Dad4->categoryChildren as $Child4)
                    <a href="{{ route('category-child', ['id' => $Child4->id]) }}">{{ $Child4->name }}</a>
                    |
                    @endforeach
                </div>
                @endforeach
            </div>
            <div class="main__category--child-main-div">
                @foreach ($CategoryChild5 as $Dad5)
                <a href="{{ route('category-dad', ['id' => $Dad5->id]) }}" class="main__category--child-main-div-title">
                    {{ $Dad5->name }}
                </a>
                <div class="main__category--child-main-div-main mb-3">
                    @foreach ($Dad5->categoryChildren as $Child5)
                    <a href="{{ route('category-child', ['id' => $Child5->id]) }}">{{ $Child5->name }}</a>
                    |
                    @endforeach
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- End main category-child  -->
@endsection

@push('scripts')
<!-- Link script index -->
<script src="{{ asset('/js/index.js') }}"></script>
@endpush