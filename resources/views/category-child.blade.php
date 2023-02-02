@extends('header-footer-index')

@push('styles')
<!-- Link css category-child -->
<link href="{{ asset('/css/category-child.css') }}" rel="stylesheet">
@endpush

@section('main')
<!-- Begin main product-->
<div class="main__product--wrapper py-4">
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
                <a href="{{ route('category-dad', ['id' => $CategoryDad1->categoryDad->id]) }}">
                    {{ $CategoryDad1->categoryDad->name }}
                </a>
            </div>
            @endforeach
            @foreach ($CategoryChild as $CategoryChild1)
            @foreach ($CategoryChild1->categoryChildren as $CategoryChild2)
            <div class="main__product--filter-category-child pb-2">
                <a href="{{ route('category-child', ['id' => $CategoryChild2->id]) }}">
                    {{ $CategoryChild2->name }}
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
                <a href="{{ route('product', ['id' => $Product->id]) }}">
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
<!-- Link script category-child -->
<script src="{{ asset('/js/category-child.js') }}"></script>
@endpush