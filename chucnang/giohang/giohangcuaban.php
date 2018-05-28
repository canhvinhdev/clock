<?php
        if(isset($_SESSION['giohang'])){
            
            
            
            $arrId = array();
            foreach($_SESSION['giohang'] as $id=>$so_luong){
                $arrId[] = $id;     
            }
            $strId = implode(',', $arrId);// đưa mảng thành chuỗi
            $sql = "SELECT * FROM sanpham WHERE id IN($strId) ORDER BY id DESC";//lấy chính xác id
            $query = select_list($sql);
            // print_r($query);exit();
        ?>
        <div class="shoping-cart">
            <a href="index.php?page_layout=giohang"><span>Giỏ hàng (<?php   
            if(isset($_SESSION["giohang"])){
                echo count($_SESSION["giohang"]);
            }
            else{echo 0;}
            ?>  )</span></a>
            <div class="add-to-cart-product">
            <?php
                $totalPriceAll = 0;
                foreach($query as $row){
                    $totalPrice = $row['gia_sp']*$_SESSION['giohang'][$row['id']];
            ?>
                <div class="cart-product product-item11" style="display: none">
                    <div class="cart-product-image">
                        <a href="index.php?page_layout=chitietsp&id=<?php echo $row['id']?>"><img src="admin/<?php echo $row['anh_sp'];?>" alt="Product"></a>
                    </div>
                    <div class="cart-product-info">
                        <p><span><strong>Số lượng: </strong><?php echo $_SESSION['giohang'][$row['id']];?></span>x<a href="index.php?page_layout=chitietsp&id=<?php echo $row['id']?>"><?php echo $row['ten_sp'];?></a></p>
                        <p><span><?php echo number_format($row['gia_sp'])?> VNĐ</span></p>
                    </div>
                </div>
                
                <?php
                    $totalPriceAll += $totalPrice;
                } ?>
                <div class="cart-price" style="display: none;">
                    <!-- <div class="cart-product-line fast-line">
                        <span>Shipping</span>
                        <span class="free-shiping">20.000</span>
                    </div> -->
                    <div class="cart-product-line">
                        <span>Tổng tiền:</span>
                        <span class="total"><?php echo number_format($totalPriceAll,0,'','.')?> VNÐ</span>
                    </div>
                </div>
                <div class="cart-checkout" style="display: none;">
                    <a href="index.php?page_layout=muahang">Check out<i class="fa fa-chevron-right"></i></a>
                </div>
          <?php  }
                ?>
                
            </div>
        </div>