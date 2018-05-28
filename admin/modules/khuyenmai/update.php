<?php
	
	$sqlpt = "select * from khuyenmai";
    //echo #sqlpt;exit();
    $datas = select_list($sqlpt);
    //print_r($datas);exit();    
    if($datas){
            foreach ($datas as $data){
            	$now=date("Y/m/d");
            	$now1=strtotime($now);
            	//echo $data['ngay_bd'];
			    $ngay_bd1=strtotime($data['ngay_bd']);
			    //echo $ngay_bd1;exit();
			    $ngay_kt1=strtotime($data['ngay_kt']); 
			    if($ngay_bd1<=$now1 && $ngay_kt1>=$now1){ 
			        $status=1;
			    }
			    if($ngay_kt1<$now1){
			    	$status=0;
			    }
			    if($ngay_bd1>$now1){
			        $status=2;
			    }

			    $sql="UPDATE khuyenmai set status='{$status}' where id=".$data['id'];

					$result = exec_update($sql);
			}
	 }
?>
<script language="javascript">window.location="index.php?quanly=khuyenmai&ac=lietke";
					</script>