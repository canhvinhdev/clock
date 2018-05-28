<?php include("add_exec.php"); ?>
<script type="text/javascript" language="javascript" src="modules/ckeditor/ckeditor.js" ></script>
<!-- Topbar -->
    <header id="topbar" class="alt">
        <div class="topbar-left">
            <ol class="breadcrumb">
                <li class="breadcrumb-icon">
                    <a href="index.php">
                        <span class="fa fa-home"></span>
                    </a>
                </li>
                <li class="breadcrumb-link">
                    <a href="index.php">Home</a>
                </li>
                <li class="breadcrumb-current-item">Thêm tài khoản admin</li>
            </ol>
        </div>
    </header>
    <!-- /Topbar -->
 <div class="error_commom">
     <?php
        if($_POST){
        foreach ($err as $ke ) {
            echo '<span style="color:red">'.$ke."<br/> </span>";
        }   }
    ?>
 </div>
<form method="post"  enctype="multipart/form-data">
	<table class="table table-hover">
		<tr>
			<td>Tên đăng nhập:</td>
			<td><input type="text" name="tendangnhap"  value="" size="30"/></td>
		</tr>
		<tr>
			<td>Mật khẩu:</td>
			<td><input type="password" name="matkhau"  value="" size="30"/></td>
		</tr>
		<tr>
			<td>Tên đầy đủ:</td>
			<td><input type="text" name="tendaydu"  value="" size="30"/></td>
		</tr>
		<tr>
            <td>
                Ngày sinh :
            </td>
            <td>
                <input type="text" name="ngaysinh" size="50" />
            </td>
        </tr>
        <tr>
            <td>Giới tính:</td>
            <td>
                <input type="radio"  class="first" name="gioitinh" value="Nam">Nam
                <input type="radio" name="gioitinh" value="Nữ">Nữ
            </td>
        </tr>
		<tr>
			<td>Địa chỉ:</td>
			<td><input type="text" name="diachi"  value=""/></td>
		</tr>
		<tr>
			<td>Hòm thư:</td>
			<td><input type="email" name="homthu"  value=""/></td>
		</tr>
		<tr>
			<td>Số điện thoại:</td>
			<td><input type="text" name="sodienthoai"  value=""/></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><button>Thêm</button></td>
		</tr>	
	</table>
</form>