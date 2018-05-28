<?php

	$id = isset($_REQUEST["id"]) ? $_REQUEST["id"] * 1 : 0;
	$data['ten_th'] = isset($_REQUEST["ten_th"]) ? $_REQUEST["ten_th"] : '';
	$data['status'] = isset($_REQUEST["status"]) ? $_REQUEST["status"] * 1 : 0;
	

	

//thực thi sql
	$result = 0;
	$err=array();
	$ten_th = trim($data['ten_th']);

	if($ten_th==""){
		$err['ten_th']='Bạn không được để trống. Mời bạn kiểm tra lại';
	}
	if($ten_th){
            $sql_check="SELECT * from thuonghieu";
            //echo $sql_check;exit();
            $rs=select_list($sql_check);
            foreach ($rs as $key) {
                if($key['ten_th']==$data['ten_th'] && $key['id']!=$id)
                {
                	$err['ten_th']="Tên thương hiệu đã tồn tại, mời thử lại!";    
                }
            }
    }
    if (count($err)==0) {
		if ($ten_th){
			$sql = data_to_sql_update("thuonghieu",$data);
			$sql .= " WHERE id =$id" ;
			$result = exec_update($sql);
		}
		if ($result) {?>
			<script language="javascript">alert("Bạn đã sửa thành công thương hiệu");window.location="index.php?quanly=thuonghieu&ac=lietke";
			</script>';
		<?php }else {?>
		}
	<?php } }?>
