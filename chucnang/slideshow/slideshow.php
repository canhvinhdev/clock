<?php

    $sqlslide = "SELECT * from khuyenmai where status=1" ;
    //echo $sqlslide;exit();
    $resultslide=  select_list($sqlslide);
    //print_r($resultslide);exit();
?>

<div class="slider-area">

                <div id="slider" class="nivoSlider">
                <?php foreach ($resultslide as $key1) {
                    $now=date("Y/m/d");
                    //echo $now;exit();
                    $now1=strtotime($now);
                    //echo $now1;
                    //echo 'a';
                    $ngay_bd=$key1['ngay_bd'];
                    //echo $ngay_bd;exit();
                    $ngay_bd1=strtotime($ngay_bd);
                    //echo $ngay_bd1;exit();
                    $ngay_kt=$key1['ngay_kt'];
                    $ngay_kt1=strtotime($ngay_kt);                  
                    
                    if($ngay_bd1<=$now1 && $ngay_kt1>=$now1){ 
                    ?>
                        <a href="index.php?page_layout=khuyenmai&id=<?php echo $key1['id']?>">
                            <img style ="display:none" 
                            src="admin/<?php echo $key1['anh_km']; ?>" alt=""/> 
                        </a>

                <?php  } }  ?> 
                    
                </div>
                
</div>