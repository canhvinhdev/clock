<?php include("edit_exec.php"); ?>
<?php
	//buoc 1 ko co
	//buoc 2
	$id = isset($_REQUEST["id"]) ? $_REQUEST["id"] * 1 : 0; 
	$sql = "select * from theloai where id= ".$id ;
	$data = select_one($sql);//var_dump($data);
	//buoc 3 output
	?>
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
                <li class="breadcrumb-current-item">Sửa thể loại</li>
            </ol>
        </div>
    </header>

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
					<table class="table table-hover">
						<tr>
							<td>Tên thể loại:</td>
							<td><input type="text" name="ten_tl"  value="<?php echo $data['ten_theloai']?>" size="30" required="required"/></td>
						</tr>
						<tr>
							<td>Trạng thái:</td>
							<td>
								<input type="radio" name="status"  class="first radio_height"  value="0" <?php if ($data['status'] == 0) {?> checked="checked"'<?php }?> />Hiện
					            <input type="radio" name="status"  class="radio_height" value="1" <?php if ($data['status'] == 1) {?> checked="checked"'<?php }?> />Ẩn
							</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td><button>Cập nhật</button></td>
						</tr>
									
					</table>
				</form>
