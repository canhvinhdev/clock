<?php 

    $current_page=isset($_GET['page'])?$_GET['page']:1;//Trang hiện tại
    $limit = 20; //Số bản ghi trong một trang
    //Tạo sql
    $sqlnum="select count(*) as number from thuonghieu";
    //echo $sqlnum;exit();
    $rs = select_one($sqlnum);
    $total_record=$rs['number']; 
    //echo $total_record;exit();
    $total_page = ceil($total_record/$limit);
    $start = ($current_page-1) * $limit +1;
    //Tạo sql
    $sqlpt = "select * from thuonghieu order by id desc LIMIT $start,$limit";
    //echo #sqlpt;exit();
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
                <li class="breadcrumb-current-item">Quản lý thương hiệu</li>
            </ol>
        </div>
    </header>
    <!-- /Topbar -->
    <br/><br/>
    <div class="list">
        <div class="toolbar">
                <a href="index.php?quanly=thuonghieu&ac=add">Thêm thương hiệu</a>
        </div>
    </div>
<br/> 
<div class="list_content list_content_th">
    <table  class="table table-hover">
        <tr>   
            <th><b>STT</b></th>
            <th><b>Tên thương hiệu</b></th>
            <th><b>Trạng thái</b></th>
            <th><b>Sửa</b></th>
            <th><b>Xóa</b></th>
        </tr>
        <?php 
        $i=$start;
        
        if($datas){
            foreach ($datas as $data){?>
        <tr>
            <td><?php echo $i++ ?></td>
            <td><?php echo $data['ten_th'] ?></td>
            <td><a href="index.php?quanly=thuonghieu&ac=trangthai&id=<?php echo $data['id']?>">
                <?php if($data['status']==0)echo 'Hiện'; 
                      if($data['status']==1)echo 'Ẩn'; ?>    
                </a>
            </td>
            
            <td><a href="index.php?quanly=thuonghieu&ac=edit&id=<?php echo $data['id']?>"><img src="Images/edit.png" alt=""></a></td>
            <td>
                <script>
                    function xoathuonghieu(){
                    var conf=confirm('Bạn có muốn xóa thương hiệu này không?');
                    return conf;
                    }
                </script>
                <a  onclick="return xoathuonghieu();" href="index.php?quanly=thuonghieu&ac=del&id=<?php echo $data['id']?> "><img src="Images/delete.gif" alt=""></a>
            </td>
        </tr>
        <?php } }?>

    </table>
</div>
<div class="width_swapper">
    
    <ul class="pagination">
        <li>
            <a href="index.php?quanly=thuonghieu&ac=lietke&page=<?php if($current_page>1){ echo ($current_page-1);} else echo $current_page; ?>">
            &laquo;</a>
        </li>
        <?php if($total_page>0){for($i=1;$i<=$total_page;$i++){?>
        <li><a href="index.php?quanly=thuonghieu&ac=lietke&page=<?php echo $i?>"><?php echo $i ?></a></li>
        <?php } } ?>
        <li>
            <a href="index.php?quanly=thuonghieu&ac=lietke&page=<?php if($current_page<$total_page){ echo ($current_page+1);} else echo $current_page; ?>">
                &raquo;</a>
        </li>
    </ul>
</div>          
