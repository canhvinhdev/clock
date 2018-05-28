<?php
	if(isset($_SESSION["thanhvien"])){
		$a=$_SESSION["thanhvien"];
		$sql="SELECT * FROM nguoisudung WHERE tendangnhap='$a'";
    $row=select_one($sql);
		$b=$row['id'];
		$sql2="SELECT * FROM donhang WHERE id_nsd='$b'";
		$query2=select_list($sql2);

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
                        Quản lý tài khoản >>
                        <span class="navigation-pipe">&gt;</span>
                        Lịch sử giao dịch
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
      <!-- End breadcume area -->
<table class="table table-hover">
  <tr>
    <td colspan="12" bgcolor="#736f66"><div align="center" style="color:#fff;"><strong>LỊCH SỬ GIAO DỊCH</strong></div></td>
  </tr>
  <?php if($query2){ ?>
  <tr bgcolor="#ededed" style="color:#000;">
    <td><strong>STT</strong></td>
    <td><strong>Tên người nhận</strong></td>
  
    <td><strong>Số điện thoại người nhận</strong></td>
    <td><strong>Địa chỉ nhận</strong></td>
    <td><strong>Ngày giờ đặt hàng</strong></td>
    <td><strong>Số tiền</strong></td>
    <td><strong>Trạng thái đơn hàng</strong></td>
    <td><strong>Xem chi tiết</strong></td>
    <td><strong>Hủy đơn hàng</strong></td>
  </tr>
  <?php 
  $i=1;
  foreach($query2 as $dong){
/* $now = getdate(); 
    $currentTime = $now["hours"] . ":" . $now["minutes"] . ":" . $now["seconds"]; 
    echo $currentTime;die();*/
    $time= time()+6*3600;//echo $time;
    $time_dh= strtotime($dong['ngaygio_dh']);
    $time_check=$time_dh+1800;//echo $time_check;
  ?>  
  <tr>
      <td><?php echo $i?></td>
      <td><?php echo $dong['ten_ndh']?></td>
      <td>0<?php echo $dong['sdt']?></td>
      <td><?php echo $dong['diachi_nhan']?></td>
      <td><?php echo $dong['ngaygio_dh']?></td>
      <td><?php echo number_format($dong['tongtien_dh'],0,'','.') ?> VNĐ</td>
      <td><?php if($dong['tinhtrang_dh']==0)echo 'Chưa chuyển hàng';
      else echo 'Đã chuyển hàng';
      ?></td>
      <td style="text-align: center">
        <a href="index.php?page_layout=lichsuchitiet&id=<?php echo $dong['id']?>" style="text-decoration:none;">
          <img src="admin/images/icon_article_detail.gif">
          </a> 
      </td>
      <td>
      <?php if($time<=$time_check){ ?>
          <button type="button" class="btn btn-warning"><a style="color:#fff" href="index.php?page_layout=huydonhang&id=<?php echo $dong['id']?>">Hủy</a></button>
          <?php } else ""; ?>
      </td>
  </tr>
 <?php
  $i++;
  } }else ?>

</table>
<div style="margin-top:10px;">
<a href="index.php?page_layout=quanlytaikhoan&ac=lietke" style="font-weight: bold;color: red;"><strong><< Trở về</strong></a></div>

    </div>
