<?php 
    $sql = "SELECT * FROM tintuc ORDER BY id asc";
    $sql_tt=select_list($sql);
    //print_r($sql_tt);die();
 ?>
<div class="blog-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="area-title">
                    <h3>Tin tức</h3>
                </div>
            </div>
            <div class="blog-box featured-product-area">
            <?php if($sql_tt){ foreach($sql_tt as $tt){ ?>
                <div class="col-sm-4">
                    <a href="index.php?page_layout=tinchitiet&id=<?php echo $tt['id']?>"><img src="admin/<?php echo $tt['anh_tt'] ?>" alt=""></a>
                    <span class="blog-date"><?php echo $tt['ngay_tao'] ?></span>
                    <div class="blog-info">
                        <h3>
                            <a href="index.php?page_layout=tinchitiet&id=<?php echo $tt['id']?>"><?php echo $tt['tieude_tt'] ?></a>
                        </h3>
                        <p><?php echo $tt['tomtat_tt'] ?></p>
                        <a href="index.php?page_layout=tinchitiet&id=<?php echo $tt['id']?>" class="readmore">Read more<i class="fa fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <?php } } ?>
            </div>
        </div>
    </div>
</div>