

@extends('extends.dashboard')

@section('title')
<title>Thêm doanh mục</title>
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
                            <h5 class="m-b-10">Thêm doanh mục</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{url('admin')}}">Trang chủ</a></li>
                            <li class="breadcrumb-item"><a href="{{route('categories.add')}}">Thêm doanh mục</a></li>
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
                        <h5 class="mt-5">Thêm doanh mục mới</h5>
                        <hr>
                        <form action="{{route('categories.add')}}" method="post">
                            @csrf
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Tên doanh mục</label>
                                <div class="col-sm-9">
                                    <input type="text" name='name' class="form-control" id="inputEmail3">
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
                            <button type="submit" class="btn btn-primary">Xác nhận thêm</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    {{-- <div class="card-body">
        <div class="position-fixed top-0 end-0 p-3" style="z-index: 99999">
            <div id="liveToast" class="toast fade hide" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <img src="{{asset('assets/images/favicon.ico')}}" class="img-fluid m-r-5" alt="images" style="width:17px;">
                    <strong class="me-auto">Dashboardkit</strong>
                    <small>11 mins ago</small>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    Hello, world! This is a toast message.
                </div>
            </div>
        </div>
        <button type="button" class="btn btn-primary" id="liveToastBtn">Show live toast</button>
    </div> --}}


    <div class="card-body">

        {{-- <div id="exampleModalLive" class="modal fade" tabindex="-1" aria-labelledby="exampleModalLiveLabel" style="display: none;" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLiveLabel">Modal Title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Woohoo, you're reading this text in a modal!</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn  btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn  btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div> --}}
        {{-- <button type="button" class="btn  btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalLive">Launch demo modal</button>
        <button class="action_delete">click</button>
        <div class="col-lg-4 col-md-9 col-sm-12">
<button class="btn btn-primary bs-message">Try me!</button>
<button class="btn btn-primary bs-auto-close">Try me!</button>
<button class="btn btn-primary bs-cust-html">Try me!</button> --}}
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
