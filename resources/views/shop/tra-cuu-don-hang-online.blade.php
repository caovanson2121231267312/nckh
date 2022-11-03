

@extends('extends.shop1')

@section('title')
<title>Tra cứu hóa đơn</title>
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
<meta name="csrf-token" content="{{ csrf_token() }}" />
{{-- <link rel="stylesheet" href="{{ asset('shop/assets/css/plugins/animate.min.css') }}"> --}}
<link
rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
/>
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
                    <a href="#" title="">Tra cứu hóa đơn</a>

                    <i class="fas fa-chevron-right fa-sm"></i>
                </li>
        </ul>
    </div>
</div>


<section class="cps-section mto">
    <div class="cps-container">
        <div class="cskh_content">
        <p>
        </p>
        <div id="order-history">
            <h3 id="order-title">KIỂM TRA THÔNG TIN ĐƠN HÀNG &amp; TÌNH TRẠNG VẬN CHUYỂN</h3>
            <div id="infoForm">
                <ul>
                    <li>
                        <label class="label1">Số điện thoại: </label>
                        <input id="sdt" placeholder="(Bắt buộc)">
                    </li>
                    <li>
                        <label class="label1">Mã đơn hàng: </label>
                        <input id="id" placeholder="(Bắt buộc)">
                    </li>
                </ul>
                <a class="btn btn-primary cta-kiem-tra-hoa-don cta" >KIỂM TRA</a>
            </div>
        </div>
    </div>
</section>
<div class="f-left" id="chinh_sach_bao_hanh"></div>


<style>
    .label1{
        font-weight: 700;
    }
    .mto{
        margin-top: 29px;
    }
    #order-history {
        width: 100%;
        float: left;
        /* border: 2px dashed #e11b1e;
        border-radius: 5px; */
        padding: 10px;
        margin-bottom: 10px;
        background: #eeeeeeee;
    }
    #order-title {
        text-align: center;
        font-weight: bold;
        color: #000;
        font-size: 22px;
    }
    #infoForm {
        margin: 15px 0;
        margin-top: 0;
        text-align: center;
        color: #000;
    }
    #infoForm input {
        margin: 25px 5px;
        padding: 10px;
        border-radius: 4px;
        border: 1px solid #dedede;
        box-sizing: border-box;
        text-align: center;
        font-size: 16px;
        height: 42px;
        width: 225px;
    }
    #infoForm ul {
        display: inline-block;
        width: 60%;
        list-style: none;
        padding: 0;
        margin: 0;
    }
    #infoForm li {
        display: inline-block;
        width: 49%;
    }
    #infoForm a.btn.btn-primary {
        background-color: #e11b1e;
        border: 1px solid #e11b1e;
        color: #fff;
        background-image: unset;
        width: 150px;
        vertical-align: middle;
        line-height: 25px;
        font-size: 16px;
        font-weight: bold;
        margin: 0;
        padding: 0;
        text-shadow: none;
        display: inline-flex;
        height: 40px;
        border-radius: 5px;
    }
    #order-infor {
        text-align: center;
    }

    #order-infor p {
        font-size: 22px;
        margin-bottom: 0;
    }
    #order-infor a {
        font-size: 14px;
    }
    .shadow-content{
        box-shadow: 0 0 10px 0 rgba(0,0,0,.15);
        padding: 10px;
        box-sizing: border-box;
        background-color: #fff;
    }
    .shadow-content>thead>tr>th {
        vertical-align: middle;
        text-align: center;
        border: 1px solid #ddd;
        font-weight: bold;
        font-size: 15px;
    }

    .shadow-content>tbody>tr>td{
        border: 1px solid #ddd;
        border-top: unset;
        border-bottom: unset;
        vertical-align: middle;
        height: 40px;
    }

    .shadow-content>tfoot>tr>td{
        border: 1px solid #ddd;
        /* text-align: right; */
    }

    .item-info, .sum {
        text-align: center;
    }
    .item-Quantity, .item-Price {
        width: 8%;
        text-align: center;
    }
    .item-review {
        width: 14%;
        text-align: center;
    }
    .item-Warranty {
        width: 16%;
    }

    .checked {
        color: orange;
    }

    .fa-star {
        font-style: normal!important;
        font-size: inherit;
    }
    .loading-process {
        position: fixed;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0, 0, 0, 0.7);
        z-index: 10000001;
    }
    .loading-container p {
        text-align: center;
        margin-top: 200px;
        color: red;
        font-size: 40px;
    }
    .fa-spin {
        font-style: unset!important;
    }
</style>

<p></p>
</div>
{{-- @include('shop.layout.mobile')
@include('shop.layout.laptop')
@include('shop.layout.pc')
@include('shop.layout.tablet')
@include('shop.layout.amthanh') --}}


@endsection

@section('script')
<script src="{{ asset('assets/js/plugins/jquery.js') }}"></script>
<script src="{{ asset('assets/js/pcoded.js') }}"></script>
<script src="{{ asset('assets/js/plugins/sweetalert2.all.min.js') }}"></script>
<script src="{{ asset('assets/js/pages/ac-alert.js') }}"></script>
<script src="{{ asset('assets/js/ajax.js') }}"></script>
<script src="{{ asset('assets/js/script.js') }}"></script>
<script src="{{ asset('shop/assets/js/javascript.js') }}"></script>
<script type="text/javascript">
    // alertDone('sonabc','đa thêm');
    // console.log('cao van son')
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

var cta = document.querySelector('.cta-kiem-tra-hoa-don');
cta.addEventListener('click',function(){
    var sdt = document.getElementById('sdt').value;
    var id = document.getElementById('id').value;
    console.log(sdt);
    var url ='http://localhost:8080/nckh/bill/?id='+id+"&sdt="+sdt;
    console.log(url);
    fetch(url)
    .then(response => response.json())
    .then(data => {
        console.log(data);
    }).catch((error) => {
      alertDone('Thông báo','Bạn vui lòng kiểm tra lại thông tin');
      console.log("loi")
    });
})

// function alertDone(title,content){
//     Swal.fire({
//         title: title,
//         html: '<b>'+content+'<b>',
//         timer: 3000,
//         timerProgressBar: true,
//         showCloseButton: true,
//         showCancelButton: true,
//         focusConfirm: true,
//     })
// }
</script>

<style type="text/css">
    .hot__sale {
        right: -230px!important;
        top: -29px!important;
    }
</style>
@endsection
