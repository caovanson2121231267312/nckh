

@extends('extends.dashboard')

@section('title')
<title>Danh sách đơn vị vận chuyển</title>
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
@endsection

@section('content')
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Danh sách đơn vị vận chuyển</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Danh sách đơn vị vận chuyển</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card table-card">
                <div class="card-header">
                    <h5>Danh sách đơn vị vận chuyển</h5>
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
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover m-b-0">
                                <thead>
                                    <tr>
                                        <th>Tên đơn vị vận chuyển</th>
                                        <th>Logo</th>
                                        <th>Số điện thoại</th>
                                        <th>Tạo lúc</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

@foreach($data as $value)
                                    <tr>

                                        <td style="width: 300px;">
{{$value->name}}
                                        </td>
                                        <td>
                                            <div>
                                                <img class="img-n" style="width:150px;border-radius: 5px;" src="{{asset('assets/upload/'.$value->img)}}">
                                        </td>
                                        <td>
                                            {{$value->phone}}
                                        </td>
                                        <td>
                                            {{$value->created_at}}
                                        </td>
                                        <td>
                                            <a href="{{route('shiper.edit',['id'=>$value->id])}}">
                                                <i class="icon feather icon-edit f-16  text-c-green"></i>
                                            </a>
                                            <a href="{{route('shiper.delete',['id'=>$value->id])}}" data-url="" class="">
                                                <i class="feather icon-trash-2 ms-3 f-16 text-c-red"></i>
                                            </a>
                                        </td>
                                    </tr>
@endforeach
                                </tbody>
                            </table>

                        </div>

                    </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 345px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 237px;"></div></div></div>
                </div>
            </div>
            <div>
                <div class="pagelist">{!! $data->links() !!}</div>
<style type="text/css">
    .flex.justify-between.flex-1.sm\:hidden{
display: none;
    }
</style>
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
