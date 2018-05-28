<?php
	if($_REQUEST){
		$id = isset($_REQUEST['id']) ? $_REQUEST['id'] * 1 : 0;
		if($id < 1) return;
			$sql1 = "delete from theloai_sanpham where id_sp= {$id}";
			$data1 = exec_update($sql1);
			$sql2 = "delete from donhangchitiet where id_sp= {$id}";
			$data2 = exec_update($sql2);
			$sql3 = "delete from sp_km where id_sp= {$id}";
			$data3 = exec_update($sql3);
			$sql = "delete from sanpham where id= {$id}";
			$data = exec_update($sql);
			$error = "";
			if($data != 1){
				$error = "Không thể xoá được.";
			}		
	}
 echo '<script language="javascript">alert("Bạn đã xóa thành công sản phẩm");window.location="index.php?quanly=sanpham&ac=lietke";</script>';?>
