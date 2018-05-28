<?php
	include "edit_exec.php";
	$id = isset($_REQUEST["id"]) ? $_REQUEST["id"] * 1 : 0; 

	$sql = "select * from nguoisudung where phanquyen='admin' and id= ".$id ;
	$data = select_one($sql);//var_dump($data);
	//buoc 3 output
	?>
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
                <li class="breadcrumb-current-item">Sửa tài khoản admin</li>
            </ol>
        </div>
    </header>
    <!-- /Topbar -->
	    <script type="text/javascript" language="javascript" src="../ckeditor/ckeditor.js" ></script>
				<div class="error_commom">
				     <?php
				        if($_POST){
				        foreach ($err as $ke ) {
				            echo '<span style="color:red">'.$ke."<br/> </span>";
				        }   }
				    ?>
				 </div>
	            <form  method="post"  enctype="multipart/form-data">
					<input type="hidden" name="id"  value="<?php echo $data['id']?>"/>
					<table class="table table-hover">
						<tr>
							<td>Tên đăng nhập:</td>
							<td><input type="text" name="tendangnhap"  value="<?php echo $data['tendangnhap']?>" size="30"/></td>
						</tr>
						<tr>
							<td>Mật khẩu:</td>
							<td><input type="password" name="matkhau"  value="<?php echo $data['matkhau']?>" size="30"/></td>
						</tr>
						<tr>
							<td>Tên đầy đủ:</td>
							<td><input type="text" name="tendaydu"  value="<?php echo $data['tendaydu']?>" size="30"/></td>
						</tr>
						<tr>
							<td>Ngày sinh:</td>
							<td><input type="text" name="ngaysinh"  value="<?php echo $data['ngaysinh']?>" size="30"/></td>
						</tr>
						<tr>
						<?php
						    function checked($value, $v_compare){
							    if($value==$v_compare)
							        $rs =  'checked="checked"';
							    else
							        $rs = '';
							    return $rs;
							    }
							?>
							<td>Giới tính:</td>
							<td>
								<input type="radio" name="gioitinh" class="first" value="Nam" <?php echo checked($data['gioitinh'],'Nam') ?>/>Nam
				                <input type="radio" name="gioitinh" value="Nữ" <?php echo checked($data['gioitinh'],'Nữ')?>/>Nữ
							</td>
						</tr>
						<tr>
							<td>Địa chỉ:</td>
							<td><input type="text" name="diachi"  value="<?php echo $data['diachi']?>"/></td>
						</tr>
						<tr>
							<td>Hòm thư:</td>
							<td><input type="email" name="homthu"  value="<?php echo $data['homthu']?>"/></td>
						</tr>
						<tr>
							<td>Số điện thoại:</td>
							<td><input type="text" name="sodienthoai"  value="<?php echo $data['sodienthoai']?>"/></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td><button>Cập nhật</button></td>
						</tr>	
					</table>
	    		</form>