<?php

	$tendangnhap = isset($_REQUEST["tendangnhap"]) ? $_REQUEST["tendangnhap"] : '';
	$matkhau = isset($_REQUEST["matkhau"]) ? $_REQUEST["matkhau"] : '';
	$tendaydu = isset($_REQUEST["tendaydu"]) ? $_REQUEST["tendaydu"]: '';
	$diachi = isset($_REQUEST["diachi"]) ? $_REQUEST["diachi"] : '';
	$homthu = isset($_REQUEST["homthu"]) ? $_REQUEST["homthu"] : '';
	$ngaysinh = isset($_REQUEST["ngaysinh"]) ? $_REQUEST["ngaysinh"]: '';
    $gioitinh = isset($_REQUEST["gioitinh"]) ? $_REQUEST["gioitinh"]: '';
	$sodienthoai = isset($_REQUEST["sodienthoai"]) ? $_REQUEST["sodienthoai"] * 1 : 0;
	$trangthai = 1;
	$phanquyen = "admin";
	
	//Tạo sql
	$sql = "insert into nguoisudung";
	$sql .= " (tendangnhap,matkhau,tendaydu,ngaysinh,gioitinh,diachi,homthu,sodienthoai,trangthai,phanquyen)";
	$sql .= " values ";
	$sql .= "(n'" . sql_str($tendangnhap) . "',";
	$sql .= "n'" . sql_str(md5($matkhau)) . "',";
	$sql .= "n'" . sql_str($tendaydu) . "',";
	$sql .= "n'" . sql_str($ngaysinh) . "',";
	$sql .= "n'" . sql_str($gioitinh) . "',";
	$sql .= "n'" . sql_str($diachi) . "',";
	$sql .= "n'" . sql_str($homthu) . "',";
    $sql .= "'" . sql_str($sodienthoai) . "',";
    $sql .= "'" . sql_str($trangthai) . "',";
    $sql .= "n'" . sql_str($phanquyen) . "')";
    $result = 0;
	$err=array();
        
        $tendangnhap=trim($tendangnhap);
        $matkhau=trim($matkhau);
        
        if( $gioitinh=='' || $diachi=='' || $matkhau=='' || $homthu==''||$ngaysinh=='' || $sodienthoai=='' || $tendaydu=='' || $tendangnhap=='')
        {
            $err[]="Vui lòng nhập đầy đủ thông tin.";
        }
        if(strlen($matkhau)<6)
        {
            $err[]="Mật khẩu phải từ 6 ký tự.";
        }
        //Kiểm tra dạng nhập vào của ngày sinh
        if (!ereg("^[0-9]+/[0-9]+/[0-9]{2,4}", $ngaysinh))
        {
            $err[]="Ngày tháng năm sinh không hợp lệ. Vui long nhập lại.";
        }
        //Kiểm tra email có đúng định dạng hay không
        if (!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$", $homthu))
        {
            $err[]="Email này không hợp lệ. Vui lòng nhập email khác.";
        }
       /* if (!eregi("^\(?[\d]{3}\)?-\(?[\d]{2}\)?-[\d]{2}\.[\d]{3}-[\d]{3}$", $sodienthoai))
        {
            $err[]="Số điện thoại này không hợp lệ. Vui long nhập số điện thoại khác khác.";
        }*/
        //echo $checkmail;exit();
        if($tendangnhap!=''){
            $sql_check="select * from nguoisudung";
            $result=select_list($sql_check);
            foreach ($result as $key) {
                if($key['tendangnhap']==$tendangnhap)
                {
                     $err[]="Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác.";
                }
                if($key['homthu']==$homthu)
                {
                     $err[]="Email này đã có người đăng ký. Vui lòng chọn email  khác.";
                }
            }

        }
        if (count($err)==0) {
		if ($tendangnhap){
			$result = exec_update($sql);
		}
		if ($result) {?>
			<script language="javascript">alert("Bạn tạo thành công tài khoản admin");window.location="index.php?quanly=nguoisudung&ac=lietke";
			</script>';
		<?php }else {?>
		}
	<?php } }?>