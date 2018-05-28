<?php
	$id = isset($_REQUEST["id"]) ? $_REQUEST["id"] * 1 : 0;
	//get input
	$tendangnhap = isset($_REQUEST["tendangnhap"]) ? $_REQUEST["tendangnhap"] : '';
	$matkhau = isset($_REQUEST["matkhau"]) ? $_REQUEST["matkhau"] : '';
	$tendaydu = isset($_REQUEST["tendaydu"]) ? $_REQUEST["tendaydu"] : '';
	$ngaysinh = isset($_REQUEST["ngaysinh"]) ? $_REQUEST["ngaysinh"] : '';
	$gioitinh = isset($_REQUEST["gioitinh"]) ? $_REQUEST["gioitinh"] : '';
	$tendaydu = isset($_REQUEST["tendaydu"]) ? $_REQUEST["tendaydu"] : '';
	$tendaydu = isset($_REQUEST["tendaydu"]) ? $_REQUEST["tendaydu"] : '';
	$diachi = isset($_REQUEST["diachi"]) ? $_REQUEST["diachi"]  : '';
	$homthu = isset($_REQUEST["homthu"]) ? $_REQUEST["homthu"] : '';
	$sodienthoai = isset($_REQUEST["sodienthoai"]) ? $_REQUEST["sodienthoai"] * 1 : 0;
	
	$sql="UPDATE nguoisudung set tendangnhap='{$tendangnhap}',matkhau='{$matkhau}',tendaydu='{$tendaydu}',ngaysinh='{$ngaysinh}',gioitinh='{$gioitinh}',diachi='{$diachi}',homthu='{$homthu}',sodienthoai='{$sodienthoai}' where id={$id}";

$result = 0;
	$err=array();
        
        $tendangnhap=trim($tendangnhap);
        $matkhau=trim($matkhau);
        
        if( $gioitinh=='' || $diachi=='' || $matkhau=='' || $homthu==''||$ngaysinh=='' || $sodienthoai=='' || $tendaydu=='' || $tendangnhap=='')
        {
            $err[]="Vui lòng nhập đầy đủ thông tin.";
        }
        if($tendangnhap){
            $sql_check="select * from nguoisudung";
            $rs=select_list($sql_check);
            foreach ($rs as $key) {
                if($key['tendangnhap']==$tendangnhap && $key['id']!=$id)
                {
                    $err['tendangnhap']="Tên người sử dụng đã tồn tại, mời thử lại!";    
                }
            }
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
        if (count($err)==0) {
		if ($tendangnhap){
			$result = exec_update($sql);
		}
		if ($result) {?>
			<script language="javascript">alert("Bạn tạo sửa thành công tài khoản");window.location="index.php?quanly=nguoisudung&ac=lietke";
			</script>';
		<?php }else {?>
		}
	<?php } }?>