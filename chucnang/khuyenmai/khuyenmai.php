<?php //Tạo sql. Lấy ra sản phẩm trong ctrinh km đó
    $id = isset($_REQUEST["id"]) ? $_REQUEST["id"]*1 : 0;
    $sqlkm="select * from khuyenmai where id=".$id;
    //echo $sqlkm;exit();
    $rs=select_one($sqlkm);
    //print_r($rs);exit();
    //$sqlMNs = "SELECT sp.*,spkm.* FROM sanpham sp, sp_km spkm where sp.id = spkm.id_sp and spkm.id_km={$id} and status=0 ORDER BY sp.id DESC LIMIT 9";
    $sqlMNs = "SELECT sp.*,spkm.* FROM sanpham sp, sp_km spkm where sp.id = spkm.id_sp and spkm.id_km={$id} and status=0 ORDER BY sp.id DESC LIMIT 9";
    //echo $sqlMNs;exit();
    $resultMNs=  select_list($sqlMNs);

    $sqlslide = "SELECT * from khuyenmai where status=1 and id=".$id; ;
    //echo $sqlslide;exit();
    $key1=  select_one($sqlslide);
    //print_r($resultslide);exit();
?>
    <style>
        .dis .nivo-controlNav{display: none;}
    </style>
    <div class="dis">
        <div id="slider" class="none">
                <img style ="display:none" src="admin/<?php echo $key1['anh_km'] ?>" alt="" title="#htmlcaption3"/> 
        </div>
    </div>
<!-- End slider area -->
<!-- Start categori area -->
<div class="categori-area">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-3">
                <!-- Start categori menu -->
                <?php  include('chucnang/sanpham/danhmucsp.php'); ?>
                <!-- End categori menu -->
            </div>
        <!-- Start categori banner -->
        <div class="col-xs-12 col-sm-8 col-md-9">
           <div class="featured-product-area list_pro">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="area-title">
                                <h3>Khuyến mãi lớn <?php echo $rs['ten_km'] ?></h3>
                            </div>
                        </div>
                        <div class="featured-product col-md-12">
                            <div id="content2">
                                <div id="my-tab-content" class="tab-content">
                                    <div class="tab-pane active">
                                        <div class="row">
                                            <!-- Start featured item -->
                                            <?php if ($resultMNs) {foreach ($resultMNs as $dat) {
                                                //echo $dat['id'];exit();

                                            ?>
                                            <div class="col-sm-3 col-md-4">
                                                
                                                <div class="featured-inner">
                                                    <div class="featured-image">
                                                        <a href="index.php?page_layout=chitietsp&id=<?php echo $dat['id_sp']?>">
                                                            <img src="admin/<?php echo $dat['anh_sp'] ?>"  width="264" height="309" alt="<?php echo $dat['ten_sp']?>">
                                                        </a>
                                                        <?php if($dat['giam_gia']>0){ ?>
                                                        <span class="price-percent-reduction"><?php echo $dat['giam_gia'];?> %</span>
                                                        <?php } ?>

                                                    </div>
                                                    <div class="featured-info">
                                                        <div class="name_pro"><a href="index.php?page_layout=chitietsp&id=<?php echo $dat['id_sp']?>"><?php echo $dat['ten_sp']?></a></div>
                                                        <p class="reating">
                                                            <span class="rate">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </span>
                                                        </p>
                                                        <span class="price"><?php echo number_format($dat['gia_sp']-($dat['gia_sp']*$dat['giam_gia'])/100) ?> VND/Cái</span>

                                                        <?php if($dat['giam_gia']>0){ ?>
                                                        <div class="price_market" style="height: 30px;">
                                                            <?php echo number_format($dat['gia_sp']) ?> VND/Cái
                                                        </div>
                                                        <?php } else{?>
                                                        <div class="price_market"  style="height: 30px;text-decoration: line-through;">
                                                            
                                                        </div>
                                                        <?php }
                                                        ?>
                                                        <div class="featured-button">
                                                            <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                                            <a href="#" class="fetu-comment"><i class="fa fa-signal"></i></a>
                                                            <a href="chucnang/giohang/themhang.php?id=<?php echo $dat['id_sp'];?>" class="add-to-card"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                <?php  }  } ?>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>

            </div> 