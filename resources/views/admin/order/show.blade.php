

@extends('extends.dashboard')

@section('title')
<title>{{$data->name}} - {{$data->phone_number}}</title>
@endsection

@section('meta')
<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="description" content="" />
<meta name="keywords" content="">
<meta name="author" content="Codedthemes" />

<link rel="icon" href="{{asset('assets/images/favicon.ico')}}" type="image/x-icon">
<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/index.css')}}">
@endsection

@section('content')
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10"></h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('index')}}"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Chi tiết sản phẩm</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card table-card">
                <div class="card-header">
                    <h5>{{$data->name}} - {{$data->phone_number}}</h5>
                    <div class="card-header-right">
                        <div class="btn-group card-option">
                            <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="feather icon-more-horizontal"></i>
                            </button>
                            <ul class="list-unstyled card-option dropdown-menu dropdown-menu-end">
                                <li class="dropdown-item full-card"><a href="#"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                <li class="dropdown-item minimize-card"><a href="#"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                <li class="dropdown-item reload-card"><a href="#"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                <li class="dropdown-item close-card"><a href="#"><i class="feather icon-trash"></i> remove</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="card-body">
                        <div class="">
                            <div class="form-group row">
                                <label class="col-lg-2" style="padding-left: 48px;">Name:</label>
                                <div class="col-lg-8">
                                    <input class="form-control" type="text" value="{{$data->name}}" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2" style="padding-left: 48px;">Phone Number:</label>
                                <div class="col-lg-8">
                                    <input class="form-control" type="text" value="{{$data->phone_number}}" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2" style="padding-left: 48px;">Email:</label>
                                <div class="col-lg-8">
                                    <input class="form-control" type="text" value="{{$data->email}}" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2" style="padding-left: 48px;">Address:</label>
                                <div class="col-lg-8">
                                    <input class="form-control" type="text" value="{{$data->address}}" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2" style="padding-left: 48px;">Status:</label>
                                <div class="col-lg-8">
                                    <input class="form-control" type="text" value="{{$data->status_id}}" readonly>
                                </div>
                            </div>
<div>
@foreach($data->p as $value)
    <div class="item-cart">
        <a href="void:javascript(0)">

            <div class="flex">
                <div>
                    <img class="w-200" src="{{asset('assets/upload/' .$value->main_img)}}">
                </div>
                <div class="pad">
                    <div>
                        <div class="p-b">{{$value->name}}</div>
                    </div>
                    <div>
Số lượng đặt :  {{$value->pivot->quantity}}
                    </div>
                    <div class="box-hot">
                        <div>
                            Chương trình khuyến mãi
                        </div>
                        <ul>
                            <li class="p-hot">
                                {{$value->hot}}
                            </li>
                        </ul>
                    </div>
                    <div>
                        <span class="p-r">{{$value->sale_product}}</span>
                        <span class="p-n">{{$value->price}}</span>
                    </div>
                </div>
            </div>
        </a>
    </div>
@endforeach
</div>
                        </div>

                    </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 345px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 237px;"></div></div></div>
                </div>
            </div>

        </div>
    </div>

    @endsection


@section('script')

@if(session('mess'))
    <script type="text/javascript">
        console.log('da them')
        alertDone("{{session('title')}}","{{session('mess')}}");
    </script>
@endif

@endsection
