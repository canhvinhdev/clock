
<?php
	$ac=$_GET['ac'];
	if($ac=="add"){
		include("modules/khuyenmai/add.php");
	}
	if($ac=="lietke"){
		include("modules/khuyenmai/lietke.php");
	}
	if($ac=="edit"){
		include("modules/khuyenmai/edit.php");
	}
	if($ac=="trangthai"){
		include("modules/khuyenmai/trangthai.php");
	}
	if($ac=="del"){
		include("modules/khuyenmai/del.php");
	}
	if($ac=="update"){
		include("modules/khuyenmai/update.php");
	}
	if($ac=="add_kmsp"){
		include("modules/khuyenmai/add_kmsp.php");
	}
	if($ac=="search"){
		include("modules/khuyenmai/search.php");
	}
?>