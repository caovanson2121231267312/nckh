

@extends('extends.dashboard')

@section('title')
<title>Sửa doanh mục sản phẩm</title>
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
                            <h5 class="m-b-10">Sửa doanh mục sản phẩm</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{url('admin')}}">Trang chủ</a></li>
                            <li class="breadcrumb-item"><a href="{{route('categories.add')}}">Sửa doanh mục sản phẩm</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    {{-- <h5>Basic Component</h5> --}}
                </div>
                <div class="card-body">
                    <div class="col-md-6">
                        <h5 class="mt-5">Sửa doanh mục sản phẩm</h5>
                        <hr>
                        <form action="{{route('categories.edit',['id'=>$data->id])}}" method="post">
                            @csrf
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Tên doanh mục</label>
                                <div class="col-sm-9">
                                    <input type="text" name='name' value="{{$data->name}}" class="form-control" id="inputEmail3">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword3" class="col-sm-3 col-form-label">Doanh mục cha</label>
                                <div class="col-sm-9">
                                    <select class="form-select" name="parent_id" id="selectToastPlacement">
                                        <option value="0">Chọn danh mục cha</option>
                                        {!!$html!!}
                                    </select>
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
