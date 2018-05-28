<?php
	if(isset($_POST['dangnhap'])){
		$tendangnhap=$_POST['username'];
		$matkhau=$_POST['password'];
		if (!$tendangnhap || !$matkhau) {
	        $error = "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu.";
	    }else{

		    // mã hóa pasword
	    	$matkhau = md5($matkhau);
			$sql="select*from nguoisudung where tendangnhap='$tendangnhap' and matkhau='$matkhau' and phanquyen='member'";
			$user = select_one($sql);
			if (($user['tendangnhap'] != $user['tendangnhap']) || ($matkhau != $user['matkhau'])) {
		        $error = "Tên đăng nhập hoặc mật khẩu không đúng, xin thử lại. ";
		    }

			if($user){
				//Để lưu một giá trị mới vào Session ta dùng cú pháp như sau: $_SESSION['session_name'] = $session_value
				$_SESSION['thanhvien']=$tendangnhap;
				header("location:index.php");
			}
	    }
	}
	else if(isset($_POST['thoat'])){
		unset($_SESSION['thanhvien']);
		header("location:../donghoo/index.php?page_layout=dangnhap");

		}
	
?>
<!-- Start breadcume area -->
<div class="breadcume-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="breadcrumb">
                    <a title="Return to Home" href="index.php" class="home"><i class="fa fa-home"></i></a>
                    <span class="navigation-pipe">&gt;</span>
                    Đăng nhập
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End breadcume area -->

<!-- LOGIN-AREA START -->
                <div class="lognin-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <h4 class="cart-title">Đăng nhập</h4>
                            </div>
                        </div>
                        <div class="row">
                            <!-- Registered-Customers Start -->
                            <div class="col-md-3">
                            </div>
                            <div class="col-md-6">
                                <form action="index.php?page_layout=dangnhap" method="post">
                                    <div class="registered-customers">
                                        <h3>Đăng nhập</h3>
                                        <div class="registered">
                                            <p style="color:red"><?php if($_POST) echo $error ?></p>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input type="text" class="custom-form" id="username"  name="username" placeholder="Tên đăng nhập" />
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input type="password" class="custom-form" name="password" id="password"  placeholder="Mật khẩu" />
                                                </div>
                                            </div>
                                            <button class="btn btnContact" name="dangnhap" id="dangnhap"  type="submit">đăng nhập</button>

                                            <button class="btn btnContact" type="reset">hủy</button>
                                        </div>
                                    </div>
                                </form>
                               
                            </div>
                            <!-- Registered-Customers End -->
                            <div class="col-md-3">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- LOGIN-AREA END -->
