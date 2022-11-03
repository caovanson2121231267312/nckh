

@extends('extends.dashboard')

@section('title')
<title>Thêm đơn vị vận chuyển</title>
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
                            <h5 class="m-b-10">Thêm đơn vị vận chuyển</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                            <li class="breadcrumb-item"><a href="{{route('categories.add')}}">Thêm đơn vị vận chuyển</a></li>
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
                        <h5 class="mt-5">Thêm đơn vị vận chuyển</h5>
                        <hr>
                        <form action="{{route('shiper.add')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="inputEmail3" class="col-sm-3">Đơn vị vận chuyển : </label>
                                <div class="col-sm-9">
                                    <input type="text" name='name' required class="form-control" id="inputEmail3">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="inputEmail3" class="col-sm-3">Logo : </label>
                                <div class="col-sm-9">
                                    <input type="file" name='img' required class="form-control" id="inputEmail3">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="inputEmail3" class="col-sm-3">Số điện thoại</label>
                                <div class="col-sm-9">
                                    <input type="text" name='phone' required class="form-control" id="inputEmail3">
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

 <script src="https://cdn.tiny.cloud/1/cjvd4s2x9retztkun9dojf4kv7v7iyumv4zqwmoapqe6nfue/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'advlist autolink lists link image charmap preview anchor pagebreak',
      toolbar_mode: 'floating',
    });
  </script>
@endsection
