<?php

	$id = isset($_REQUEST["id"]) ? $_REQUEST["id"] * 1 : 0;
	$sql = "select * from theloai where id= ".$id ;
  	$data = select_one($sql); //echo $data['status'];exit();
	if($data['status']==1){
		$status=0;
		
	}else{
	$status=1;}
//echo $status; exit();
	$sql="update theloai set status='{$status}' where id={$id}";

//thực thi sql
	$result = 0;

		if ($status>=0){
			$result = exec_update($sql);
		}
		if ($result) {?>
			<script language="javascript">window.location="index.php?quanly=theloai&ac=lietke";
			</script>';
		
	<?php }?>