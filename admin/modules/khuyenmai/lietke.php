<?php 

    $sqlpt = "select * from khuyenmai order by id desc";
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
                <li class="breadcrumb-current-item">Quản lý khuyến mãi</li>
            </ol>
        </div>
    </header>
    <div class="btn-admin">
        <button type="button" class="btn btn-warning"><a style="color:#fff" href="index.php?quanly=khuyenmai&ac=add">Thêm khuyến mãi</a></button>

        <button type="button" class="btn btn-warning"><a style="color:#fff" href="index.php?quanly=khuyenmai&ac=add_kmsp">Thêm sản phẩm khuyến mãi</a></button>
        <button type="button" class="btn btn-warning"><a style="color:#fff" href="index.php?quanly=khuyenmai&ac=update">Cập nhập trạng thái</a></button>
    </div>
<br/>
<div class="list_content">
    <table   class="table table-hover">
        <tr>   
            <th><b>STT</b></th>
            <th><b>Tên khuyến mãi</b></th>
            <th><b>Ảnh khuyến mãi</b></th>
            <th><b>Ngày bắt đầu</b></th>
            <th><b>Ngày kết thúc</b></th>
            <th><b>Trạng thái</b></th>
            <th><b>Sửa</b></th>
            <th><b>Xóa</b></th>
        </tr>
        <?php 
        $i=1;
        
        if($datas){
            foreach ($datas as $data){
                
            ?>
        <tr>
            <td><?php echo $i++ ?></td>
            <td><?php echo $data['ten_km'] ?></td>
            <td><img src="<?php echo $data['anh_km']?>" width="100px"/></td>
            <td><?php echo $data['ngay_bd'] ?></td>
            <td><?php echo $data['ngay_kt'] ?></td>
            <td>
                <?php if($data['status']==0)echo 'Đã qua khuyến mãi'; 
                      if($data['status']==1)echo 'Đang khuyến mãi';
                      if($data['status']==2)echo 'Sắp bắt đầu khuyến mãi'; ?>    
           
            </td>
            <td><a href="index.php?quanly=khuyenmai&ac=edit&id=<?php echo $data['id']?>"><img src="Images/edit.png" alt=""></a></td>
            <td>
                <script>
                    function xoansd(){
                    var conf=confirm('Bạn có muốn xóa khuyến mãi này không?');
                    return conf;
                    }
                </script>
                <a  onclick="return xoansd();" href="index.php?quanly=khuyenmai&ac=del&id=<?php echo $data['id']?> "><img src="Images/delete.gif" alt=""></a>
            </td>
        </tr>
        <?php } }?>

    </table>
</div> 
