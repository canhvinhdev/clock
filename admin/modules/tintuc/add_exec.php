<?php
if($_REQUEST)
	{
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
	$data['tieude_tt'] = isset($_REQUEST["tieude_tt"]) ? $_REQUEST["tieude_tt"] : '';
	$data['tomtat_tt'] = isset($_REQUEST["tomtat_tt"]) ? $_REQUEST["tomtat_tt"] : '';
	$data['anh_tt'] = $thumbnail;
	$data['noidung_tt'] = isset($_REQUEST["noidung_tt"]) ? $_REQUEST["noidung_tt"] : '';
	$data['status'] = isset($_REQUEST["status"]) ? $_REQUEST["status" * 1 : 0; 


	$result = 0;
	$err=array();
	$data['tieude_tt'] = trim($data['tieude_tt']);
	$data['tomtat_tt'] = trim($data['tomtat_tt']);
	$data['noidung_tt'] = trim($data['noidung_tt']);

	if(empty($data['tieude_tt'])){
		$err['tieude_tt']='Bạn không được để trống. Mời bạn kiểm tra lại';
	}
	if(empty($data['tomtat_tt'])){
		$err['tomtat_tt']='Bạn không được để trống. Mời bạn kiểm tra lại';
	}
	if(empty($data['noidung_tt'])){
		$err['noidung_tt']='Bạn không được để trống. Mời bạn kiểm tra lại';
	}
	if($data['tieude_tt']){
            $sql_check="select * from tintuc";
            $rs=select_list($sql_check);
            foreach ($rs as $key) {
                if($key['tieude_tt']==$data['tieude_tt'])
                {
                	$err['tieude_tt']="Tên tiêu đề tin tức đã tồn tại, mời thử lại!";    
                }
            }
    }
    if (count($err)==0) {
		$sql=data_to_sql_insert("tintuc",$data);
				//them 1 cau $sql nua
				//print_r($sql);exit();
				 $result=exec_update($sql);
		if ($result) {?>
			<script language="javascript">alert("Bạn đã thêm thành công danh mục");window.location="index.php?quanly=tintuc&ac=lietke";
			</script>';
		<?php }else {?>
		}
	<?php } } } ?>
