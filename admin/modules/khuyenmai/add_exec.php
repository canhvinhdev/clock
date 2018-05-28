<?php
if($_REQUEST){
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
	$ten_km = isset($_REQUEST["ten_km"]) ? $_REQUEST["ten_km"] : '';
	$ngay_bd = isset($_REQUEST["ngay_bd"]) ? $_REQUEST["ngay_bd"] : '';
	$ngay_kt = isset($_REQUEST["ngay_kt"]) ? $_REQUEST["ngay_kt"] : '';
	$anh_km = $thumbnail;
	$now=date("Y/m/d");
    //echo $now;exit();
    $now1=strtotime($now);
    $ngay_bd1=strtotime($ngay_bd);
    $ngay_kt1=strtotime($ngay_kt); 
    if($ngay_bd1<=$now1 && $ngay_kt1>=$now1){ 
        $status=1;
    }
    if($ngay_bd1>$now1){
        $status=2;
    }

	$result = 0;
	$err=array();
	$ten_km = trim($ten_km);

	if($ten_km==''){
		$err['ten_km']='Bạn không được để trống. Mời bạn kiểm tra lại';
	}
	if($ten_km){
            $sql_check="select * from khuyenmai";
            $rs=select_list($sql_check);
            foreach ($rs as $key) {
            	//Nếu trong cùng 1 thời gian khuyến mãi không thể có 2 khuyến mãi tên trùng nhau
                if($ngay_bd1<=$now1 && $ngay_kt1>=$now1 && $key['ten_km']==$ten_km)
                {
                	$err['ten_km']="Tên khuyến mãi đã tồn tại, mời thử lại!";    
                }
            }
    }
    if($ngay_bd1<$now1){
                	$err['nbd']="Ngày bắt đầu lớn hơn hoặc bằng ngày hiện tại!"; 
    }
    if($ngay_kt1<=$ngay_bd1){
                	$err['nkt']="Ngày kết thúc phải lớn hơn ngày bắt đầu và ngày hiện tại!"; 
    }
    if (count($err)==0) {
					//Tạo sql
			$sql = "insert into khuyenmai";
			$sql .= " (ten_km,anh_km,ngay_bd,ngay_kt,status)";
			$sql .= " values ";
			$sql .= "(n'" . sql_str($ten_km) . "',";
			$sql .= "n'" . sql_str($anh_km) . "',";
			$sql .= "'" . sql_str($ngay_bd) . "',";
			$sql .= "'" . sql_str($ngay_kt) . "',";
			$sql .= "'" . sql_str($status) . "')";
				 $result=exec_update($sql);
		if ($result) {?>
			<script language="javascript">alert("Bạn đã thêm thành công khuyến mãi");window.location="index.php?quanly=khuyenmai&ac=lietke";
			</script>';
		<?php }else {?>
		}
	<?php } } } ?>

