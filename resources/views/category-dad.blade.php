@extends('header-footer-index')

@push('styles')
<!-- Link css category-dad -->
<link href="{{ asset('/css/category-dad.css') }}" rel="stylesheet">
@endpush

@section('main')
<!-- Begin main banner-->
<div class="main__banner-hotword--wrapper">
    <div id="main__banner--slide-1" class="main__banner--slide w-100 container py-3 carousel slide" data-bs-ride="carousel">
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
<!-- End main banner -->

<!-- Begin main shopeemall-->
<div class="main__shopeemall--wrapper pb-4">
    <div class="main__shopeemall--title d-flex justify-content-between align-items-center container bg-white">
        <a href="" class="main__shopeemall--title-main d-flex align-items-center">
            SHOPEE MALL
        </a>
        <a href="" class="main__shopeemall--title-seemore justify-content-between align-items-center d-flex">
            Xem Tất Cả
            <i class="fa-solid fa-chevron-right p-2"></i>
        </a>
    </div>
    <div class="main__shopeemall--slider d-flex justify-content-between container bg-white">
        <i class="main__shopeemall--slider-prev fa-solid fa-chevron-left"></i>
        <i class="main__shopeemall--slider-next fa-solid fa-chevron-right"></i>
        <div class="main__shopeemall--slider-main-wrapper">
            <div class="main__shopeemall--slider-main">
                <div class="d-flex">
                    @foreach ($ShopeeMall1 as $ShopeeMall1)
                    <a href="" class="main__shopeemall--slider-main-item border">
                        <img src="{{ $ShopeeMall1->avatar }}" alt="">
                    </a>
                    @endforeach
                </div>
                <div class="d-flex">
                    @foreach ($ShopeeMall2 as $ShopeeMall2)
                    <a href="" class="main__shopeemall--slider-main-item border">
                        <img src="{{ $ShopeeMall2->avatar }}" alt="">
                    </a>
                    @endforeach
                    <a href="" class="main__shopeemall--slider-main-item border">
                        <div class="d-flex justify-content-center align-items-center">
                            Xem Tất Cả
                            <i class="fa-solid fa-chevron-right p-2"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End main shopeemall -->

<!-- Begin main product-->
<div class="main__product--wrapper pb-4">
    <div class="main__product d-flex justify-content-between container">
        <div class="main__product--filter">
            <div class="main__product--filter-all-category border-bottom">
                <a href="{{ route('all-category') }}">
                    <i class="fa-solid fa-bars pe-2 py-3"></i>
                    Tất Cả Danh Mục
                </a>
            </div>
            @foreach ($CategoryDad as $CategoryDad1)
            <div class="main__product--filter-category-dad py-2">
                <a href="{{ route('category-dad', ['id' => $CategoryDad1->id]) }}">
                    {{ $CategoryDad1->name }}
                </a>
            </div>
            @foreach ($CategoryDad1->categoryChildren as $Child1)
            <div class="main__product--filter-category-child pb-2">
                <a href="{{ route('category-child', ['id' => $Child1->id]) }}">
                    {{ $Child1->name }}
                </a>
            </div>
            @endforeach
            @endforeach
        </div>
        <div class="main__product--main">
            <div class="main__product--main-title">
                <a class="main__product--main-title-1 p-2">Sắp xếp theo</a>
                <a class="main__product--main-title-2 p-2 me-2">Phổ Biến</a>
                <a class="main__product--main-title-3 p-2 me-2">Mới Nhất</a>
                <a class="main__product--main-title-3 p-2 me-2">Bán Chạy</a>
            </div>
            <div class="main__product--main-content d-flex flex-wrap">
                @foreach ($Products as $Product1)
                @foreach ($Product1->products as $Product)
                <a href="">
                    <div class="main__product--main-content-post bg-white">
                        <div class="main__product--main-content-post-img position-relative">
                            <div class="main__product--main-content-post-img-percent position-absolute">
                                <div class="main__product--main-content-post-img-percent-top text-center">0%</div>
                                <div class="main__product--main-content-post-img-percent-bottom text-center text-white">Giảm</div>
                            </div>
                            <div class="main__product--main-content-post-img-background position-absolute">
                                <img src="/img/index/index-flashsale/index-flashsale-bg.png" alt="">
                            </div>
                            <div class="main__product--main-content-post-img-product position-absolute">
                                @php
                                $img = explode(', ', $Product->img);
                                echo "<img src='$img[0]'>" ; 
                                @endphp
                            </div>
                        </div>
                        <div class="main__product--main-content-post-main">
                            <div class="main__product--main-content-post-main-title text-dark mb-2">
                                {{ $Product->title }}
                            </div>
                            <div class="main__product--main-content-post-main-price d-flex align-items-center mb-2">
                                <span>₫</span>
                                <p class="m-0">{{ $Product->sold }}</p>
                            </div>
                            <div class="main__product--main-content-post-main-sold">
                                Đã bán 0
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- End main product -->
@endsection

@push('scripts')
<!-- Link script category-dad -->
<script src="{{ asset('/js/category-dad.js') }}"></script>
@endpush