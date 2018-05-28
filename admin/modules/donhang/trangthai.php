<?php

	$id = isset($_REQUEST["id"]) ? $_REQUEST["id"] * 1 : 0;
	$sql = "select * from donhang where id= ".$id ;
  	$data = select_one($sql); //echo $data['tinhtrang_dh'];exit();
	if($data['tinhtrang_dh']=='Chưa chuyển hàng'){
		$status="Đã chuyển hàng";
	}else{
	$status="Chưa chuyển hàng";}
//echo $status; exit();
	$sql="update donhang set tinhtrang_dh='{$status}' where id={$id}";

//thực thi sql
	$result = 0;

		if ($status){
			$result = exec_update($sql);
		}
		if ($result) {?>
			<script language="javascript">window.location="index.php?quanly=donhang&ac=lietke";
			</script>';
		
	<?php }?>