
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
                <li class="breadcrumb-current-item">Sửa tin tức</li>
            </ol>
        </div>
    </header>
    <!-- /Topbar -->
<form method="post"  enctype="multipart/form-data">
	<input type="hidden" name="id"  value="<?php echo $data['id']?>"/>
	<table class="table table-hover">
		<tr>
			<td>Tiêu đề tin tức:</td>
			<td>
				<input type="text" name="tieude_tt"  value="<?php if($_POST){ echo $tieude_tt;} else echo $data['tieude_tt'];?>" size="30"/>
				<?php
		        if($_POST){ 
		        	if(empty($tieude_tt)){  echo '<span style="color:red">'.$err['tieude_tt']."<br/> </span>";} 
		        	if($tieude_tt!=''){
			            $sql_check="select * from tintuc";
			            $rs=select_list($sql_check);
			            foreach ($rs as $key) {
			                if($key['tieude_tt']==$tieude_tt && $key['id']!=$id){ 
			                	echo '<span style="color:red">'.$err['tieude_tt']."<br/> </span>";
				            } 
				        } 
		        	} 
		        }  
		    ?>
			</td>
		</tr>

		
		<tr>
			<td>Ảnh tin tức:</td>
			<td>
                <?php if ($data['anh_tt']){?> 
                <img src="<?php echo $data['anh_tt']?>" width="100px"/>
                <?php } ?>
                <input type="file" name="thumbnail" size=50/>
                <input type="hidden" name="thumbnail"  value="<?php echo $data['anh_tt'] ?>"/>
			</td>

		</tr>
		<tr>
			<td>Trạng thái:</td>
			<td>
				<input type="radio" name="status"  class="first radio_height"  value="0" <?php if ($data['status'] == 0) {?> checked="checked"'<?php }?> />Hiện
	            <input type="radio" name="status"  class="radio_height" value="1" <?php if ($data['status'] == 1) {?> checked="checked"'<?php }?> />Ẩn
			</td>
		</tr>
		<tr>
			<td>Tóm tắt tin tức :</td>
			<td>
				<div>
					<textarea class="ckeditor" name="tomtat_tt"><?php echo $data['tomtat_tt'] ?></textarea>
				</div>
				<?php
		        if($_POST){ if(empty($tomtat_tt)){  echo '<span style="color:red">'.$err['tomtat_tt']."<br/> </span>";} }  
		    ?>
			</td>
		</tr>
		
		<tr>
			<td>Nội dung tin tức :</td>
			<td>
				<div class="ckediter">
					<textarea id="demo" class="ckeditor" name="noidung_tt"><?php echo $data['noidung_tt'] ?></textarea>
				</div>
				<?php
			        if($_POST){ if(empty($noidung_tt)){  echo '<span style="color:red">'.$err['noidung_tt']."<br/> </span>";} }  
			    ?>
			</td>
		</tr>
		
		<tr>
			<td>&nbsp;</td>
			<td><button  name="update"  >Cập nhật</button></td>
		</tr>	
	</table>
</form>