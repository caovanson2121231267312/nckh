function actionDelete(event){
    event.preventDefault();
    let urlRequest = $(this).data('url');
    let that = $(this);

    Swal.fire({
        title: 'Are you sure?',
        text: "Xóa sản phẩm này khỏi giỏ hàng của bạn!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Có , Xóa nó!',
        cancelButtonText: 'Hủy'
    }).then((result) => {
        if (result.value) {
            $.ajax({
                type: 'GET',
                url: urlRequest,
                success: function (data) {
                    if (data.code == 200) {
                        that.parent().parent().remove();
                        Swal.fire(
                            'Deleted!',
                            'Đã xóa sản phẩm.',
                            'success'
                        )
                        price();
                    }else{
                        console.log(data);
                    }

                },
                error: function () {

                }
            });


        }
    })

}

function actionDeleteBanner(event){
    event.preventDefault();
    let urlRequest = $(this).data('url');
    let that = $(this);

    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.value) {
            $.ajax({
                type: 'GET',
                url: urlRequest,
                success: function (data) {
                    if (data.code == 200) {
                        that.parent().parent().remove();
                        Swal.fire(
                            'Deleted!',
                            'Your Banner has been deleted.',
                            'success'
                        )
                    }else{
                        console.log(data);
                    }

                },
                error: function () {

                }
            });


        }
    })

}
function delete_product(event){
    event.preventDefault();
    let urlRequest = $(this).data('url');
    let that = $(this);

    Swal.fire({
        title: 'Are you sure?',
        text: "Xóa sản phẩm này khỏi giỏ hàng của bạn!",
        icon: 'warning',
        showCancelButton: true,
        cancelButtonText: 'Xóa',
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Có , Xóa nó!'
    }).then((result) => {
        if (result.value) {
            $.ajax({
                type: 'GET',
                url: urlRequest,
                success: function (data) {
                    if (data.code == 200) {
                        that.parent().parent().remove();
                        // Swal.fire(
                        //     'Deleted!',
                        //     'Your Banner has been deleted.',
                        //     'success'
                        // )
                    }else{
                        console.log(data);
                    }

                },
                error: function () {

                }
            });


        }
    })

}

function actionDeleteStatus(event){
    event.preventDefault();
    let urlRequest = $(this).data('url');
    let that = $(this);

    Swal.fire({
        title: 'Are you sure?',
        text: "Xóa trạng thái!",
        icon: 'warning',
        showCancelButton: true,
        cancelButtonText: 'Xóa',
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Có , Xóa nó!'
    }).then((result) => {
        if (result.value) {
            $.ajax({
                type: 'GET',
                url: urlRequest,
                success: function (data) {
                    if (data.code == 200) {
                        that.parent().parent().remove();
                        Swal.fire(
                            'Deleted!',
                            'Đã xóa thành công trạng thái.',
                            'success'
                        )
                    }else{
                        console.log(data);
                    }

                },
                error: function () {

                }
            });


        }
    })

}

function actionDeleteOrder(event){
    event.preventDefault();
    let urlRequest = $(this).data('url');
    let that = $(this);

    Swal.fire({
        title: 'Are you sure?',
        text: "Hủy đặt hàng!",
        icon: 'warning',
        showCancelButton: true,
        cancelButtonText: 'Xóa',
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Có , Hủy đặt đơn!'
    }).then((result) => {
        if (result.value) {
            $.ajax({
                type: 'GET',
                url: urlRequest,
                success: function (data) {
                    if (data.code == 200) {
                        Swal.fire(
                            'Deleted!',
                            'Đã hủy đặt hàng thành công .',
                            'success'
                        )
                    }else{
                        console.log(data);
                    }

                },
                error: function () {

                }
            });


        }
    })

}

$(function () {
    $(document).on('click', '.action_delete', actionDelete);
    $(document).on('click', '.action_delete_banner', actionDeleteBanner);
    $(document).on('click', '.action_delete_status', actionDeleteStatus);
    $(document).on('click', '.action_delete_order', actionDeleteOrder);
});
