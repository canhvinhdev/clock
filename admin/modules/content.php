

        <?php
		if(isset($_GET['quanly'])){
			$tam=$_GET['quanly'];
		}
		else{
			$tam="trangchu";
		}
		if($tam=="trangchu"){
			include("modules/trangchu/main.php");
			}
		if($tam=="danhmuc"){
			include("modules/danhmuc/main.php");
			}
		if($tam=="theloai"){
			include("modules/theloai/main.php");
			}
		if($tam=="thuonghieu"){
			include("modules/thuonghieu/main.php");
			}
		if($tam=="tintuc"){
			include("modules/tintuc/main.php");
			}
		if($tam=="khuyenmai"){
			include("modules/khuyenmai/main.php");
			}
		if($tam=="khuyenmaisanpham"){
			return view("modules/khuyenmai/donghochon.php");
			}
		if($tam=="donhang"){
			include("modules/donhang/main.php");
			}
		if($tam=="nguoisudung"){
			include("modules/nguoisudung/main.php");
			}
		if($tam=="nguoidung"){
			include("modules/nguoidung/main.php");
			}

		else if($tam=="sanpham"){
			include("modules/sanpham/main.php");}
		?>