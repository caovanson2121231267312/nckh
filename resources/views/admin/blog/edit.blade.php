

@extends('extends.dashboard')

@section('title')
<title>Sửa bài viết</title>
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
                            <h5 class="m-b-10">Sửa bài viết</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                            <li class="breadcrumb-item"><a href="{{route('blog.add')}}">Sửa bài viết</a></li>
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
                        <h5 class="mt-5">Sửa bài viết</h5>
                        <hr>
                        <form action="{{route('blog.edit',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="inputEmail3" class="col-sm-3">Tiêu đề : </label>
                                <div class="col-sm-9">
                                    <input type="text" value="{{$data->title}}" name='title' required class="form-control" id="inputEmail3">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="inputEmail3" class="col-sm-3">File : </label>
                                <div class="col-sm-9">
                                    <input type="text" value="{{$data->file}}" name='file' required class="form-control" id="inputEmail3">
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="col-sm-9">
                                    <input type="text" hidden value="{{Auth::user()->id}}" name="user_id" class="form-control" id="inputEmail3">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="inputEmail3" class="col-sm-3">Ảnh : </label>
                                <div class="col-sm-9">
                                    <input type="file" name='img' class="form-control" id="inputEmail3">
                                </div>
                            </div>


                            <div class="mb-3">
                                <label for="inputEmail3" class="col-sm-3">Chi tiết bài viết</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="content">
                                        {{$data->content}}
                                    </textarea>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Xác nhận sửa</button>
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
