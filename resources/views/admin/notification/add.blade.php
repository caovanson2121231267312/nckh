

@extends('extends.dashboard')

@section('title')
<title>Thêm thông báo</title>
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
                            <h5 class="m-b-10">Thêm thông báo</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                            <li class="breadcrumb-item"><a href="{{route('categories.add')}}">Thêm thông báo</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Basic Component</h5>
                </div>
                <div class="card-body">
                    <div class="col-md-12">
                        <h5 class="mt-5">Thêm thông báo</h5>
                        <hr>
                        <form action="{{route('notification.add')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="inputEmail3" class="col-sm-3">Tiêu đề : </label>
                                <div class="col-sm-9">
                                    <input type="text" name='title' required class="form-control" id="inputEmail3">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="inputEmail3" class="col-sm-3">Đường dẫn : </label>
                                <div class="col-sm-9">
                                    <input type="text" name='url' required class="form-control" id="inputEmail3">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="inputEmail3" class="col-sm-3">Ảnh : </label>
                                <div class="col-sm-9">
                                    <input type="file" name='img' required class="form-control" id="inputEmail3">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="inputEmail3" class="col-sm-3">Thời gian thông báo</label>
                                <div class="col-sm-9">
                                    <input type="date" name='time' required class="form-control" id="inputEmail3">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Xác nhận thêm</button>
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
{{-- <script type="text/javascript" src="{{asset('assets/js/plugins/editor.js')}}"></script>
<link href="{{asset('assets/css/plugins/bootstrap.css')}}" rel="stylesheet"> --}}



@endsection
