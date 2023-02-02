@extends('header-footer-index')

@push('styles')
<link href="{{ asset('/css/all-category.css') }}" rel="stylesheet">
@endpush

@section('main')
<div class="main__category--wrapper">
    <div class="main__category container pb-5">
        <div class="main__category--layer">
            <a class="me-2" href="{{route('index')}}">Dạo</a>
            >
            <a class="ms-2" href="{{ route('all-category') }}">Tất cả Danh mục</a>
        </div>
        <div class="main__category--main bg-white">
            <div class="main__category--main-nav d-flex align-items-center">
                @foreach ($CategoryDad as $CategoryDad1)
                <a href="{{ route('category-dad', ['id' => $CategoryDad1->id]) }}" class="main__category--main-nav-item d-flex justify-content-center align-items-center">
                    <div class="main__category--main-nav-item-img">
                        <img src="{{ $CategoryDad1->img }}" alt="">
                    </div>
                    <div class="main__category--main-nav-item-title text-center">
                        {{ $CategoryDad1->name }}
                    </div>
                </a>
                @endforeach
            </div>
            <div class="main__category--main-alphabetical d-flex justify-content-between">
                <div id="main__category--main-alphabetical-item-A" class="main__category--main-alphabetical-item">
                    A
                </div>
                <div id="main__category--main-alphabetical-item-B" class="main__category--main-alphabetical-item active">
                    B
                </div>
                <div id="main__category--main-alphabetical-item-C" class="main__category--main-alphabetical-item active">
                    C
                </div>
                <div id="main__category--main-alphabetical-item-D" class="main__category--main-alphabetical-item active">
                    D
                </div>
                <div id="main__category--main-alphabetical-item-E" class="main__category--main-alphabetical-item">
                    E
                </div>
                <div id="main__category--main-alphabetical-item-F" class="main__category--main-alphabetical-item">
                    F
                </div>
                <div id="main__category--main-alphabetical-item-G" class="main__category--main-alphabetical-item active">
                    G
                </div>
                <div id="main__category--main-alphabetical-item-H" class="main__category--main-alphabetical-item">
                    H
                </div>
                <div id="main__category--main-alphabetical-item-I" class="main__category--main-alphabetical-item">
                    I
                </div>
                <div id="main__category--main-alphabetical-item-J" class="main__category--main-alphabetical-item">
                    J
                </div>
                <div id="main__category--main-alphabetical-item-K" class="main__category--main-alphabetical-item">
                    K
                </div>
                <div id="main__category--main-alphabetical-item-L" class="main__category--main-alphabetical-item">
                    L
                </div>
                <div id="main__category--main-alphabetical-item-M" class="main__category--main-alphabetical-item active">
                    M
                </div>
                <div id="main__category--main-alphabetical-item-N" class="main__category--main-alphabetical-item active">
                    N
                </div>
                <div id="main__category--main-alphabetical-item-O" class="main__category--main-alphabetical-item active">
                    O
                </div>
                <div id="main__category--main-alphabetical-item-P" class="main__category--main-alphabetical-item active">
                    P
                </div>
                <div id="main__category--main-alphabetical-item-Q" class="main__category--main-alphabetical-item">
                    Q
                </div>
                <div id="main__category--main-alphabetical-item-R" class="main__category--main-alphabetical-item">
                    R
                </div>
                <div id="main__category--main-alphabetical-item-S" class="main__category--main-alphabetical-item active">
                    S
                </div>
                <div id="main__category--main-alphabetical-item-T" class="main__category--main-alphabetical-item active">
                    T
                </div>
                <div id="main__category--main-alphabetical-item-U" class="main__category--main-alphabetical-item">
                    U
                </div>
                <div id="main__category--main-alphabetical-item-V" class="main__category--main-alphabetical-item active">
                    V
                </div>
                <div id="main__category--main-alphabetical-item-W" class="main__category--main-alphabetical-item">
                    W
                </div>
                <div id="main__category--main-alphabetical-item-X" class="main__category--main-alphabetical-item">
                    X
                </div>
                <div id="main__category--main-alphabetical-item-Y" class="main__category--main-alphabetical-item">
                    Y
                </div>
                <div id="main__category--main-alphabetical-item-Z" class="main__category--main-alphabetical-item">
                    Z
                </div>
            </div>
            <div class="main__category--main-info mx-5">
                <div class="main__category--main-info-title py-3 border-bottom mb-3">
                    B
                </div>
                @foreach ($CategoryDadB as $DadB)
                <a href="{{ route('category-dad', ['id' => $DadB->id]) }}" class="main__category--main-info-categorydad">
                    {{ $DadB->name }}
                </a>
                <div class="main__category--main-info-categorychilds d-flex pb-4">
                    @foreach ($DadB->categoryChildren as $ChildB)
                    <a href="{{ route('category-child', ['id' => $ChildB->id]) }}" class="w-25">{{ $ChildB->name }}</a>
                    @endforeach
                </div>
                @endforeach
                <div class="main__category--main-info-title py-3 border-bottom mb-3">
                    C
                </div>
                @foreach ($CategoryDadC as $DadC)
                <a href="{{ route('category-dad', ['id' => $DadC->id]) }}" class="main__category--main-info-categorydad">
                    {{ $DadC->name }}
                </a>
                <div class="main__category--main-info-categorychilds d-flex pb-4">
                    @foreach ($DadC->categoryChildren as $ChildC)
                    <a href="{{ route('category-child', ['id' => $ChildC->id]) }}" class="w-25">{{ $ChildC->name }}</a>
                    @endforeach
                </div>
                @endforeach
                <div class="main__category--main-info-title py-3 border-bottom mb-3">
                    D
                </div>
                @foreach ($CategoryDadD as $DadD)
                <a href="{{ route('category-dad', ['id' => $DadD->id]) }}" class="main__category--main-info-categorydad">
                    {{ $DadD->name }}
                </a>
                <div class="main__category--main-info-categorychilds d-flex pb-4">
                    @foreach ($DadD->categoryChildren as $ChildD)
                    <a href="{{ route('category-child', ['id' => $ChildD->id]) }}" class="w-25">{{ $ChildD->name }}</a>
                    @endforeach
                </div>
                @endforeach
                <div class="main__category--main-info-title py-3 border-bottom mb-3">
                    G
                </div>
                @foreach ($CategoryDadG as $DadG)
                <a href="{{ route('category-dad', ['id' => $DadG->id]) }}" class="main__category--main-info-categorydad">
                    {{ $DadG->name }}
                </a>
                <div class="main__category--main-info-categorychilds d-flex pb-4">
                    @foreach ($DadG->categoryChildren as $ChildG)
                    <a href="{{ route('category-child', ['id' => $ChildG->id]) }}" class="w-25">{{ $ChildG->name }}</a>
                    @endforeach
                </div>
                @endforeach
                <div class="main__category--main-info-title py-3 border-bottom mb-3">
                    M
                </div>
                @foreach ($CategoryDadM as $DadM)
                <a href="{{ route('category-dad', ['id' => $DadM->id]) }}" class="main__category--main-info-categorydad">
                    {{ $DadM->name }}
                </a>
                <div class="main__category--main-info-categorychilds d-flex pb-4">
                    @foreach ($DadM->categoryChildren as $ChildM)
                    <a href="{{ route('category-child', ['id' => $ChildM->id]) }}" class="w-25">{{ $ChildM->name }}</a>
                    @endforeach
                </div>
                @endforeach
                <div class="main__category--main-info-title py-3 border-bottom mb-3">
                    N
                </div>
                @foreach ($CategoryDadN as $DadN)
                <a href="{{ route('category-dad', ['id' => $DadN->id]) }}" class="main__category--main-info-categorydad">
                    {{ $DadN->name }}
                </a>
                <div class="main__category--main-info-categorychilds d-flex pb-4">
                    @foreach ($DadN->categoryChildren as $ChildN)
                    <a href="{{ route('category-child', ['id' => $ChildN->id]) }}" class="w-25">{{ $ChildN->name }}</a>
                    @endforeach
                </div>
                @endforeach
                <div class="main__category--main-info-title py-3 border-bottom mb-3">
                    O
                </div>
                @foreach ($CategoryDadO as $DadO)
                <a href="{{ route('category-dad', ['id' => $DadO->id]) }}" class="main__category--main-info-categorydad">
                    {{ $DadO->name }}
                </a>
                <div class="main__category--main-info-categorychilds d-flex pb-4">
                    @foreach ($DadO->categoryChildren as $ChildO)
                    <a href="{{ route('category-child', ['id' => $ChildO->id]) }}" class="w-25">{{ $ChildO->name }}</a>
                    @endforeach
                </div>
                @endforeach
                <div class="main__category--main-info-title py-3 border-bottom mb-3">
                    P
                </div>
                @foreach ($CategoryDadP as $DadP)
                <a href="{{ route('category-dad', ['id' => $DadP->id]) }}" class="main__category--main-info-categorydad">
                    {{ $DadP->name }}
                </a>
                <div class="main__category--main-info-categorychilds d-flex pb-4">
                    @foreach ($DadP->categoryChildren as $ChildP)
                    <a href="{{ route('category-child', ['id' => $ChildP->id]) }}" class="w-25">{{ $ChildP->name }}</a>
                    @endforeach
                </div>
                @endforeach
                <div class="main__category--main-info-title py-3 border-bottom mb-3">
                    S
                </div>
                @foreach ($CategoryDadS as $DadS)
                <a href="{{ route('category-dad', ['id' => $DadS->id]) }}" class="main__category--main-info-categorydad">
                    {{ $DadS->name }}
                </a>
                <div class="main__category--main-info-categorychilds d-flex pb-4">
                    @foreach ($DadS->categoryChildren as $ChildS)
                    <a href="{{ route('category-child', ['id' => $ChildS->id]) }}" class="w-25">{{ $ChildS->name }}</a>
                    @endforeach
                </div>
                @endforeach
                <div class="main__category--main-info-title py-3 border-bottom mb-3">
                    T
                </div>
                @foreach ($CategoryDadT as $DadT)
                <a href="{{ route('category-dad', ['id' => $DadT->id]) }}" class="main__category--main-info-categorydad">
                    {{ $DadT->name }}
                </a>
                <div class="main__category--main-info-categorychilds d-flex pb-4">
                    @foreach ($DadT->categoryChildren as $ChildT)
                    <a href="{{ route('category-child', ['id' => $ChildT->id]) }}" class="w-25">{{ $ChildT->name }}</a>
                    @endforeach
                </div>
                @endforeach
                <div class="main__category--main-info-title py-3 border-bottom mb-3">
                    V
                </div>
                @foreach ($CategoryDadV as $DadV)
                <a href="{{ route('category-dad', ['id' => $DadV->id]) }}" class="main__category--main-info-categorydad">
                    {{ $DadV->name }}
                </a>
                <div class="main__category--main-info-categorychilds d-flex pb-4">
                    @foreach ($DadV->categoryChildren as $ChildV)
                    <a href="{{ route('category-child', ['id' => $ChildV->id]) }}" class="w-25">{{ $ChildV->name }}</a>
                    @endforeach
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script type="text/javascript" src="{{ asset('/js/all-category.js') }}"></script>
@endpush