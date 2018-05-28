<?php
	//include '../../lib_db.php';
//	include '../header_ad1.php';

//exec
	if($_REQUEST){
		$id = isset($_REQUEST['id']) ? $_REQUEST['id'] * 1 : 0;
		if($id < 1) return;
			$sql1 = "delete from donhangchitiet where id_dh= {$id}";
			$data1 = exec_update($sql1);
			$sql = "delete from donhang where id= {$id}";
			$data = exec_update($sql);
			$error = "";
			if($data != 1 or $data1 != 1){
				$error = "Không thể xoá được.";
			}		
	}
 echo '<script language="javascript">window.location="index.php?quanly=donhang&ac=lietke";</script>';?>
