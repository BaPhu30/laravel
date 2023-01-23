@extends('header-footer-index')

@push('styles')
<!-- Link css category -->
<link href="{{ asset('/css/category.css') }}" rel="stylesheet">
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
                    <a href="" class="main__shopeemall--slider-main-item border">
                        <img src="{{ asset('/img/category/category-shopeemall/category-shopeemall-1.png') }}" alt="">
                    </a>
                    <a href="" class="main__shopeemall--slider-main-item border">
                        <img src="{{ asset('/img/category/category-shopeemall/category-shopeemall-2.png') }}" alt="">
                    </a>
                    <a href="" class="main__shopeemall--slider-main-item border">
                        <img src="{{ asset('/img/category/category-shopeemall/category-shopeemall-3.png') }}" alt="">
                    </a>
                    <a href="" class="main__shopeemall--slider-main-item border">
                        <img src="{{ asset('/img/category/category-shopeemall/category-shopeemall-4.png') }}" alt="">
                    </a>
                    <a href="" class="main__shopeemall--slider-main-item border">
                        <img src="{{ asset('/img/category/category-shopeemall/category-shopeemall-5.png') }}" alt="">
                    </a>
                    <a href="" class="main__shopeemall--slider-main-item border">
                        <img src="{{ asset('/img/category/category-shopeemall/category-shopeemall-6.png') }}" alt="">
                    </a>
                    <a href="" class="main__shopeemall--slider-main-item border">
                        <img src="{{ asset('/img/category/category-shopeemall/category-shopeemall-7.png') }}" alt="">
                    </a>
                    <a href="" class="main__shopeemall--slider-main-item border">
                        <img src="{{ asset('/img/category/category-shopeemall/category-shopeemall-8.png') }}" alt="">
                    </a>
                    <a href="" class="main__shopeemall--slider-main-item border">
                        <img src="{{ asset('/img/category/category-shopeemall/category-shopeemall-9.png') }}" alt="">
                    </a>
                    <a href="" class="main__shopeemall--slider-main-item border">
                        <img src="{{ asset('/img/category/category-shopeemall/category-shopeemall-10.png') }}" alt="">
                    </a>
                    <a href="" class="main__shopeemall--slider-main-item border">
                        <img src="{{ asset('/img/category/category-shopeemall/category-shopeemall-11.png') }}" alt="">
                    </a>
                    <a href="" class="main__shopeemall--slider-main-item border">
                        <img src="{{ asset('/img/category/category-shopeemall/category-shopeemall-12.png') }}" alt="">
                    </a>
                </div>
                <div class="d-flex">
                    <a href="" class="main__shopeemall--slider-main-item border">
                        <img src="{{ asset('/img/category/category-shopeemall/category-shopeemall-13.png') }}" alt="">
                    </a>
                    <a href="" class="main__shopeemall--slider-main-item border">
                        <img src="{{ asset('/img/category/category-shopeemall/category-shopeemall-14.png') }}" alt="">
                    </a>
                    <a href="" class="main__shopeemall--slider-main-item border">
                        <img src="{{ asset('/img/category/category-shopeemall/category-shopeemall-15.png') }}" alt="">
                    </a>
                    <a href="" class="main__shopeemall--slider-main-item border">
                        <img src="{{ asset('/img/category/category-shopeemall/category-shopeemall-16.png') }}" alt="">
                    </a>
                    <a href="" class="main__shopeemall--slider-main-item border">
                        <img src="{{ asset('/img/category/category-shopeemall/category-shopeemall-17.png') }}" alt="">
                    </a>
                    <a href="" class="main__shopeemall--slider-main-item border">
                        <img src="{{ asset('/img/category/category-shopeemall/category-shopeemall-18.png') }}" alt="">
                    </a>
                    <a href="" class="main__shopeemall--slider-main-item border">
                        <img src="{{ asset('/img/category/category-shopeemall/category-shopeemall-19.png') }}" alt="">
                    </a>
                    <a href="" class="main__shopeemall--slider-main-item border">
                        <img src="{{ asset('/img/category/category-shopeemall/category-shopeemall-20.png') }}" alt="">
                    </a>
                    <a href="" class="main__shopeemall--slider-main-item border">
                        <img src="{{ asset('/img/category/category-shopeemall/category-shopeemall-21.png') }}" alt="">
                    </a>
                    <a href="" class="main__shopeemall--slider-main-item border">
                        <img src="{{ asset('/img/category/category-shopeemall/category-shopeemall-22.png') }}" alt="">
                    </a>
                    <a href="" class="main__shopeemall--slider-main-item border">
                        <img src="{{ asset('/img/category/category-shopeemall/category-shopeemall-23.png') }}" alt="">
                    </a>
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
@endsection

@push('scripts')
<!-- Link script category -->
<script src="{{ asset('/js/category.js') }}"></script>
@endpush