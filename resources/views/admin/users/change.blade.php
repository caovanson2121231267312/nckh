

@extends('extends.dashboard')

@section('title')
<title>Đổi mật khẩu</title>
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
                            <h5 class="m-b-10">Đổi mật khẩu</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            {{-- <li class="breadcrumb-item"><a href="#">Form Components</a></li> --}}
                            <li class="breadcrumb-item"><a href="{{route('users.change')}}">Đổi mật khẩu</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Đổi mật khẩu</h5>
                </div>
                <div class="card-body">
                    <div class="col-md-6">
                        {{-- <h5 class="mt-5">New Category</h5> --}}
                        {{-- @if($errors->has())
    @foreach ($errors->all() as $error)
        <div>{{ $error }}</div>
    @endforeach
@endif --}}

                        <hr>
                        <form action="{{route('users.pass',['id'=>Auth::user()->id])}}" method="post">
                            @csrf
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Mật khẩu cũ</label>
                                <div class="col-sm-9">
                                    <input type="text" name='current_password' class="form-control" id="inputEmail3">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword3" class="col-sm-3 col-form-label">Mật khẩu mới</label>
                                <div class="col-sm-9">
                                    <input type="text" name='new_password' class="form-control" id="inputEmail3">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword3" class="col-sm-3 col-form-label">Nhập lại mật khẩu</label>
                                <div class="col-sm-9">
                                    <input type="text" name='new_confirm_password' class="form-control" id="inputEmail3">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Xác nhận</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    @if(session('mess'))
    <script type="text/javascript">
        console.log('da them')
        alertDone("{{session('title')}}","{{session('mess')}}");
    </script>
@endif


    <div class="card-body">


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
