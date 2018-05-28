<?php
	$id = isset($_REQUEST["id"]) ? $_REQUEST["id"]*1 : 0;

	
	
	if(isset($_SESSION['thanhvien'])){

		$a=$_SESSION['thanhvien'];
		//echo $a; exit();
		$sql1="SELECT * FROM nguoisudung WHERE tendangnhap='$a'";
		//echo $sql1;exit();
		$row1=select_one($sql1);
		//print_r($row1);exit();
		$id_nsd=$row1['id'];
		$sqlPro = "select * from sanphamyt where id_nsd=$id_nsd and id_sp=$id";
		//echo $sqlPro; exit();
		$data = select_one($sqlPro);
		//print_r($data);exit(); 
		//echo $data['id_nsd'];
		//echo $data['id_sp'];exit();
		$id_sp=$data['id_sp'];
		if($data['status']==1){
			$status=0;
		}else{
			$status=1;
		}
		//echo $status;exit();
		$sql_check="select * from sanphamyt";
		//echo $sql_check;exit()
	    $rs=select_list($sql_check);
        foreach ($rs as $key) {
            if($data['id_nsd']==$key['id_nsd']&&$data['id_sp']==$key['id_sp'])
            {
            	$sql="update sanphamyt set status={$status} where id_sp={$id} and id_nsd=$id_nsd";  
            	//echo $sql;exit();
            	$result = exec_update($sql);
            	if ($result) {?>
					<script language="javascript">window.location="index.php";
					</script>;
				
			<?php }
            }
        }
        if(empty($id_sp)){
			

			$sql = "insert into sanphamyt";
					$sql .= " (id_sp,id_nsd,status)";
					$sql .= " values ";
					$sql .= "('" . sql_str($id) . "',";
					$sql .= "'" . sql_str($id_nsd) . "',";
					$sql .= "'" . sql_str($status) . "')";
					//echo $sql;exit();
			$result1 = exec_update($sql); 
			if ($result1) {?>
					<script language="javascript">window.location="index.php";
					</script>;
				
			<?php }
		}
	} else{?>
			<script language="javascript">window.alert('Đăng nhập để thích sản phẩm.');window.location="index.php?page_layout=dangnhap";
					</script>;<?php
		}

?>