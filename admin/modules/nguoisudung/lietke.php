<?php
    
    $sql="select * from nguoisudung";
    //echo $sql; exit();
    $cdata = select_list($sql);
    //print_r($cdata);exit();
        

    $current_page=isset($_GET['page'])?$_GET['page']:1;
    $limit=20;
    $sqlnum="select count(*) as number from nguoisudung";
    //echo $sqlnum;exit();
    $num = select_one($sqlnum);
    //print_r($num);exit();
    $total_record=$num['number'];
    //echo $total_record;exit();
    $total_page=ceil($total_record/$limit);
    $start=($current_page-1)*$limit;
            
    $sqlpt = "select * from nguoisudung order by id desc LIMIT $start,$limit";
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
                <li class="breadcrumb-current-item">Quản lý người sử dụng</li>
            </ol>
        </div>
    </header>
    <!-- /Topbar -->
<div class="list_content">                                    
    <div class="list">
        <div class="toolbar">
                <a href="index.php?quanly=nguoisudung&ac=add">Thêm tài khoản admin</a>
        </div>
    </div><br/>
    <br/><br/>           
    <table  class="table table-hover">
        <tr>  
            <th><strong>STT</strong></th>
            <th><strong>Tên đăng nhập</strong></th>
            <th><strong>Tên đầy đủ</strong></th>
            <th><strong>Hòm thư</strong></th> 
            <th><strong>Số điện thoại</strong></th>
            <th><strong>Phân quyền</strong></th>
            <th><strong>Ngày đăng ký</strong></th>
            <th><strong>Sửa</strong></th>
            <th><strong>Xóa</strong></th>
        </tr>
        <?php 
        $i=$start+1;
        if($datas){
            foreach ($datas as $data){?>
        <tr>
            <td><?php echo $i++ ?></td>
            <td><?php echo $data['tendangnhap'] ?></td>
            <td><?php echo $data['tendaydu'] ?></td>
            <td><?php echo $data['homthu'] ?></td>
            <td><?php echo $data['sodienthoai'] ?></td>
            <td><?php echo $data['phanquyen'] ?></td>
            <td><?php echo $data['ngay_dktv'] ?></td>
                        
            <td><a href="index.php?quanly=nguoisudung&ac=edit&id=<?php echo $data['id']?> "><img src="Images/edit.png" alt=""></a></td>

            <td>
                <script>
                    function xoansd(){
                    var conf=confirm('Bạn có muốn xóa người sử dụng này không?');
                    return conf;
                    }
                </script>
                <a  onclick="return xoansd();" href="index.php?quanly=nguoisudung&ac=del&id=<?php echo $data['id']?> "><img src="Images/delete.gif" alt=""></a>
            </td>
        </tr><?php } }?>

    </table>

<div class="width_swapper">
    <ul class="pagination">
        <li>
            <a href="index.php?quanly=nguoisudung&ac=lietke&page=<?php if($current_page>1){ echo ($current_page-1);} else echo $current_page; ?>">
            &laquo;</a>
        </li>
        <?php if($total_page>0){for($i=1;$i<=$total_page;$i++){?>
        <li><a href="index.php?quanly=nguoisudung&ac=lietke&page=<?php echo $i?>"><?php echo $i ?></a></li>
        <?php } } ?>
        <li>
            <a href="index.php?quanly=nguoisudung&ac=lietke&page=<?php if($current_page<$total_page){ echo ($current_page+1);} else echo $current_page; ?>">
                &raquo;</a>
        </li>
    </ul>
    </div>
</div>