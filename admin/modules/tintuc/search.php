<?php
    $q = isset($_REQUEST["q"]) ? $_REQUEST["q"] : ''; 

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
        $tenS = "and  tieude_tt like '%".$qNeww."%'";
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
        
            
            <table class="table table-hover">
        <tr>  
            <th><strong>STT</strong></th>
            <th><strong>Tiêu đề tin tức</strong></th>
            <th><strong>Tóm tắt tin tức</strong></th>
            <th><strong>Ảnh tin tức</strong></th>
            <th><strong>Trạng thái</strong></th>
            <th><strong>Ngày tạo</strong></th>
            <th><strong>Sửa</strong></th>
            <th><strong>Xóa</strong></th>
        </tr>
        <?php 
        $i=1;
        if($datas){foreach ($datas as $data){?>

        <tr>
            <td><?php echo $i++ ?></td>
            <td><?php echo $data['tieude_tt'] ?></td>
            <td><?php echo $data['tomtat_tt'] ?></td>
            <td><img src="<?php echo $data['anh_tt']?>" width="100px"/></td>
            <td><a href="index.php?quanly=tintuc&ac=trangthai&id=<?php echo $data['id']?>">
                <?php if($data['status']==0)echo 'Hiện'; 
                      if($data['status']==1)echo 'Ẩn'; ?>    
                </a>
            </td>
            <td><?php echo $data['ngay_tao'] ?></td>
            
            <td><a href="index.php?quanly=tintuc&ac=edit&id=<?php echo $data['id']?> "><img src="Images/edit.png" alt=""></a></td>

            <td>
                <script>
                    function xoatintuc(){
                    var conf=confirm('Bạn có muốn xóa tin tức này không?');
                    return conf;
                    }
                </script>
                <a  onclick="return xoatintuc();" href="index.php?quanly=tintuc&ac=del&id=<?php echo $data['id']?> "><img src="Images/delete.gif" alt=""></a>
            </td>
        </tr><?php } }?>

    </table>

            
</div>
