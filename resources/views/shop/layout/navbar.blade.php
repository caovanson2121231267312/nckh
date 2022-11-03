<div class="slide grid wide">
    <div class="row">
        <div class="c-2 tablet__slidebar">
            <div class="slidebar">
                {!!$htmlSlelect!!}
            </div>
        </div>
        <div class="c-7 pc__slider__wrapper">
            <div class="slider">
                <div class="slider__top">
                    <div class="slider__top__next__btn">
                        <i class="fas fa-angle-right"></i>
                    </div>
                    <div class="slider__top__prev__btn">
                        <i class="fas fa-angle-left"></i>
                    </div>
                    <!-- PC -->
                    <a href="#">
                        <div class="slider__top__wrapper">
                            @foreach ($bannerCenter as $value)
                                {{-- <a href="{{$value->url}}"> --}}
                                <img src="{{ asset('assets/banner/' . $value->img) }}" alt="{{ $value->title }}"
                                    class="slider__top__item">
                                {{-- </a> --}}
                            @endforeach
                        </div>
                    </a>
                    <!-- End PC -->
                </div>
                <div class="slider__bottom">
                    <div class="slider__bottom__list">
                        <!-- 1st -->
                        <div class="slider__bottom__item">
                            <a href="" class="slider__bottom__item__link">
                                <p class="slider__bottom__item__link__text__1st">Tháng thành viên</p>
                                <p class="slider__bottom__item__link__text__2nd">Ưu đãi liên miên</p>
                            </a>
                            <div class="slider__bottom__item__underline"></div>
                        </div>
                        <!-- 2nd -->
                        <div class="slider__bottom__item">
                            <a href="" class="slider__bottom__item__link">
                                <p class="slider__bottom__item__link__text__1st">Z FOLD3 | Z FLIP3 5G</p>
                                <p class="slider__bottom__item__link__text__2nd">Ưu đãi cực lớn</p>
                            </a>
                            <div class="slider__bottom__item__underline"></div>
                        </div>
                        <!-- 3rd -->
                        <div class="slider__bottom__item">
                            <a href="" class="slider__bottom__item__link">
                                <p class="slider__bottom__item__link__text__1st">XIAOMI 11T SERIES</p>
                                <p class="slider__bottom__item__link__text__2nd">Đặt trước ưu đãi khủng</p>
                            </a>
                            <div class="slider__bottom__item__underline"></div>
                        </div>
                        <!-- 4th -->
                        <div class="slider__bottom__item">
                            <a href="" class="slider__bottom__item__link">
                                <p class="slider__bottom__item__link__text__1st">ZENBOOK 12 OLED</p>
                                <p class="slider__bottom__item__link__text__2nd">Giá tốt mua ngay</p>
                            </a>
                            <div class="slider__bottom__item__underline"></div>
                        </div>
                        <!-- 5th -->
                        <div class="slider__bottom__item">
                            <a href="" class="slider__bottom__item__link">
                                <p class="slider__bottom__item__link__text__1st">Loa JBL CHARGE 5</p>
                                <p class="slider__bottom__item__link__text__2nd">Mở bán giá tốt</p>
                            </a>
                            <div class="slider__bottom__item__underline"></div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <div class="c-3">
            @foreach ($bannerLeft as $value)
                <div class="slide__ads__wrapper tablet__disable">
                    <a href="{{ $value->url }}"><img src="{{ asset('assets/banner/' . $value->img) }}"
                            alt="{{ $value->title }}"></a>
                </div>
            @endforeach

        </div>
    </div>
</div>


<div class="web__ads gird wide">
    <div class="row">
        <div class="web__ads__box">
@foreach($bannerBottom as $value)
            <a href="">
                <img src="{{ asset('assets/banner/'.$value->img) }}" alt="{{$value->title}}" class="web__ads__box__pc__img">
            </a>
            <a href="">
                <img src="{{ asset('assets/banner/'.$value->img) }}" alt="{{$value->title}}" class="web__ads__box__tablet__img">
            </a>
@endforeach
        </div>
    </div>
</div>
