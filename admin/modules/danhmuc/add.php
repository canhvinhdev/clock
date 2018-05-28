<?php include("add_exec.php"); 
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
                <li class="breadcrumb-current-item">Thêm danh mục</li>
            </ol>
        </div>
    </header>

<form method="post"  enctype="multipart/form-data">

	<table class="table table-hover">
		<tr>
			<td>Tên danh mục:</td>
			<td><input type="text" name="ten_dm"  value="<?php if($_POST)  echo $data['ten_dm'] ?>" size="30" required="required"/>
			<?php
		        if($_POST){echo '<span style="color:red">'.$err['ten_dm']."<br/> </span>";}   
		    ?>
			</td>
		</tr>
		
		<tr>
			<td>Thuộc danh muc:</td>
			<?php 
			$sql="select * from danhmuc";
			$rs= select_list($sql);
			 ?>
			<td>
				<select name="parent_id">
					<option value="0">
						Danh mục cha
					</option>
					<?php foreach ($rs as $da){?>
                        <option <?php if(isset($_POST['parent_id']) && $_POST['parent_id'] == $da['id']) {?> selected="selected" <?php } ?> value="<?php echo $da['id'] ?>">
                            <?php echo $da['ten_dm'] ?>                                
                        </option>
                        <?php $sqlCat = "select * from danhmuc where parent_id=".$da['id'];
                        
                        $ca = select_list($sqlCat);  ?> 
                        <?php foreach($ca as $cas) { ?>
                            <option <?php if(isset($_POST['parent_id']) && $_POST['parent_id'] == $cas['id']) {?> selected="selected" <?php } ?> value="<?php echo $cas['id'] ?>">|----<?php echo $cas['ten_dm'] ?></option>
                            <?php } ?>
                    <?php }?>

			</select>
			</td>
		</tr>
		<tr>
			<td>Trạng thái:</td>
			<td>
				<input type="radio" name="status" class="first radio_height" value="0" checked="checked" />Hiện
                <input type="radio" name="status" class="radio_height" value="1"/>Ẩn
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><button>Thêm</button></td>
			
		</tr>	
	</table>
</form>
