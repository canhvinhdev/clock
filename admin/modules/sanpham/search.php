<?php
    $q = isset($_REQUEST["q"]) ? $_REQUEST["q"] : ''; 
    // Nhận Từ khóa cần tìm
   function convert_vi_to_en($str) {
      $str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $str);
      $str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $str);
      $str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $str);
      $str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $str);
      $str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $str);
      $str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $str);
      $str = preg_replace("/(đ)/", 'd', $str);
      $str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'A', $str);
      $str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'E', $str);
      $str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $str);
      $str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'O', $str);
      $str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'U', $str);
      $str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'Y', $str);
      $str = preg_replace("/(Đ)/", 'D', $str);
  //$str = str_replace(" ", "-", str_replace("&*#39;","",$str));

  return $str;
  }

    // Loại bỏ các khoảng trắng đầu và cuối chuỗi Từ khóa
    $qNew = trim($q);

    $arr_qNew = explode(' ', $qNew);
    $qNew = implode('%', $arr_qNew);
    $qNeww=convert_vi_to_en($qNew);
    $current_page=isset($_GET['page'])?$_GET['page']:1;
    $limit=5;
    $tenS = "";
    if($q != 0)
    {
        $tenS = "and  ten_sp like '%".$qNeww."%'";
    }
    $sql = $tenS;
    $sqlnum="select count(*) as number from sanpham where id $sql" ;
    //echo $sqlnum;die;
    //echo $sqlnum;exit();
    $num = select_one($sqlnum);
    $total_record=$num['number'];//Lấy ra tổng số sản phẩm 
    //echo $total_record;
    //exit();
    $total_page=ceil($total_record/$limit);
    //echo $total_page;   
    $start=($current_page-1)*$limit;
    $sql="select * from sanpham where ten_sp like '%".$qNew."%' or ten_sp like '%".$qNeww."%' LIMIT $start,$limit";
    //echo($sql); exit();
    $datas = select_list($sql);
    //print_r($datas);exit();

    ?>

    <div class="head_title">
        <p><br/>Các sản phẩm được tìm thấy với từ khóa: <?php echo $qNew;?></p>
    </div>
    <br/>
    <div class="list_content">
        
            
            <table class="table table-hover" style="width: 100%">
                <tr>
                    <th><strong>Tên sản phẩm</strong></th>
                    <th><strong>Danh mục</strong></th>
                    <th><strong>Thương hiệu</strong></th>
                    <th><strong>Ảnh sản phẩm</strong></th>      
                    <th><strong>Giá sản phẩm</strong></th> 
                    <th><strong>Số lượng</strong></th>       
                    <th><strong>Trạng thái</strong></th>
                    <th><strong>Ngày tạo</strong></th>
                    <th><strong>Sửa</strong></th>
                    <th><strong>Xóa</strong></th>
                    </tr> 
                    <?php 
            
                    if($datas){
                        foreach ($datas as $data){?>
                    <tr>
                    <?php  
                    $sql = "select ten_dm from danhmuc where id=".$data['id_dm'];
                    $name = select_one($sql);
                    $sql = "select ten_th from thuonghieu where id=".$data['id_th'];
                    $name_th = select_one($sql);?>

                        <td><?php echo $data['ten_sp'] ?></td>
                        <td><?php echo $name['ten_dm'] ?></td>
                        <td><?php echo $name_th['ten_th'] ?></td>
                        <td><img src="<?php echo $data['anh_sp']?>" width="100px"/></td>
                        <td><?php echo number_format($data['gia_sp'])?></td>
                        <td><?php echo $data['so_luong'] ?> chiếc</td>
                        <td><?php
                            if($data['so_luong']>0){
                                echo 'Còn hàng';
                            }
                            else
                                echo 'Hết hàng';
                            ?>                                                
                        </td>
                        <td><?php echo $data['ngay_tao'] ?></td>
                        
                        <td><a href="index.php?quanly=sanpham&ac=edit&id=<?php echo $data['id']?> "><img src="Images/edit.png" alt=""></a></td>

                        <td>
                            <a href="index.php?quanly=sanpham&ac=del&id=<?php echo $data['id']?> "><img src="Images/delete.gif" alt=""></a>
                        </td>
                    </tr><?php } }?>
                </table>
            
        </div>
            <ul class="pagination">
                <li>
                    <a href="index.php?quanly=sanpham&ac=search&page=<?php if($current_page>1){ echo ($current_page-1);} else echo $current_page; ?>&q=<?php echo $q?>">
                    &laquo;
                    </a>
                </li>
                <?php if($total_page>0){for($i=1;$i<=$total_page;$i++){?>
                <li>
                    <a href="index.php?quanly=sanpham&ac=search&page=<?php echo $i?>&q=<?php echo $q?> ">
                        <?php echo $i ?>
                    </a>
                </li>
                <?php } } ?>
                <li>
                    <a href="index.php?quanly=sanpham&ac=search&page=<?php if($current_page<$total_page){ echo ($current_page+1);} else echo $current_page; ?>&q=<?php echo $q?>">
                        &raquo;
                    </a>
                </li>
            </ul>
    </div>
