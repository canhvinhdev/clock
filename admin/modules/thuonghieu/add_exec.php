<?php

	$data['ten_th'] = isset($_REQUEST["ten_th"]) ? $_REQUEST["ten_th"] : '';
	$data['status'] = isset($_REQUEST["status"]) ? $_REQUEST["status"] * 1 : 0;
	$result = 0;
	$err=array();
	$data['ten_th'] = trim($data['ten_th']);

	if(empty($data['ten_th'])){
		$err['ten_th']='Bạn không được để trống. Mời bạn kiểm tra lại';
	}
	if($data['ten_th']){
            $sql_check="select * from thuonghieu";
            $rs=select_list($sql_check);
            foreach ($rs as $key) {
                if($key['ten_th']==$data['ten_th'])
                {
                	$err['ten_th']="Tên danh mục đã tồn tại, mời thử lại!";    
                }
            }
    }
    if (count($err)==0) {
		$sql=data_to_sql_insert("thuonghieu",$data);
				//them 1 cau $sql nua
				//print_r($sql);exit();
				 $result=exec_update($sql);
		if ($result) {?>
			<script language="javascript">alert("Bạn đã thêm thành công thương hiệu");window.location="index.php?quanly=thuonghieu&ac=lietke";
			</script>';
		<?php }else {?>
		}
	<?php } }  ?>