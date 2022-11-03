

@extends('extends.dashboard')

@section('title')
<title>Thêm trạng thái đơn hàng</title>
@endsection

@section('meta')
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="description" content="" />
<meta name="keywords" content="">
<meta name="author" content="Codedthemes" />

<link rel="icon" href="{{asset('assets/images/favicon.ico')}}" type="image/x-icon">
<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
@endsection

@section('content')
<section class="pcoded-main-container">
    <div class="pcoded-content">
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Thêm trạng thái đơn hàng</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('index')}}"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{route('index')}}">Trang chủ</a></li>
                            <li class="breadcrumb-item"><a href="{{route('status_order.add')}}">Thêm trạng thái đơn hàng</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Thêm trạng thái đơn hàng</h5>
                </div>
                <div class="card-body">
                    <div class="col-md-12">
                        <hr>
                        <form action="{{route('status_order.add')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3 row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Trạng thái : </label>
                                <div class="col-sm-9">
                                    <input type="text" name='name' placeholder="VD : Hủy đơn" class="form-control" id="inputEmail3">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Thêm</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>



</section>
@endsection

@section('script')


<script type="text/javascript">
    // alertDone('sonabc','đa thêm');
    // console.log('cao van son')
</script>

@endsection
