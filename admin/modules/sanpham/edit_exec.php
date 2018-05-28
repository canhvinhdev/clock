<?php
	$id = isset($_REQUEST["id"]) ? $_REQUEST["id"] * 1 : 0; 
	
	$sql = "select * from danhmuc";
	$datas = select_list($sql);

	$sql = "select * from thuonghieu";
	$data_th = select_list($sql);

	$sql = "select * from sanpham where id= ".$id ;
	$data = select_one($sql);//var_dump($data);

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
			
			$ten_sp = isset($_REQUEST["ten_sp"]) ? $_REQUEST["ten_sp"] : '';
			$dong_sp = isset($_REQUEST["dong_sp"]) ? $_REQUEST["dong_sp"] : "";
			$id_dm = isset($_REQUEST["id_dm"]) ? $_REQUEST["id_dm"]  * 1 : 0;
			$id_th = isset($_REQUEST["id_th"]) ? $_REQUEST["id_th"]  * 1 : 0;
			$mau_sac = isset($_REQUEST["mau_sac"]) ? $_REQUEST["mau_sac"]  * 1 : 0;
			$anh_sp = $thumbnail;

			$gia_sp = isset($_REQUEST["gia_sp"]) ? $_REQUEST["gia_sp"] * 1 : 0;
			$mat_kinh = isset($_REQUEST["mat_kinh"]) ? $_REQUEST["mat_kinh"] : '';
			$so_luong = isset($_REQUEST["so_luong"]) ? $_REQUEST["so_luong"]  * 1 : 0;
			$kieu_dang = isset($_REQUEST["kieu_dang"]) ? $_REQUEST["kieu_dang"]  * 1 : 0;
			$chat_lieu_vo = isset($_REQUEST["chat_lieu_vo"]) ? $_REQUEST["chat_lieu_vo"] : '';
			$chat_lieu_day = isset($_REQUEST["chat_lieu_day"]) ? $_REQUEST["chat_lieu_day"] : '';
			$status = isset($_REQUEST["status"]) ? $_REQUEST["status"]  * 1 : 0;
			$duong_kinh = isset($_REQUEST["duong_kinh"]) ? $_REQUEST["duong_kinh"]  * 1 : 0;
			$do_chiu_nuoc = isset($_REQUEST["do_chiu_nuoc"]) ? $_REQUEST["do_chiu_nuoc"]  * 1 : 0;
			$do_day = isset($_REQUEST["do_day"]) ? $_REQUEST["do_day"]  * 1 : 0;
			$xuat_xu = isset($_REQUEST["xuat_xu"]) ? $_REQUEST["xuat_xu"] : '';
			$may = isset($_REQUEST["may"]) ? $_REQUEST["may"] : '';
			$chuc_nang = isset($_REQUEST["chuc_nang"]) ? $_REQUEST["chuc_nang"] : '';
			$mota_sp = isset($_REQUEST["mota_sp"]) ? $_REQUEST["mota_sp"] : "";
			$SQL_TH = "SELECT * FROM `thuonghieu` WHERE id  = ".$id_th;
			$id_th_new = select_one($SQL_TH);
			$str = substr($id_th_new['ten_th'], 0, 3);

			$sql_id_ma_sp = "SELECT * FROM `sanpham` ORDER BY id DESC Limit 1";
			$sql_ma_sp_new = select_one($sql_id_ma_sp);
			$kd=substr($sql_ma_sp_new['kieu_dang'],0,1);
			$ma_moi = $sql_ma_sp_new['id']+1;

			$ma_sp = $kd.'-'.'CLOCK'.''.$str.'-'.$ma_moi;

			$result = 0;
			$err=array();
			$ten_sp = trim($ten_sp);
			$dong_sp = trim($dong_sp);
			if(empty($ten_sp)){
				$err['err_name']='Bạn không được để trống. Mời bạn kiểm tra lại';
			}
			if(empty($dong_sp)){
				$err['dong_sp']='Bạn không được để trống. Mời bạn kiểm tra lại';
			}
			if($ten_sp!=''){
		            $sql_check="select * from sanpham";
		            $rs=select_list($sql_check);
		            foreach ($rs as $key) {
		                if($key['ten_sp']==$ten_sp && $key['id']!=$id)
		                {
		                	$err['err_name']="Sản phẩm đã tồn tại, mời thử lại!";    
		                }
		            }
		    }
			if (count($err)==0) {
			$sql="UPDATE sanpham set id_th='{$id_th}',id_dm='{$id_dm}',ma_sp='{$ma_sp}', ten_sp='{$ten_sp}',mau_sac='{$mau_sac}',anh_sp='{$anh_sp}',gia_sp='{$gia_sp}',so_luong='{$so_luong}',xuat_xu='{$xuat_xu}',dong_sp='{$dong_sp}',kieu_dang='{$kieu_dang}',duong_kinh='{$duong_kinh}',mat_kinh='{$mat_kinh}',do_day='{$do_day}',may='{$may}',chat_lieu_vo='{$chat_lieu_vo}',do_chiu_nuoc='{$do_chiu_nuoc}',chuc_nang='{$chuc_nang}',chat_lieu_day='{$chat_lieu_day}',mota_sp='{$mota_sp}',status='{$status}' where id={$id}";
			//echo $sql;exit();
					//them 1 cau $sql nua
					//print_r($sql);exit();
			$result=exec_update($sql);
			if ($result) {?>
				<script language="javascript">alert("Bạn đã cập nhật thành công sản phẩm");window.location="index.php?quanly=sanpham&ac=lietke";
				</script>';
			<?php }else {?>
			}
	<?php } } } } ?>

