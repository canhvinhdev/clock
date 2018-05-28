<?php
    //get input
    $id = isset($_REQUEST["id"]) ? $_REQUEST["id"]*1 : 0;
    $sqlPro = "select * from sanpham where status= 0 and id=".$id;
    $pro = select_one($sqlPro);
    $cid= $pro['id_dm'];
    $id_th=$pro['id_th'];
    
    $sqlGG = "SELECT spkm.*,km.* FROM sp_km spkm,khuyenmai km where spkm.id_km=km.id and spkm.id_sp=$id";
    //echo $sqlGG;exit();
    $gg = select_one($sqlGG);
    
    
    $sqlcl = "select * from sanpham WHERE id_dm = $cid order by rand() limit 4";

    $resultcl = select_list($sqlcl);
    //print_r($resultcl);exit();
    $sqlcommom= "select sp.*,th.ten_th 
    from sanpham sp 
    inner join 
    thuonghieu th on sp.id_th = th.id and id_th=$id_th";

    $data= select_one($sqlcommom);


?>
             <div class="page-content">
                <!-- Start breadcume area -->
                <div class="breadcume-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="breadcrumb">
                                    <a title="Return to Home" href="index.php" class="home"><i class="fa fa-home"></i></a>
                                    
                                    <span class="hidden-xs navigation-pipe">&gt;</span>
                                   <?php echo $pro['ten_sp'] ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End breadcume area -->
                <!-- Start single product area -->
                <div class="container">
                    <div class="row">
                        <div class="single-products">
                            <!-- Start single product image -->
                            <div class="col-sm-5">
                                <div class="single-product-image"> 
                                    <div id="content-eleyas">
                                        <div id="my-tab-content" class="tab-content">
                                            <div class="tab-pane active" id="view1">
                                                <span class="new-box">
                                                    <span class="new-label">New</span>
                                                </span>
                                                <a class="fancybox" href="admin/<?php echo $pro['anh_sp']?>" data-fancybox-group="gallery" title="">
                                                    <img src="admin/<?php echo $pro['anh_sp']?>" alt="">
                                                    <span>View larger<i class="fa fa-search-plus"></i></span>
                                                </a>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End single product image -->
                            <!-- Start single product details -->
                            <div class="col-sm-7">
                                <div class="single-product-details">
                                    <h1><?php echo $pro['ten_sp'] ?></h1>
                                    <h2>    
                                        <span>
                                            <?php echo number_format($pro['gia_sp']-($pro['gia_sp']*$gg['giam_gia'])/100) ?> VND/Cái
                                        </span>
                                    </h2>
                                    <?php if($gg['giam_gia']>0){ ?>

                                        <p><strong>Giá thị trường:</strong>
                                            <span style="text-decoration: line-through;font-weight: bold;">  
                                                <?php echo number_format($pro['gia_sp']) ?> VND/Cái
                                            </span>  -  
                                            <span style="color:red;font-size: 15px;font-weight: bold;">
                                                <?php echo $gg['giam_gia'] ?> %
                                            </span> 
                                        </p>
                                    <?php } else{?>
                                        <p class="gg_maket"></p>
                                    <?php }
                                    ?>
                                    <p><strong>Dòng sản phẩm:</strong>  <?php echo $pro['dong_sp'] ?> </p>
                                    <p><strong>Mã sản phẩm:</strong>  <?php echo $pro['ma_sp'] ?> </p>
                                    <p><strong>Tình trạng:</strong>
                                        <?php if($pro['so_luong'] > 0 ){?>
                                        <?php echo "Còn hàng" ?>
                                        <?php } else{ ?>
                                        <?php echo "Hết hàng" ?>
                                        <?php }?> 
                                    </p>
                                    <p><strong>Bảo hành:</strong></p>
                                        ----Bảo Hành Chính Hãng Quốc Tế 1 năm
                                        <br/>
                                        ---------Bảo Hành Tại Đồng Hồ 24H 5 năm
                                        <br/>
                                        --------------Thay Pin Miễn Phí Suốt Đời Cho Tất Cả Đồng Hồ Được 24H Phân Phối.<br/><br/>
                                    <p class="sin-item"><span class="sin-item-text"><?php echo $pro['so_luong'] ?>  Sản phẩm</span><span class="sin-item-btn">Trong kho</span></p>

                                    <p class="buttons_bottom_block no-print" id="add_to_cart">
                                        <button class="exclusive" name="Submit" type="submit">
                                            <span><a href="chucnang/giohang/themhang.php?id=<?php echo $pro['id'];?>">Add to cart</a></span>
                                        </button>
                                    </p>
                                </div>
                            </div>
                            <!-- End single product details -->
                        </div>
                    </div>
                </div>
                <!-- End single product area -->
                <!-- Start single product info -->
                <div class="container">
                    <div class="row">
                        <div class="single-product-info">
                            <div id="content-product-review">
                                <div class="col-xs-12 col-sm-3">
                                    <ul id="tabs" class="review-tab" data-tabs="tabs">
                                        <li class="active"><a href="#info1" data-toggle="tab">Thông tin chi tiết</a></li>
                                        <li><a href="#info3" data-toggle="tab">Bảo hành</a></li>
                                        <li><a href="#info4" data-toggle="tab">Chính sách </a></li>
                                    </ul>
                                </div>
                                <div class="col-xs-12 col-sm-9 details">
                                    <div id="my-tab-content-2" class="tab-content">
                                        <div class="tab-pane active" id="info1">
                                            <table class="table-data-sheet">            
                                                <tbody>
                                                    <tr class="odd">
                                                        <td>Xuất xứ</td>
                                                        <td> <?php echo $data['xuat_xu'] ?></td>
                                                    </tr>
                                                    <tr class="even">
                                                        <td>Thương hiệu</td>
                                                        <td> <?php echo $data['ten_th'] ?></td>
                                                    </tr>
                                                    <tr class="odd">
                                                        <td>Kiểu dáng</td>
                                                        <td><?php if($pro['kieu_dang']==0)echo "Nam";
                                                        if($pro['kieu_dang']==1)echo "Nữ"; ?></td>
                                                    </tr>
                                                    <tr class="even">
                                                        <td>Máy</td>
                                                        <td> <?php echo $data['may'] ?></td>
                                                    </tr>
                                                    <tr class="odd">
                                                        <td>Chất liệu vỏ</td>
                                                        <td><?php echo $pro['chat_lieu_vo'] ?></td>
                                                    </tr>
                                                    <tr class="even">
                                                        <td>Chất liệu dây</td>
                                                        <td> <?php echo $pro['chat_lieu_day'] ?></td>
                                                    </tr>
                                                    <tr class="odd">
                                                        <td>Mặt kính</td>
                                                        <td><?php echo $pro['mat_kinh'] ?></td>
                                                    </tr>
                                                    <tr class="even">
                                                        <td>Đường kính</td>
                                                        <td> <?php echo $pro['duong_kinh'] ?> mm</td>
                                                    </tr>
                                                    <tr class="odd">
                                                        <td>Độ dày</td>
                                                        <td><?php echo $pro['do_day'] ?> mm</td>
                                                    </tr>
                                                    <tr class="even">
                                                        <td>Độ chịu nước</td>
                                                        <td> <?php echo $pro['do_chiu_nuoc'] ?> atm</td>
                                                    </tr>
                                                    <tr class="odd">
                                                        <td>Chức năng</td>
                                                        <td><?php echo $pro['chuc_nang'] ?></td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane tab-info-one" id="info3">
                                        <table class="table ">
                                            <tr>
                                                <td>
                                                    -Bảo Hành Chính Hãng Quốc Tế 1 năm
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                     -Bảo Hành Tại Đồng Hồ 24H 5 năm
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                     -Thay Pin Miễn Phí Suốt Đời Cho Tất Cả Đồng Hồ Được 24H Phân Phối.
                                                </td>
                                            </tr>

                                        </table> 

                                        </div>
                                        <div class="tab-pane" id="info4">
                                            <div class="info-bh tab-info-one">
                                                <p><span style="color: #FFB800; font-weight: bold;">TẠI SAO NÊN CHỌN ĐỒNG HỒ 24H?</span></p>
                                                <br/>
                                                <p class="bh">
                                                    <img src="Images/w1.png" alt="Cam kết hàng chính hãng" style="float: left;"/>
                                                    Cam kết đảm bảo hàng chính hãng, chất lượng tốt.
                                                </p>
                                                <p class="bh">
                                                    <img src="Images/w2.png" style="float: left;" alt="Hoàn tiền lại gấp 10 lần nếu phát hiện hàng giả- hàng nhái."/>
                                                    Hoàn tiền lại gấp 10 lần nếu phát hiện hàng giả- hàng nhái.
                                                </p>
                                                <p class="bh">
                                                   <img src="Images/w2.png" style="float: left;" alt="Giá thấp hơn thị trường 5-10%"/>
                                                    Giá tốt ưu đãi luôn thấp hơn thị trường 5-10%. 

                                                </p>
                                                <p class="bh">
                                                   <img src="Images/w3.png" style="float: left;" alt="Chế Độ Bảo Hành Lên Đến 5 Năm Tại Đồng Hồ 24H"/>
                                                    Chế Độ Bảo Hành Lên Đến 5 Năm Tại Đồng Hồ 24H.
                                                </p>
                                                <p class="bh">
                                                   <img src="Images/w4.png" style="float: left;" alt="Đổi Hàng Trong 7 Ngày - Nếu Sai Kích Cỡ? Không Vừa Ý?"/>
                                                    Đổi Hàng Trong 7 Ngày - Nếu Sai Kích Cỡ? Không Vừa Ý?
                                                </p>
                                                <p class="bh">
                                                   <img src="Images/w5.png" style="float: left;" alt="Thay Pin Miễn Phí Suốt Đời Tại 24H. Không Còn Lo Hết Pin."/>
                                                    Thay Pin Miễn Phí Suốt Đời Tại 24H. Không Còn Lo Hết Pin.
                                                </p>
                                                <p class="bh">
                                                   <img src="Images/w6.png" style="float: left;" alt="Nhận Hàng & Trả Tiền - Ngay Tại Nhà Bạn. Hoàn Toàn Miễn Phí."/>
                                                    Nhận Hàng & Trả Tiền - Ngay Tại Nhà Bạn. Hoàn Toàn Miễn Phí.
                                                </p>         
                                             </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End single product info -->
                 <?php  include('chucnang/sanpham/sanphamcungloai.php'); ?>
            </div>