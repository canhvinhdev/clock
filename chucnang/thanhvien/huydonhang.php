<?php
  if(isset($_SESSION["thanhvien"])){
    $id = isset($_REQUEST["id"]) ? $_REQUEST["id"]*1 : 0;
    $a=$_SESSION["thanhvien"];

    $sql1="delete from donhangchitiet where id_dh= {$id}";
    $data1 = exec_update($sql1);

    $sql2="delete from donhang where id= {$id}";
    $data1 = exec_update($sql2);

    if($data != 1 or $data1 != 1){
		$error = "Không thể xoá được.";
	}	
  }
   echo '<script language="javascript">window.location="index.php?page_layout=lichsumuahang";</script>';
?>