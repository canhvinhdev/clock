<?php
$id = isset($_REQUEST["id"]) ? $_REQUEST["id"]*1 : 0;

$sql = "SELECT * FROM donhangchitiet WHERE id_dh = $id ";
$query = select_list($sql);

$sqldh = "SELECT * FROM donhang WHERE id = $id";
$rowdh = select_one($sqldh);
?>
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
                <li class="breadcrumb-current-item">Chi tiết đơn hàng</li>
            </ol>
        </div>
    </header>
<table>
  <tr>
    <td width="200px;"><strong>Tên khách hàng:</strong></td>
    <td><?php echo $rowdh['ten_ndh']?></td>
  </tr>
  <tr>
    <td width="200px;"><strong>Địa chỉ:</strong></td>
    <td><?php echo $rowdh['diachi_nhan']?></td>
  </tr>
  </table>
  <br/>
  <table class="table table-hover" style="width: 700px;">
  
    <tr>
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
    <tr>
      <td colspan="2" style="text-align: center;">Tổng số tiền:</td>
      <td colspan="2" style="text-align: center;"><strong><?php echo number_format($rowdh['tongtien_dh'],0,'','.')?></strong> VNĐ</td>
    </tr>
 
</table>
<p style="padding-top:10px;"><a href="index.php?quanly=donhang&ac=lietke"><strong><< Trở về</strong></a></p>
