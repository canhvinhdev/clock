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
                <li class="breadcrumb-current-item">Thêm khuyến mãi</li>
            </ol>
        </div>
    </header>
    <!-- /Topbar -->

<form method="post"  enctype="multipart/form-data">

	<table class="table table-hover">
		<tr>
			<td>Tên khuyến mãi:</td>
			<td>
				<input type="text" name="ten_km" size="50" required="required" value="<?php if($_POST)  echo $ten_km ?>"/>
				<?php
			        if($_POST){
			        	if($ten_km==''){  echo '<span style="color:red">'.$err['ten_km']."<br/> </span>";} 
			        	if($ten_km!=''){
				            $sql_check="select * from khuyenmai";
				            $rs=select_list($sql_check);
				            foreach ($rs as $key) {
				                if($ngay_bd1<=$now1 && $ngay_kt1>=$now1 && $key['ten_km']==$ten_km){ 
				                	echo '<span style="color:red">'.$err['ten_km']."<br/> </span>";
					            } 
					        } 
			        	} 
			        }  
			    ?>
			</td>
		</tr>
		<tr>
			<td>Ảnh sản phẩm:</td>
			<td><input type="file" name="thumbnail"  value="<?php if($_POST){ echo $anh_km; } ?>" size="50" required="required" />
			</td>
		</tr>
		<tr>
			<td>Ngày bắt đầu :</td>
			<td>
				<input type="date" name="ngay_bd" value="<?php if($_POST){ echo $ngay_bd; } ?>" required="required" min="1970-01-01" max="2018-12-31" />
				<?php
			        if($_POST){
			        	if($ngay_bd1<$now1) echo '<span style="color:red">'.$err['nbd']."<br/> </span>";
			    }?>
			</td>
		</tr>
		<tr>
			<td>Ngày kết thúc :</td>
			<td>
				<input type="date" name="ngay_kt"  value="<?php if($_POST){ echo $ngay_kt; } ?>" required="required" min="1970-01-01" max="2018-12-31" />
				<?php
			        if($_POST){
			        	if($ngay_kt1<=$ngay_bd1) echo '<span style="color:red">'.$err['nkt']."<br/> </span>";
			    }?>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><button name="them">Thêm</button></td>
		</tr>	
	</table>
</form>