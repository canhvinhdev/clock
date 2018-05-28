<?php
  $id= $_GET['id'];
  $sql="select * from sanpham where id=$id";
  $pro=select_one($sql);

  $sql = "select ten_th from thuonghieu where id=".$pro['id_th'];
  $name_th = select_one($sql);

  $sql = "select ten_dm from danhmuc where id=".$pro['id_dm'];
  $name = select_one($sql);

  $sqlTL="select l.ten_theloai 
          from theloai_sanpham t right join theloai l 
          on t.id_tl=l.id where t.id_sp={$pro['id']}";
                      
  $TL=select_list($sqlTL);

?>
<h2>Thông tin chi tiết sản phẩm</h2>
<div class="table1" style="width: 48%;float: left;">
  
  <table class="table table-hover">
      <tr>
          <td>Sản phẩm:</td>
          <td><?php echo $pro['ten_sp'] ?></td>
      </tr>
      <tr>
          <td>Ảnh sản phẩm:</td>
          <td><img src="<?php echo $pro['anh_sp']?>" width="100px"/></td>
      </tr>
      
      <tr>
          <td>Thể loại:</td>
          <td><?php foreach ($TL as $da) {
                echo $da['ten_theloai']; ?></br><?php
             } ?>
          </td>
      </tr>
      <tr>
          <td>Màu sản phẩm:</td>
          <td><?php
            if($pro['mau_sac']==1){
              echo "Màu Đỏ";
            }
            if($pro['mau_sac']==2){
              echo "Màu Trắng";
            }
            if($pro['mau_sac']==3){
              echo "Màu Đen";
            }
            if($pro['mau_sac']==4){
              echo "Màu Nâu";
            }
            if($pro['mau_sac']==5){
              echo "Màu Vàng";
            }
            if($pro['mau_sac']==6){
              echo "Màu Hồng";
            }
            ?>
          </td>
      </tr>
      <tr>
          <td>Số lượng:</td>
          <td><?php echo $pro['so_luong'] ?> chiếc</td>
      </tr>
      <tr>
          <td>Dòng sản phẩm:</td>
          <td><?php echo $pro['dong_sp'] ?></td>
      </tr>
       <tr>
          <td>Đường kính:</td>
          <td><?php echo $pro['duong_kinh']?>mm</td>
      </tr>
      <tr>
          <td>Máy:</td>
          <td><?php echo $pro['may'] ?></td>
      </tr>
      
      <tr>
          <td>Ngày tạo:</td>
          <td><?php echo $pro['ngay_tao'] ?></td>
      </tr>

  </table>
</div>
<div class="table2" style="width: 48%;float: right;">

  <table class="table table-hover">

      <tr>
          <td width="27%">Thương hiệu:</td>
          <td><?php echo $name_th['ten_th'] ?></td>
      </tr>
      <tr>
          <td>Danh mục:</td>
          <td><?php echo $name['ten_dm'] ?></td>
      </tr>
      <tr>
          <td>Mã sản phẩm:</td>
          <td><?php echo $pro['ma_sp'] ?></td>
      </tr>
      <tr>
          <td>Tên sản phẩm:</td>
          <td><?php echo $pro['ten_sp'] ?></td>
      </tr>
      
      <tr>
          <td>Giá sản phẩm:</td>
          <td><?php echo $pro['gia_sp'] ?>VNĐ</td>
      </tr>
      <tr>
          <td>Kiểu dáng:</td>
          <td>
            <?php if($pro['kieu_dang']==0){
              echo "Nam";
            } 
            if($pro['kieu_dang']==1){
              echo "Nữ";
            } 
            ?>
              
          </td>
      </tr>
      <tr>
          <td>Mặt kính:</td>
          <td><?php echo $pro['mat_kinh'] ?></td>
      </tr>
      <tr>
          <td>Độ dày:</td>
          <td><?php echo $pro['do_day'] ?></td>
      </tr>
      <tr>
          <td>Chất liệu dây:</td>
          <td><?php echo $pro['chat_lieu_day'] ?></td>
      </tr>
      <tr>
          <td>Chất liệu vỏ:</td>
          <td><?php echo $pro['chat_lieu_vo'] ?></td>
      </tr>
      <tr>
          <td>Độ chịu nước:</td>
          <td><?php echo $pro['do_chiu_nuoc'] ?></td>
      </tr>
      <tr>
          <td>Chức năng:</td>
          <td><?php echo $pro['chuc_nang'] ?></td>
      </tr>
      <tr>
          <td>Trạng thái:</td>
          <td>
            <?php if($pro['status']==0){
              echo "Hiện";
            } 
            if($pro['status']==1){
              echo "Ẩn";
            } 
            ?>
          </td>
      </tr>
  </table>
</div>
<br/><br/>

<div class="back" style="float:left;margin-top:100px;margin-bottom:20px;margin-right:5px;">
  <a href="index.php?quanly=sanpham&ac=lietke"><strong><< Trở về</strong></a>
</div>