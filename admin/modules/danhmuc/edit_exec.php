<?php

	$id = isset($_REQUEST["id"]) ? $_REQUEST["id"] * 1 : 0;
	$data['ten_dm'] = isset($_REQUEST["ten_dm"]) ? $_REQUEST["ten_dm"] : '';
	
	$data['parent_id'] = isset($_REQUEST["parent_id"]) ? $_REQUEST["parent_id"] * 1 : 0;
	$data['status'] = isset($_REQUEST["status"]) ? $_REQUEST["status"] * 1 : 0;
	

//thực thi sql
	$result = 0;
	$err=array();
	$ten_dm = trim($data['ten_dm']);

	if($ten_dm==""){
		$err['ten_dm']='Bạn không được để trống. Mời bạn kiểm tra lại';
	}
	if($ten_dm){
            $sql_check="SELECT * from danhmuc";
            //echo $sql_check;exit();
            $rs=select_list($sql_check);
            foreach ($rs as $key) {
                if($key['ten_dm']==$data['ten_dm'] && $key['id']!=$id)
                {
                	$err['ten_dm']="Tên danh mục đã tồn tại, mời thử lại!";    
                }
            }
    }
    if (count($err)==0) {
		if ($ten_dm){
			$sql = data_to_sql_update("danhmuc",$data);
			//echo $sql;exit();
			$sql .= " WHERE id =$id" ;
			$result = exec_update($sql);
		}
		if ($result) {?>
			<script language="javascript">alert("Bạn đã sửa thành công danh mục");window.location="index.php?quanly=danhmuc&ac=lietke";
			</script>';
		<?php }else {?>
		}
	<?php } }?>
