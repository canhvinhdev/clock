<?php
    
    $sql="select * from danhmuc";
    //echo $sql; exit();
    $cdata = select_list($sql);
    //print_r($cdata);exit();
        
    $q = isset($_REQUEST["q"]) ? $_REQUEST["q"] : ''; 

    $current_page=isset($_GET['page'])?$_GET['page']:1;
    $limit=10;
    $sqlnum="select count(*) as number from sanpham";
    //echo $sqlnum;exit();
    $num = select_one($sqlnum);
    //print_r($num);exit();
    $total_record=$num['number'];
    //echo $total_record;exit();
    $total_page=ceil($total_record/$limit);
    $start=($current_page-1)*$limit;
            
    $sqlpt = "select * from sanpham order by id desc LIMIT $start,$limit";
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
                <li class="breadcrumb-current-item">Quản lý sản phẩm</li>
            </ol>
        </div>
    </header>
    <!-- /Topbar -->
    <div class="list_content">                                    
        <div class="list">
                <form class="navbar-form navbar-left search-form square" role="search" method="post" action="index.php?quanly=sanpham&ac=search">
                <div class="input-group input-group-1 add-on">

                    <input type="text" name="q" class="form-control" placeholder="Nhập từ khóa tìm kiếm..." onfocus="this.placeholder=''"
                           onblur="this.placeholder='Nhập từ khóa tìm kiếm...'">

                    <div class="input-group-btn input-group-btn-1">
                        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                    </div>

                </div>
            </form>
            <div class="btn-admin" style="float: right;">
                <button type="button" class="btn btn-warning"><a style="color:#fff" href="index.php?quanly=sanpham&ac=add">Thêm sản phẩm</a></button>

                <button type="button" class="btn btn-warning"><a style="color:#fff" href="index.php?quanly=sanpham&ac=thongke">Thống kê</a></button>
            </div>
        </div><br/><br/>  

        
        <table class="table table-bordered table-hover">
            <tr>
                <th><strong>STT</strong></th>
                <th style="width: 200px"><strong>Tên sản phẩm</strong></th>
                <th><strong>Ảnh sản phẩm</strong></th>      
                <th><strong>Giá sản phẩm</strong></th> 
                <th><strong>Số lượng</strong></th>       
                <th><strong>Tình trạng</strong></th>
                <th><strong>Trạng thái</strong></th>
                <th><strong>Ngày tạo</strong></th>
                <th><strong>Chi tiết</strong></th>
                <th><strong>Sửa</strong></th>
                <th><strong>Xóa</strong></th>
            </tr>
            <?php 
            $i=$start+1;
            if($datas){
                foreach ($datas as $data){
                

            ?>
            <tr>
                <?php                  
                $sql = "select ten_th from thuonghieu where id=".$data['id_th'];
                $name_th = select_one($sql);?>
                <td  style="text-align: center"><?php echo $i++ ?></td>
                <td  style="width: 200px"><?php echo $data['ten_sp'] ?></td>
        
                <td><img src="<?php echo $data['anh_sp']?>" width="100px"/></td>
                <td><?php echo number_format($data['gia_sp'])?> VNĐ</td>
                <td><?php echo $data['so_luong'] ?> chiếc</td>
                <td><?php
                    if($data['so_luong']>0){
                        echo 'Còn hàng';
                    }
                    else
                        echo 'Hết hàng';
                    ?>                                                
                </td>
                <td style="text-align: center"><a href="index.php?quanly=sanpham&ac=trangthai&id=<?php echo $data['id']?>">
                    <?php if($data['status']==0)echo 'Hiện'; 
                          if($data['status']==1)echo 'Ẩn'; ?>    
                    </a>
                </td>
                <td><?php echo $data['ngay_tao'] ?></td>
                <td  style="text-align: center">
                    <a href="index.php?quanly=sanpham&ac=lietkechitiet&id=<?php echo $data['id']?> "><img src="Images/icon_article_detail.gif" alt=""></a>
                </td>
                <td style="text-align: center"><a href="index.php?quanly=sanpham&ac=edit&id=<?php echo $data['id']?> "><img src="Images/edit.png" alt=""></a></td>

                <td style="text-align: center">
                    <script>
                        function xoasp(){
                        var conf=confirm('Bạn có muốn xóa sản phẩm này không?');
                        return conf;
                        }
                    </script>
                    <a  onclick="return xoasp();" href="index.php?quanly=sanpham&ac=del&id=<?php echo $data['id']?> "><img src="Images/delete.gif" alt=""></a>
                </td>
            </tr>
        <?php } }?>

        </table>

        <div class="phantrang" style="text-align: center">
            <ul  class="pagination">
                <li>
                    <a href="index.php?quanly=sanpham&ac=lietke&page=<?php if($current_page>1){ echo ($current_page-1);} else echo $current_page; ?>">
                    &laquo;</a>
                </li>
                <?php if($total_page>0){for($i=1;$i<=$total_page;$i++){?>
                <li>
                <a href="index.php?quanly=sanpham&ac=lietke&page=<?php echo $i?>"><?php echo $i ?></a></li>
                <?php } } ?>
                <li>
                    <a href="index.php?quanly=sanpham&ac=lietke&page=<?php if($current_page<$total_page){ echo ($current_page+1);} else echo $current_page; ?>">
                        &raquo;</a>
                </li>
            </ul>
            </div>
    </div>