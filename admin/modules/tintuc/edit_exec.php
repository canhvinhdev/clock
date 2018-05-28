<?php
	//buoc 1 ko co
	//buoc 2
	$id = isset($_REQUEST["id"]) ? $_REQUEST["id"] * 1 : 0; 

	$sql = "select * from tintuc where id= ".$id ;
	$data = select_one($sql);

	if (isset($_POST['update'])) {
		if($_REQUEST){
			$thumbnail = '';
			if ($_FILES['thumbnail']['name']!=""){
				$fitem = $_FILES['thumbnail'];	
				$filename = pathinfo($fitem['name'],PATHINFO_FILENAME);
				$ext = pathinfo($fitem['name'],PATHINFO_EXTENSION);
				$extra = time();
				$toFile = "upload/{$filename}-{$extra}.{$ext}";	

				$name = "upload/{$filename}-{$extra}.{$ext}";	
				if (move_uploaded_file($fitem['tmp_name'],$toFile)){
					//echo $toFile; exit();
					//$thumbnail = $toFile;	
					$thumbnail = $name;
				}
			}
			else{
				$thumbnail= isset($_REQUEST["thumbnail"]) ? $_REQUEST["thumbnail"]  : "";
			}
			
			$tieude_tt = isset($_REQUEST["tieude_tt"]) ? $_REQUEST["tieude_tt"] : '';
			$tomtat_tt = isset($_REQUEST["tomtat_tt"]) ? $_REQUEST["tomtat_tt"] : '';
			$anh_tt = $thumbnail;
			$noidung_tt = isset($_REQUEST["noidung_tt"]) ? $_REQUEST["noidung_tt"] : '';
			$status = isset($_REQUEST["status"]) ? $_REQUEST["status"] * 1 : 0; 


			$result = 0;
			$err=array();
			$tieude_tt = trim($tieude_tt);
			$tomtat_tt = trim($tomtat_tt);
			$noidung_tt = trim($noidung_tt);
			

			if(empty($tieude_tt)){
				$err['tieude_tt']='Bạn không được để trống. Mời bạn kiểm tra lại';
			}
			if(empty($tomtat_tt)){
				$err['tomtat_tt']='Bạn không được để trống. Mời bạn kiểm tra lại';
			}
			if(empty($noidung_tt)){
				$err['noidung_tt']='Bạn không được để trống. Mời bạn kiểm tra lại';
			}
			if($tieude_tt!=''){
		            $sql_check="select * from tintuc";
		            $rs=select_list($sql_check);
		            foreach ($rs as $key) {
		                if($key['tieude_tt']==$tieude_tt && $key['id']!=$id)
		                {
		                	$err['tieude_tt']="Tiêu đề đã tồn tại, mời thử lại!";    
		                }
		            }
		    }
			if (count($err)==0) {
			$sql="UPDATE tintuc set tieude_tt='{$tieude_tt}',tomtat_tt='{$tomtat_tt}',anh_tt='{$anh_tt}', status='{$status}' where id={$id}";
			//echo $sql;exit();
					//them 1 cau $sql nua
					//print_r($sql);exit();
			$result=exec_update($sql);
			if ($result) {?>
				<script language="javascript">alert("Bạn đã cập nhật thành công tin tức");window.location="index.php?quanly=tintuc&ac=lietke";
				</script>';
			<?php }else {?>
			}
	<?php } } } } ?>