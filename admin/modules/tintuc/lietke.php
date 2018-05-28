<?php    
    $current_page=isset($_GET['page'])?$_GET['page']:1;
/*    $limit=6;
    $sqlnum="select count(*) as number from tintuc";
    //echo $sqlnum;exit();
    $num = select_one($sqlnum);
    //print_r($num);exit();
    $total_record=$num['number'];
    //echo $total_record;exit();
    $total_page=ceil($total_record/$limit);
    $start=($current_page-1)*$limit;*/
                
    $sqlpt = "select * from tintuc order by id desc";
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
                <li class="breadcrumb-current-item">Quản lý tin tức</li>
            </ol>
        </div>
    </header>
<div class="list_content">                                    
    <div class="list">
        <div class="toolbar">
                <a href="index.php?quanly=tintuc&ac=add">Thêm tin tức</a>
        </div>
    </div><br/> 
    <br/><br/>         
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

