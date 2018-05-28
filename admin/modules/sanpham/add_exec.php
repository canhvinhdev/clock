
<?php
	if(isset($_POST['them_sp'])){
	$thumbnail = '';
	if (isset($_FILES['thumbnail'])){
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
	//echo $thumbnail;exit();
	//end upload file
	//get input
	$ten_sp = isset($_REQUEST["ten_sp"]) ? $_REQUEST["ten_sp"] : '';
	$dong_sp = isset($_REQUEST["dong_sp"]) ? $_REQUEST["dong_sp"] : "";
	$id_dm = isset($_REQUEST["id_dm"]) ? $_REQUEST["id_dm"]  * 1 : 0;
	$id_th = isset($_REQUEST["id_th"]) ? $_REQUEST["id_th"]  * 1 : 0;
	$mau_sac = isset($_REQUEST["mau_sac"]) ? $_REQUEST["mau_sac"] : "";
	$anh_sp = $thumbnail;
	
	$gia_sp = isset($_REQUEST["gia_sp"]) ? $_REQUEST["gia_sp"] * 1 : 0;
	
	$so_luong = isset($_REQUEST["so_luong"]) ? $_REQUEST["so_luong"]  * 1 : 0;
	$do_chiu_nuoc = isset($_REQUEST["do_chiu_nuoc"]) ? $_REQUEST["do_chiu_nuoc"]  * 1 : 0;
	$kieu_dang = isset($_REQUEST["kieu_dang"]) ? $_REQUEST["kieu_dang"]  * 1 : 0;
	$duong_kinh = isset($_REQUEST["duong_kinh"]) ? $_REQUEST["duong_kinh"]  * 1 : 0;
	$mat_kinh = isset($_REQUEST["mat_kinh"]) ? $_REQUEST["mat_kinh"] : '';
	$do_day = isset($_REQUEST["do_day"]) ? $_REQUEST["do_day"]  * 1 : 0;
	$xuat_xu = isset($_REQUEST["xuat_xu"]) ? $_REQUEST["xuat_xu"] : '';
	$may = isset($_REQUEST["may"]) ? $_REQUEST["may"] : '';
	$chat_lieu_vo = isset($_REQUEST["chat_lieu_vo"]) ? $_REQUEST["chat_lieu_vo"] : '';
	$chat_lieu_day = isset($_REQUEST["chat_lieu_day"]) ? $_REQUEST["chat_lieu_day"] : '';
	$status = isset($_REQUEST["status"]) ? $_REQUEST["status"]  * 1 : 0;
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
	
	




	//thực thi sql
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
		if ($ten_sp){
			//Tạo sql
			$sql = "insert into sanpham";
			$sql .= " (id_th,id_dm,ma_sp,ten_sp,mau_sac,anh_sp,gia_sp,so_luong,xuat_xu,dong_sp,kieu_dang,duong_kinh,mat_kinh,do_day,chat_lieu_vo,chat_lieu_day,may,do_chiu_nuoc,chuc_nang,mota_sp,status)";
			$sql .= " values ";
			$sql .= "('" . sql_str($id_th) . "',";
			$sql .= "'" . sql_str($id_dm) . "',";
			$sql .= "n'" . sql_str($ma_sp) . "',";
			$sql .= "n'" . sql_str($ten_sp) . "',";
			$sql .= "n'" . sql_str($mau_sac) . "',";
		    $sql .= "'" . sql_str($anh_sp) . "',";
		    $sql .= "'" . sql_str($gia_sp) . "',";
			$sql .= "'" . sql_str($so_luong) . "',";
			$sql .= "n'" . sql_str($xuat_xu) . "',";
			$sql .= "n'" . sql_str($dong_sp) . "',";
			$sql .= "'" . sql_str($kieu_dang) . "',";
			$sql .= "'" . sql_str($duong_kinh) . "',";
			$sql .= "'" . sql_str($mat_kinh) . "',";
			$sql .= "'" . sql_str($do_day) . "',";
			$sql .= "n'" . sql_str($chat_lieu_vo) . "',";
			$sql .= "n'" . sql_str($chat_lieu_day) . "',";
			$sql .= "n'" . sql_str($may) . "',";
			$sql .= "'" . sql_str($do_chiu_nuoc) . "',";
			$sql .= "n'" . sql_str($chuc_nang) . "',";
			$sql .= "n'" . sql_str($mota_sp) . "',";
			$sql .= "'" . sql_str($status) . "')";
			$result = exec_update($sql);
			$sql1="SELECT * FROM sanpham where  id=(select max(id) from sanpham)";
			$types=select_one($sql1);
	
			foreach($_POST['tl'] as $tl )
			{
			   $sqlTL="insert into theloai_sanpham values (0,{$types['id']},{$tl})";
			   $result = exec_update($sqlTL);
			}  

		}
		if ($result) {?>
			<script language="javascript">alert("Bạn đã thêm thành công sản phẩm");window.location="index.php?quanly=sanpham&ac=lietke";
			</script>';
		<?php }else {?>
		}
	<?php } } }?>