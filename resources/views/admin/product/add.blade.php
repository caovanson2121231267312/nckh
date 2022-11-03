

@extends('extends.dashboard')

@section('title')
<title>Thêm sản phẩm</title>
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
                            <h5 class="m-b-10">Thêm sản phẩm</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                            <li class="breadcrumb-item"><a href="{{route('categories.add')}}">Thêm sản phẩm</a></li>
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
                        <h5 class="mt-5">Thêm sản phẩm</h5>
                        <hr>
                        <form action="{{route('product.add')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="inputEmail3" class="col-sm-3">Tên sản phẩm</label>
                                <div class="col-sm-9">
                                    <input type="text" name='name' class="form-control" id="inputEmail3">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="inputEmail3" class="col-sm-3">Đường dẫn</label>
                                <div class="col-sm-9">
                                    <input type="text" name='name_file' class="form-control" id="inputEmail3">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="inputEmail3" class="col-sm-3">Thể loại</label>
                                <div class="col-sm-9">
                                    <select class="form-select" name="title" id="selectToastPlacement">
                                        <option>Điện Thoại</option>
                                        <option>Laptop</option>
                                        <option>PC</option>
                                        <option>TABLET</option>
                                        <option>Âm Thanh</option>
                                        <option>Phụ Kiện</option>
                                        <option>Đồng Hồ</option>
                                        <option>Sim Thẻ</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="inputEmail3" class="col-sm-3">Từ Khóa Tìm Kiếm</label>
                                <div class="col-sm-9">
                                    <input type="text" name='keywords' class="form-control" id="inputEmail3">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="validationTextarea" class="form-label">Mô tả : </label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="des" id="validationTextarea" placeholder="Tóm tắt nội dung trang web" required=""></textarea>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="inputPassword3" class="col-sm-3">Danh Mục Sản Phẩm</label>
                                <div class="col-sm-9">
                                    <select class="form-select" name="parent_id" id="selectToastPlacement">
                                        <option value="0">Chọn danh mục cha</option>
                                        {!!$html!!}
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="inputEmail3" class="col-sm-3">Số Lượng</label>
                                <div class="col-sm-9">
                                    <input type="text" name='quantity' class="form-control" id="inputEmail3">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="inputEmail3" class="col-sm-3">Trạng Thái</label>
                                <div class="col-sm-9">
                                    <input type="text" name='type' class="form-control" id="inputEmail3">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="inputEmail3" class="col-sm-3">Hot</label>
                                <div class="col-sm-9">
                                    <input type="text" name='hot' class="form-control" id="inputEmail3">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="inputEmail3" class="col-sm-3">Giá Bán</label>
                                <div class="col-sm-9">
                                    <input type="text" name='price' class="form-control" id="inputEmail3">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="inputEmail3" class="col-sm-3">Giá Sau Giảm</label>
                                <div class="col-sm-9">
                                    <input type="text" name='sale_product' class="form-control" id="inputEmail3">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="inputEmail3"  class="col-sm-3">Giảm Giá</label>
                                <div class="col-sm-9">
                                    <input type="number" onkeyup="checkNumber()" name='discount' class="form-control" id="inputDiscount">
                                </div>
                                <label for="inputEmail3" class="col-sm-3">Hạn Giảm Giá</label>
                                <div class="col-sm-9">
                                    <input type="date" name='sale_time' class="form-control" id="inputEmail3">
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="input-group mb-3">
                                    <label class="input-group-text" for="inputGroupFile01">Ảnh chính của sản phẩm</label>
                                    <input type="file" name="file" class="form-control" id="inputGroupFile01">
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="input-group mb-3">
                                    <label class="input-group-text" for="inputGroupFile01">Ảnh phụ của sản phẩm</label>
                                    <div class="service-wrap" id="file-con">
                                        <input class="mfu-file-input form-control" type="file" name="files[]">
                                    </div>
                                </div>

                            </div>
                            <div class="mfu-new-item-btn btn btn-primary" id="mfu-new-item-btn">Thêm Ảnh cho sản phẩm</div>
                            <div class="mfu-clear"></div>
                            <div class="mb-3">
                                <div class="input-group mb-3">
                                    <label class="input-group-text" for="inputGroupFile01">Thông số kỹ thuật</label>
                                    <div class="service-wrap" id="file-con1">
                                        <input class="mfu-file-input form-control" type="text" name="infor[]">
                                    </div>
                                </div>

                            </div>
                            <div class="mfu-new-item-btn btn btn-primary" id="mfu-new-item-btn1">Thêm Thông số kỹ thuật</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="form-label">Review Sản Phẩm</label>
                <div class="col-md-12">
                    <textarea class="form-control" rows="5" name="review" id="content"></textarea>
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
<script type="text/javascript" src="{{asset('assets/js/plugins/editor.js')}}"></script>
<link href="{{asset('assets/css/plugins/bootstrap.css')}}" rel="stylesheet">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<script type="text/javascript">
    // alertDone('sonabc','đa thêm');
    // console.log('cao van son')
</script>
<script type="text/javascript">
    $(document).ready(function() {
      var $editor = $('#content');
      $editor.summernote({
        height: 400,
    minHeight: 400,             // set minimum height of editor
  maxHeight: null,             // set maximum height of editor
  focus: true,
  callbacks: {
    onPaste: function(e) {
      console.log('Called event paste', e);
  }
    // onImageUpload: function(files) {
    //   console.log(files);
    //   $summernote.summernote('insertNode', imgNode);
    // }
},
toolbar: [
['groume', ['list of button']],
['style',['style']],
['style', ['bold', 'italic', 'underline']],
['fontsize', ['fontsize']],
['fontname',['fontname']],

['color', ['color']],
['height', ['height']],
['operation', ['undo', 'redo']],
['font', ['strikethrough', 'superscript', 'subscript', 'clear']],
['para', ['ul', 'ol', 'paragraph']],
['object', ['link', 'table', 'picture', 'video']],
['table',['row']],
['misc', [ 'help', 'fullscreen', 'codeview']]
]
});

      $('#insert-btn').click(() => {
          $editor.summernote('insertParagraph');
      });

      $('#bold-btn').click(() => {
          $editor.summernote('bold');
      });
  });
</script>
<script>
$(document).ready(function() {
  $('#mfu-new-item-btn').click(function(){
    $('#file-con').append("<input class='mfu-file-input form-control' type='file' name='files[]' >");
  })
  $('#mfu-new-item-btn1').click(function(){
    $('#file-con1').append("<input class='mfu-file-input form-control' type='text' name='infor[]' >");
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
