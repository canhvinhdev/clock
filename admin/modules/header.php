Header  -->
        <header class="navbar navbar-fixed-top">
            <div class="navbar-logo-wrapper dark bg-dark">
                <a class="navbar-logo-image" href="index.php">
                    <img src="assets/img/logo.png" alt="" class="sb-l-o-logo">
                    <img src="assets/img/logo_small.png" alt="" class="sb-l-m-logo">
                </a>
            </div>
            <span id="sidebar_left_toggle" class="ad ad-lines navbar-nav navbar-left"></span>

            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown dropdown-fuse">
                    <a href="#" class="dropdown-toggle mln" data-toggle="dropdown">
                        <span class="hidden-xs hidden-sm"><span class="name"><?php if(isset($_SESSION['tdn'])) echo $_SESSION['tdn'] ?></span> </span>
                        <span class="fa fa-caret-down hidden-xs hidden-sm"></span>
                        <span class="profile-online">
                            <img src="assets/img/profile.jpg" alt="avatar">
                        </span>
                    </a>
                    <ul class="dropdown-menu list-group keep-dropdown w190" role="menu">
                        <li class="list-group-item">
                            <a href="http://localhost:81/donghoo/">
                                Visit Website
                                <span class="fa fa-user"></span> 
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="logout.php">
                                Đăng xuất
                                <span class="fa fa-sign-out"></span> 
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </header>
        <!-- /Header 