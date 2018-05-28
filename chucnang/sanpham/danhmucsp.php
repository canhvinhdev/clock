
    <?php  include('chucnang/timkiem/timkiemnangcao.php'); ?>
    <br/><br/>
    <div class="categori-menu">
        <div class="sidebar-menu-title">
            <h2></i>Danh mục</h2>
        </div>
        <div class="sidebar-menu">
            <ul><?php 

                $sqlCate = "select * from danhmuc where parent_id=0";
                //echo $sqlCate; exit();
                $cat = select_list($sqlCate);
                foreach ($cat as $key ) { ?> 
                    <li><a href="index.php?page_layout=danhsachsp&id=<?php echo $key['id'] ?>"><?php echo $key['ten_dm'] ?></a>
                    <?php 
                        $sqlCat = "select * from danhmuc where parent_id=".$key['id'];
                        
                        $ca = select_list($sqlCat);             
                        if(!empty($ca)){?>
                        <div class="megamenudown-sub">
                            <div class="mega-top">
                            <?php foreach($ca as $cas) { ?>
                                <div class="mega-item-menu">

                                    <a href="index.php?page_layout=danhsachsp&id=<?php echo $cas['id'] ?>"><span> <?php echo $cas['ten_dm'] ?></span></a>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                        <?php } ?>
                    </li>
                    <?php } ?>
            </ul>
        </div>
    </div>
    <br/><br/>
     <div class="categori-menu">
        <div class="sidebar-menu-title">
            <h2>tính năng</h2>
        </div>
        <div class="sidebar-menu tn">
            <ul><?php 

                $sqltype = "select * from theloai";
                $type = select_list($sqltype);
                foreach ($type as $data_type ) { ?> 
                    <li><a href="index.php?page_layout=danhsachsptl&id=<?php echo $data_type['id'] ?>"><?php echo $data_type['ten_theloai'] ?></a>
                    </li>
                    <?php } ?>
            </ul>
        </div>
    </div>
    <br/><br/>
     <div class="categori-menu">
        <div class="sidebar-menu-title">
            <h2>Truy cập</h2>
        </div>
        <div class="sidebar-menu tn">
            <?php include_once('chucnang/truycap/truycap.php'); ?>
        </div>
    </div>