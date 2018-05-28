<div class="user-info-adn-search">
    <div class="user-info">
        <p>
            <a href="" class="name_member">Xin chào, <?php if(isset($_SESSION["thanhvien"])){echo $_SESSION["thanhvien"];}?></a>
            <a href="index.php?page_layout=quanlytaikhoan&ac=lietke"><i class="fa fa-user"></i> Tài khoản của tôi</a>
            <a href="index.php?page_layout=dangxuat"><i class="fa fa-key"></i> Đăng xuất</a>
        </p>
    </div>
    <div class="search-and-cart">
        <?php  include('chucnang/timkiem/timkiem.php'); ?>
        <?php  include('chucnang/giohang/giohangcuaban.php'); ?>
        
    </div>
</div>