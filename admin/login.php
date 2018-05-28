
<?php
include "lib_db.php";
session_start();
	
	if(isset($_POST['dangnhap'])){
		$tendangnhap=$_POST['username'];
		$matkhau=$_POST['password'];
		if (!$tendangnhap || !$matkhau) {
	        $error = "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu.";
	    }else{

		    // mã hóa pasword
	    	$matkhau = md5($matkhau);
			$sql="select*from nguoisudung where tendangnhap='$tendangnhap' and matkhau='$matkhau' and phanquyen='admin'";
			$user = select_one($sql);
			if (($user['tendangnhap'] != $user['tendangnhap']) || ($matkhau != $user['matkhau'])) {
		        $error = "Tên đăng nhập hoặc mật khẩu không đúng, xin thử lại. ";
		    }

			if($user){
				
				$_SESSION["tdn"]=$tendangnhap;
				//echo $tendangnhap;die();
			header("location:index.php");
			}
	    }
	}
	else if(isset($_POST['thoat'])){
		unset($_SESSION['thanhvien']);
		header("location:index.php");

		}
	
?>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/shtml; charset=utf-8"/>
        <link rel="stylesheet" type="text/css" href="assets/allcp/forms/css/admin_log.css">
		<style>
			body{background:#333344;}
		</style>
	</head>
	<body>
        <div class="log_form">
				<form action="login.php" method="POST">
					<div class="wrap">
						<div class="avatar"><img src="../Images/aa.gif" alt=""/></div>
						<input type="text" name = "username" placeholder="username" required>
						<div class="bar"><i></i></div>
						<input name = "password" type="password" placeholder="password" required>
						<div class="bottom"></div>
						<input class="t" type="submit" value="Sign up" name="dangnhap" id="dangnhap"/>
					</div>
				</form>
            <div class="error">
                <?php echo @$error?>
            </div>
        </div>
	</body>
</html>