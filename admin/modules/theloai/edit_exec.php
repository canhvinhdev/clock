<?php

	$id = isset($_REQUEST["id"]) ? $_REQUEST["id"] * 1 : 0;
	$ten_tl = isset($_REQUEST["ten_tl"]) ? $_REQUEST["ten_tl"] : '';
	$status = isset($_REQUEST["status"]) ? $_REQUEST["status"] * 1 : 0;

	$sql="update theloai set ten_theloai='{$ten_tl}',status='{$status}' where id={$id}";

//thực thi sql
	$result = 0;
	$err=array();
	$ten_tl = trim($ten_tl);

	if($ten_tl==""){
		$err[]='Bạn không được để trống. Mời bạn kiểm tra lại';
	}
    if (count($err)==0) {
		if ($ten_tl){
			$result = exec_update($sql);
		}
		if ($result) {?>
			<script language="javascript">alert("Bạn đã sửa thành công thể loại");window.location="index.php?quanly=theloai&ac=lietke";
			</script>';
		<?php }else {?>
		}
	<?php } }?>