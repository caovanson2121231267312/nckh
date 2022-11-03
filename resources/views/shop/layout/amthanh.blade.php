<div class="featured__phone grid wide">
    <!-- Title -->
    <div class="row featured__phone__gutter">
        <div class="c-3">
            <div class="featured__phone__title">
                <a href="#" class="featured__phone__title__text">Âm Thanh</a>
            </div>
        </div>
        <div class="c-7">
            <div class="featured__phone__related__tag">
                <a href="" class="futured__phone__item">Apple</a>
            </div>
            <div class="featured__phone__related__tag">
                <a href="" class="futured__phone__item">Samsung</a>
            </div>
            <div class="featured__phone__related__tag">
                <a href="" class="futured__phone__item">Xiaomi</a>
            </div>
            <div class="featured__phone__related__tag">
                <a href="" class="futured__phone__item">OPPO</a>
            </div>
            <div class="featured__phone__related__tag">
                <a href="" class="futured__phone__item">Nokia</a>
            </div>
            <div class="featured__phone__related__tag">
                <a href="" class="futured__phone__item">Realme</a>
            </div>
            <div class="featured__phone__related__tag">
                <a href="" class="futured__phone__item">Vsmart</a>
            </div>
            <div class="featured__phone__related__tag">
                <a href="" class="futured__phone__item">ASUS</a>
            </div>
            <div class="featured__phone__related__tag">
                <a href="" class="futured__phone__item">Vivo</a>
            </div>
            <div class="featured__phone__related__tag">
                <a href="" class="futured__phone__item">Xem tất cả</a>
            </div>
        </div>
    </div>
    <!-- Tablet -->
    <div class="tablet__featured__phone">
        <div class="tablet__featured__phone__title">
            <a href="">Âm Thanh</a>
            <a href="">Xem tất cả</a>
        </div>
        <div class="tablet__featured__phone__tag__list">
            <div class="tablet__featured__phone__tag__item">
                <a href="">Apple</a>
            </div>
            <div class="tablet__featured__phone__tag__item">
                <a href="">Samsung</a>
            </div>
            <div class="tablet__featured__phone__tag__item">
                <a href="">Xiaomi</a>
            </div>
            <div class="tablet__featured__phone__tag__item">
                <a href="">OPPO</a>
            </div>
            <div class="tablet__featured__phone__tag__item">
                <a href="">Nokia</a>
            </div>
            <div class="tablet__featured__phone__tag__item">
                <a href="">Realme</a>
            </div>
            <div class="tablet__featured__phone__tag__item">
                <a href="">Vsmart</a>
            </div>
            <div class="tablet__featured__phone__tag__item">
                <a href="">Asus</a>
            </div>
            <div class="tablet__featured__phone__tag__item">
                <a href="">Vivo</a>
            </div>
            <div class="tablet__featured__phone__tag__item">
                <a href="">Vivo</a>
            </div>
            <div class="tablet__featured__phone__tag__item">
                <a href="">Vivo</a>
            </div>
            <div class="tablet__featured__phone__tag__item">
                <a href="">Vivo</a>
            </div>
            <div class="tablet__featured__phone__tag__item">
                <a href="">Vivo</a>
            </div>
        </div>
    </div>
    <!-- Product List -->
    <div class="featured__phone__product__list">

        @foreach ($amthanh as $value)
            <div class="featured__phone__product__item">
                <!--  Discount -->
                <form action="" method="post">
                @if ($value->discount->sale != 0)
                    <div class="flash__sale__discount">
                        <p>Giảm {{ $value->discount->sale }}%</p>
                    </div>
                @endif
                @if ($value->discount->sale >= 15)
                    <div class="hot__sale">
                        <img src="{{ asset('shop/assets/img/Featured phone/hot sale.png') }}" alt="">
                    </div>
                @endif
                <div class="featured__phone__product__img__wrapper">
                    <a href="{{route('pro',['file'=>$value->category->file,'name'=>$value->name_file])}}">
                        <img src="{{ asset('assets/upload/' . $value->main_img) }}"
                            alt="{{ $value->name }}">
                        </a>
                </div>
                <div class="featured__phone__product__desc">
                    <div class="featured__phone__product__desc__title">
                        <a href="{{route('pro',['file'=>$value->category->file,'name'=>$value->name_file])}}" class="featured__phone__product">
                            {{ $value->name }}
                        </a>
                    </div>
                    <div class="featured__phone__product__desc__price">
                        <div class="featured__phone__product__desc__price__new">
                            <p>
                                {{ $value->sale_product }}
                                <span class="featured__phone__product__desc__price__unit__new">đ</span>
                            </p>
                        </div>
                        <div class="featured__phone__product__desc__price__old">
                            <p>
                                {{ $value->price }}
                                <span class="featured__phone__product__desc__price__unit__old">đ</span>
                            </p>
                        </div>
                    </div>
                    @if ($value->hot != '' || !empty($value->hot))
                        <div class="featured__phone__product__promotion__info">
                            <p>{{ $value->hot }}</p>
                        </div>
                    @endif
                    <div class="featured__phone__product__desc__rare featured__phone__rare">
                        <div class="featured__phone__product__desc__rare__star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="featured__phone__product__desc__rare__vote">
                            <p>&nbsp;
@php
$g=0;
foreach($value->star as $c){
$g++;
}
echo $g;$g=0;
@endphp
                             đánh giá</p>
                        </div>
                    </div>
</form>
                </div>
            </div>
        @endforeach


        <div class="featured__phone__product__item view__all">
            <i class="fas fa-arrow-circle-right"></i>
            <p>More</p>
        </div>
    </div>
    <!-- Product List -->

</div>
