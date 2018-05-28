<?php 
    $id = isset($_REQUEST["id"]) ? $_REQUEST["id"]*1 : 0;
    $ca="select * from tintuc where id=".$id; 
    //echo $ca; exit();
    $c = select_one($ca); 
    //echo $c;exit(); 
 ?>
<div class="blog-post2">
    <div class="blog-box2">
        <div class="entry-date">
            <div class="day">Mới</div>
        </div>  
        <div class="entry-main-content">
            <div class="entry-thumbnail">
                <img alt="" src="admin/<?php echo $c['anh_tt'] ?>">
                <div class="block_hover">
                    <div class="blog-link">
                        <a class="fancybox" href="admin/<?php echo $c['anh_tt'] ?>"><i class="fa fa-search" data-fancybox-group="gallery"></i></a> 
                        <a href="#"><i class="fa fa-link"></i></a>
                    </div>
                </div>
            </div>                 
            <div class="entry-content-other">
                <h3><?php echo $c['tieude_tt'] ?></h3>
                
                <div class="summary">
                    <?php echo $c['noidung_tt'] ?>
                </div> 
            </div>
        </div>
    </div>
</div>