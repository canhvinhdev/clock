<?php
	
	if($_REQUEST)
	{
	$data['ten_dm'] = isset($_REQUEST["ten_dm"]) ? $_REQUEST["ten_dm"] : '';

	$data['parent_id'] = isset($_REQUEST["parent_id"]) ? $_REQUEST["parent_id"] * 1 : 0;

	$data['status'] = isset($_REQUEST["status"]) ? $_REQUEST["status"] * 1 : 0;


	$result = 0;
	$err=array();
	$data['ten_dm'] = trim($data['ten_dm']);

	if(empty($data['ten_dm'])){
		$err['ten_dm']='Bạn không được để trống. Mời bạn kiểm tra lại';
	}
	if($data['ten_dm']){
            $sql_check="select * from danhmuc";
            $rs=select_list($sql_check);
            foreach ($rs as $key) {
                if($key['ten_dm']==$data['ten_dm'])
                {
                	$err['ten_dm']="Tên danh mục đã tồn tại, mời thử lại!";    
                }
            }
    }
    if (count($err)==0) {
		$sql=data_to_sql_insert("danhmuc",$data);
				//them 1 cau $sql nua
				//print_r($sql);exit();
				 $result=exec_update($sql);
		if ($result) {?>
			<script language="javascript">alert("Bạn đã thêm thành công danh mục");window.location="index.php?quanly=danhmuc&ac=lietke";
			</script>';
		<?php }else {?>
		}
	<?php } } } ?>

