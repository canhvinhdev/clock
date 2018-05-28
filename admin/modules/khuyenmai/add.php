<?php include("add_exec.php"); ?>
<script type="text/javascript" language="javascript" src="modules/ckeditor/ckeditor.js" ></script>

 <div id="main">
         <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-home"></i> Trang quản trị</a></li>
            <li class="active"><a href="#">Khuyến mãi</a></li>
         </ol>
         <div class="col-xs-12">
            <form class="form-horizontal col-xl-9 col-lg-10 col-md-12 col-sm-12" method="post"  enctype="multipart/form-data" >
               <input name="id" type="hidden" value="0">


                <div class="form-group">
                  <label for="type_product" class="col-sm-2 control-label required">Tên khuyến mãi:</label>
                  <div class="col-sm-10">
				  <input type="text"  class="form-control" name="ten_km" size="50" required="required" value="<?php if($_POST)  echo $ten_km ?>"/>
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
                  </div>
               </div>
               <div class="form-group">
                  <label for="title" class="col-sm-2 control-label required">Ảnh sản phẩm:</label>
                  <div class="col-sm-10">
				  	<input type="file" class="form-control" name="thumbnail"  value="<?php if($_POST){ echo $anh_km; } ?>" size="50" required="required" />
                  </div>
               </div>
            
               <div class="form-group">
                  <label for="description" class="col-sm-2 control-label">Ngày bắt đầu :</label>
                  <div class="col-sm-10">
					<input type="date" class="form-control" name="ngay_bd" value="<?php if($_POST){ echo $ngay_bd; } ?>" required="required" min="1970-01-01" max="2018-12-31" />
					<?php
						if($_POST){
							if($ngay_bd1<$now1) echo '<span style="color:red">'.$err['nbd']."<br/> </span>";
					}?>
                  </div>
               </div>
               <div class="form-group">
                  <label for="content" class="col-sm-2 control-label">Ngày kết thúc :</label>
                  <div class="col-sm-10">
						<input type="date"  class="form-control"  name="ngay_kt"  value="<?php if($_POST){ echo $ngay_kt; } ?>" required="required" min="1970-01-01" max="2018-12-31" />
						<?php
							if($_POST){
								if($ngay_kt1<=$ngay_bd1) echo '<span style="color:red">'.$err['nkt']."<br/> </span>";
						}?>
				   </div>
				</div>
				<div class="form-group">
					<label for="content" class="col-sm-2 control-label"></label>
                     <div class="col-sm-offset-2 col-sm-10">
                        <button name="them" class="btn btn-submit"><small><i class="fa fa-plus"></i></small> Thêm mới</button>
                       
                        <a class="btn btn-warning" href="/admin/index.php?quanly=khuyenmai&ac=lietke"><small><i class="fa fa-reply"></i></small> Trở về</a>
                     </div>
                  </div>
            </form>
            </div>
         </div>
