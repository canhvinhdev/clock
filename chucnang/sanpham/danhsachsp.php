<?php
    $id = isset($_REQUEST["id"]) ? $_REQUEST["id"]*1 : 0;
    $ca="select * from danhmuc where status=0 and id=".$id; 
	//echo $ca; exit();
    $c = select_one($ca); 
    //echo $c;exit(); 
    
	//print_r($cats);exit();
    $sqlc = "select * from danhmuc where status=0";
    //echo $sqlc; exit();
    $cdatas = select_list($sqlc);	
    //print_r($cdatas);exit();
	
	$current_page=isset($_GET['page'])?$_GET['page']:1;
	$limit=5;
	$sqlnum="select count(*) as number from sanpham where id_dm=".$id;
    //echo $sqlnum;exit();
	$num = select_one($sqlnum);
	//print_r($num);exit();
	$total_record=$num['number'];
    //echo $total_record;exit();
	$total_page=ceil($total_record/$limit);
	$start=($current_page-1)*$limit;
	
	
	$sqlCats = "select * from danhmuc where parent_id=".$id;
	//echo $sqlCats;exit();
    $cats = select_list($sqlCats);

	//print_r($cats);exit();
	$sqlk = "select * from sanpham order by rand() limit 5";
	//Lấy ra 5 sản phẩm sắp xếp ngẫu nhiên
    //echo $sqllq; exit();
    $resultk = select_list($sqlk);
    //print_r($resultlq);exit();
    if(isset($_SESSION['thanhvien'])){
        $a=$_SESSION['thanhvien'];
        $sql1="SELECT * FROM nguoisudung WHERE tendangnhap='$a'";
        $row1=select_one($sql1);
        $b=$row1['id'];
    }
?>
         
<?php  include('chucnang/slideshow/slideshow.php'); ?>
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
                <div class="col-xs-12 col-sm-12 list_pro" style="clear: both;">
                        <div class="area-title">
                            <h3> <?php echo $c['ten_dm'] ?></h3>
                        </div>
                        <div class="featured-product">
                            <div class="featured-item">
                            	<?php 
					            if(!empty($cats)){
					            	foreach($cats as $cat){
						            	$cat=$cat['id'];
						                $sqlPro = "select * from sanpham where id_dm=$cat";
						                //echo $sqlPro;die();
						                $pros = select_list($sqlPro); 
						                //print_r($pros);die();
						                if(!empty($pros)){ 
					                		foreach ($pros as $dat) { 
					                	
							                	$now=date("Y/m/d");                                           
							                    $sqlGG = "SELECT spkm.*,km.* FROM sp_km spkm,khuyenmai km where km.status= 0 and spkm.id_km=km.id and spkm.id_sp={$dat['id']} and (km.ngay_bd <=  $now <= km.ngay_kt)" ;
							                    
							                    $resultGG=  select_one($sqlGG);
							                    //print_r($resultGG);exit();
							                    $now=date("Y/m/d");
							                    //echo $now;exit();
							                    $now1=strtotime($now);
							                    //echo $now1;
							                    //echo 'a';
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
							                        //echo $sqlyt; exit();
							                        $yt=select_one($sqlyt);
						                    	}?>
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
					            <?php } } } } 
								//Ngược lại lấy menu con
					            else {
					                $sqlPro = "select * from sanpham where id_dm= $id limit {$start}, {$limit}";
					                $procs = select_list($sqlPro); //print_r($pros); exit();

					                if(!empty($procs)){ 
					                	foreach ($procs as $dat) { 

						                	$now=date("Y/m/d");                                           
						                    $sqlGG = "SELECT spkm.*,km.* FROM sp_km spkm,khuyenmai km where km.status= 0 and spkm.id_km=km.id and spkm.id_sp={$dat['id']} and (km.ngay_bd <=  $now <= km.ngay_kt)" ;
						                    
						                    $resultGG=  select_one($sqlGG);

						                    $resultGG=  select_one($sqlGG);
						                    //print_r($resultGG);exit();
						                    $now=date("Y/m/d");
						                    //echo $now;exit();
						                    $now1=strtotime($now);
						                    //echo $now1;
						                    //echo 'a';
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
						                        //echo $sqlyt; exit();
						                        $yt=select_one($sqlyt);
					                    	}?>
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
						            <div style="display: block; clear: both;text-align: center;">
										<ul  class="pagination">
											<li>
												<a href="index.php?page_layout=danhsachsp&page=<?php if($current_page>1){ echo ($current_page-1);} else echo $current_page; ?>&id=<?php echo $id?>">
												&laquo;</a>
											</li>
											<?php if($total_page>0){for($i=1;$i<=$total_page;$i++){?>
											<li><a href="index.php?page_layout=danhsachsp&page=<?php echo $i?>&id=<?php echo $id?>"><?php echo $i ?></a></li>
											<?php }	} ?>
											<li>
												<a href="index.php?page_layout=danhsachsp&page=<?php if($current_page<$total_page){ echo ($current_page+1);} else echo $current_page; ?>&id=<?php echo $id?>">
													&raquo;</a>
											</li>
										</ul>
									</div>
					            <?php } ?> 
                            </div>

                        </div>

						
          		</div>
          	</div>

