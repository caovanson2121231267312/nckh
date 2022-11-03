

@extends('extends.shop1')

@section('title')
<title>Shop</title>
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
<link
rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
/>
<link rel="stylesheet" href="{{ asset('shop/assets/css/mobile.css') }}">
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


@endsection

@section('content')

@include('shop.layout.ds')

@include('shop.layout.slide-double')
@include('shop.layout.list')
{{-- @include('shop.layout.mobile')
@include('shop.layout.laptop')
@include('shop.layout.pc')
@include('shop.layout.tablet')
@include('shop.layout.amthanh') --}}


@endsection

@section('script')
<script src="{{asset('shop/assets/js/javascript.js')}}"></script>
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
</script>

<style type="text/css">
    .hot__sale {
        right: -230px!important;
        top: -29px!important;
    }
</style>
@endsection
