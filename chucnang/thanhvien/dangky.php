<?php include"xuly_dk.php" ?>
 <!-- Start breadcume area -->
    <div class="breadcume-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="breadcrumb">
                        <a title="Return to Home" href="index.php" class="home"><i class="fa fa-home"></i></a>
                        <span class="navigation-pipe">&gt;</span>
                        Đăng ký
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- End breadcume area -->

<div class="product-item limit_swapper">
    
    <div class="container">

        <div class="new-customers" style="width: 40%;margin: 0 auto;">
            <h3 align="center" style="font-weight: bold;padding-bottom: 10px;color: #e44f4f;font-size: 24px;border-bottom: 2px solid #e44f4f;">ĐĂNG KÝ THÀNH VIÊN</h3>
        </div>
    
        <style>
            .register-custom label{
              width: 100%;
            }
            .register-custom input[type="text"],.register-custom input[type="email"],.register-custom input[type="password"],.register-custom input[type="number"]{
                width: 100%;
                margin-bottom: 10px;
                background: hsla(0, 2%, 8%, 0.07);
            }
            .register-custom .sex{
                height: 42px;
                 padding: 15px 0 40px 0;
            }
            .register-custom .sex input{
               margin-right: 5px;
            }
            .register-custom .sex .margin-sex{
               margin-left: 10px;
            }
        </style>
        <form method="post" class="register-custom" style="width: 80%;margin: 0 auto;padding-top: 20px;">
            <div class="row">
                <div class="col-md-6">
                    <label for="tendangnhap">Tên truy cập<span style="color:red">*</span></label>
                    <input type="text" name="tendangnhap" id="tendangnhap" required="required" value="<?php if($_POST)  echo $tendangnhap ?>">
                    <?php
                        if($_POST){
                            if($tendangnhap=="")
                            echo '<span style="color:red">'.$err['a']."<br/> </span>";
                            if($tendangnhap!=''){
                                $sql_check="select * from nguoisudung where phanquyen='member'";
                                $rs=select_list($sql_check);
                                foreach ($rs as $key) {
                                    if($key['tendangnhap']==$tendangnhap && $key['id']!=$id){ 
                                        echo '<span style="color:red">'.$err['a']."<br/> </span>";
                                    } 
                                } 
                            } 
                        }   
                    ?>
                </div>
                <div class="col-md-6">
                    <label for="tendaydu">Họ và tên</label>
                    <input type="text" name="tendaydu" id="tendaydu" required="required"  value="<?php if($_POST)  echo $tendaydu ?>">
                    <?php
                        if($_POST){
                            if($tendaydu=='')
                            echo '<span style="color:red">'.$err['tdd']."<br/> </span>";
                            
                        }   
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="matkhau">Mật khẩu<span style="color:red">*</span></label>
                    <input type="password" required="required" id="matkhau" name="matkhau" value="<?php if($_POST)  echo $matkhau ?>">
                    <?php
                        if($_POST){
                            if(strlen($matkhau)<6)
                            echo '<span style="color:red">'.$err['mk']."<br/> </span>";
                            
                        }   
                    ?>
                </div>
                <div class="col-md-6">
                    <label for="re_matkhau">Xác nhận mật khẩu<span style="color:red">*</span></label>
                    <input type="password" required="required" id="re_matkhau" name="re_matkhau" value="<?php if($_POST)  echo $re_matkhau ?>">
                     <?php
                        if($_POST){
                            if($matkhau!=$re_matkhau)
                            echo '<span style="color:red">'.$err['mk1']."<br/> </span>";
                            
                        }   
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="ngaysinh">Ngày sinh</label>
                    <input type="text" name="ngaysinh" id="ngaysinh" required="required"  size="50" value="<?php if($_POST)  echo $ngaysinh ?>"/>
                </div>
                <div class="col-md-6">
                    <label for="gioitinh">Giới tính</label>
                    <div class="sex">
                        <input type="radio" name="gioitinh" checked="checked" value="Nam">Nam
                        <input class="margin-sex" type="radio" name="gioitinh" value="Nữ">Nữ
                    </div>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="homthu">Email<span style="color:red">*</span></label>
                    <input type="email" name="homthu" id="homthu" required="required" value="<?php if($_POST)  echo $homthu ?>">
                    <?php
                        if($_POST){
                            if($homthu!=''){
                                $sql_check="select * from nguoisudung where phanquyen='member'";
                                $rs=select_list($sql_check);
                                foreach ($rs as $key) {
                                    if($key['homthu']==$homthu && $key['id']!=$id){ 
                                        echo '<span style="color:red">'.$err['b']."<br/> </span>";
                                    } 
                                } 
                            } 
                        }   
                    ?>
                </div>
                <div class="col-md-6">
                    <label for="sodienthoai">Số điện thoại</label>
                    <input type="number" name="sodienthoai" id="sodienthoai" required="required" value="<?php if($_POST)  echo $sodienthoai ?>">
                    <?php
                        if($_POST){
                            if($sodienthoai='')
                            echo '<span style="color:red">'.$err['sdt']."<br/> </span>";
                            
                        }   
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label for="diachi">Địa chỉ</label>
                    <input type="text" name="diachi" id="diachi" required="required" value="<?php if($_POST)  echo $diachi ?>">
                    <?php
                        if($_POST){
                            if($diachi=="")
                            echo '<span style="color:red">'.$err['dc']."<br/> </span>";
                            
                        }   
                    ?>
                </div>
            </div>
            <div class="row">
                 <div class="col-md-5">
                    
                </div>

                <div class="col-md-2 register-reset">
                    <input type="submit" name="dangky" id="dangky" size="30" value="Đăng ký">
                </div>
            </div>

            </div>
        </form>
    </div>
</div>