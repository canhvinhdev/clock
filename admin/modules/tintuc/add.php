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
                <li class="breadcrumb-current-item">Thêm tin tức</li>
            </ol>
        </div>
    </header>
    <!-- /Topbar -->
<form method="post"  enctype="multipart/form-data">
	<table class="table table-hover">
		<tr>
			<td>Tiêu đề tin tức:</td>
			<td><input type="text" name="tieude_tt"  required="required" value="<?php if($_POST)  echo $data['tieude_tt'] ?>" size="30"/>
			<?php
		        if($_POST){ if(empty($data['tieude_tt'])){  echo '<span style="color:red">'.$err['tieude_tt']."<br/> </span>";} if($data['tieude_tt']){
	            $sql_check="select * from tintuc";
	            $rs=select_list($sql_check);
	            foreach ($rs as $key) {
	                if($key['tieude_tt']==$data['tieude_tt'])
	                { echo '<span style="color:red">'.$err['tieude_tt']."<br/> </span>";} } } }  
		    ?>
			</td>
		</tr>
		<tr>
			<td>Ảnh tin tức:</td>
			<td><input type="file" name="thumbnail"  value="" required="required" size="30"/></td>
		</tr>
		<tr>
			<td>Tóm tắt tin tức :</td>
			<td>
				<div>
					<textarea class="ckeditor" name="tomtat_tt" value="" required="required"></textarea>
				</div>
				<?php
			        if($_POST){ if(empty($data['tomtat_tt'])){  echo '<span style="color:red">'.$err['tomtat_tt']."<br/> </span>";}  } 
			    ?>
			</td>
		</tr>
		
		<tr>
			<td>Nội dung tin tức :</td>
			<td>
				<div>
					<textarea class="ckeditor" name="noidung_tt"></textarea>
				</div>
				<?php
			        if($_POST){ if(empty($data['noidung_tt'])){  echo '<span style="color:red">'.$err['noidung_tt']."<br/> </span>";}  } 
			    ?>
			</td>
		</tr>
		<tr>
			<td>Trạng thái:</td>
			<td>
				<input type="radio"  class="first" name="status" value="0" checked="checked" />Hiện
                <input type="radio" name="status" value="1"/>Ẩn
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><button>Thêm</button></td>
		</tr>	
	</table>
</form>