<?php
  if(isset($_SESSION["thanhvien"])){
    $id = isset($_REQUEST["id"]) ? $_REQUEST["id"]*1 : 0;
    $a=$_SESSION["thanhvien"];
    $sql2="SELECT * FROM donhangchitiet WHERE id_dh='$id'";
    $query = select_list($sql2);
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
                        <a href="index.php?page_layout=lichsumuahang"">Lịch sử giao dịch</a>>>
                        <span class="navigation-pipe">&gt;</span>
                        Chi tiết đơn hàng
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
      <!-- End breadcume area -->
<table class="table table-hover" style="width: 700px;">
  
    <tr bgcolor="#ededed">
      <th>STT</th>
      <th>Sản phẩm</th>
      <th>Số lượng</th>
      <th>Đơn giá</th>
    </tr>
    <?php
      $i=1;
      foreach($query as $row)
      {
    ?>  
    
    <tr>
      <td><?php echo $i?></td>
      <td><?php echo $row['tensp_dhct']?></td>
      <td><?php echo $row['soluong_dhct']?></td>
      <td><?php echo number_format($row['dongia_dhct'],0,'','.')?> VNĐ</td>
    </tr>
    <?php
    $i++;
    } ?>
 
</table>
<p style="padding-top:10px;font-weight: bold;"><a href="index.php?page_layout=lichsumuahang" style="color:red;">Trở về</a></p>