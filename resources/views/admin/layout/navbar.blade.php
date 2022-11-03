    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>


    <nav class="pcoded-navbar menupos-fixed menu-dark ">
        <div class="navbar-wrapper  ">
            <div class="navbar-content scroll-div ">
                <ul class="nav pcoded-inner-navbar ">
                    <li class="nav-item pcoded-menu-caption">
                        <label>Navigation</label>
                    </li>
                    <li class="nav-item pcoded-hasmenu">
                        <a href="#" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
                        <ul class="pcoded-submenu">
                            <li><a href="{{url('admin')}}">Analytics</a></li>
                            <li><a href="{{url('admin')}}">Sales</a></li>
                        </ul>
                    </li>
                    <li class="nav-item pcoded-hasmenu">
                        <a href="#" class="nav-link "><span class="pcoded-micon"><i class="fas fa-th-list"></i></span><span class="pcoded-mtext">Xem trang web</span></a>
                        <ul class="pcoded-submenu">
                            <li><a target="_blank" href="{{url('/')}}">Trang chủ</a></li>
                            <li><a target="_blank" href="{{url('/cart')}}">Giỏ hàng</a></li>
                            <li><a target="_blank" href="{{url('/tra-cuu-don-hang-online')}}">Tra cứu hóa đơn</a></li>
                            <li><a target="_blank" href="{{url('map')}}">Vị trí</a></li>
                        </ul>
                    </li>

                    <li class="nav-item pcoded-hasmenu">
                        <a href="#" class="nav-link "><span class="pcoded-micon"><i class="feather icon-users"></i></span><span class="pcoded-mtext">Tài khoản</span></a>
                        <ul class="pcoded-submenu">
                            <li><a href="{{route('users')}}">Danh sách người dùng</a></li>
                            <li><a href="{{route('users.add')}}">Thêm tài khoản</a></li>
                            <li><a href="{{route('users.change')}}">Đổi mật khẩu</a></li>
                        </ul>
                    </li>
                    <li class="nav-item pcoded-hasmenu">
                        <a href="#" class="nav-link "><span class="pcoded-micon"><i class="far fa-bell"></i></span><span class="pcoded-mtext">Thông báo</span></a>
                        <ul class="pcoded-submenu">
                            <li><a href="{{route('notification')}}">Danh sách thông báo</a></li>
                            <li><a href="{{route('notification.add')}}">Thêm thông báo</a></li>
                        </ul>
                    </li>
                    <li class="nav-item pcoded-menu-caption">
                        <label>Interface</label>
                    </li>
                    <li class="nav-item pcoded-hasmenu">
                        <a href="#" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">Danh mục sản phẩm</span></a>
                        <ul class="pcoded-submenu">
                            <li><a href="{{route('categories')}}">Danh mục</a></li>
                            <li><a href="{{route('categories.add')}}">Thêm doanh mục</a></li>
                        </ul>
                    </li>
                    <li class="nav-item pcoded-hasmenu">
                        <a href="#" class="nav-link "><span class="pcoded-micon"><i class="fas fa-cart-plus"></i></span><span class="pcoded-mtext">Đơn hàng</span><span class="count_data pcoded-badge badge bg-success">+</span></a>
                        <ul class="pcoded-submenu">
                            <li><a href="{{route('order')}}">Danh sách đơn hàng</a></li>
                            <li><a href="{{route('order.ship')}}">Đơn đang giao</a></li>
                            <li><a href="{{route('order.cancel')}}">Đơn đã hủy</a></li>
                        </ul>
                    </li>
                    <li class="nav-item pcoded-hasmenu">
                        <a href="#" class="nav-link "><span class="pcoded-micon"><i class="fas fa-parking"></i></span><span class="pcoded-mtext">Sản phẩm</span></a>
                        <ul class="pcoded-submenu">
                            <li><a href="{{route('product')}}">Danh sách sản phẩm</a></li>
                            <li><a href="{{route('product.add')}}">Thêm sản phẩm</a></li>
                        </ul>
                    </li>
                    <li class="nav-item pcoded-hasmenu">
                        <a href="#" class="nav-link "><span class="pcoded-micon"><i class="far fa-address-book"></i></span><span class="pcoded-mtext">Bài viết</span></a>
                        <ul class="pcoded-submenu">
                            <li><a href="{{route('blog')}}">Danh sách bài viết</a></li>
                            <li><a href="{{route('blog.add')}}">Thêm bài viết</a></li>
                        </ul>
                    </li>
                    <li class="nav-item pcoded-hasmenu">
                        <a href="#" class="nav-link "><span class="pcoded-micon"><i class="fas fa-balance-scale"></i></span><span class="pcoded-mtext">Khuyến mãi</span></a>
                        <ul class="pcoded-submenu">
                            <li><a href="{{route('voucher')}}">Danh sách khuyến mãi</a></li>
                            <li><a href="{{route('voucher.add')}}">Thêm khuyến mãi</a></li>
                            <li><a href="{{route('voucher.add')}}">Kiểm tra voucher code</a></li>
                        </ul>
                    </li>
                    <li class="nav-item pcoded-hasmenu">
                        <a href="#" class="nav-link "><span class="pcoded-micon"><i class="far fa-address-book"></i></span><span class="pcoded-mtext">Đơn vị vận chuyển</span></a>
                        <ul class="pcoded-submenu">
                            <li><a href="{{route('shiper')}}">Danh sách vận chuyển</a></li>
                            <li><a href="{{route('shiper.add')}}">Thêm vận chuyển</a></li>
                        </ul>
                    </li>
                    <li class="nav-item pcoded-hasmenu">
                        <a href="#" class="nav-link "><span class="pcoded-micon"><i class="far fa-image"></i></span><span class="pcoded-mtext">Ảnh nền</span></a>
                        <ul class="pcoded-submenu">
                            <li><a href="{{route('banner')}}">Danh sách ảnh nền</a></li>
                            <li><a href="{{route('banner.add')}}">Thêm ảnh nền</a></li>
                        </ul>
                    </li>
                    <li class="nav-item pcoded-hasmenu">
                        <a href="#" class="nav-link "><span class="pcoded-micon"><i class="far fa-star"></i></span><span class="pcoded-mtext">Trạng thái</span></a>
                        <ul class="pcoded-submenu">
                            <li><a href="{{route('status_order')}}">Trạng thái đơn hàng</a></li>
                            <li><a href="{{route('status_order.add')}}">Thêm trạng thái</a></li>
                        </ul>
                    </li>
                    <li class="nav-item pcoded-hasmenu">
                        <a href="#" class="nav-link "><span class="pcoded-micon"><i class="far fa-credit-card"></i></span><span class="pcoded-mtext">Thanh Toán</span></a>
                        <ul class="pcoded-submenu">
                            <li><a href="{{route('pay')}}">Danh sách thanh toán</a></li>
                            <li><a href="{{route('pay.add')}}">Thêm thanh toán</a></li>
                        </ul>
                    </li>
                    <li class="nav-item pcoded-hasmenu">
                        <a href="#" class="nav-link "><span class="pcoded-micon"><i class="fas fa-store-alt"></i></span><span class="pcoded-mtext">Của hàng</span></a>
                        <ul class="pcoded-submenu">
                            <li><a href="{{route('store')}}">Vị trí</a></li>
                            <li><a href="{{route('store.add')}}">Thêm vị trí</a></li>
                        </ul>
                    </li>

                    <li class="nav-item pcoded-menu-caption">
                        <label>Config</label>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('users.change')}}" class="nav-link "><span class="pcoded-micon"><i class="fas fa-exchange-alt"></i></span><span class="pcoded-mtext">Đổi mật khẩu</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('users.config')}}" class="nav-link "><span class="pcoded-micon"><i class="fas fa-cog"></i></span><span class="pcoded-mtext">Cài đặt</span></a>
                    </li>
                    <li class="nav-item pcoded-menu-caption">
                        <label>other</label>
                    </li>

                <div class="card text-center">
                    <div class="card-block">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true"></button>
                        <i class="feather icon-sunset f-40"></i>
                        <h6 class="mt-3">Help?</h6>
                        <p>Please contact us on our email for need any support</p>
                        <a href="{{url("/")}}" target="_blank" class="btn btn-primary btn-sm text-white m-0">View web</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
