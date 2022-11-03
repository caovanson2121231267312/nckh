

@extends('extends.dashboard')

@section('title')
<title>Sửa vị trí</title>
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
                            <h5 class="m-b-10">Vị trí</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                            <li class="breadcrumb-item"><a href="#">Sửa vị trí</a></li>
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
                        <h5 class="mt-5">Sửa vị trí</h5>
                        <hr>
                        <form action="{{route('store.edit',['id'=>$data->id])}}" method="post">
                            @csrf
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">ID : </label>
                                <div class="col-sm-9">
                                    <input type="text" name='id' readonly value="{{$data->id}}" class="form-control" id="inputEmail3">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Khu vực : </label>
                                <div class="col-sm-9">
                                    <input type="text" name='name' value="{{$data->name}}" class="form-control" id="inputEmail3">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Đường đẫn google map: </label>
                                <div class="col-sm-9">
                                    <input type="text" name='url'  value="{{$data->url}}" class="form-control" id="inputEmail3">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Vị trí : </label>
                                <div class="col-sm-9">
                                    <textarea type="text" name='map' style="height: 250px;" value="{{$data->map}}" class="form-control" id="inputEmail3">{{$data->map}}</textarea>
                                </div>
                            </div>

                            <div>
{!! $data->map !!}

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
