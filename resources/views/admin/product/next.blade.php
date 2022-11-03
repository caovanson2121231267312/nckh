

@extends('extends.dashboard')

@section('title')
<title>Add Product</title>
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
                            <h5 class="m-b-10">Form Elements</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Form Components</a></li>
                            <li class="breadcrumb-item"><a href="{{route('categories.add')}}">Add Product</a></li>
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
                        <h5 class="mt-5">Add Category</h5>
                        <hr>
                        <form action="{{route('product.next')}}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3"  id="tskt">
                                <label for="inputPassword3" class="col-sm-3">Danh Mục Sản Phẩm</label>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <input type="text" name="name[]">
                                    </div>
                                    <div class="col-sm-3">
                                        <textarea name="value[]"></textarea>
                                        {{-- <input type="text"> --}}
                                    </div>
                                    <div class="col-sm-3">
                                        <select class="form-select" name="id[]" id="selectToastPlacement">
                                            {!!$option!!}
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="mfu-new-item-btn btn btn-primary" id="mfu-new-item-btn">Thêm tskt</div>

                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Hoàn Thành</button>
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
<script type="text/javascript" src="{{asset('assets/js/plugins/editor.js')}}"></script>
<script>
$(document).ready(function() {
  $('#mfu-new-item-btn').click(function(){
    console.log('test');
    $('#tskt').append("<div class='row'> <div class='col-sm-3'> <input type='text' name='name[]'> </div> <div class='col-sm-3'> <input type='text' name='value[]'> </div> <div class='col-sm-3'> <select class='form-select' name='id[]' id='selectToastPlacement'>{!!$option!!}</select> </div> </div>");
  })
});
function checkNumber(){
    var number = document.getElementById('inputDiscount').value;
    if(number=='' || number==' '){
        return;
    }else{
        if(number <1 || number >100){
            alertDone('LỖI','Giảm Giá Trong Phạm Vi 1 to 100');
        }
    }
}
    </script>
@endsection
