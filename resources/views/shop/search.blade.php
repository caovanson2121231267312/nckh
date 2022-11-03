@extends('extends.shop1')

@section('title')
    <title>Tìm kiếm sản phẩm</title>
@endsection

@section('meta')
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />


    <link rel="shortcut icon" href="{{ asset('shop/assets/img/zalo suopprt/cellphones.png') }}">
    <link rel="stylesheet"
        href="{{ asset('shop/assets/font/themify-icons-font/themify-icons/themify-icons.css') }}">
    <link rel="stylesheet"
        href="{{ asset('shop/assets/font/fontawesome-free-5.15.4/fontawesome-free-5.15.4-web/css/all.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('shop/assets/css/base.css') }}">
    <link rel="stylesheet" href="{{ asset('shop/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('shop/assets/css/tablet.css') }}">
    <link rel="stylesheet" href="{{ asset('shop/assets/css/index.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('shop/assets/css/plugins/animate.min.css') }}"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="{{ asset('shop/assets/css/mobile.css') }}">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
@endsection

@section('content')

<div class="block-breadcrumbs affix-top container1" data-spy="affix" data-offset-top="30">
    <div class="cps-container">
        <ul>
            <li>
                <a href="{{route('home')}}" title="Trở về trang chủ"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="10.633"
                        viewBox="0 0 12 10.633">
                        <path id="home"
                            d="M13.2,9.061H12.1v3.965a.6.6,0,0,1-.661.661H8.793V9.721H6.15v3.965H3.507a.6.6,0,0,1-.661-.661V9.061h-1.1c-.4,0-.311-.214-.04-.494L7,3.259a.634.634,0,0,1,.936,0l5.3,5.307c.272.281.356.495-.039.495Z"
                            transform="translate(-1.471 -3.053)" fill="#d70018"></path>
                    </svg>Trang chủ</a>

                <i class="fas fa-chevron-right fa-sm"></i>
            </li>

                <li>
                    <a href="#" title="">Kết quả tìm kiếm cho {{$key}}</a>

                    <i class="fas fa-chevron-right fa-sm"></i>
                </li>



        </ul>
    </div>
</div>
<section>
    <div class="wide grid">
        <div>
<p class="p-s">
    Tìm thấy <span class="p-red">{{$count}}</span> sản phẩm cho từ khoá <span class="p-red">'{{$key}}'</span>
</p>
        </div>
    </div>
</section>
<section>
    <div class="cps-nav-tabs">
        <div class="list-nav-tabs">
            <a class="item-nav-tabs filter_cat active" data-id="0" data-name="all"><span>Tất cả</span></a>
            <a class="item-nav-tabs filter_cat" href="http://localhost:8080/nckh/Apple" target="_blank">Điện thoại</a>
            <a class="item-nav-tabs filter_cat" href="http://localhost:8080/nckh/Mac" target="_blank">Mac</a>
            <a class="item-nav-tabs filter_cat" href="http://localhost:8080/nckh/Dell" target="_blank">Màn hình</a>
            <a class="item-nav-tabs filter_cat" href="http://localhost:8080/nckh/iPhone13Series" target="_blank">Iphone</a>
            <a class="item-nav-tabs filter_cat" href="http://localhost:8080/nckh" target="_blank">Khác</a>
        </div>
    </div>
</section>
{{-- ----------- --}}
<section>
    <div class="wide">
        <div class="row flash__sale__product__list__wrapper">
            <div class="flash__sale__product__list flex-wrap">

                    @foreach($pro as $value)
                    <div class="flash__sale__product item-search">
                        <!--  Discount -->
                        <div class="flash__sale__discount">
                            <p>Giảm {{$value->sale}}%</p>
                        </div>
                        <div class="featured__phone__product__img__wrapper">
                            <a href="{{route('pro',['file'=>$value->file,'name'=>$value->name_file])}}">
                                <img src="{{ asset('assets/upload/' . $value->main_img) }}"></a>
                        </div>
                        <div class="flash__sale__product__desc">
                            <a href="{{route('pro',['file'=>$value->file,'name'=>$value->name_file])}}" class="flash__sale__product__desc__title">
                                <p class="flash__sale__product__desc__title__1st">
                                    {{$value->name}}
                                </p>
                            </a>
                            <div class="flash__sale__product__desc__price">
                                <div class="flash__sale__product__desc__price__new">
                                    <p>
                                        {{$value->sale_product}}
                                        <span class="flash__sale__product__desc__price__unit__new">đ</span>
                                    </p>
                                </div>
                                <div class="flash__sale__product__desc__price__old">
                                    <p>
                                        {{$value->price}}
                                        <span class="flash__sale__product__desc__price__unit__old">đ</span>
                                    </p>
                                </div>
                            </div>
@if(isset($value->hot))
    <div class="featured__phone__product__promotion__info">
                                <p>{{$value->hot}}</p>
                            </div>
@endif

                            {{-- <div class="flash__sale__product__desc__rare">
                                    <div class="flash__sale__product__desc__rare__star">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="flash__sale__product__desc__rare__vote">
                                        <p>&nbsp;
    0                                     đánh giá</p>
                                    </div>
                                </div> --}}
                        </div>
                    </div>
                    @endforeach
                        {{--  --}}
            </div>
        </div>
    </div>
</section>
    {{-- @include('shop.layout.pc') --}}


@endsection

@section('script')
<script src="{{ asset('assets/js/plugins/jquery.js') }}"></script>
<script src="{{ asset('assets/js/pcoded.js') }}"></script>
<script src="{{ asset('assets/js/plugins/sweetalert2.all.min.js') }}"></script>
<script src="{{ asset('assets/js/pages/ac-alert.js') }}"></script>
<script src="{{ asset('assets/js/ajax.js') }}"></script>
<script src="{{ asset('assets/js/script.js') }}"></script>
<script src="{{ asset('shop/assets/js/javascript.js') }}"></script>


<style type="text/css">
.swal2-popup {
    width: auto !important;
}

.swal2-title {
    background-color: #D70018 !important;
    padding: 15px;
    color: white !important;
    border-radius: 10px 10px 0 0;
}

.swal2-container.swal2-center>.swal2-popup {
    border-radius: 10px;
}

.swal2-html-container {
    max-width: 550px;
}

</style>

@if (session('mess'))
<script type="text/javascript">
    console.log('da them')
    alertDone("{{ session('title') }}", "{{ session('mess') }}");
</script>
@endif
@endsection
