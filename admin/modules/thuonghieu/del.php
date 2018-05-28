<?php
	//include '../../lib_db.php';
//	include '../header_ad1.php';

//exec
	if($_REQUEST){
		$id = isset($_REQUEST['id']) ? $_REQUEST['id'] * 1 : 0;
		if($id < 1) return;
			$sql = "delete from thuonghieu where id= {$id}";
			$data = exec_update($sql);
			$error = "";
			if($data != 1){
				$error = "Không thể xoá được.";
			}		
	}
 echo '<script language="javascript">alert("Bạn đã xóa thành công thương hiệu ");window.location="index.php?quanly=thuonghieu&ac=lietke";</script>';?>
