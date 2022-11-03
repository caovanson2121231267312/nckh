

@extends('extends.shop')

@section('title')
<title>Shop</title>
@endsection

@section('meta')
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="description" content="" />
<meta name="keywords" content="">

<link rel="shortcut icon" href="{{asset('shop/assets/img/zalo suopprt/cellphones.png')}}">
<link rel="stylesheet" href="{{asset('shop/assets/font/themify-icons-font/themify-icons/themify-icons.css')}}">
<link rel="stylesheet" href="{{asset('shop/assets/font/fontawesome-free-5.15.4/fontawesome-free-5.15.4-web/css/all.css')}}">
<link rel="stylesheet" href="{{asset('shop/assets/css/base.css')}}">
<link rel="stylesheet" href="{{asset('shop/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('shop/assets/css/mobile.css') }}">

{{-- <link rel="stylesheet" href="{{asset('shop/assets/css/tablet.css')}}"> --}}
{{-- <link rel="stylesheet" href="{{asset('shop/assets/css/mobile.css')}}"> --}}
<style type="text/css">
.slidebar-index{
    width: 100%;
    border-radius: 5px;
    box-shadow: rgb(60 64 67 / 10%) 0px 1px 2px 0px, rgb(60 64 67 / 15%) 0px 2px 6px 2px;
    background-color: white;
}
.slidebar-ul{
    position: relative;
}
.slidebar-li:hover{
    background-color: #DCDADA;
}
.slidebar-li p{
    position: relative;
}
.slidebar-index  .slidebar-index{
    display: none;
    width: 100%;
    position: absolute;
    left: 100%;
    top: 0px;
}
.slidebar-index .slidebar-index li:hover>.slidebar-index{
    display: block;
}
.slidebar-index li:hover>.slidebar-index{
    display: block;
}
.slidebar-index .slidebar-index .slidebar-index{
    display: none;
    width: 100%;
    position: absolute;
    left: 100%;
    top: 0;
}
</style>
@endsection

@section('content')

@include('shop.layout.mobile')
@include('shop.layout.laptop')
@include('shop.layout.pc')
@include('shop.layout.tablet')
@include('shop.layout.amthanh')


@endsection

@section('script')
{{-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script> --}}
<script src="{{asset('shop/assets/js/javascript.js')}}"></script>
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

@endsection
