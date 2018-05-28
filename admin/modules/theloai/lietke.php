<?php 

   /* $current_page=isset($_GET['page'])?$_GET['page']:1;//Trang hiện tại
    $limit = 10; //Số bản ghi trong một trang
    //Tạo sql
    
    $sqlnum="select count(*) as number from theloai";
    //echo $sqlnum;exit();
    $num = select_one($sqlnum);
    $total_record=$num['number']; 
    //echo $total_record;exit();
    $total_page = ceil($total_record/$limit);
    $start = ($current_page-1) * $limit +1;
    //Tạo sql*/
    $sqlpt = "select * from theloai order by id desc";
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
                <li class="breadcrumb-current-item">Quản lý thể loại</li>
            </ol>
        </div>
    </header>
    <!-- /Topbar -->
<div class="list">
    <div class="toolbar">
            <a href="index.php?quanly=theloai&ac=add">Thêm thể loại</a>
    </div>
</div>
<br/> 
<div class="list_content">
    <table   class="table table-hover">
        <tr>   
            <th><b>STT</b></th>
            <th><b>Tên thể loại</b></th>
            <th><b>Trạng thái</b></th>
            <th><b>Sửa</b></th>
            <th><b>Xóa</b></th>
        </tr>
        <?php 
        $i=1;
        
        if($datas){
            foreach ($datas as $data){?>
        <tr>
            <td><?php echo $i++ ?></td>
            <td><?php echo $data['ten_theloai'] ?></td>
            <td><a href="index.php?quanly=theloai&ac=trangthai&id=<?php echo $data['id']?>">
                <?php if($data['status']==0)echo 'Hiện'; 
                      if($data['status']==1)echo 'Ẩn'; ?>    
                </a>
            </td>
            <td><a href="index.php?quanly=theloai&ac=edit&id=<?php echo $data['id']?>"><img src="Images/edit.png" alt=""></a></td>
            <td>
                <script>
                    function xoatl(){
                    var conf=confirm('Bạn có muốn xóa thể loại này không?');
                    return conf;
                    }
                </script>
                <a  onclick="return xoatl();" href="index.php?quanly=theloai&ac=del&id=<?php echo $data['id']?> "><img src="Images/delete.gif" alt=""></a>
            </td>
        </tr>
        <?php } }?>

    </table>
</div>     

