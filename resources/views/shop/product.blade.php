@extends('extends.shop1')

@section('title')
    <title>{{ $data->title }}</title>
@endsection

@section('meta')
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="{{ $data->des }}" />
    <meta name="keywords" content="{{ $data->keywords }}">

    <link rel="shortcut icon" href="{{ asset('shop/assets/img/zalo suopprt/cellphones.png') }}">
    <link rel="stylesheet"
        href="{{ asset('shop/assets/font/themify-icons-font/themify-icons/themify-icons.css') }}">
    <link rel="stylesheet"
        href="{{ asset('shop/assets/font/fontawesome-free-5.15.4/fontawesome-free-5.15.4-web/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('shop/assets/css/swiper-bundle.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('shop/assets/css/base.css') }}">
    <link rel="stylesheet" href="{{ asset('shop/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('shop/assets/css/tablet.css') }}">
    <link rel="stylesheet" href="{{ asset('shop/assets/css/index.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('shop/assets/css/plugins/animate.min.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('shop/assets/css/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('shop/assets/css/mobile.css') }}">
    <script src="{{ asset('shop/assets/js/swiper-bundle.min.js') }}"></script>
@endsection

@section('content')
    @include('shop.layout.ds')

    <div class="no-display">
        <input type="hidden" name="product" value="28517">
        <input type="hidden" name="related_product" id="related-products-field" value="">
    </div>

    <div class="block-detail-product">
        <div class="detail-product__box-name">
            <div class="cps-container">
                <!-- name product -->
                <div class="box-name__box-product-name">
                    <h1>
                        {{ $data->name }}
                    </h1>
                </div>

                <div class="box-name__box-raiting">
                    <i class="fas fa-star checked"></i>
                    <i class="fas fa-star checked"></i>
                    <i class="fas fa-star checked"></i>
                    <i class="fas fa-star checked"></i>
                    <i class="fas fa-star checked"></i>
                    &nbsp;{{$count}} ????nh gi??
                </div>
                <div class="box-info__box-social">

                </div>
                <!-- end like box -->
            </div>
        </div>
    </div>


    <div class="box-detail-product cps-container">
        <div class="detail-product__box-left">
            <div class="box-gallery">

                <div class="swiper mySwiper2 slide-show-product">
                    <div class="swiper-wrapper">
                        @foreach ($data->img as $value)
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/upload/' . $value->url_img) }}"
                                    alt="{{ $value->url_img }}" />
                            </div>
                        @endforeach

                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div thumbsSlider="" class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        @foreach ($data->img as $value)
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/upload/' . $value->url_img) }}"
                                    alt="{{ $value->url_img }}" />
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="box-banner-sis">
                <a href="javascript:void(0)">
                    <img alt="TET 2022" class="cpslazy loaded" title="TET 2022" width="auto"
                        data-src="{{asset('shop/assets/img/tet-400x100.gif')}}" data-ll-status="loaded"
                        src="{{asset('shop/assets/img/tet-400x100.gif')}}">
                </a>
            </div>

        </div>

        <div class="detail-product__box-center">
            <div class="box-info">
                <div class="box-info__more-info">
                </div>

                <div class="box-info__box-price">
                    <p id="product-price-28517" class="special-price">{{$data->sale_product}}&nbsp;???</p>
                    <p id="old-price-28517" class="old-price">{{$data->price}}&nbsp;???</p>
                </div>
            </div>

            <div class="box-promotion">
                <div class="box-title">
                    <p class="box-title__title"><i class="fas fa-gift"></i> Khuy???n M??i</p>
                </div>
                <div class="box-content">
                    <ul class="list-promotions">
                        <li class="item-promotion general-promotion"><a href="">Thu c?? l??n ?????i - Tr??? gi?? 1 tri???u&nbsp;<span
                                    class="color-red">(xem chi ti???t)</span></a></li>

                    </ul>

                </div>
            </div>
            <div class="box-promotion-more">
                <div class="box-title">
                    <p class="box-title__title">??u ????i th??m</p>
                </div>
                <div class="box-content">
                    <ul class="list-promotions">

                            <li class="item-promotion">
                                <a href="" target="_blank">Gi???m th??m t???i 1% cho th??nh vi??n Smember (??p d???ng t??y s???n
                                    ph???m c???a shop)</a>

                            </li>
                            <li class="item-promotion">
                                <a href="" target="_blank">Gi???m th??m t???i 99k cho th??nh vi??n m???i (??p d???ng t??y s???n
                                    ph???m c???a shop)</a>

                            </li>
                            <li class="item-promotion">
                                <a href="" target="_blank">Gi???m th??m t???i 988k cho th??nh vi??n c?? (??p d???ng t??y s???n
                                    ph???m c???a shop)</a>

                            </li>


                    </ul>
                </div>
            </div>
            <div class="box-action-button">
                <form action="{{ url('addToCart') }}" method="post">
                    @csrf
                    <input type="hidden" name="id" value='{{ $data->id }}'>
                    <button class="action-button button-red cta-mua-ngay" onclick="addToCart()"><strong>MUA
                            NGAY</strong><span>(Giao
                            t???n n??i ho???c l???y t???i c???a h??ng)</span></button>
                </form>
                <div class="group-button ">
                    <a href="" class="action-button button-blue cta-tra-gop" style=""><strong>TR??? G??P 0%</strong><span>(X??t
                            duy???t qua ??i???n tho???i)</span></a>
                    <a class="action-button button-blue cta-tra-gop-the" onclick="tragop()"><strong>TR??? G??P QUA
                            TH???</strong><span>(Visa, Master Card, JCB)</span></a>
                </div>
                <div class="box-banner-sis" style="margin-top: 37px;">
                    <a href="javascript:void(0)">
                        <img alt="TET 2022" class="cpslazy loaded" title="TET 2022" width="auto"
                            data-src="{{asset('shop/assets/img/SS_Week.gif')}}" data-ll-status="loaded"
                            src="{{asset('shop/assets/img/SS_Week.gif')}}">
                    </a>
                </div>
            </div>


        </div>
        <!-- -------------- -->
        <div class="detail-product__box-right">

            <!-- list store -->
            <div class="box-list-store">
                <div class="box-search">
                    <select id="lt_product_store_filter" class="form-control" onchange="window.location.href=this.value;">
                        <option selected="" value="">
                            Mi???n Nam</option>
                        <option value="">
                            Mi???n B???c</option>
                    </select>
                    <div class="break"></div>
                    <select id="lt_province_filter" class="form-control">
                        <option data-store="" value="">T???nh/Th??nh</option>
                        <option id="province_1" data-store="7" value="1">H??? Ch?? Minh</option>
                        <option id="province_4" data-store="7" value="4">B??nh D????ng</option>
                        <option id="province_10" data-store="7" value="10">V??ng T??u</option>
                    </select>
                    <select id="lt_district_filter" class="form-control">
                        <option data-store="" value="">Qu???n/Huy???n</option>
                        <option id="district_2" data-province="1" value="2">Qu???n B??nh T??n</option>
                        <option id="district_3" data-province="1" value="3">Qu???n B??nh Th???nh</option>
                        <option id="district_6" data-province="1" value="6">Qu???n G?? V???p</option>
                        <option id="district_7" data-province="1" value="7">Huy???n H??c M??n</option>
                        <option id="district_9" data-province="1" value="9">Qu???n Ph?? Nhu???n</option>
                        <option id="district_10" data-province="1" value="10">Qu???n 1</option>
                        <option id="district_11" data-province="1" value="11">Qu???n 10</option>
                        <option id="district_12" data-province="1" value="12">Qu???n 11</option>
                        <option id="district_13" data-province="1" value="13">Qu???n 12</option>
                        <option id="district_14" data-province="1" value="14">Qu???n 2</option>
                        <option id="district_16" data-province="1" value="16">Qu???n 4</option>
                        <option id="district_18" data-province="1" value="18">Qu???n 6</option>
                        <option id="district_19" data-province="1" value="19">Qu???n 7</option>
                        <option id="district_20" data-province="1" value="20">Qu???n 8</option>
                        <option id="district_21" data-province="1" value="21">Qu???n 9</option>
                        <option id="district_22" data-province="1" value="22">Qu???n T??n B??nh</option>
                        <option id="district_23" data-province="1" value="23">Qu???n T??n Ph??</option>
                        <option id="district_24" data-province="1" value="24">Qu???n Th??? ?????c</option>
                        <option id="district_66" data-province="4" value="66">Th??? x?? D?? An</option>
                        <option id="district_145" data-province="10" value="145">Th??nh ph??? V??ng T??u</option>
                    </select>
                </div>
                <p id="lt-cua-hang-summary">C?? <strong>45</strong> c???a h??ng c?? s???n s???n ph???m</p>
                <div class="list-store">
                    <ul id="lt-cua-hang">
                        <li data-id="94" data-province="1" data-district="2">
                            <p><span id="phone_sp_shop"><i aria-hidden="true" class="fa fa-phone"></i>&nbsp;<a
                                        href="tel:02871068880">02871068880</a></span><a
                                    href="#94" target="_blank"
                                    title="888 T???nh L??? 10, Ph?????ng B??nh Tr??? ????ng A, Qu???n B??nh T??n">888 T???nh L??? 10, Ph?????ng
                                    B??nh
                                    Tr??? ????ng A, Qu???n B??nh T??n</a></p>
                        </li>
                        <li data-id="104" data-province="1" data-district="2">
                            <p><span id="phone_sp_shop"><i aria-hidden="true" class="fa fa-phone"></i>&nbsp;<a
                                        href="tel:02871087386">02871087386</a></span><a
                                    href="#104" target="_blank"
                                    title="386 H????ng L??? 2, ph?????ng B??nh Tr??? ????ng, qu???n B??nh T??n, TP. HCM (Ng?? T?? B???n X??)">386
                                    H????ng L??? 2, ph?????ng B??nh Tr??? ????ng, qu???n B??nh T??n, TP. HCM (Ng?? T?? B???n X??)</a></p>
                        </li>
                        <li data-id="107" data-province="1" data-district="2">
                            <p><span id="phone_sp_shop"><i aria-hidden="true" class="fa fa-phone"></i>&nbsp;<a
                                        href="tel:02871000229">02871000229</a></span><a
                                    href="#107" target="_blank"
                                    title="229 Nguy???n Th??? T??, P. B??nh H??ng Ho?? B, Q. B??nh T??n">229 Nguy???n Th??? T??, P. B??nh
                                    H??ng
                                    Ho?? B, Q. B??nh T??n</a></p>
                        </li>
                        <li data-id="50" data-province="1" data-district="3">
                            <p><span id="phone_sp_shop"><i aria-hidden="true" class="fa fa-phone"></i>&nbsp;<a
                                        href="tel:02871065536">02871065536</a></span><a
                                    href="#50" target="_blank"
                                    title="536 X?? Vi???t Ngh??? T??nh, P. 25, Q. B??nh Th???nh">536 X?? Vi???t Ngh??? T??nh, P. 25, Q.
                                    B??nh
                                    Th???nh</a></p>
                        </li>
                        <li data-id="91" data-province="1" data-district="3">
                            <p><span id="phone_sp_shop"><i aria-hidden="true" class="fa fa-phone"></i>&nbsp;<a
                                        href="tel:02871077377">02871077377</a></span><a
                                    href="#91" target="_blank"
                                    title="377-379 ??i???n Bi??n Ph???, P. 25, Q. B??nh Th???nh">377-379 ??i???n Bi??n Ph???, P. 25, Q.
                                    B??nh
                                    Th???nh</a></p>
                        </li>
                        <li data-id="6" data-province="1" data-district="6">
                            <p><span id="phone_sp_shop"><i aria-hidden="true" class="fa fa-phone"></i>&nbsp;<a
                                        href="tel:02871088059">02871088059</a></span><a
                                    href="#6" target="_blank"
                                    title="59 Quang Trung, P. 10, Q. G?? V???p">59 Quang Trung, P. 10, Q. G?? V???p</a></p>
                        </li>
                        <li data-id="12" data-province="1" data-district="6">
                            <p><span id="phone_sp_shop"><i aria-hidden="true" class="fa fa-phone"></i>&nbsp;<a
                                        href="tel:02871063535">02871063535</a></span><a
                                    href="#12" target="_blank"
                                    title="5 Nguy???n Ki???m, P. 3, Q. G?? V???p">5 Nguy???n Ki???m, P. 3, Q. G?? V???p</a></p>
                        </li>
                        <li data-id="120" data-province="1" data-district="6">
                            <p><span id="phone_sp_shop"><i aria-hidden="true" class="fa fa-phone"></i>&nbsp;<a
                                        href="tel:02871000525">02871000525</a></span><a
                                    href="#120" target="_blank"
                                    title="525A Quang Trung, P.10, Qu???n G?? V???p">525A Quang Trung, P.10, Qu???n G?? V???p</a></p>
                        </li>
                        <li data-id="180" data-province="1" data-district="6">
                            <p><span id="phone_sp_shop"><i aria-hidden="true" class="fa fa-phone"></i>&nbsp;<a
                                        href="tel:02871000567">02871000567</a></span><a
                                    href="#180" target="_blank"
                                    title="567 L?? Quang ?????nh, Ph?????ng 1, Q. G?? V???p">567 L?? Quang ?????nh, Ph?????ng 1, Q. G??
                                    V???p</a>
                            </p>
                        </li>
                        <li data-id="192" data-province="1" data-district="6">
                            <p><span id="phone_sp_shop"><i aria-hidden="true" class="fa fa-phone"></i>&nbsp;<a
                                        href="tel:02871000272">02871000272</a></span><a
                                    href="#192" target="_blank"
                                    title="272 Nguy???n Oanh, Ph?????ng 17, Q. G?? V???p">272 Nguy???n Oanh, Ph?????ng 17, Q. G?? V???p</a>
                            </p>
                        </li>
                        <li data-id="82" data-province="1" data-district="7">
                            <p><span id="phone_sp_shop"><i aria-hidden="true" class="fa fa-phone"></i>&nbsp;<a
                                        href="tel:02871088439">02871088439</a></span><a
                                    href="#82" target="_blank"
                                    title="4/39 Quang Trung, Th???i Tam Th??n, Huy???n H??c M??n">4/39 Quang Trung, Th???i Tam Th??n,
                                    Huy???n H??c M??n</a></p>
                        </li>
                        <li data-id="57" data-province="1" data-district="9">
                            <p><span id="phone_sp_shop"><i aria-hidden="true" class="fa fa-phone"></i>&nbsp;<a
                                        href="tel:02871097020">02871097020</a></span><a
                                    href="#57" target="_blank"
                                    title="114 Phan ????ng L??u, P. 3, Q. Ph?? Nhu???n">114 Phan ????ng L??u, P. 3, Q. Ph?? Nhu???n</a>
                            </p>
                        </li>
                        <li data-id="2" data-province="1" data-district="10">
                            <p><span id="phone_sp_shop"><i aria-hidden="true" class="fa fa-phone"></i>&nbsp;<a
                                        href="tel:02871066159">02871066159</a></span><a
                                    href="#2" target="_blank"
                                    title="157-159 Nguy???n Th??? Minh Khai, P. Ph???m Ng?? L??o, Q. 1">157-159 Nguy???n Th??? Minh
                                    Khai, P.
                                    Ph???m Ng?? L??o, Q. 1</a></p>
                        </li>
                        <li data-id="4" data-province="1" data-district="10">
                            <p><span id="phone_sp_shop"><i aria-hidden="true" class="fa fa-phone"></i>&nbsp;<a
                                        href="tel:02871087213">02871087213</a></span><a
                                    href="#4" target="_blank"
                                    title="Kho giao h??ng Online">Kho giao h??ng Online</a></p>
                        </li>
                        <li data-id="51" data-province="1" data-district="10">
                            <p><span id="phone_sp_shop"><i aria-hidden="true" class="fa fa-phone"></i>&nbsp;<a
                                        href="tel:02871083355">02871083355</a></span><a
                                    href="#51" target="_blank"
                                    title="55B Tr???n Quang Kh???i, P. T??n ?????nh, Q. 1">55B Tr???n Quang Kh???i, P. T??n ?????nh, Q.
                                    1</a>
                            </p>
                        </li>
                        <li data-id="102" data-province="1" data-district="10">
                            <p><span id="phone_sp_shop"><i aria-hidden="true" class="fa fa-phone"></i>&nbsp;<a
                                        href="tel:02871000132">02871000132</a></span><a
                                    href="#102" target="_blank"
                                    title="134 Nguy???n Th??i H???c, P. Ph???m Ng?? L??o, Q.1, TP HCM">134 Nguy???n Th??i H???c, P. Ph???m
                                    Ng??
                                    L??o, Q.1, TP HCM</a></p>
                        </li>
                        <li data-id="182" data-province="1" data-district="10">
                            <p><span id="phone_sp_shop"><i aria-hidden="true" class="fa fa-phone"></i>&nbsp;<a
                                        href="tel:02871000218">02871000218</a></span><a
                                    href="#182" target="_blank"
                                    title="218-220 Tr???n Quang Kh???i, Ph?????ng T??n ?????nh, Qu???n 1">218-220 Tr???n Quang Kh???i, Ph?????ng
                                    T??n
                                    ?????nh, Qu???n 1</a></p>
                        </li>
                        <li data-id="5" data-province="1" data-district="11">
                            <p><span id="phone_sp_shop"><i aria-hidden="true" class="fa fa-phone"></i>&nbsp;<a
                                        href="tel:02871066288">02871066288</a></span><a
                                    href="#5" target="_blank"
                                    title="288 ???????ng 3/2, P. 12, Q. 10">288 ???????ng 3/2, P. 12, Q. 10</a></p>
                        </li>
                        <li data-id="196" data-province="1" data-district="11">
                            <p><span id="phone_sp_shop"><i aria-hidden="true" class="fa fa-phone"></i>&nbsp;<a
                                        href="tel:02871000347">02871000347</a></span><a
                                    href="#196" target="_blank"
                                    title="347 Nguy???n Tri Ph????ng, Ph?????ng 5, Qu???n 10">347 Nguy???n Tri Ph????ng, Ph?????ng 5, Qu???n
                                    10</a></p>
                        </li>
                        <li data-id="119" data-province="1" data-district="12">
                            <p><span id="phone_sp_shop"><i aria-hidden="true" class="fa fa-phone"></i>&nbsp;<a
                                        href="tel:02871000457">02871000457</a></span><a
                                    href="#119" target="_blank"
                                    title="457B L?? ?????i H??nh, P.11, Qu???n 11">457B L?? ?????i H??nh, P.11, Qu???n 11</a></p>
                        </li>
                        <li data-id="106" data-province="1" data-district="13">
                            <p><span id="phone_sp_shop"><i aria-hidden="true" class="fa fa-phone"></i>&nbsp;<a
                                        href="tel:02871000093">02871000093</a></span><a
                                    href="#106" target="_blank"
                                    title="93/8C Nguy???n ???nh Th???, Q.12">93/8C Nguy???n ???nh Th???, Q.12</a></p>
                        </li>
                        <li data-id="189" data-province="1" data-district="13">
                            <p><span id="phone_sp_shop"><i aria-hidden="true" class="fa fa-phone"></i>&nbsp;<a
                                        href="tel:02871088001">02871088001</a></span><a
                                    href="#189" target="_blank"
                                    title="1K Nguy???n ???nh Th???, khu ph??? 1, ph?????ng Hi???p Th??nh, Qu???n 12">1K Nguy???n ???nh Th???, khu
                                    ph???
                                    1, ph?????ng Hi???p Th??nh, Qu???n 12</a></p>
                        </li>
                        <li data-id="111" data-province="1" data-district="14">
                            <p><span id="phone_sp_shop"><i aria-hidden="true" class="fa fa-phone"></i>&nbsp;<a
                                        href="tel:02871000139">02871000139</a></span><a
                                    href="#111" target="_blank"
                                    title="139 Tr???n N??o, ???p B??nh Kh??nh 3, Ph?????ng B??nh An, Qu???n 2">139 Tr???n N??o, ???p B??nh
                                    Kh??nh 3,
                                    Ph?????ng B??nh An, Qu???n 2</a></p>
                        </li>
                        <li data-id="188" data-province="1" data-district="14">
                            <p><span id="phone_sp_shop"><i aria-hidden="true" class="fa fa-phone"></i>&nbsp;<a
                                        href="tel:02871010190">02871010190</a></span><a
                                    href="#188" target="_blank"
                                    title="190 Nguy???n Th??? ?????nh, khu ph??? 2, ph?????ng An Ph??, qu???n 2">190 Nguy???n Th??? ?????nh, khu
                                    ph???
                                    2, ph?????ng An Ph??, qu???n 2</a></p>
                        </li>
                        <li data-id="10" data-province="1" data-district="16">
                            <p><span id="phone_sp_shop"><i aria-hidden="true" class="fa fa-phone"></i>&nbsp;<a
                                        href="tel:02871067171">02871067171</a></span><a
                                    href="#10" target="_blank"
                                    title="177 Kh??nh H???i, P. 3, Q. 4">177 Kh??nh H???i, P. 3, Q. 4</a></p>
                        </li>
                        <li data-id="62" data-province="1" data-district="18">
                            <p><span id="phone_sp_shop"><i aria-hidden="true" class="fa fa-phone"></i>&nbsp;<a
                                        href="tel:02871088075">02871088075</a></span><a
                                    href="#62" target="_blank"
                                    title="1075B H???u Giang, P. 11, Q. 6">1075B H???u Giang, P. 11, Q. 6</a></p>
                        </li>
                        <li data-id="185" data-province="1" data-district="18">
                            <p><span id="phone_sp_shop"><i aria-hidden="true" class="fa fa-phone"></i>&nbsp;<a
                                        href="tel:02871000460">02871000460</a></span><a
                                    href="#185" target="_blank"
                                    title="458 - 460 H???u Giang, ph?????ng 12, Qu???n 6">458 - 460 H???u Giang, ph?????ng 12, Qu???n
                                    6</a>
                            </p>
                        </li>
                        <li data-id="61" data-province="1" data-district="19">
                            <p><span id="phone_sp_shop"><i aria-hidden="true" class="fa fa-phone"></i>&nbsp;<a
                                        href="tel:02871088248">02871088248</a></span><a
                                    href="#61" target="_blank"
                                    title="248 Nguy???n Th??? Th???p, P. T??n Quy, Q. 7">248 Nguy???n Th??? Th???p, P. T??n Quy, Q. 7</a>
                            </p>
                        </li>
                        <li data-id="83" data-province="1" data-district="19">
                            <p><span id="phone_sp_shop"><i aria-hidden="true" class="fa fa-phone"></i>&nbsp;<a
                                        href="tel:02871088310">02871088310</a></span><a
                                    href="#83" target="_blank"
                                    title="310 Hu???nh T???n Ph??t, P. T??n Thu???n T??y, Q. 7">310 Hu???nh T???n Ph??t, P. T??n Thu???n T??y,
                                    Q.
                                    7</a></p>
                        </li>
                        <li data-id="195" data-province="1" data-district="19">
                            <p><span id="phone_sp_shop"><i aria-hidden="true" class="fa fa-phone"></i>&nbsp;<a
                                        href="tel:02871000571">02871000571</a></span><a
                                    href="#195" target="_blank"
                                    title="571 Hu???nh T???n Ph??t, P. T??n Thu???n ????ng, Qu???n 7">571 Hu???nh T???n Ph??t, P. T??n Thu???n
                                    ????ng,
                                    Qu???n 7</a></p>
                        </li>
                        <li data-id="184" data-province="1" data-district="20">
                            <p><span id="phone_sp_shop"><i aria-hidden="true" class="fa fa-phone"></i>&nbsp;<a
                                        href="tel:0287100157">0287100157</a></span><a
                                    href="#184" target="_blank"
                                    title="579 D????ng B?? Tr???c, ph?????ng 1, Qu???n 8">579 D????ng B?? Tr???c, ph?????ng 1, Qu???n 8</a></p>
                        </li>
                        <li data-id="52" data-province="1" data-district="21">
                            <p><span id="phone_sp_shop"><i aria-hidden="true" class="fa fa-phone"></i>&nbsp;<a
                                        href="tel:02871061125">02871061125</a></span><a
                                    href="#52" target="_blank"
                                    title="125 L?? V??n Vi???t, P. Hi???p Ph??, Q. 9">125 L?? V??n Vi???t, P. Hi???p Ph??, Q. 9</a></p>
                        </li>
                        <li data-id="72" data-province="1" data-district="21">
                            <p><span id="phone_sp_shop"><i aria-hidden="true" class="fa fa-phone"></i>&nbsp;<a
                                        href="tel:02871088241">02871088241</a></span><a
                                    href="#72" target="_blank"
                                    title="241-243, ????? Xu??n H???p, Ph?????c Long B, Qu???n 9">241-243, ????? Xu??n H???p, Ph?????c Long B,
                                    Qu???n
                                    9</a></p>
                        </li>
                        <li data-id="181" data-province="1" data-district="21">
                            <p><span id="phone_sp_shop"><i aria-hidden="true" class="fa fa-phone"></i>&nbsp;<a
                                        href="tel:02871000241">02871000241</a></span><a
                                    href="#181" target="_blank"
                                    title="241 L?? V??n Vi???t, P. Hi???p Ph??, Q.9">241 L?? V??n Vi???t, P. Hi???p Ph??, Q.9</a></p>
                        </li>
                        <li data-id="8" data-province="1" data-district="22">
                            <p><span id="phone_sp_shop"><i aria-hidden="true" class="fa fa-phone"></i>&nbsp;<a
                                        href="tel:02871088672">02871088672</a></span><a
                                    href="#8" target="_blank"
                                    title="672-674 ??u C??, P. 14, Q. T??n B??nh">672-674 ??u C??, P. 14, Q. T??n B??nh</a></p>
                        </li>
                        <li data-id="99" data-province="1" data-district="22">
                            <p><span id="phone_sp_shop"><i aria-hidden="true" class="fa fa-phone"></i>&nbsp;<a
                                        href="tel:02871015359">02871015359</a></span><a
                                    href="#99" target="_blank"
                                    title="359 C???ng H??a, Ph?????ng 13, Qu???n T??n B??nh">359 C???ng H??a, Ph?????ng 13, Qu???n T??n
                                    B??nh</a>
                            </p>
                        </li>
                        <li data-id="118" data-province="1" data-district="22">
                            <p><span id="phone_sp_shop"><i aria-hidden="true" class="fa fa-phone"></i>&nbsp;<a
                                        href="tel:02871000148">02871000148</a></span><a
                                    href="#118" target="_blank"
                                    title="148 Tr?????ng Chinh, P.12, Q. T??n B??nh">148 Tr?????ng Chinh, P.12, Q. T??n B??nh</a></p>
                        </li>
                        <li data-id="121" data-province="1" data-district="22">
                            <p><span id="phone_sp_shop"><i aria-hidden="true" class="fa fa-phone"></i>&nbsp;<a
                                        href="tel:02871000956">02871000956</a></span><a
                                    href="#121" target="_blank"
                                    title="956 ??u C??, P.14, Qu???n T??n B??nh">956 ??u C??, P.14, Qu???n T??n B??nh</a></p>
                        </li>
                        <li data-id="183" data-province="1" data-district="22">
                            <p><span id="phone_sp_shop"><i aria-hidden="true" class="fa fa-phone"></i>&nbsp;<a
                                        href="tel:02871000190">02871000190</a></span><a
                                    href="#183" target="_blank"
                                    title="190B Ho??ng V??n Th???, P4, Qu???n T??n B??nh">190B Ho??ng V??n Th???, P4, Qu???n T??n B??nh</a>
                            </p>
                        </li>
                        <li data-id="103" data-province="1" data-district="23">
                            <p><span id="phone_sp_shop"><i aria-hidden="true" class="fa fa-phone"></i>&nbsp;<a
                                        href="tel:02871016161">02871016161</a></span><a
                                    href="#103" target="_blank"
                                    title="161 Nguy???n S??n, P. Ph?? Th???nh, Q. T??n Ph??">161 Nguy???n S??n, P. Ph?? Th???nh, Q. T??n
                                    Ph??</a></p>
                        </li>
                        <li data-id="113" data-province="1" data-district="23">
                            <p><span id="phone_sp_shop"><i aria-hidden="true" class="fa fa-phone"></i>&nbsp;<a
                                        href="tel:02871000472">02871000472</a></span><a
                                    href="#113" target="_blank"
                                    title="472 - 474 L?? Tr???ng T???n, P. T??y Th???nh, Q. T??n Ph??">472 - 474 L?? Tr???ng T???n, P. T??y
                                    Th???nh, Q. T??n Ph??</a></p>
                        </li>
                        <li data-id="96" data-province="1" data-district="24">
                            <p><span id="phone_sp_shop"><i aria-hidden="true" class="fa fa-phone"></i>&nbsp;<a
                                        href="tel:02871097939">02871097939</a></span><a
                                    href="#96" target="_blank"
                                    title="18 V?? V??n Ng??n, P. Tr?????ng Th???, Q. Th??? ?????c">18 V?? V??n Ng??n, P. Tr?????ng Th???, Q. Th???
                                    ?????c</a></p>
                        </li>
                        <li data-id="194" data-province="1" data-district="24">
                            <p><span id="phone_sp_shop"><i aria-hidden="true" class="fa fa-phone"></i>&nbsp;<a
                                        href="tel:02871000632">02871000632</a></span><a
                                    href="#194" target="_blank"
                                    title="632A Kha V???n C??n, P. Linh ????ng, TP. Th??? ?????c">632A Kha V???n C??n, P. Linh ????ng, TP.
                                    Th???
                                    ?????c</a></p>
                        </li>
                        <li data-id="116" data-province="4" data-district="66">
                            <p><span id="phone_sp_shop"><i aria-hidden="true" class="fa fa-phone"></i>&nbsp;<a
                                        href="tel:02871000253">02871000253</a></span><a
                                    href="#116" target="_blank"
                                    title="253 Nguy???n An Ninh, D?? An, B??nh D????ng">253 Nguy???n An Ninh, D?? An, B??nh D????ng</a>
                            </p>
                        </li>
                        <li data-id="186" data-province="10" data-district="145">
                            <p><span id="phone_sp_shop"><i aria-hidden="true" class="fa fa-phone"></i>&nbsp;<a
                                        href="tel:02871000256">02871000256</a></span><a
                                    href="#186" target="_blank"
                                    title="256A Ba Cu, ph?????ng 3, TP. V??ng T??u">256A Ba Cu, ph?????ng 3, TP. V??ng T??u</a></p>
                        </li>
                    </ul>
                </div>

            </div>

            <!-- warranty info -->
            <div class="box-warranty-info">
                <div class="box-title">
                    <p class="box-title__title">Th??ng tin m??y</p>
                </div>
                <div class="box-content">
                    <div class="warranty-info">
                        <div class="item-warranty-info">
                            <i class="fas fa-mobile-alt"></i>
                            <p>Nguy??n h???p, ?????y ????? ph??? ki???n t??? nh?? s???n xu???t</p>
                        </div>
                        <div class="item-warranty-info">
                            <i class="fas fa-mobile-alt"></i>
                            <p>B???o h??nh 12 th??ng t???i trung t??m b???o h??nh ch??nh h??ng Apple Vi???t Nam. 1 ?????I 1 trong 30 ng??y n???u
                                c??
                                l???i ph???n c???ng nh?? s???n xu???t. Gia h???n b???o h??nh th???i gian gi??n c??ch&nbsp;<a
                                    href="javascript:void(0)" style="color: red">(xem chi
                                    ti???t)</a>
                            </p>
                        </div>

                    </div>
                </div>
            </div>



        </div>



        <!-- ----------------- -->


    </div>

    @include('shop.layout.pc')

{{--  --}}


    <div class="featured__phone grid wide">
    <!-- Title -->
    {{-- <div class="row featured__phone__gutter">
        <div class="c-4">
            <div class="featured__phone__title">
                <a href="" class="featured__phone__title__text">S???n ph???m g???i ?? t??? tech word</a>
            </div>
        </div>
        <div class="c-7  featured__phone__related__tag__list">

        </div>
    </div> --}}
    <!-- Tablet -->

    <!-- Product List -->
    {{-- <div class="featured__phone__product__list" id="pro-add">

    </div> --}}

</div>

{{--  --}}
    <div class="featured__phone grid wide">
        <div class="block-blog-content" id='showw'>
            <div class="blog-content__box-content">

                {!! $data->review !!}

            </div>
            <div class="box-btn-show-more1" id='shownone'>
                <a class="btn-show-more cta-xem-them-bai-viet" id="show_more" onclick="showmore()">Xem th??m
                    <i class="fas fa-chevron-down" style="margin-left: 10px;"></i></a>
            </div>

        </div>


        <div id="page-review-product" data-productid="36499"
            data-producturl="https://cellphones.com.vn/iphone-13-pro-max-256gb.html" class="block-rating listReviews-36499"
            style="display: block;">
            <div class="box-rating__box-title">
                <h2>????nh gi?? &amp; nh???n x??t iPhone 13 Pro Max 256GB I Ch??nh h??ng VN/A - H??? Ch?? Minh</h2>
            </div>
            <div class="block-rating__box-vote">
                <div class="box-vote">
                    <div class="box-vote__chart-vote">
                        <div class="chart-vote__box-left">
                            <p class="rating-average">
                                @php
                                    // $i = 6;
                                    $h = 0;
                                @endphp
                                @foreach ($star as $value)
                                    @php
                                        $h += ($value->count_star * $value->star)/$count ;
                                    @endphp
                                @endforeach
                                {{ round($h,1) }}/5
                            </p>
                            <div class="rating-star"><i class="fas fa-star checked"></i><i
                                    class="fas fa-star checked"></i><i class="fas fa-star checked"></i><i
                                    class="fas fa-star checked"></i><i class="fas fa-star checked"></i></div>
                            <p class="rating-total"><strong>{{ $count }}</strong> ????nh gi?? &amp; nh???n x??t</p>
                        </div>
                        <div class="chart-vote__box-right">
                            <div class="box-statistical">
                                @php
                                    // $i = 6;
                                    $gt = 0;
                                @endphp
                                {{-- @foreach ($star as $value) --}}
                                @for ($i = 5; $i > 0; $i--)
                                    @php
                                        $gt = $count;
                                    @endphp
                                    @foreach ($star as $value)
                                        @if ($value->star == $i)
                                            @php
                                                $gt = 100;
                                            @endphp
                                            <div class="item-statistical">
                                                <p class="number-star"><strong>{{ $i }}</strong>&nbsp;<i
                                                        class="fas fa-star checked"></i>
                                                </p>
                                                <div class="timeline-star">
                                                    <div class="timing"
                                                        style="width: {{ ($value->count_star * 100) / $count }}%;"></div>
                                                </div>
                                                <p class="number-percent">{{ $value->count_star }} ????nh
                                                    gi??</p>
                                            </div>
                                        @endif
                                    @endforeach
                                    @if ($gt == $count)
                                        <div class="item-statistical">
                                            <p class="number-star"><strong>{{ $i }}</strong>&nbsp;<i
                                                    class="fas fa-star checked"></i>
                                            </p>
                                            <div class="timeline-star">
                                                <div class="timing" style="width: 0%;"></div>
                                            </div>
                                            <p class="number-percent">0 ????nh
                                                gi??</p>
                                        </div>
                                    @endif
                                    {{-- @break --}}
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-button-vote">
                    <div class="box-vote__button-vote">
                        <p>B???n ????nh gi?? sao s???n ph???m n??y?</p> <a href="javscript:void(0)"
                            class="btn-vote guiDanhGia cta-danh-gia action_show_star">????nh gi?? ngay</a>
                        <div id="review-modal-36499" role="dialog" class="modal fade cps-popup">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">????nh gi?? &amp; nh???n x??t s???n ph???m</h4> <button
                                            type="button" data-dismiss="modal" class="close">

                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-rating__box-list-review">
                <div class="list-review">
                    <!---->

                    @foreach ($data->star as $value)
                        <div class="item-review">
                            <div class="item-review__box-review">
                                <div class="box-review__box-info">
                                    <div class="box-info">
                                        <div class="box-info__avatar">P</div>
                                        <div class="box-info__user">
                                            <p class="box-info__name">{{ $value->name }}</p>
                                        </div>
                                    </div>
                                    <p class="box-time-review"><svg xmlns="http://www.w3.org/2000/svg" width="12"
                                            height="12" viewBox="0 0 12 12" style="margin-bottom: 2px;">
                                            <path id="clock"
                                                d="M7.72,8.78,5.25,6.31V3h1.5v2.69L8.78,7.72ZM6,0a6,6,0,1,0,6,6A6,6,0,0,0,6,0ZM6,10.5A4.5,4.5,0,1,1,10.5,6,4.5,4.5,0,0,1,6,10.5Z"
                                                fill="#707070"></path>
                                        </svg>
                                        &nbsp;{{ $value->created_at }}
                                    </p>
                                </div>
                                <div class="box-review__box-question">
                                    <div class="raiting"><strong>????nh gi??: </strong><i
                                            class="fas fa-star checked"></i><i class="fas fa-star checked"></i><i
                                            class="fas fa-star checked"></i><i class="fas fa-star checked"></i><i
                                            class="fas fa-star checked"></i></div>
                                    <div class="question">
                                        <p><strong>Nh???n x??t: </strong>{{ $value->review }}</p>
                                    </div>
                                    <a href="javascript:void(0)" class="btn-rep-review respondent"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewBox="0 0 12 10.8">
                                            <path id="chat"
                                                d="M3.48,8.32V4.6H1.2A1.2,1.2,0,0,0,0,5.8V9.4a1.2,1.2,0,0,0,1.2,1.2h.6v1.8l1.8-1.8h3A1.2,1.2,0,0,0,7.8,9.4V8.308a.574.574,0,0,1-.12.013H3.48ZM10.8,1.6H5.4A1.2,1.2,0,0,0,4.2,2.8V7.6H8.4l1.8,1.8V7.6h.6A1.2,1.2,0,0,0,12,6.4V2.8a1.2,1.2,0,0,0-1.2-1.2Z"
                                                transform="translate(0 -1.6)" fill="#707070"></path>
                                        </svg>&nbsp;B??nh Lu???n</a>
                                </div>
                            </div>
                            <!---->
                            <!---->
                        </div>
                    @endforeach





                    <div class="item-review">
                        <div class="item-review__box-review">
                            <div class="box-review__box-info">
                                <div class="box-info">
                                    <div class="box-info__avatar">N</div>
                                    <div class="box-info__user">
                                        <p class="box-info__name">DEV CAOSON</p>
                                    </div>
                                </div>
                                <p class="box-time-review"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                        viewBox="0 0 12 12" style="margin-bottom: 2px;">
                                        <path id="clock"
                                            d="M7.72,8.78,5.25,6.31V3h1.5v2.69L8.78,7.72ZM6,0a6,6,0,1,0,6,6A6,6,0,0,0,6,0ZM6,10.5A4.5,4.5,0,1,1,10.5,6,4.5,4.5,0,0,1,6,10.5Z"
                                            fill="#707070"></path>
                                    </svg>
                                    &nbsp;2021-10-05T14:47:01
                                </p>
                            </div>
                            <div class="box-review__box-question">
                                <div class="raiting"><strong>????nh gi??: </strong><i
                                        class="fas fa-star checked"></i><i class="fas fa-star checked"></i><i
                                        class="fas fa-star checked"></i><i class="fas fa-star checked"></i><i
                                        class="fas fa-star checked"></i></div>
                                <div class="question">
                                    <p><strong>Nh???n x??t: </strong>Hello M???i Ng?????i</p>
                                </div>
                                <!----> <a href="javascript:void(0)" class="btn-rep-review respondent"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewBox="0 0 12 10.8">
                                        <path id="chat"
                                            d="M3.48,8.32V4.6H1.2A1.2,1.2,0,0,0,0,5.8V9.4a1.2,1.2,0,0,0,1.2,1.2h.6v1.8l1.8-1.8h3A1.2,1.2,0,0,0,7.8,9.4V8.308a.574.574,0,0,1-.12.013H3.48ZM10.8,1.6H5.4A1.2,1.2,0,0,0,4.2,2.8V7.6H8.4l1.8,1.8V7.6h.6A1.2,1.2,0,0,0,12,6.4V2.8a1.2,1.2,0,0,0-1.2-1.2Z"
                                            transform="translate(0 -1.6)" fill="#707070"></path>
                                    </svg>&nbsp;B??nh Lu???n</a>
                            </div>
                        </div>
                        <!---->
                        <!---->
                    </div>
                    <input name="productIdForRv" type="hidden" value="36499">
                    <input name="countAll" type="hidden" value="">
                        <a href="javascript:void(0)"
                        class="btn-show-more cta-xem-them-bai-viet" id="cta-xem-them-bai-viet">Xem
                        th??m???
                        <i class="fas fa-chevron-down"></i>
                    </a>
                    <script type="text/javascript">
                        document.getElementById('cta-xem-them-bai-viet').addEventListener("click",function(){
                            alert("Kh??ng c??n b??nh lu???n");
                        })
                    </script>
                </div>
            </div>
        </div>
        <div class="block-information__box-right">
            <div id="id_36499" class="block-technical-info">
                <div class="box-title">
                    <h2 class="box-title__title">Th??ng s??? k??? thu???t</h2>
                </div>
                <div class="box-content">
                    <table id="tskt" style="text-align: left;">
                        <tbody>
                            @php
                                $count = 0;
                            @endphp
                            @foreach ($ts as $value)
                                @foreach ($value->tskt as $gt)
                                    <tr>
                                        <th style="width: 35%">{!! $gt->name !!}</th>
                                        <th style="width: 65%">{!! $gt->value !!}</th>
                                    </tr>
                                    @php
                                        $count++;
                                    @endphp
                                    @if ($count == 10)
                                    @break
                                @endif
                            @endforeach
                            @if ($count == 10)
                            @break
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="box-btn-show-more" id="more-specific">
            <button class="btn-show-more cta-xem-cau-hinh action_show" data-toggle="modal"
                data-target="#technicalInfoModal">Xem c???u h??nh chi ti???t???<i
                    class="fas fa-chevron-down"></i></button>
        </div>

    </div>
    <!-- end technical info -->





    <!-- list news -->
    <div class="block-news">
        <div class="block-news__box-title">
            <p><svg xmlns="http://www.w3.org/2000/svg" width="20" height="15" viewBox="0 0 20 15">
                    <path id="newspaper"
                        d="M17.5,6.5V4H0V17.75A1.25,1.25,0,0,0,1.25,19H18.125A1.875,1.875,0,0,0,20,17.125V6.5ZM16.25,17.75h-15V5.25h15ZM2.5,7.75H15V9H2.5Zm7.5,2.5h5V11.5H10Zm0,2.5h5V14H10Zm0,2.5h3.75V16.5H10Zm-7.5-5H8.75V16.5H2.5Z"
                        transform="translate(0 -4)" fill="#d70018"></path>
                </svg>&nbsp;B??i vi???t m???i nh???t</p>
        </div>
        <div class="block-news__box-content">
            <div class="box-content__list-news">


@foreach($blog as $da)
                <div class="item-news">
                    <a href="javascript:void(0)"
                        class="item-news__box-img">
                        <img class="cpslazy loaded loaded1"
                            data-src="{{asset('public/assets/upload/' . $da->img)}}"
                            alt="{{$da->title}}"
                            data-ll-status="loaded"
                            src="{{asset('public/assets/upload/' . $da->img)}}">
                    </a>
                    <a href="javascript:void(0)"
                        class="item-news__box-title">
                        <p>{{$da->title}}
                        </p>
                    </a>
                </div>
@endforeach


            </div>
            <a href="javascript:void(0)"
                class="btn-show-more cta-xem-all-bai-viet">Xem t???t c??? b??i vi???t???<i
                    class="fas fa-chevron-down"></i></a>
        </div>
    </div>
</div>

</div>
@endsection

@section('script')
<style type="text/css">
    .loaded1{
        border-radius: 15px;
    }
</style>
<script src="{{ asset('assets/js/plugins/jquery.js') }}"></script>
<script src="{{ asset('assets/js/pcoded.js') }}"></script>
<script src="{{ asset('assets/js/plugins/sweetalert2.all.min.js') }}"></script>
<script src="{{ asset('assets/js/pages/ac-alert.js') }}"></script>
<script src="{{ asset('assets/js/ajax.js') }}"></script>
<script src="{{ asset('assets/js/script.js') }}"></script>
<script src="{{ asset('shop/assets/js/javascript.js') }}"></script>
<script type="text/javascript">
    // alertDone('sonabc','??a th??m');
    // console.log('cao van son')
    $(function() {
        $(document).on('click', '.action_delete', actionDelete);
        $(document).on('click', '.action_delete_banner', actionDeleteBanner);
    });
    //btn btn-primary bs-long-content
    //btn btn-primary bs-cust-anim
</script>
<script>
    var swiper = new Swiper(".mySwiper", {
        loop: true,
        spaceBetween: 10,
        slidesPerView: 6,
        freeMode: true,
        watchSlidesProgress: true,
    });
    var swiper2 = new Swiper(".mySwiper2", {
        loop: true,
        spaceBetween: 10,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        thumbs: {
            swiper: swiper,
        },
    });

    function actionShow(event) {
        event.preventDefault();
        let that = $(this);
        Swal.fire({
            showCloseButton: false,
            showCancelButton: false,
            showConfirmButton:false,
            title: `<div style='font-size:17px;'>{{ $data->name }}<div>`,
            html: `
                @foreach ($ts as $value)
                    <div class='item-box-table M??n h??nh' style='width:auto;'>
                        <div class='box-title'>
                            <p class='box-title__title' style='display: flex;font-size: 18px;'>
                                {{ $value->name }}
                            </p>
                        </div>
                        <div class='box-content' style='border: 1px solid #F2F2F2;border-radius: 10px;overflow: hidden;'>
                            <table>
                                <tbody>
                                    @foreach ($value->tskt as $gt)
                                        <tr>
                                            <th style='text-align:left;width:32%'>{!! $gt->name !!}</th>
                                            <th style='text-align:left;width:68%'>{!! $gt->value !!}</th>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                @endforeach
                `,
            showClass: {
                popup: 'animate__animated animate__bounce'
            },
            hideClass: {
                popup: 'animate__animated animate__bounceOutLeft'
            }
        })
    }

    function actionShowStar(event) {
        event.preventDefault();
        let that = $(this);
        Swal.fire({
            showCloseButton: false,

            showConfirmButton: false,
            showCancelButton: false,
            title: `<div style='font-size:17px;'>????nh gi?? & nh???n x??t s???n ph???m<div>`,
            html: `
<div class='modal-body'>
    <div class='form-review'>
        <form id='formReview' action='{{ url('/star') }}' method='post' enctype='multipart/form-data'>
        @csrf
            <div class='review box-review'>
                <input type='text' name='name' id='nickname' placeholder='H??? v?? t??n' class='cps-input'>
                <div class='error-text error-text-review d-none'>
                    Qu?? kh??ch vui l??ng ki???m tra l???i th??ng tin
                </div>
                <input type='text' name='phone' id='phone' placeholder='S??? ??i???n tho???i' class='cps-input'>
                <div class='error-text error-text-review d-none'>
                    Qu?? kh??ch vui l??ng ki???m tra l???i th??ng tin
                </div>
                <textarea id='detail' name='review' rows='4' cols='5'
                    placeholder='Xin m???i chia s??? m???t s??? c???m nh???n v??? s???n ph???m...' class='cps-textarea'></textarea>
                <div class='error-text error-textarea-content-review d-none'>
                    Vui l??ng nh???p b??nh lu???n
                </div>
            </div>
            <div class='box-form-vote'>
                <p class='title'>B???n c???m th???y s???n ph???m nh?? th??? n??o?</p>
                <div id='ratingId' class='custom-stars'>
                    <input type='hidden' id='star' name='star' value=''>
                    <input type='hidden' id='product_id' name='product_id' value='{{ $data->id }}'>
                    <label class='rate' id='starcheck'>
                        <i class='fas fa-star one-star' id='fastar' data-id='1'></i>
                        <span>
                            R???t t???
                        </span>
                    </label>
                    <label class='rate' id='starcheck'>
                        <i class='fas fa-star two-star' id='fastar' data-id='2'></i>
                        <span>T???
                        </span>
                    </label>
                    <label class='rate' id='starcheck'>
                        <i class='fas fa-star three-star' id='fastar' data-id='3'></i>
                        <span>
                            B??nh th?????ng
                        </span>
                    </label>
                    <label class='rate' id='starcheck'>
                        <i class='fas fa-star four-star' id='fastar' data-id='4'></i>
                        <span>T???t
                        </span>
                    </label>
                    <label class='rate' id='starcheck'>
                        <i class='fas fa-star five-star' id='fastar' data-id='5'></i>
                        <span>R???t
                            t???t</span>
                    </label>
                </div>
            </div>
            <button type='submit' class='btn-submitt'>G???i ????nh gi??</button>
        </form>
    </div>
</div>

                    `
        })

        var starcheck = document.querySelectorAll('#starcheck');
        var fa_star = document.querySelectorAll('#fastar');
        console.log(starcheck);
        for (var i = 0; i < fa_star.length; i++) {
            fa_star[i].addEventListener("click", function() {
                resetstart();
                var dem = i;
                for (var j = 0; j < this.dataset.id; j++) {
                    console.log(i);
                    console.log(this.dataset.id);
                    document.getElementById('star').value = this.dataset.id;
                    fa_star[j].classList.add("checked");
                }
            });
        }

    }

    $(function() {
        $(document).on('click', '.action_show', actionShow);
        $(document).on('click', '.action_show_star', actionShowStar);
    });

    function resetstart() {
        var starcheck = document.querySelectorAll('#starcheck');
        var fa_star = document.querySelectorAll('#fastar');
        for (var i = 0; i < starcheck.length; i++) {
            fa_star[i].classList.remove('checked');
        }
    }

    function showmore() {
        document.getElementById('showw').style.height = 'auto';
        document.getElementById('shownone').style.display = 'none';

    }
</script>
<script src="{{asset('shop/jquery/jquery-1.7.2.min.js')}}"></script>
<script src="{{asset('shop/Apriori.js')}}"></script>
<script src="{{asset('shop/AprioriMining.js')}}"></script>
<script src="{{asset('shop/AssociationRule.js')}}"></script>
<script src="{{asset('shop/Bit.js')}}"></script>
<script src="{{asset('shop/Itemset.js')}}"></script>
<script src="{{asset('shop/ItemsetCollection.js')}}"></script>

<script type="text/javascript">

    var arr = [];
    var data_fromdb = [];
    var h = [];
    fetch('http://localhost:8080/nckh/test')
    .then(response => response.json())
    .then(data => {
        console.log(data)
        var i = data.customer_id;
        h = data.mess;

        data.distinct.forEach((item)=>{
            var a = [];
            var x =0;
            var str = "";
            data.mess.forEach((d) =>{
                if(item.customer_id == d.customer_id){
                    // h.push(d);
                    a[x] = d.product_id;
                    if(x==0){
                        str += d.product_id;
                    }else{
                        str += ", " + d.product_id
                    }
                    x++;
                }
            });
            data_fromdb.push(str);
            arr.push(a);
        })
        // SetControlBehaviors();
        $(function () {
            SetControlBehaviors();
            $('#abc').click();
            $('#ItemsTextBox').focus();
            data_fromdb.forEach(i => _db.push(i));
            $('#search').click();
        });
    }).catch((error) => {
        console.error('Error:', error);
    });

    console.log(arr)
    console.log(data_fromdb);
    for(var i = 0; i < arr.length; i++){
        arr[i].forEach( (item) =>{
            console.log(item+" - ");
        });
        console.log("hello")
    }
</script>
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
    function alertDone(title,content){
        Swal.fire({
            title: title,
            html: '<b>'+content+'<b>',
            timer: 3000,
            timerProgressBar: true,
            showCloseButton: true,
            showCancelButton: true,
            focusConfirm: true,
        })
    }

    console.log('da them')
    alert("{{ session('title') }}");
    //alertDone("{{ session('title') }}", "{{ session('mess') }}");
</script>
@endif
@endsection
