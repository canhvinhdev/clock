<?php //Tạo sql
    $sqlMNs = "SELECT * FROM sanpham where status=0 ORDER BY id DESC LIMIT 6";
    //echo $sqlMNs;exit();
    $resultMNs=  select_list($sqlMNs);
    //print_r($resultBCs);exit();
    if(isset($_SESSION['thanhvien'])){
    $a=$_SESSION['thanhvien'];
    $sql1="SELECT * FROM nguoisudung WHERE tendangnhap='$a'";
    $row1=select_one($sql1);
    $b=$row1['id'];}
 ?>

    <div class="tab-pane active" id="tab8">
        <div class="row">
            <!-- Start featured item -->
            <?php if ($resultMNs) {foreach ($resultMNs as $dat) {
                                           
                    $sqlGG = "SELECT spkm.*,km.* FROM sp_km spkm,khuyenmai km where km.status= 1 and spkm.id_km=km.id and spkm.id_sp={$dat['id']}" ;
                    //echo $sqlGG;exit();
                    $resultGG=  select_one($sqlGG);

                    $now=date("Y/m/d");
                    //echo $now;exit();
                    $now1=strtotime($now);
                    $ngay_bd=$resultGG['ngay_bd'];
                    //echo $ngay_bd;exit();
                    $ngay_bd1=strtotime($ngay_bd);
                    //echo $ngay_bd1;exit();
                    $ngay_kt=$resultGG['ngay_kt'];
                    $ngay_kt1=strtotime($ngay_kt);                  
                    
                    if($ngay_bd1<=$now1 && $ngay_kt1>=$now1){ 
                        $giam_gia=$resultGG['giam_gia'];
                    }else
                        $giam_gia=0;
                        

                    if(isset($_SESSION['thanhvien'])){
                        $sqlyt = "SELECT nsd.*,spyt.* FROM nguoisudung nsd,sanphamyt spyt where nsd.id=spyt.id_nsd and spyt.id_sp={$dat['id']} and nsd.id=$b";
                        //echo $sqlGG; exit();
                        $yt=select_one($sqlyt);
                    }
                ?>
            <div class="col-sm-3 col-md-4">
                
                <div class="featured-inner">
                    <div class="featured-image">
                        <a href="index.php?page_layout=chitietsp&id=<?php echo $dat['id']?>">
                            <img src="admin/<?php echo $dat['anh_sp'] ?>"  width="264" height="309" alt="<?php echo $dat['ten_sp']?>">
                        </a>
                        <?php if($giam_gia>0){ ?>

                        <span class="price-percent-reduction"><?php echo $giam_gia;?> %</span>
                        <?php } ?>
                    </div>
                    <div class="featured-info">
                        <div class="name_pro"><a href="index.php?page_layout=chitietsp&id=<?php echo $dat['id']?>"><?php echo $dat['ten_sp']?></a></div>
                        <p class="reating">
                            <span class="rate">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </span>
                        </p>

                        <span class="price"><?php echo number_format($dat['gia_sp']-($dat['gia_sp']*$giam_gia)/100) ?> VND/Cái</span>
                        <?php if($giam_gia>0){ ?>
                        <div class="price_market"  style="height: 30px;font-weight: bold;text-decoration: line-through;">
                            <?php echo number_format($dat['gia_sp']) ?> VND/Cái
                        </div>
                        <?php } else{?>
                        <div class="price_market" style="height: 30px;">
                            
                        </div>
                        <?php }
                        ?>
                        <div class="featured-button">
                            <style>
                                .yes.fa-heart:before{color:red;}
                            </style>
                            <?php if(isset($_SESSION['thanhvien'])&&$yt['status']==1){ ?>
                                <a href="index.php?page_layout=spyt&id=<?php echo $dat['id']?>" class="wishlist"><i class="yes fa fa-heart"></i></a>
                                <?php }else { ?>
                                    <a href="index.php?page_layout=spyt&id=<?php echo $dat['id']?>" class="wishlist"><i class="fa fa-heart"></i></a>
                                <?php } 
                                ?>
                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                            <a href="chucnang/giohang/themhang.php?id=<?php echo $dat['id'];?>" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                    </div>
                </div>
                
            </div>
            <?php } } ?>
        </div>
    </div>