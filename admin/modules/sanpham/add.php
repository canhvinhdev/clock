<?php include("add_exec.php"); ?>
<?php
	$sql = "select * from danhmuc where parent_id=0";	
	$datas = select_list($sql);
	
	$sql_th = "select * from thuonghieu";	
	$data_th = select_list($sql_th);

	$sql_tl="select * from theloai";
    $datas_tl=select_list($sql_tl);
    
?>

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
                    <a href="index.php">Trang chủ</a>
                </li>
                <li class="breadcrumb-current-item">Thêm sản phẩm</li>
            </ol>
        </div>
    </header>
    <!-- /Topbar -->
<form method="post" enctype="multipart/form-data" class="form_commom">
	<table class="table table-hover table_pro">
		<tr>
			<td>Tên sản phẩm:</td>
			<td>
				<input type="text" name="ten_sp"  value="<?php if($_POST){ echo $ten_sp; } ?>" size="50" required="required"  placeholder="Mời nhập tên sản phẩm..."/>
				<?php
				        if($_POST){
				        	if($ten_sp==""){  echo '<span style="color:red">'.$err['err_name']."<br/> </span>";} 
				        	if($ten_sp!=''){
					            $sql_check="select * from sanpham";
					            $rs=select_list($sql_check);
					            foreach ($rs as $key) {
					                if($key['ten_sp']==$ten_sp && $key['id']!=$id){ 
					                	echo '<span style="color:red">'.$err['err_name']."<br/> </span>";
						            } 
						        } 
				        	} 
				        }  
				    ?>
			</td>
		</tr>
		<tr>
			<td>Thương hiệu:</td>
			<td>
				<select name="id_th" required="required">
					<option value="">---Chọn thương hiệu---</option>
					<?php foreach ($data_th as $data_brand){?>
					<option <?php if(isset($_POST['id_th']) && $_POST['id_th'] == $data_brand['id']) {?> selected="selected" <?php } ?> value="<?php echo $data_brand['id'] ?>"><?php echo $data_brand['ten_th'] ?></option>
					<?php } ?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Danh mục:</td>
			<td>
				<select name="id_dm">
				<option value="">-------Chọn danh mục-------</option>
				<?php foreach ($datas as $data){?>
					<option <?php if(isset($_POST['id_dm']) && $_POST['id_dm'] == $data['id']) {?> selected="selected" <?php } ?> value="<?php echo $data['id'] ?>" ><?php echo $data['ten_dm'] ?></option>
					<?php $sqlCat = "select * from danhmuc where parent_id=".$data['id'];
                        
                	$ca = select_list($sqlCat);  ?> 
	                <?php foreach($ca as $cas) { ?>
	                            <option <?php if(isset($_POST['id_dm']) && $_POST['id_dm'] == $cas['id']) {?> selected="selected" <?php } ?> value="<?php echo $cas['id'] ?>">|----<?php echo $cas['ten_dm'] ?></option>
	                            <?php } ?>
					<?php } ?>
				</select>
			</td>
		</tr>
		
		<tr>
			<td>Ảnh sản phẩm:</td>
			<td><input type="file" name="thumbnail"  value="<?php if($_POST){ echo $anh_sp; } ?>" size="50" required="required" /></td>
		</tr>
		<tr>
			<td>Màu sản phẩm:</td>
			<td>
				<select name="mau_sac">
				    <option <?php if(isset($_POST['mau_sac']) && $_POST['mau_sac'] == 1) {?> selected="selected" <?php } ?> value="1">Màu Đỏ</option>
				    <option value="2"  <?php if(isset($_POST['mau_sac']) && $_POST['mau_sac'] == 2) {?> selected="selected" <?php } ?>>Màu Trắng</option>
				    <option <?php if(isset($_POST['mau_sac']) && $_POST['mau_sac'] == 3) {?> selected="selected" <?php } ?> value="3">Màu Đen</option>
				    <option <?php if(isset($_POST['mau_sac']) && $_POST['mau_sac'] == 4) {?> selected="selected" <?php } ?> value="4">Màu Nâu</option>
				    <option <?php if(isset($_POST['mau_sac']) && $_POST['mau_sac'] == 5) {?> selected="selected" <?php } ?> value="5">Màu Vàng</option>
				    <option <?php if(isset($_POST['mau_sac']) && $_POST['mau_sac'] == 6) {?> selected="selected" <?php } ?> value="6">Màu Hồng</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Giá sản phẩm:</td>
			<td><input type="number" name="gia_sp"  value="<?php if($_POST){ echo $gia_sp; } ?>" placeholder="Mời nhập số tiền... VNĐ" required="required" min="0"/>
				<?php
			        if($_POST){ if($gia_sp==""){echo '<span style="color:red">'.$err['er-price']."<br/> </span>";}  } 
			    ?>
			</td>
		</tr>
		<tr>
			<td>Số lượng:</td>
			<td><input type="number" name="so_luong"  value="<?php if($_POST){ echo $so_luong; } ?>" placeholder="Mời nhập số ... Chiếc" required="required"  min="0"/></td>
		</tr>
		<tr>
			<td>Xuất xứ:</td>
			<td><input type="text" name="xuat_xu"  value="<?php if($_POST){ echo $xuat_xu; } ?>" size="50"  placeholder="Mời nhập xuất xứ sản phẩm..." required="required"/></td>
		</tr>
		<tr>
			<td>Dòng sản phẩm:</td>
			<td><input type="text" name="dong_sp"  value="<?php if($_POST){ echo $dong_sp; } ?>" size="50"  placeholder="Mời nhập dòng sản phẩm..." required="required"/></td>
		</tr>
		<tr>
			<td>Kiểu dáng:</td>
			<td>
				<input type="radio" name="kieu_dang" class="first radio_height" value="0" checked="checked" />Nam
                <input type="radio" name="kieu_dang" class="radio_height" value="1"/>Nữ
			</td>
		</tr>
		<tr>
			<td>Chất liệu vỏ:</td>
			<td><input type="text" name="chat_lieu_vo"   placeholder="Mời nhập chất liệu vỏ sản phẩm..." value="" size="50"/></td>
		</tr>
		<tr>
			<td>Chất liệu dây:</td>
			<td><input type="text" name="chat_lieu_day"   placeholder="Mời nhập chất liệu vỏ sản phẩm..." value="" size="50"/></td>
		</tr>
		<tr>
			<td>Đường kính:</td>
			<td><input type="number" name="duong_kinh"  placeholder="Mời nhập đường kính ... mm" value="" size="50"/></td>
		</tr>
		<tr>
			<td>Độ dày:</td>
			<td><input type="number" name="do_day"   placeholder="Mời nhập độ dày ... mm" value="" size="50"/></td>
		</tr>
		<tr>
			<td>Mặt kính:</td>
			<td><input type="text" name="mat_kinh"  placeholder="Mời nhập mặt kính sản phẩm..." value="" size="50"/></td>
		</tr>
		
		<tr>
			<td>Máy:</td>
			<td><input type="text" name="may"  value=""  placeholder="Mời nhập nơi sản xuất máy..." size="50"/></td>
		</tr>
		
		<tr>
			<td>Độ chịu nước:</td>
			<td><input type="number" name="do_chiu_nuoc"  value=""  placeholder="Mời nhập độ chịu nước..." /></td>
		</tr>
		<tr>
			<td>Trạng thái:</td>
			<td>
				<input type="radio" name="status" class="first radio_height" value="0" checked="checked" />Hiện
                <input type="radio" name="status" class="radio_height" value="1"/>Ẩn
			</td>
		</tr>
		 <tr>
            <td>Thể loại</td>
            <td>
                <?php $i=0;
                    foreach ($datas_tl as $dat) { $i++; ?><div style="width: 180px;float: left;">
                         <input type="checkbox" class="radio_height" name="tl[]" value="<?php echo $dat['id'] ?>"/> 
                         <?php echo $dat['ten_theloai'] ?></div>

                  <?php  { $i=0;}  } 
                ?>
            </td>
        </tr>
        <tr>
			<td>Chức năng:</td>
			<td><textarea id="demo" class="ckeditor" name="chuc_nang">
				<?php if($_POST){ echo $data['chuc_nang']; } ?>
			</textarea></td>
		</tr>
		<tr>
			<td>Mô tả :</td>
			<td>
				<div>
					<textarea class="ckeditor" name="mota_sp"></textarea>
				</div>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><button type="submit" name="them_sp">Thêm</button></td>
		</tr>	
	</table>
</form>