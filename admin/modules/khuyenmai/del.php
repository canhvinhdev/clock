<?php
	if($_REQUEST){
		$id = isset($_REQUEST['id']) ? $_REQUEST['id'] * 1 : 0;
		if($id < 1) return;
			$sqlsp="delete from sp_km where id_km={$id}";
			$data1=exec_update($sqlsp);
			$sql = "delete from khuyenmai where id= {$id}";
			$data = exec_update($sql);
			$error = "";
			if($data != 1){
				$error = "Không thể xoá được.";
			}		
	}
 echo '<script language="javascript">alert("Bạn đã xóa thành công khuyến mãi");window.location="index.php?quanly=khuyenmai&ac=lietke";</script>';?>
