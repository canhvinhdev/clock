<?php include "edit_exec.php"; ?>

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
                <li class="breadcrumb-current-item">Sửa sản phẩm</li>
            </ol>
        </div>
    </header>
    <!-- /Topbar -->
    <form method="post"  enctype="multipart/form-data">
		<input type="hidden" name="id"  value="<?php echo $data['id']?>"/>
		<table  class="table table-hover">
			<tr>
				<td>Tên sản phẩm:</td>
				<td>
					<input type="text" name="ten_sp" required="required" value="<?php if($_POST){ echo $ten_sp;} else echo $data['ten_sp'];?>" size="50"/>
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
					<select name="id_th">
						<?php foreach ($data_th as $data_brand){?>
							<option value="<?php echo $data_brand['id'] ?>"  
							<?php if($data_brand['id'] == $data['id_th']) {?>
							  selected="selected" <?php }?> >
							  <?php echo $data_brand['ten_th'] ?>
							  	
							  </option>
						<?php } ?>
					</select>
				</td>
			</tr>
			<tr>
			<td>Danh mục:</td>
				<td>
					<select name="id_dm">
					<option value="">-------Chọn danh mục-------</option>
					<?php foreach ($datas as $da){?>
						<option <?php if($da['id'] == $data['id_dm']) {?>
							  selected="selected" <?php }?> value="<?php echo $da['id'] ?>" >
						<?php echo $da['ten_dm'] ?>
							
						</option>
						<?php $sqlCat = "select * from danhmuc where parent_id=".$da['id'];
	                        
	                	$ca = select_list($sqlCat);  ?> 
		                <?php foreach($ca as $cas) { ?>
		                            
		                    <option <?php if($cas['id'] == $data['id_dm']) {?>
							  selected="selected" <?php }?> value="<?php echo $cas['id'] ?>">|----<?php echo $cas['ten_dm'] ?>
		                    	
		                    </option>
		                            <?php } ?>
						<?php } ?>
					</select>
				</td>
			</tr>
			
			<tr>
				<td>Ảnh sản phẩm:</td>
				<td>
                    <?php if ($data['anh_sp']){?> 
                    <img src="<?php echo $data['anh_sp']?>" width="100px"/>
                    <?php } ?>
                    <input type="file" name="thumbnail" size=50/>
                    <input type="hidden" name="thumbnail" required="required" value="<?php echo $data['anh_sp'] ?>"/>
				</td>

			</tr>
			<tr>
			<?php
			    function selected($value, $v_compare){
				    if($value==$v_compare)
				        $rs =  'selected="selected"';
				    else
				        $rs = '';
				    return $rs;
				    }
				?>
				<td>Màu sản phẩm:</td>
				<td>
					<select name="mau_sac">
					    <option value="1" <?php echo selected($data['mau_sac'],'1') ?> >Màu Đỏ</option>
					    <option value="2" <?php echo selected($data['mau_sac'],'2') ?> >Màu Trắng</option>
					    <option value="3" <?php echo selected($data['mau_sac'],'3') ?> >Màu Đen</option>
					    <option value="4" <?php echo selected($data['mau_sac'],'4') ?> >Màu Nâu</option>
					    <option value="5" <?php echo selected($data['mau_sac'],'5') ?> >Màu Vàng</option>
					    <option value="6" <?php echo selected($data['mau_sac'],'6') ?> >Màu Hồng</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Giá sản phẩm:</td>
				<td><input type="number" name="gia_sp" min="1" value="<?php echo $data['gia_sp']?>"/></td>
			</tr>
			<tr>
				<td>Số lượng:</td>
				<td><input type="number" name="so_luong" min="1" value="<?php echo $data['so_luong']?>"/></td>
			</tr>
			<tr>
				<td>Đường kính:</td>
				<td><input type="number" name="duong_kinh" min="1" value="<?php echo $data['duong_kinh']?>"/></td>
			</tr>
			<tr>
				<td>Độ dày:</td>
				<td><input type="number" name="do_day" min="1" value="<?php echo $data['do_day']?>" size="50"/></td>
			</tr>
			<tr>
				<td>Xuất xứ:</td>
				<td><input type="text" name="xuat_xu"  value="<?php echo $data['xuat_xu']?>" size="50"/></td>
			</tr>
			<tr>
				<td>Dòng sản phẩm:</td>
				<td><input type="text" name="dong_sp"  value="<?php echo $data['dong_sp']?>" size="50"/></td>
			</tr>
			<tr>
				<td>Kiểu dáng:</td>
				<td>
					<input type="radio" name="kieu_dang"  class="first radio_height"  value="0" 
					<?php if ($data['kieu_dang'] == 0) {?> checked="checked"'<?php }?>/>Nam
	                <input type="radio" name="kieu_dang" class="radio_height"  value="1" <?php if ($data['kieu_dang'] == 1) {?> checked="checked"'<?php }?>/>Nữ
				</td>
			</tr>
			<tr>
				<td>Chất liệu vỏ:</td>
				<td><input type="text" name="chat_lieu_vo"  value="<?php echo $data['chat_lieu_vo']?>" size="50"/></td>
			</tr>
			<tr>
				<td>Chất liệu dây:</td>
				<td><input type="text" name="chat_lieu_day"  value="<?php echo $data['chat_lieu_day']?>" size="50"/></td>
			</tr>

			<tr>
				<td>Mặt kính:</td>
				<td><input type="text" name="mat_kinh"  value="<?php echo $data['mat_kinh']?>" size="50"/></td>
			</tr>
			
			<tr>
				<td>Máy:</td>
				<td><input type="text" name="may"  value="<?php echo $data['may']?>" size="50"/></td>
			</tr>
			
			<tr>
				<td>Độ chịu nước:</td>
				<td><input type="number" name="do_chiu_nuoc"  value="<?php echo $data['do_chiu_nuoc']?>" size="50" min="1"/></td>
			</tr>
			<tr>
				<td>Trạng thái:</td>
				<td>
					<input type="radio" name="status"  class="first radio_height"  value="0" <?php if ($data['status'] == 0) {?> checked="checked"'<?php }?> />Hiện
	                <input type="radio" name="status"  class="radio_height" value="1" <?php if ($data['status'] == 1) {?> checked="checked"'<?php }?> />Ẩn
				</td>
			</tr>
			<tr>
				<td>Chức năng:</td>
				<td><textarea id="demo" class="ckeditor" name="chuc_nang" ><?php echo $data['chuc_nang'] ?>
					</textarea>
				</td>
			</tr>
			<tr>
				<td>Mô tả :</td>
				<td>
					<div class="ckediter">
					<textarea id="demo" class="ckeditor" name="mota_sp"><?php echo $data['mota_sp'] ?></textarea>
					</div>
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td><button  name="update"  >Cập nhật</button></td>
			</tr>	
		</table>
	</form>