<?php
  	$sql="SELECT * FROM sanpham ORDER BY gia_sp DESC LIMIT 10";
  	$query=select_list($sql);
  	$sql2="SELECT id_sp,tensp_dhct,dongia_dhct, SUM( soluong_dhct )
  	FROM donhangchitiet
  	GROUP BY id_sp
  	ORDER BY SUM( soluong_dhct ) DESC 
  	LIMIT 10";
    //echo $sql2;exit();
  	$query2=select_list($sql2);

  	$sql3="SELECT count(*) as number FROM sanpham";
  	$num=select_one($sql3);
    $count=$num['number'];
?>
<div><p>Tổng số loại sản phẩm: <?php echo $count ?> loại sản phẩm</p></div>

<div class="total" style="height:595px;">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <table class="table table-hover">
                    <tr>
                      <th colspan="3">TOP SẢN PHẨM CÓ GIÁ TRỊ LỚN NHẤT</th>
                    </tr>
                    <tr bgcolor="#292929" style="color:#FFF;">
                        <th width="40px;"><strong>STT</strong></th>
                        <th>Tên sản phẩm</th>
                        <th width="100px;">Giá sản phẩm (VNĐ)</th>
                    </tr>
                    <?php 
                        $j=1;
                        if($query){
                            foreach ($query as $row){
                    ?>
                    
                    <tr>
                        <td><?php echo $j?></td>
                        <td><?php echo $row["ten_sp"]?></td>
                        <td><?php echo number_format($row['gia_sp'],0,'','.')?></td>
                    </tr>
                    <?php
                        $j++;
                        }
                      }
                    ?>
              </table>
            </div>
            <div class="col-md-6">
                <table class="table table-hover">
                    <tr>
                        <th colspan="3">TOP SẢN PHẨM BÁN CHẠY NHẤT</th>
                    </tr>
                    <tr bgcolor="#292929" style="color:#FFF;">
                        <th>STT</th>
                        <th>Tên sản phẩm</th>
                        <th>Giá hiện tại (VNĐ)</th>
                        <th>Giá gốc (VNĐ)</th>
                    </tr>
                    <?php 
                      $i=1;
                      if($query2){
                          foreach ($query2 as $row2){
                            $id_sp=$row2['id_sp'];
                            $sqlsp="Select * from sanpham where id=".$id_sp;
                            $rs=select_one($sqlsp);
                    ?>
                    
                    <tr>
                      <td><?php echo $i?></td>
                      <td><?php echo $row2["tensp_dhct"]?></td>
                      <td><?php echo number_format($row2['dongia_dhct'],0,'','.')?> VNĐ</td>
                      <td><?php echo number_format($rs['gia_sp'],0,'','.')?> VNĐ</td>
                    </tr>
                  <?php
                    $i++;
                      }
                    }
                  ?>
                </table>
            </div>
        </div>
    
    </div>
</div>
<div style="margin-bottom:20px;"><a href="index.php?quanly=sanpham&ac=lietke"><strong><< Trở về</strong></a></div>