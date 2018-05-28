<?php


//Một session tạo ra một file trong một thư mục tạm thời trên Server, nơi đã đăng kí các biến session và các giá trị của chúng được lưu trữ
	    if(isset($_SESSION['giohang'])){
			
				if(isset($_POST['so_luong'])){ //điền cập nhật số lượng
					foreach($_POST['so_luong'] as $id=>$so_luong){
						$sql="select * from sanpham where id='$id'";
						$data=select_one($sql);
						if($so_luong <= 0){
							echo("<SCRIPT LANGUAGE='JavaScript'>window.alert('Số lượng sản phẩm đặt mua phải lớn hơn 0!');</SCRIPT>");
						}
						else if($so_luong < $data['so_luong']){
							$_SESSION['giohang'][$id] = $so_luong;	
						}
						else if(is_numeric($so_luong))
							echo("<SCRIPT LANGUAGE='JavaScript'>window.alert('Vui lòng nhập số lượng nhỏ hơn số lượng của sản phẩm hiện có!');</SCRIPT>");
						
					} 		//xử lý cập nhật giỏ hàng
				}
			
				$arrId = array();
				foreach($_SESSION['giohang'] as $id=>$so_luong){
					$arrId[] = $id;		
				}
				$strId = implode(',', $arrId);// đưa mảng thành chuỗi
				$sql = "SELECT * FROM sanpham WHERE status=0 and id IN($strId) ORDER BY id DESC";//lấy chính xác id
				$query = select_list($sql);
				// print_r($query);exit();
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
			                        Giỏ hàng
			                    </div>
			                </div>
			            </div>
			        </div>
			    </div>
                <!-- End breadcume area -->
                <div class="cart-page-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <h4 class="cart-title">Giỏ hàng</h4>
                                <div class="table-responsive">
	                                <form  id="giohang" method="post" action="">
	                                	
	                                    <table class="cart-table">
	                                        <thead>
	                                            <tr>
	                                                <th>Sản phẩm</th>
	                                                <th>Tên sản phẩm</th>
	                                                <th>Giá mua</th>
	                                                <th>Số lượng</th>
	                                                <th>Tổng tiền</th>
	                                                <th>Xóa</th>
	                                            </tr>
	                                        </thead>
	                                        <?php
													$totalPriceAll = 0;
													
													foreach($query as $row){
														
													$sqlGG = "SELECT spkm.*,km.* FROM sp_km spkm,khuyenmai km where spkm.id_km=km.id and spkm.id_sp={$row['id']}";
                                            			//echo $sqlGG; exit();
                    								$resultGG=  select_one($sqlGG);
                    								$c=$row['gia_sp']-($row['gia_sp']*$resultGG['giam_gia'])/100;
                    								$totalPrice = $c*$_SESSION['giohang'][$row['id']];
												?>

	                                        <tbody>
	                                            <tr>
	                                            	<td>
	                                                    <a href="index.php?page_layout=chitietsp&id=<?php echo $row['id']?>">
	                                                    	<img alt="" class="img-responsive" src="admin/<?php echo $row['anh_sp'];?>">
	                                                    </a>
	                                                </td>
	                                                <td>
	                                                    <h6><a href="index.php?page_layout=chitietsp&id=<?php echo $row['id']?>"><?php echo $row['ten_sp'];?></a></h6>
	                                                </td>
	                                                <td class="price-sale">
	                                                    <div class="cart-price" style="color:#000;"><?php echo number_format($c,0,'','.')?> VNÐ</div>
	                                                     <div class="cart-price" style="text-decoration: line-through; color:#666;font-size: 14px;"><?php echo number_format($row['gia_sp'],0,'','.')?> VNÐ</div>
	                                                     <?php if($resultGG['giam_gia']>0) {?>
	                                                     	<p class="sale">Giảm <?php echo $resultGG['giam_gia'] ?>%</p>
	                                                    <?php } ?>
	                                                </td>
	                                                <td>
	                                                        <input type="number" class="quantity" placeholder="1" name="so_luong[<?php echo $row['id']?>]" value="<?php echo $_SESSION['giohang'][$row['id']];?>">
	                                                   
	                                                </td>
	                                                <td>
	                                                    <div class="cart-subtotal"><?php echo number_format($totalPrice,0,'','.')?> VNÐ</div>
	                                                </td>

	                                                <td><a href="chucnang/giohang/xoahang.php?id=<?php echo $row['id'];?>"><i class="fa fa-trash"></i></a></td>
	                                                <?php
														$totalPriceAll += $totalPrice;
													}
													?>
	                                            </tr>
	                                            <tr>
		                                            <td colspan="2" class="actions">
		                                                <div class="total-cart" align="center">
		                                                    Tổng giá trị giỏ hàng là:
		                                                </div>
		                                            </td>
		                                            <td colspan="5" class="actions">
		                                                <div class="cart-price" aling="center">
		                                                    <?php echo number_format($totalPriceAll,0,'','.')?> VNÐ
		                                                </div>
		                                            </td>
	                                            </tr>
	                                            <tr>
		                                            <td colspan="7" class="actions">
		                                                <div class="cartPage-btn">
		                                                    <ul>
		                                                        <li><a href="index.php?page_layout=muahang" class="cbtn">Tiếp tục mua</a></li>
		                                                        <li><input type="submit" class="update-cart" name="capnhat" id="capnhat" value="Cập nhật giỏ hàng" /></li>
		                                                        <li><a href="chucnang/giohang/xoahang.php?id=0" class="cbtn">Xóa giỏ hàng</a></li>
		                                                    </ul>
		                                                </div>
		                                            </td>
	                                            </tr>

	                                        </tbody>
	                                    </table>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>

		    <?php
		}
	    else{
			echo '<script>alert("Hiện không có sản phẩm nào trong giỏ hàng của bạn!");</script>';	
		}
		?>
	</div>
	<style>
		#content2 .yt{
			width: 25%;
		}
	</style>
	<div class="container featured-product-area list_pro">
        <div class="row">
            <div class="col-sm-12">
                <div class="area-title">
                    <h3>Sản phẩm yêu thích</h3>
                </div>
            </div>
            <div class="featured-product col-md-12">
                <div id="content2">                                          
                    <?php  include('chucnang/sanpham/sanphamyeuthich.php'); ?>
                </div>
            </div>
        </div>
    </div>
