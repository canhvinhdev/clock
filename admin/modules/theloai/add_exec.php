<?php

	$ten_tl = isset($_REQUEST["ten_tl"]) ? $_REQUEST["ten_tl"] : '';
	$status = isset($_REQUEST["status"]) ? $_REQUEST["status"] * 1 : 0;

	//Tạo sql
	$sql = "insert into theloai";
	$sql .= " (ten_theloai,status)";
	$sql .= " values ";
	$sql .= "(n'" . sql_str($ten_tl) . "',";
	$sql .= "'" . sql_str($status) . "')";

	//thực thi sql
	$result = 0;
	$err=array();
	$ten_tl = trim($ten_tl);

	if($ten_tl==""){
		$err['tl']='Bạn không được để trống. Mời bạn kiểm tra lại';
	}
	if($ten_tl!=''){
            $sql_check="select * from theloai";
            $rs=select_list($sql_check);
            foreach ($rs as $key) {
                if($key['ten_theloai']==$ten_tl)
                {
                	$err['tl']="Tên thể loại đã tồn tại, mời thử lại!";    
                }
            }
    }
    if (count($err)==0) {
		if ($ten_tl){
			$result = exec_update($sql);
		}
		if ($result) {?>
			<script language="javascript">alert("Bạn đã thêm thành công thể loại");window.location="index.php?quanly=theloai&ac=lietke";
			</script>';
		<?php }else {?>
		}
	<?php } }?>

