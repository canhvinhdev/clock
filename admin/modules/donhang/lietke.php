<?php
    
    $sql="select * from donhang";
    //echo $sql; exit();
    $cdata = select_list($sql);
    //print_r($cdata);exit();
        

    $current_page=isset($_GET['page'])?$_GET['page']:1;
    $limit=15;
    $sqlnum="select count(*) as number from donhang";
    //echo $sqlnum;exit();
    $num = select_one($sqlnum);
    //print_r($num);exit();
    $total_record=$num['number'];
    //echo $total_record;exit();
    $total_page=ceil($total_record/$limit);
    $start=($current_page-1)*$limit;
            
    $sqlpt = "select * from donhang order by id desc LIMIT $start,$limit";
    //echo $sqlpt;exit();
    $datas = select_list($sqlpt);
    //print_r($datas);exit();
?>
<!-- Topbar -->
    <header id="topbar" class="alt">
        <div class="topbar-left">
            <ol class="breadcrumb">
                <li class="breadcrumb-icon">
                    <a href="index.php">
                        <span class="fa fa-home"></span>
                    </a>
                </li>
                <li class="breadcrumb-link">
                    <a href="index.php">Home</a>
                </li>
                <li class="breadcrumb-current-item">Quản lý đơn hàng</li>
            </ol>
        </div>
    </header>
    
<div class="list_content">                                    

    <br/><br/>           
    <table class="table table-hover">
        <tr> 
            <th><strong>STT</strong></th>
            <th><strong>Tài khoản</strong></th>
            <th><strong>Tên người nhận</strong></th>
            <th><strong>Hòm thư</strong></th> 
            <th><strong>Số điện thoại</strong></th>
            <th><strong>Địa chỉ nhận</strong></th>
            <th><strong>Ngày giờ đặt hàng</strong></th>
             <th><strong>Trạng thái đặt hàng</strong></th>
            <th><strong>Chi tiết</strong></th>
            <th><strong>Sửa</strong></th>
            <th><strong>Xóa</strong></th>
        </tr>
        <?php 
        $i=$start+1;
        if($datas){
            foreach ($datas as $data){
              $a=$data['id_nsd']; 
              $sql2="SELECT tendangnhap FROM nguoisudung WHERE id='$a'";
                $dt=select_one($sql2);
              ?>
        <tr>
            <td><?php echo $i++ ?></td>
            <td><?php echo $dt['tendangnhap'] ?></td>
            <td><?php echo $data['ten_ndh'] ?></td>
            <td><?php echo $data['homthu'] ?></td>
            <td><?php echo $data['sdt'] ?></td>
            <td><?php echo $data['diachi_nhan'] ?></td>
            <td><?php echo $data['ngaygio_dh'] ?></td>
            <td><a href="index.php?quanly=donhang&ac=trangthai&id=<?php echo $data['id']?>">
                <?php if($data['tinhtrang_dh']==0)echo 'Chưa chuyển hàng'; 
                      if($data['tinhtrang_dh']==1)echo 'Đã chuyển hàng'; ?>    
                </a>
            </td>
            <td>
                <a href="index.php?quanly=donhang&ac=lietkechitiet&id=<?php echo $data['id']?> "><img src="Images/icon_article_detail.gif" alt=""></a>
            </td>          
            <td><a href="index.php?quanly=donhang&ac=sua&id=<?php echo $data['id']?> "><img src="Images/edit.png" alt=""></a></td>

            <td>
                <script>
                    function xoadonhang(){
                    var conf=confirm('Bạn có muốn xóa đơn hàng này không?');
                    return conf;
                    }
                </script>
                <a  onclick="return xoadonhang();" href="index.php?quanly=donhang&ac=del&id=<?php echo $data['id']?> "><img src="Images/delete.gif" alt=""></a>
            </td>
        </tr><?php } }?>

    </table>

<div class="width_swapper">
    <ul class="pagination">
        <li>
            <a href="index.php?quanly=donhang&ac=lietke&page=<?php if($current_page>1){ echo ($current_page-1);} else echo $current_page; ?>">
            &laquo;</a>
        </li>
        <?php if($total_page>0){for($i=1;$i<=$total_page;$i++){?>
        <li><a href="index.php?quanly=donhang&ac=lietke&page=<?php echo $i?>"><?php echo $i ?></a></li>
        <?php } } ?>
        <li>
            <a href="index.php?quanly=donhang&ac=lietke&page=<?php if($current_page<$total_page){ echo ($current_page+1);} else echo $current_page; ?>">
                &raquo;</a>
        </li>
    </ul>
    </div>
</div>