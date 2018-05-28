<?php include("edit_exec.php"); ?>
<?php
	$id = isset($_REQUEST["id"]) ? $_REQUEST["id"] * 1 : 0; 
	$id_dm = isset($_REQUEST["id_dm"]) ? $_REQUEST["id_dm"] * 1 : 0; 
	$sql = "select * from danhmuc where id= ".$id ;
	$datacate = select_one($sql);
	?>
		<script type="text/javascript" language="javascript" src="../ckeditor/ckeditor.js" ></script>

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
	                <li class="breadcrumb-current-item">Sửa danh mục</li>
	            </ol>
	        </div>
	    </header>

		<form  method="post"  enctype="multipart/form-data">	
			<table class="table table-hover">
				<tr>
					<td>Tên danh mục:</td>
					<td>
						<input type="text" name="ten_dm"  value="<?php if($_POST){ echo $data['ten_dm'];} else echo $datacate['ten_dm'];?>" size="30" required="required"/>
						<?php
					        if($_POST){
					            echo '<span style="color:red">'.$err['ten_dm']."<br/> </span>";
					        }
					    ?>
					</td>
				</tr>
				<tr>
					<?php 
						$sql="select * from danhmuc where parent_id=0";
						$rs= select_list($sql);
					?>
					<td>Thuộc danh mục:</td>
					<td>
						<select name="parent_id">
								<option value="0"
								<?php if(0 == $datacate['parent_id']) {?>
									selected="selected" <?php }?>
								?>

									Danh mục cha
								</option>
								<?php foreach ($rs as $da){?>
			                        <option class="cate_base" value="<?php echo $da['id'] ?>" 
			                        <?php if($da['id'] == $datacate['parent_id']) {?>  selected="selected" <?php }?>
			                        >
			                            <?php echo $da['ten_dm'] ?>                                
			                        </option>
			                        <?php $sqlCat = "select * from danhmuc where parent_id=".$da['id'];
			                        
			                        $ca = select_list($sqlCat);  ?> 
			                        <?php foreach($ca as $cas) { ?>
			                            <option value="<?php echo $cas['id'] ?>">|----<?php echo $cas['ten_dm'] ?></option>
			                            <?php } ?>
			                    <?php }?>

						</select>
					</td>
				</tr>
				<tr>
					<td>Trạng thái:</td>
					<td>
						<input type="radio" name="status"  class="first radio_height"  value="0" <?php if ($datacate['status'] == 0) {?> checked="checked"'<?php }?> />Hiện
		                <input type="radio" name="status"  class="radio_height" value="1" <?php if ($datacate['status'] == 1) {?> checked="checked"'<?php }?> />Ẩn
					</td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td><button>Cập nhật</button></td>
				</tr>
							
			</table>
		</form>
