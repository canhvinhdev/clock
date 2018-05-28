<?php

	$id = isset($_REQUEST["id"]) ? $_REQUEST["id"] * 1 : 0;
	$tinhtrang_dh = isset($_REQUEST["tinhtrang_dh"]) ? $_REQUEST["tinhtrang_dh"] * 1 : 0;

	$sql="update donhang set tinhtrang_dh='{$tinhtrang_dh}' where id={$id}";

//thực thi sql
	$result = 0;

		if ($tinhtrang_dh){
			$result = exec_update($sql);
		}
		if ($result) {?>
			<script language="javascript">alert("Bạn đã sửa thành công danh mục");window.location="index.php?quanly=donhang&ac=lietke";
			</script>';
		
	<?php }?>