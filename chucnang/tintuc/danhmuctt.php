<?php 
    $sql = "SELECT * FROM tintuc ORDER BY id desc limit 3";
    $sql_tt=select_list($sql);
 ?>
<div class="col-xs-12 col-sm-4 col-md-4 pull-right">
    <div class="bolg-side-bar">
        <div class="section-offset">
            <h3>Tin tức mới đăng</h3>
            <ul class="list-of-entries">
            <?php if($sql_tt){ foreach($sql_tt as $tt){ ?>
                <li>     
                    <div class="entry">
                        <a class="entry-thumb" href="#">
                            <img alt="" src="admin/<?php echo $tt['anh_tt'] ?>">
                        </a>
                        <div class="wrapper">
                            <h6 class="entry-title">
                                <a href="index.php?page_layout=tinchitiet&id=<?php echo $tt['id']?>"><?php echo $tt['tieude_tt'] ?>                                  
                                </a>
                            </h6>
                            <div class="entry-meta">
                                <span><i class="fa fa-calendar"></i> <?php echo $tt['ngay_tao'] ?></span>
                                
                            </div>
                        </div>
                    </div>
                </li>
                <?php } } ?>
            </ul>
        </div>
    </div>
</div>