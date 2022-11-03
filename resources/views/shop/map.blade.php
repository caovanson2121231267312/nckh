@extends('extends.shop1')

@section('title')
    <title>Cửa hàng gần bạn nhất</title>
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
                <a href="#" title="Trở về trang chủ"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="10.633"
                        viewBox="0 0 12 10.633">
                        <path id="home"
                            d="M13.2,9.061H12.1v3.965a.6.6,0,0,1-.661.661H8.793V9.721H6.15v3.965H3.507a.6.6,0,0,1-.661-.661V9.061h-1.1c-.4,0-.311-.214-.04-.494L7,3.259a.634.634,0,0,1,.936,0l5.3,5.307c.272.281.356.495-.039.495Z"
                            transform="translate(-1.471 -3.053)" fill="#d70018"></path>
                    </svg>Ví trí</a>
            </li>





        </ul>
    </div>
</div>

 <script src="https://cdn.tiny.cloud/1/cjvd4s2x9retztkun9dojf4kv7v7iyumv4zqwmoapqe6nfue/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d29792.406160952887!2d105.78470217755098!3d21.030654470187844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1scellphones!5e0!3m2!1svi!2s!4v1652356657601!5m2!1svi!2s" width="100%" height="650" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

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
