@extends('extends.shop1')

@section('title')
    <title>Cart</title>
@endsection

@section('meta')
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">

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
    <link rel="stylesheet" type="text/css" href="{{ asset('shop/assets/css/cart.css') }}">
    <link rel="stylesheet" href="{{ asset('shop/assets/css/mobile.css') }}">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
@endsection

@section('content')

    <div data-v-35f603af="" class="cart-cart">
        <div class="cart-header d-flex align-items-center justify-content-center" data-v-17ae9e22="">
            <div class="go-back" data-v-17ae9e22="">
                <a class="d-flex align-items-center" data-v-17ae9e22="" href="{{route('home')}}">
                    <svg
                        aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" role="img"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"
                        class="svg-inline--fa fa-chevron-left fa-w-10" data-v-17ae9e22="">
                        <path fill="currentColor"
                            d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"
                            data-v-17ae9e22="" class=""></path>
                    </svg>
                    <p data-v-17ae9e22=""> Trở về</p>
                </a></div>
            <p class="title m-auto" data-v-17ae9e22="">Giỏ hàng</p>
            <!---->
            <div class="cps-custom-modal-login" data-v-17ae9e22="">
                <!----> <button id="cps-custom" type="button"
                    class=" item-about about-5 about-smember flex-column cps-btn-login-modal btn-secondary">
                    <div class="about__box-icon"><svg id="icon-smember" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 560 560" width="20">
                            <defs>
                                <style>
                                    #icon-smember .cls-1 {
                                        fill: none;
                                        stroke: #fff;
                                        stroke-width: 30px;
                                    }

                                </style>
                            </defs>
                            <title>Asset 1</title>
                            <g id="Layer_2" data-name="Layer 2">
                                <g id="Layer_1-2" data-name="Layer 1">
                                    <circle cx="280" cy="280" r="265" class="cls-1"></circle>
                                    <circle cx="280" cy="210" r="115" class="cls-1"></circle>
                                    <path
                                        d="M86.82,461.4C124.71,354.71,241.91,298.93,348.6,336.82A205,205,0,0,1,473.18,461.4"
                                        class="cls-1"></path>
                                </g>
                            </g>
                        </svg></div>
                    <div class="about__box-content">
                        <p class="mb-0 title">Đăng nhập</p>
                    </div>
                </button>
                <!---->
            </div>
            <div class="cps-custom-popover" style="display:none;" data-v-170b8c3e="" data-v-17ae9e22=""><button
                    id="popover-custom" type="button" class="btn cps-popover-btn btn-secondary" data-v-170b8c3e=""><a
                        data-v-170b8c3e="">
                        <div class="box-icon" data-v-170b8c3e=""><svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 45.532 45.532"
                                xml:space="preserve" style="enable-background:new 0 0 45.532 45.532;" data-v-170b8c3e="">
                                <path d="M22.766,0.001C10.194,0.001,0,10.193,0,22.766s10.193,22.765,22.766,22.765c12.574,0,22.766-10.192,22.766-22.765
                                  S35.34,0.001,22.766,0.001z M22.766,6.808c4.16,0,7.531,3.372,7.531,7.53c0,4.159-3.371,7.53-7.531,7.53
                                  c-4.158,0-7.529-3.371-7.529-7.53C15.237,10.18,18.608,6.808,22.766,6.808z M22.761,39.579c-4.149,0-7.949-1.511-10.88-4.012
                                  c-0.714-0.609-1.126-1.502-1.126-2.439c0-4.217,3.413-7.592,7.631-7.592h8.762c4.219,0,7.619,3.375,7.619,7.592
                                  c0,0.938-0.41,1.829-1.125,2.438C30.712,38.068,26.911,39.579,22.761,39.579z"
                                    data-v-170b8c3e="">
                                </path>
                            </svg></div>
                    </a>

                </button>
                <!---->
            </div>
        </div>
        <div class="container mt-3 mb-2">

@php
$item=0;
@endphp
                @foreach($data as $value)

@php
$item++;
@endphp
                <div data-v-39b7ea42="">
                    <div data-v-1d6049b9="" data-id="{{ $value->id }}" class="product-item mb-3 block-box">
                        <!---->
                        <div data-v-1d6049b9="{{ $value->id }}" class="product-item__info d-flex">
                            <div data-v-1d6049b9="" class="product-item__image"><img data-v-1d6049b9=""
                                    src="{{ asset('assets/upload/' . $value->main_img) }}"
                                    alt="{{ $value->name }}"></div>
                            <div data-v-1d6049b9="" class="product-item__info-detail">
                                <p data-v-1d6049b9="" class="product-name">
                                    {{ $value->name }}
                                </p>
                                <div data-v-1d6049b9="" class="product-item__price d-flex align-items-end">
                                    <p data-sale="{{ str_replace(".","",$value->sale_product) }}" class="sale-price">{{ $value->sale_product }}&nbsp;₫</p>
                                    <input type="hidden" id="price" value="{{ $value->sale_product }}">
                                    <p data-v-1d6049b9="" class="regular-price">{{ $value->price }}&nbsp;₫</p> <span data-v-1d6049b9=""
                                        class="onsale">Giảm {{ $value->sale }}%</span>
                                </div>
                                <div data-v-1d6049b9="" class="item-action mt-2">
                                    <div data-v-1d6049b9="" class="change-quantity d-flex align-items-end mt-2">
                                        <p data-v-1d6049b9="">Chọn số lượng:</p>
                                        <div data-v-1d6049b9="" class="number d-flex">
                                            <span id="minus" data-id="{{$item}}"  data-idproduct="{{ $value->id }}"
                                                class="minus d-flex justify-content-center align-items-center"> - </span>

                                                 <input id="order_quantity" name="order_quantity[]" value="{{ $value->order_quantity }}"

                                                data-v-1d6049b9="" type="text" readonly="readonly">
                                                 <span id="plus" data-id="{{$item}}" data-idproduct="{{ $value->id }}"
                                                class="plus d-flex justify-content-center align-items-center"> + </span></div>
                                    </div>
                                </div>
                                <!---->
@if(!empty($value->hot))
                                <div data-v-3c0b840a="" data-v-1d6049b9="" class="alert-secondary promotion-pack p-2 mt-2">
                                    <div data-v-3c0b840a="" class="promotion-pack-detail mb-2">
                                        <div data-v-3c0b840a="" class="pack-detail">
                                            <p data-v-3c0b840a="">- Chương trình khuyến mại:</p>
                                            <ul data-v-3c0b840a="" class="el-promotion-pack">
                                                <div data-v-3c0b840a="">
                                                    <li data-v-3c0b840a="">
                                                        <p data-v-3c0b840a="">
                                                            {{ $value->hot }}
                                                        </p>
                                                    </li>
                                                </div>
                                            </ul>
                                        </div>
                                    </div>
                                    <!---->
                                </div>
                                @endif
                            </div>
                        </div>

                        <div data-v-1d6049b9="" class="delete-item">
<a href="#" data-url="{{route('delete',['id'=>$value->id])}}" class="delete_product">
                            <svg data-v-1d6049b9="" aria-hidden="true"
                                focusable="false" data-prefix="fas" data-icon="times" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512"
                                class="svg-inline--fa fa-times fa-w-11">
                                <path data-v-1d6049b9="" fill="currentColor"
                                    d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"
                                    class=""></path>
                            </svg></div>
                    </div>
                    </a>
                    <!---->
                </div>

            @endforeach
        </div>
        <div data-v-2f76e04b="" class="bottom-bar container mt-auto block-box">
            <div data-v-2f76e04b="" class="total-box d-flex justify-content-between align-items-start">
                <p data-v-2f76e04b="" class="title-temp">Tổng tiền tạm tính : </p>
                <div data-v-2f76e04b="" class="price  flex-column align-items-end"><span id="pp"
                        class="total rt"></span><span class="content">₫</span></div>
            </div>
            <div data-v-2f76e04b="" class="btn-submit mt-2"><button data-v-2f76e04b=""
                    class="bs-tit-txt btn btn-danger d-flex flex-column justify-content-center align-items-center w-100 mb-2">
                    Tiến hành đặt hàng
                </button> <a data-v-2f76e04b="" href="{{route('home')}}"
                    class="btn btn-outline-danger d-flex flex-column justify-content-center align-items-center w-100">
                    Chọn thêm sản phẩm khác
                </a></div>
        </div>
    </div>






@endsection

@section('script')
<script src="{{ asset('shop/assets/js/javascript.js') }}"></script>
<script src="{{asset('assets/js/plugins/jquery.js')}}"></script>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script> --}}
<script src="{{asset('assets/js/pcoded.js')}}"></script>
<script src="{{asset('assets/js/plugins/sweetalert2.all.min.js')}}"></script>
<script src="{{asset('assets/js/pages/ac-alert.js')}}"></script>
<script src="{{asset('assets/js/ajax.js')}}"></script>
<script src="{{asset('assets/js/script.js')}}"></script>
<script type="text/javascript">

$(function () {
    $(document).on('click', '.delete_product', actionDelete);
});

document.querySelector('.bs-tit-txt').addEventListener("click", function() {
    Swal.fire({
        showConfirmButton: false,
        width:800,
        html:`

<div class='containerww'>
         <header>Đặt hàng trực tuyến</header>
         <div class='progress-bar'>
            <div class='step'>
               <p>
                  Thông Tin
               </p>
               <div class='bullet'>
                  <span>1</span>
               </div>
               <div class='check fas fa-check'></div>
            </div>
            <div class='step'>
               <p>
                  Liên Hệ
               </p>
               <div class='bullet'>
                  <span>2</span>
               </div>
               <div class='check fas fa-check'></div>
            </div>
            <div class='step'>
               <p>
                  Giao Hàng
               </p>
               <div class='bullet'>
                  <span>3</span>
               </div>
               <div class='check fas fa-check'></div>
            </div>
            <div class='step'>
               <p>
                  Thanh Toán
               </p>
               <div class='bullet'>
                  <span>4</span>
               </div>
               <div class='check fas fa-check'></div>
            </div>
         </div>
         <div class='form-outer'>
            <form action='{{route('shop_order')}}' method='post'>
            @csrf
               <div class='page slide-page'>
                  <div class='title'>
                     Thông Tin khách Hàng
                  </div>
                  <div class='field'>
                     <div class='label'>
                        Họ Tên Đầy Đủ :
                     </div>
                     <input onkeyup='name1()' id='name' type='text' placeholder='VD: Nguyễn Văn A' name='name'  autocomplete='off'>
                  </div>
                  <div class='field'>
                     <div class='label'>
                        Email :
                     </div>
                     <input type='text' placeholder='VD: abc@gmail.com' name='email' autocomplete='off'>
                  </div>
                  <div class='field'>
                     <div class='label'>
                        Số Điện Thoại :
                     </div>
                     <input type='text' onkeyup='phone1()' id='phone' placeholder='VD: 0338910238' name='phone' autocomplete='off'>
                  </div>
                  <div class='field'>
                     <button class='firstNext next'>Tiếp</button>
                  </div>
               </div>
               <div class='page'>
                  <div class='title'>
                     Địa Chỉ Khách Hàng
                  </div>
                  <div class='field'>
                     <div class='label'>
                        Địa Chỉ Nhận Hàng
                     </div>
                     <input type='text' id='address' onkeyup='address1()' placeholder='VD: số nhà 54,tổ 52,...' name='address' autocomplete='off'>
                  </div>
                  <div class='field'>
                     <div class='label'>
                        Yêu Cầu Khác
                     </div>
                     <input type='text' placeholder='VD: Gói hàng cẩn thận,...' name='other' autocomplete='off'>
                  </div>
                  <div class='field btns'>
                     <button class='prev-1 prev'>quay lại</button>
                     <button class='next-1 next'>tiếp tục</button>
                  </div>
               </div>
               <div class='page'>

                  <div class='title'>
                     Thông tin đơn hàng
                  </div>
                  <div class='field' style='height:0px!important;'>
                     <div class='label'>
                        <h3>Nguời nhận : <span id='name-c'></span></h3>
                     </div>
                  </div>
                  <div class='field' style='height:0px!important;'>
                     <div class='label'>
                        <h3>Số điện thoại : <span id='phone-c'></span></h3>
                     </div>
                  </div>
                  <div class='field' style='height:0px!important;'>
                     <div class='label'>
                        <h3>Địa chỉ : <span id='address-c'></span></h3>
                     </div>
                  </div>
                  <div class='field' style='height:0px!important;'>
                     <div class='label'>
                        <h3>Tổng số tiền : <span id='money-c' class='rt'></span><span class='rt'>&nbsp;VND</span></h3>
                        <input id="money" name="money" hidden value="" />
                        <div class="item-products">
@foreach($data as $value)
    <input name="products[]" hidden value="{{$value->id}}" />
    <input name="quantity[]" hidden value="{{$value->order_quantity}}" />
@endforeach
                        </div>
                     </div>
                  </div>
                  <div class='field btns'>
                     <button class='prev-2 prev'>quay lại</button>
                     <button class='next-2 next'>tiếp tục</button>
                  </div>
               </div>
               <div class='page'>
                  <div class='title'>
                     Thông tin đơn hàng
                  </div>
                  <div class='con'>
                        <div class='item-c'>
                        <label>Hình Thức Thanh Toán</label>
                            <select name="pay">
                                <option value="1">Thanh Toán Khi Nhận Hàng</option>
                                <option value="2">Thanh Toán qua VNPAY</option>
                                <option value="3">Thanh Toán qua ví MOMO</option>
                                <option value="4">Chuyển Khoản Ngân Hàng</option>
                            </select>
                        </div
                  </div>
                <div class='field'>
                     <div class='label'>
                        <input type='radio' name="bill" class='ra'> Yêu Cầu Xuất Hóa Đơn
                     </div>
                  </div>
                  <div class='field btns'>
                     <button class='prev-3 prev'>quay lại</button>
                     <button class='submit submit_cart'>Xác Nhận Thanh Toán</button>
                  </div>
               </div>
            </form>
         </div>
      </div>

        `,
        }
    );

showw();

});


price();
console.log("abc")

var a = document.querySelectorAll('#plus');
var b = document.querySelectorAll('#minus');
var sale_price = document.querySelectorAll('.sale-price');
var order_quantity = document.querySelectorAll('#order_quantity');
for (let i = 0; i < a.length; i++) {
     a[i].addEventListener("click", function() {
        console.log(this.dataset.id);
        console.log(sale_price[i].dataset.sale);
        console.log('plus');
        order_quantity[i].value = parseInt(order_quantity[i].value) +1;
        price();
        order(order_quantity[i].value,this.dataset.idproduct);
    });
 }
 for (let i = 0; i < b.length; i++) {
     b[i].addEventListener("click", function() {
        console.log(this.dataset.id);
        console.log(sale_price[i].dataset.sale);
        console.log('minus');
        if(parseInt(order_quantity[i].value)==1){
            alert('Bạn Không Thể Giảm Được Nữa');
        }else{
            order_quantity[i].value = parseInt(order_quantity[i].value) - 1;
            price();
            order(order_quantity[i].value,this.dataset.idproduct);
        }
     });
 }
 function price(){
    var a = document.querySelectorAll('#plus');
    var sale_price = document.querySelectorAll('.sale-price');
    var order = document.querySelectorAll('#order_quantity');
    var count =0;
    for (let i = 0; i < a.length; i++) {
        count = count + parseInt(sale_price[i].dataset.sale) * parseInt(order[i].value);
        console.log(count);
     }
     count = count.toString();
     var str='';
     var dem=1,gt=1;
     var array = count.split('');
     var array1=[];
     for(var i=11;i>=0;i--){
        if(dem==4){
            if(gt<=array.length){
                array1[i]='.';
                dem=0;
            }else{
                array1[i]='';
                dem=0;
            }
        }else{
            if(gt<=array.length){
                array1[i]= array[array.length-gt];
                gt++;
            }else{
                array1[i]= '';
            }
        }
        dem++;
     }
     console.log(array1);
    for(var i=0;i<12;i++){
        str += array1[i];
     }
    document.getElementById('pp').innerHTML =  str;
 }
function order(quantity,id){
    $.ajax({
        type: 'GET',
        url: 'cookies/'+{{$cookies}}+'/product/'+id+'/order/'+quantity,
        success: function (data) {
            if (data.code == 200) {
                console.log(data);
            }else{
                console.log(data);
            }
        },
        error: function (data) {
            console.log('500');
            console.log(data);
        }
    });
}

function showw(){
    monney();
const slidePage = document.querySelector(".slide-page");
const nextBtnFirst = document.querySelector(".firstNext");
const prevBtnSec = document.querySelector(".prev-1");
const nextBtnSec = document.querySelector(".next-1");
const prevBtnThird = document.querySelector(".prev-2");
const nextBtnThird = document.querySelector(".next-2");
const prevBtnFourth = document.querySelector(".prev-3");
const submitBtn = document.querySelector(".submit");
const progressText = document.querySelectorAll(".step p");
const progressCheck = document.querySelectorAll(".step .check");
const bullet = document.querySelectorAll(".step .bullet");
let current = 1;
nextBtnFirst.addEventListener("click", function(event){
  event.preventDefault();
  slidePage.style.marginLeft = "-25%";
  bullet[current - 1].classList.add("active");
  progressCheck[current - 1].classList.add("active");
  progressText[current - 1].classList.add("active");
  current += 1;
});
nextBtnSec.addEventListener("click", function(event){
  event.preventDefault();
  slidePage.style.marginLeft = "-50%";
  bullet[current - 1].classList.add("active");
  progressCheck[current - 1].classList.add("active");
  progressText[current - 1].classList.add("active");
  current += 1;
});
nextBtnThird.addEventListener("click", function(event){
  event.preventDefault();
  slidePage.style.marginLeft = "-75%";
  bullet[current - 1].classList.add("active");
  progressCheck[current - 1].classList.add("active");
  progressText[current - 1].classList.add("active");
  current += 1;
});
submitBtn.addEventListener("click", function(){
  bullet[current - 1].classList.add("active");
  progressCheck[current - 1].classList.add("active");
  progressText[current - 1].classList.add("active");
  current += 1;
  // setTimeout(function(){
  //   alert("Your Form Successfully Signed up");
  //   location.reload();
  // },800);
});
prevBtnSec.addEventListener("click", function(event){
  event.preventDefault();
  slidePage.style.marginLeft = "0%";
  bullet[current - 2].classList.remove("active");
  progressCheck[current - 2].classList.remove("active");
  progressText[current - 2].classList.remove("active");
  current -= 1;
});
prevBtnThird.addEventListener("click", function(event){
  event.preventDefault();
  slidePage.style.marginLeft = "-25%";
  bullet[current - 2].classList.remove("active");
  progressCheck[current - 2].classList.remove("active");
  progressText[current - 2].classList.remove("active");
  current -= 1;
});
prevBtnFourth.addEventListener("click", function(event){
  event.preventDefault();
  slidePage.style.marginLeft = "-50%";
  bullet[current - 2].classList.remove("active");
  progressCheck[current - 2].classList.remove("active");
  progressText[current - 2].classList.remove("active");
  current -= 1;
});
}


</script>
<script type="text/javascript">
function name1(){
    document.getElementById('name-c').innerHTML =document.getElementById('name').value;
}
function phone1(){
    document.getElementById('phone-c').innerHTML =document.getElementById('phone').value;
}
function address1(){
    document.getElementById('address-c').innerHTML =document.getElementById('address').value;
}
function monney(){
    document.getElementById('money-c').innerHTML =document.getElementById('pp').innerHTML;
    document.getElementById('money').value = document.getElementById('pp').innerHTML;
}



// var submit  =document.getElementById('submit_cart');
// submit.addEventListener("click",function(){
//     fetch("https://api.duaca.top/api/admin/save-delivery-time", {
//         method: "POST",
//         headers: {
//             Accept: "application/json, text/plain, */*",
//             "Content-Type": "application/json",
//             'Authorization': 'Bearer ' + getCookie('token'),
//         },
//         body: JSON.stringify({
//             delivery_time :  document.getElementById('delivery_time').value,
//         }),
//     })
//         .then((response) => response.json())
//         .then((data) => {
//             console.log(data);
//             if (data.message == "") {
//                 window.location.href = '/list-delivery-times.html?add=true';
//             } else {
//                 console.log(data.message);
//                 alertDone('Thông Báo',data.message);
//             }
//         })
//         .catch((err) => {
//             console.log(err);
//         });
//     }
// })
</script>

@if(session('mess'))
    <script type="text/javascript">
        alertDone("{{session('title')}}","{{session('mess')}}");
    </script>
@endif
@endsection
