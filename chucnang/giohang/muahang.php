
<?php

if(isset($_SESSION['giohang'])){
	$arrId = array();
	foreach($_SESSION['giohang'] as $id=>$so_luong){
		//Thêm giá trị vào mảng $arrID
		$arrId[] = $id;
	}
	//echo $id;die();
	$strId = implode(', ', $arrId);
	//Chuyển mảng thành chuỗi, mỗi phần tử cách nhau bởi dấu ,
	//Toán tử In : Tìm ra tất cả các Id trong $strId
	$sql = "SELECT * FROM sanpham WHERE id IN($strId) ORDER BY id DESC";
	$query = select_list($sql);	
}
if(isset($_SESSION['thanhvien'])){
	$a=$_SESSION['thanhvien'];
	$sql1="SELECT * FROM nguoisudung WHERE tendangnhap='$a'";
	$row1=select_one($sql1);
	$b=$row1['id'];
}
?>

	<div class="page-content">
        <!-- Start breadcume area -->
	    <div class="breadcume-area">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12">
	                    <div class="breadcrumb">
	                        <a title="Return to Home" href="index.php" class="home"><i class="fa fa-home"></i></a>
	                        <span class="navigation-pipe">&gt;</span>
	                        Đơn hàng
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>       
    </div>

 	<div class="container">
	 	<div class="col-md-6">
	 		<div class="payment">
				<table class="table">
					<tr>
						<th>Tên sản phẩm</th>
						<th>Số lượng</th>
						<th>Giá sản phẩm</th>
						<th>Giá thị trường</th>
						
					</tr>
					<?php
					$totalPriceAll = 0;
					foreach($query as $row){
						$sqlGG = "SELECT spkm.*,km.* FROM sp_km spkm,khuyenmai km where spkm.id_km=km.id and spkm.id_sp={$row['id']}";
                			//echo $sqlGG; exit();
						$resultGG=  select_one($sqlGG);
						$c=$row['gia_sp']-($row['gia_sp']*$resultGG['giam_gia'])/100;
						$totalPrice = $c*$_SESSION['giohang'][$row['id']];
						//$totalPrice = $row['gia_sp']*$_SESSION['giohang'][$row['id']];
					?>
					<tr>
						<td><?php echo $row['ten_sp'];?></td>
						<td><?php echo $_SESSION['giohang'][$row['id']]?></td>
						<td><?php echo number_format($c,0,'','.')?> VNĐ</td>
						
						<td><span  style="text-decoration: line-through;"><?php echo number_format($row['gia_sp'],0,'','.')?></span> - <span style="color:red;">
							<?php if($resultGG['giam_gia']>0)
								echo $resultGG['giam_gia'];
								else
									echo 0;
								
							?> %</span>
						</td>
						
					</tr>
		            <?php
						$totalPriceAll += $totalPrice;
					}
					?>
		            
					<tr>
						<td class="prd-name">Tổng giá trị hóa đơn là:</td>
						<td colspan="3"  class="prd-total"><span><?php echo number_format($totalPriceAll,0,'','.')?> VNĐ</span>
						<?php if(isset($a)){ ?>
						<p style="color:#000;font-size: 13px;">Ưu đãi thành viên tặng kèm <span>pin đồng hồ</span></p>
						<?php } ?>
						</td>
					</tr>
				</table>
			
			</div>
	 	</div>
	 		
 	
	
	
		<?php
	    if(isset($_POST['submit'])){
			$ten = $_POST['ten'];
			$mail= $_POST['mail'];
			$dt  = $_POST['dt'];
			$dc  = $_POST['dc'];
			
			// Xử lý mua hàng
			if(isset($a)){
				if($totalPriceAll>0){
					if(isset($_SESSION['giohang'])){
						$arrId = array();
						foreach($_SESSION['giohang'] as $id=>$so_luong){
							$arrId[] = $id;
						}
						$strId = implode(', ', $arrId);

						$sql = "SELECT * FROM sanpham WHERE id IN($strId) ORDER BY id DESC";
						$query = select_list($sql);	
						$tinhtrang="chưa chuyển hàng";
						if($totalPriceAll>0){
							$msql="insert into donhang(ten_ndh,sdt,tongtien_dh,diachi_nhan,homthu,tinhtrang_dh,id_nsd)values('".$ten."','".$dt."','".$totalPriceAll."','".$dc."','".$mail."','$tinhtrang','$b')";
							$result = 0;
							$result=exec_update($msql);

						}
						else{
							echo '<script>alert("Bạn không có sản phẩm nào trong giỏ hàng hoặc phải đăng nhập vào trang web để mua hàng!");</script>';	
						}
						if($result){
								foreach($query as $rs){
									$max="select * from donhang order by id desc";
									//echo $max; exit();
									$row1=select_one($max);
									$id_dh= $row1['id'];
									$id_sp=$rs['id'];
									$sqlgh = "SELECT spkm.*,km.* FROM sp_km spkm,khuyenmai km where spkm.id_km=km.id and spkm.id_sp={$rs['id']}";
		                			//echo $sqlGG; exit();
									$resultgh=  select_one($sqlgh);
									if($resultGG['giam_gia']>0){
										$gg=$rs['gia_sp']-($rs['gia_sp']*$resultgh['giam_gia'])/100;
									}else{
										$gg=$rs['gia_sp'];
									}
									$dongia=$gg;
									$tensp=$rs['ten_sp'];

									$soluong=$_SESSION['giohang'][$rs['id']];
									$sl=$rs['so_luong'];//echo $sl;die();
									$sl_new=$sl-$soluong;
									//echo $sl_new;die();

									$s="insert into donhangchitiet(id_dh,id_sp,tensp_dhct,soluong_dhct,dongia_dhct)values('$id_dh','$id_sp','$tensp','$soluong','$dongia')";
									//echo $s;
									$results = 0;
									$results=exec_update($s);

									$sqlsl="UPDATE sanpham set so_luong='{$sl_new}' where id=$id_sp";
									//echo $sqlsl;die();
									$resultsl = exec_update($sqlsl);
								}
								unset($_SESSION['giohang']);
								header('location:index.php?page_layout=hoanthanh');
							
						}
					
					}
				}
				else{
					echo '<script>alert("Bạn phải chọn mua ít nhất 1 sản phẩm mới có thể gửi đơn hàng!");</script>';
					unset ($_SESSION['giohang']);
				}
			}


			else{
				//echo '<script>alert("Bạn phải đăng nhập vào trang web để mua hàng!");</script>';
				if($totalPriceAll>0){
				if(isset($_SESSION['giohang'])){
					$arrId = array();
					foreach($_SESSION['giohang'] as $id=>$so_luong){
						$arrId[] = $id;
					}
					//$soluong là giá trị của của phần tử ở vị trí $id (chỉ số mục)
					$strId = implode(', ', $arrId);
					//echo $strId;exit(); 
					//Chuyển mảng $arrID thành 1 chuỗi cách nhau bởi dấu ,
					$sql = "SELECT * FROM sanpham WHERE id IN($strId) ORDER BY id DESC";
					//echo $sql;exit();
					$query = select_list($sql);	
					//print_r($query);exit();
					$tinhtrang="Chưa chuyển hàng";
					if($totalPriceAll>0){
						$msql="insert into donhang(ten_ndh,sdt,tongtien_dh,diachi_nhan,homthu,tinhtrang_dh)values('".$ten."','".$dt."','".$totalPriceAll."','".$dc."','".$mail."','$tinhtrang')";
						//echo $msql;exit();
						$result = 0;
						$result=exec_update($msql);

					}
					else{
						echo '<script>alert("Bạn không có sản phẩm nào trong giỏ hàng hoặc phải đăng nhập vào trang web để mua hàng!");</script>';	
					}
					if($result){
						foreach($query as $rs){
							$max="select * from donhang order by id desc";
							//echo $max; exit();
							$row1=select_one($max);
							$id_dh= $row1['id'];
							$id_sp=$rs['id'];
							$sqlgh = "SELECT spkm.*,km.* FROM sp_km spkm,khuyenmai km where spkm.id_km=km.id and spkm.id_sp={$rs['id']}";
                			//echo $sqlGG; exit();
							$resultgh=  select_one($sqlgh);
							if($resultGG['giam_gia']>0){
								$gg=$rs['gia_sp']-($rs['gia_sp']*$resultgh['giam_gia'])/100;
							}else{
								$gg=$rs['gia_sp'];
							}
							$dongia=$gg;

							$tensp=$rs['ten_sp'];
							$soluong=$_SESSION['giohang'][$rs['id']];
							$sl=$rs['so_luong'];//echo $sl;die();
							$sl_new=$sl-$soluong;
							//echo $sl_new;die();
							$s="insert into donhangchitiet(id_dh,id_sp,tensp_dhct,soluong_dhct,dongia_dhct)values('$id_dh','$id_sp','$tensp','$soluong','$dongia')";
							
							$results = 0;
							$results=exec_update($s);
							$sqlsl="UPDATE sanpham set so_luong='{$sl_new}' where id=$id_sp";
							//echo $sqlsl;die();
							$resultsl = exec_update($sqlsl);
						} 
						unset($_SESSION['giohang']);
						header('location:index.php?page_layout=hoanthanh');
					}
				
				}}
				else{
				echo '<script>alert("Bạn phải chọn mua ít nhất 1 sản phẩm mới có thể gửi đơn hàng!");</script>';
				unset ($_SESSION['giohang']);
				}
			}
		}
	?>
	<?php if(isset($_SESSION['thanhvien'])){?>
		<div class="container form-payment">
			<div class="col-md-6">
				<div>
		            <?php
		            if($_POST){
		            foreach ($err as $key ) {
		                echo '<span style="color:red">'.$key."<br/> </span>";
		            }   }
		            ?>
		        </div>
				<form method="post" id="donhang">
					<table class="table table-checkout">
						<tr>
							<td><label>Tên người nhận</label></td>
							<td>
								<input type="text" name="ten" required="required" placeholder="<?php echo $row1['tendaydu'] ?>" value="<?php echo $row1['tendaydu'] ?>"/>
							</td>
						</tr>
						<tr>
							<td><label>Địa chỉ Email</label></td>
							<td>
								<input type="email" name="mail" required=required" placeholder="<?php echo $row1['homthu'] ?>" value="<?php echo $row1['homthu'] ?>" />
							</td>
						</tr>
						<tr>
							<td><label>Số Điện thoại</label></td>
							<td>
								<input type="text"  required="required" placeholder="<?php echo $row1['sodienthoai'] ?>" value="<?php echo $row1['sodienthoai'] ?>"  name="dt" class="digits" maxlength="15" />
							</td>
						</tr>
						<tr>
							<td><label>Địa chỉ nhận hàng</label></td>
							<td>
								<textarea style="width: 400px;height: 100px;"  name="dc"  required="required" placeholder="<?php echo $row1['diachi'] ?>" value="<?php echo $row1['diachi'] ?>"  class="required"><?php echo $row1['diachi'] ?>
								</textarea>
							</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>
								<input type="submit" name="submit" value="Xác nhận mua hàng" />
							</td>
						</tr>
					</table>
				</form>
			</div>
			<div class="col-md-6"></div>
		</div>   
	<?php } else{ ?>
		<div class="container form-payment">
			<div class="col-md-6">
				<form method="post" id="donhang">
					<table class="table table-checkout">
						<tr>
							<td><label>Tên người nhận</label></td>
							<td>
								<input type="text" name="ten" required="required" placeholder="Mời nhập tên người nhận" value=""/>
							</td>
						</tr>
						<tr>
							<td><label>Địa chỉ Email</label></td>
							<td>
								<input type="email" name="mail" required="required" placeholder="Mời nhập email" value="" />
							</td>
						</tr>
						<tr>
							<td><label>Số Điện thoại</label></td>
							<td>
								<input type="text"  required="required"  placeholder="Mời nhập số điện thoại" value=""  name="dt" class="digits" maxlength="15" />
							</td>
						</tr>
						<tr>
							<td><label>Địa chỉ nhận hàng</label></td>
							<td>
								<textarea style="width: 400px;height: 100px;padding-left: 15px;"  name="dc" placeholder="Mời bạn nhập địa chỉ nhận hàng" required="required" class="required"></textarea>							</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>
								<input type="submit" name="submit" value="Xác nhận mua hàng" />
							</td>
						</tr>
					</table>
				</form>
			</div>
			<div class="col-md-6"></div>
		</div>   

	<?php } ?>
</div>

