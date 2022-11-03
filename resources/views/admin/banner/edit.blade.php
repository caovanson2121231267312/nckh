

@extends('extends.dashboard')

@section('title')
<title>Sửa ảnh nền</title>
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
                            <h5 class="m-b-10">Sửa ảnh nền</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                            <li class="breadcrumb-item"><a href="{{route('banner.add')}}">Sửa ảnh nền</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Sửa ảnh nền</h5>
                </div>
                <div class="card-body">
                    <div class="col-md-12">
                        <h5 class="mt-5">Sửa ảnh nền</h5>
                        <hr>
                        <form action="{{route('banner.edit',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="inputEmail3" class="col-sm-3">Tiêu đề</label>
                                <div class="col-sm-9">
                                    <input type="text" value="{{$data->title}}" name='title' class="form-control" id="inputEmail3">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="inputEmail3" class="col-sm-3">Ảnh</label>
                                <div class="col-sm-9">
                                    <input type="file" value="" required name='file' class="form-control" id="inputEmail3">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="form-label">Vị trí</label>
                                <div class="col-sm-9">

                                    <select name="position" class="form-select" id="inlineFormSelectPref">
                                        <option {{$data->position == 'Banner Center' ? 'selected' : ' '}}>Banner Center</option>
                                        <option  {{$data->position=='Banner Left' ? 'selected' : ' '}}>Banner Left</option>
                                        <option  {{$data->position=='Banner Right' ? 'selected' : ' '}}>Banner Right</option>
                                        <option  {{$data->position=='Banner Bottom' ? 'selected' : ' '}}>Banner Bottom</option>
                                        <option  {{$data->position=='Banner Footer' ? 'selected' : ' '}}>Banner Footer</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="inputEmail3" class="col-sm-3">Đường dẫn</label>
                                <div class="col-sm-9">
                                    <input type="text"  value="{{$data->url}}" name='url' class="form-control" id="inputEmail3">
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


<script type="text/javascript">
    // alertDone('sonabc','đa thêm');
    // console.log('cao van son')
</script>

@endsection
