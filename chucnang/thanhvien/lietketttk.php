<?php
  	if(isset($_SESSION["thanhvien"])){
    		$tv=$_SESSION["thanhvien"];
    		$sql="SELECT * FROM nguoisudung WHERE tendangnhap='$tv'";
        // echo $sql; exit();
    		$datas=select_one($sql);
  	}
?>

<!-- Start breadcume area -->
    <div class="breadcume-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="breadcrumb">
                        <a title="Return to Home" href="index.php" class="home"><i class="fa fa-home"></i></a>
                        <span class="navigation-pipe">&gt;</span>
                        Tài khoản của tôi
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- LOGIN-AREA START -->
                <div class="lognin-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">                               
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <h4 class="cart-title" align="center">Thông tin tài khoản của tôi</h4>
                            </div>
                            <div class="col-md-3">                               
                            </div>
                        </div>
                        <div class="row">
                            <!-- Registered-Customers Start -->
                            <div class="col-md-3">                               
                            </div>
                            <div class="col-md-6">
                                <form method="post">
                                  <table class="table table-hover table-list-detail">
                                      
                                      <tr>
                                        <td>Tên đăng nhập:</td>
                                        <td><?php echo $datas['tendangnhap']?></td>
                                      </tr>
                                      <tr>
                                          <td>Họ và tên:</td>
                                          <td><?php echo $datas['tendaydu']?></td>
                                      </tr>
                                      <tr>
                                          <td>Mật khẩu:</td>
                                          <td><?php echo $datas['matkhau']?></td>
                                      </tr>
                                      <tr>
                                          <?php
                                              function checked($value, $v_compare){
                                                  if($value==$v_compare)
                                                      $rs =  'checked="checked"';
                                                  else
                                                      $rs = '';
                                                  return $rs;
                                              }
                                            ?>
                                            <td>Giới tính:</td>
                                            <td>
                                                <input type="radio" name="gioitinh" value="Nam" <?php echo checked($datas['gioitinh'],'Nam') ?>/>Nam
                                                <input type="radio" name="gioitinh" value="Nữ" <?php echo checked($datas['gioitinh'],'Nữ')?>/>Nữ
                                            </td>
                                      </tr>
                                      <tr>
                                          <td>Ngày sinh:</td>
                                          <td><?php echo $datas['ngaysinh']?></td>
                                      </tr>
                                      <tr>
                                          <td>Email:</td>
                                          <td><?php echo $datas['homthu']?></td>
                                      </tr>
                                      <tr>
                                          <td>Địa chỉ: </td>
                                          <td><?php echo $datas['diachi']?></td>
                                      </tr>
                                      <tr>
                                          <td>Số điện thoại:</td>
                                          <td><?php echo $datas['sodienthoai']?></td>
                                      </tr>
                                  </table>
                                
                              </form>
                               <div class="histo" style="float:right;">
                                  <a href="index.php?page_layout=lichsumuahang"><strong>>>Lịch sử giao dịch</strong></a>
                                </div>
                            </div>
                            <!-- Registered-Customers End -->
                            <div class="col-md-3">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- LOGIN-AREA END -->
