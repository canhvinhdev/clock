<?php
session_start();
$id = $_GET['id'];
if(isset($_SESSION['giohang'][$id])){          //$_SESSION['giohang'][$id]= số lượng của sản phẩm đó
	$_SESSION['giohang'][$id] = $_SESSION['giohang'][$id] + 1;
}
else{
	$_SESSION['giohang'][$id] = 1;
}
header('location:../../index.php?page_layout=giohang');
?>