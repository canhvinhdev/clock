
<aside id="sidebar_left" class="nano nano-light affix">

            <!-- Sidebar Left Wrapper  -->
            <div class="sidebar-left-content nano-content">

                <!-- Sidebar Header -->
                <header class="sidebar-header">

                    <!-- Sidebar - Author -->
                    <div class="sidebar-widget author-widget">
                        <div class="media">
                            <a class="media-left profile-online" href="#">
                                <img src="assets/img/profile.jpg" class="img-responsive" alt="">
                            </a>

                            <div class="media-body">
                                <div>Xin chào</div>
                                <div class="media-author"><?php if(isset($_SESSION['tdn'])) echo $_SESSION['tdn'] ?></div>
                            </div>
                        </div>
                    </div>

                </header>
                <!-- /Sidebar Header -->

                <!-- Sidebar Menu  -->
                <ul class="nav sidebar-menu">
                    <li class="active">
                        <a href="index.php">
                            <span class="sidebar-title">Trang chủ</span>
                            <span class="sb-menu-icon fa fa-home"></span>
                        </a>
                    </li>
                    <li>
                        <a href="index.php?quanly=thuonghieu&ac=lietke">
                            <span class="sidebar-title">Quản lý thương hiệu</span>
                            <span class="sb-menu-icon fa fa-home"></span>
                        </a>
                    </li>
                    <li>
                        <a href="index.php?quanly=danhmuc&ac=lietke">
                            <span class="sidebar-title">Quản lý danh mục</span>
                            <span class="sb-menu-icon fa fa-home"></span>
                        </a>
                    </li>
                    <li>
                        <a href="index.php?quanly=sanpham&ac=lietke">
                            <span class="sidebar-title">Quản lý sản phẩm</span>
                            <span class="sb-menu-icon fa fa-home"></span>
                        </a>
                    </li>
                    <li>
                        <a href="index.php?quanly=theloai&ac=lietke">
                            <span class="sidebar-title">Quản lý thể loại</span>
                            <span class="sb-menu-icon fa fa-home"></span>
                        </a>
                    </li>
                    <li>
                        <a href="index.php?quanly=nguoisudung&ac=lietke">
                            <span class="sidebar-title">Quản lý người sử dụng</span>
                            <span class="sb-menu-icon fa fa-home"></span>
                        </a>
                    </li>
                    <li>
                        <a href="index.php?quanly=donhang&ac=lietke">
                            <span class="sidebar-title">Quản lý đơn hàng</span>
                            <span class="sb-menu-icon fa fa-home"></span>
                        </a>
                    </li>
                    <li>
                        <a href="index.php?quanly=khuyenmai&ac=lietke">
                            <span class="sidebar-title">Quản lý khuyến mãi</span>
                            <span class="sb-menu-icon fa fa-home"></span>
                        </a>
                    </li>
                    
                    <li>
                        <a href="index.php?quanly=tintuc&ac=lietke">
                            <span class="sidebar-title">Quản lý tin tức</span>
                            <span class="sb-menu-icon fa fa-home"></span>
                        </a>
                    </li>

                </ul>
                <!-- /Sidebar Menu  -->

            </div>
            <!-- /Sidebar Left Wrapper  -->

        </aside>