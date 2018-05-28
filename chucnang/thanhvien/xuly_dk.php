<?php
   
    if($_POST){
        $partten = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})+$/";
        $partten_birth = "/^[0-9]+/[0-9]+/[0-9]{2,4}+$";        //$data['email'] = isset($_REQUEST["email"]) ? $_REQUEST["email"] : "";
        $tendangnhap = isset($_REQUEST["tendangnhap"]) ? $_REQUEST["tendangnhap"] : '';
        $matkhau = isset($_REQUEST["matkhau"]) ? $_REQUEST["matkhau"] : '';
        $re_matkhau = isset($_REQUEST["re_matkhau"]) ? $_REQUEST["re_matkhau"] : "";
        $tendaydu = isset($_REQUEST["tendaydu"]) ? $_REQUEST["tendaydu"]: '';
        $ngaysinh = isset($_REQUEST["ngaysinh"]) ? $_REQUEST["ngaysinh"]: '';
        $gioitinh = isset($_REQUEST["gioitinh"]) ? $_REQUEST["gioitinh"]: '';
        $diachi = isset($_REQUEST["diachi"]) ? $_REQUEST["diachi"] : '';
        $homthu = isset($_REQUEST["homthu"]) ? $_REQUEST["homthu"] : '';
        $gioitinh=isset($_REQUEST["gioitinh"]) ? $_REQUEST["gioitinh"] : '';
        $sodienthoai = isset($_REQUEST["sodienthoai"]) ? $_REQUEST["sodienthoai"] * 1 : 0;
        $phanquyen="member";
        $trangthai=1;
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

        $err=array();
        
        $tendangnhap=trim($tendangnhap);
        $tendaydu=trim($tendaydu);
        $matkhau=trim($matkhau);
        $homthu=trim($homthu);
        
        if($tendangnhap=='')
        {
            $err['a']="Vui lòng nhập đầy đủ thông tin.";
        }
        if($tendaydu=='')
        {
            $err['tdd']="Vui lòng nhập họ và tên của bạn";
        }
        if($diachi=='')
        {
            $err['dc']="Vui lòng nhập địa chỉ của bạn";
        }
        if($sodienthoai=='')
        {
            $err['sdt']="Vui lòng nhập số điện thoại của bạn";
        }
        //Kiểm tra email có đúng định dạng hay không
        if (!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$", $homthu))
        {
            $err['b']="Email này không hợp lệ. Vui long nhập email khác.";
        }
        if($tendangnhap!=''){
            $sql_check="select * from nguoisudung where phanquyen='member'";
            $result=select_list($sql_check);
            foreach ($result as $key) {
                if($key['tendangnhap']==$tendangnhap)
                {
                     $err['a']="Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác.";
                }
                if($key['homthu']==$homthu)
                {
                     $err['b']="Email này đã có người đăng ký. Vui lòng chọn email  khác.";
                }
            }

        }
        if($matkhau!=$re_matkhau)
        {
            $err['mk1']="Mật khẩu không trùng khớp. Mời bạn kiểm tra lại.";
        }
        if(strlen($matkhau)<6)
        {
            $err['mk']="Mật khẩu phải từ 6 ký tự.";
        }
        //Kiểm tra dạng nhập vào của ngày sinh
        if (!ereg("^[0-9]+/[0-9]+/[0-9]{2,4}", $ngaysinh))
        {
            $err[]="Ngày tháng năm sinh không hợp lệ. Vui long nhập lại.";
        }
        
       /* if (!eregi("^\(?[\d]{3}\)?-\(?[\d]{2}\)?-[\d]{2}\.[\d]{3}-[\d]{3}$", $sodienthoai))
        {
            $err[]="Số điện thoại này không hợp lệ. Vui long nhập số điện thoại khác khác.";
        }*/
        //echo $checkmail;exit();
        
        if (count($err)==0) {
            
            $result_kh=exec_update($sql);
            ?>

            <script language="javascript">alert("Bạn đã đăng ký thành công");window.location="../donghoo/index.php?page_layout=dangnhap";
            </script>';
            <?php
        }
        
}
?> 