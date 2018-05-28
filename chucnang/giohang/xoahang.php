<?php
session_start();
if(isset($_GET['id'])){
	$id = $_GET['id'];
	
	if($id == 0){
		unset($_SESSION['giohang']);
	}
	
	else{
		if(count($_SESSION["giohang"])==1){
			echo count($_SESSION["giohang"]);
			unset($_SESSION['giohang']);
		}
		else{
			echo count($_SESSION["giohang"]);
			unset($_SESSION['giohang'][$id]);
		}	
	}

}
header('location:../../index.php?page_layout=giohang');	
?>