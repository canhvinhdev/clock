<?php
	if($_REQUEST){
		$id = isset($_REQUEST['id']) ? $_REQUEST['id'] * 1 : 0;
		if($id < 1) return;
			$sql = "delete from nguoisudung where id= {$id}";
			$data = exec_update($sql);
			$error = "";
			if($data != 1){
				$error = "Không thể xoá được.";
			}		
	}
 echo '<script language="javascript">alert("Bạn đã xóa thành công admin");window.location="index.php?quanly=nguoisudung&ac=lietke";</script>';?>
