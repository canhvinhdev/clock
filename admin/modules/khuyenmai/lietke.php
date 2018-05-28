<?php 

    $sqlpt = "select * from khuyenmai order by id desc";
    //echo #sqlpt;exit();
    $datas = select_list($sqlpt);
    //print_r($datas);exit();     
?>

<div id="main">
      <ol class="breadcrumb" id="step2">
         <li><a href="index.php"><i class="fa fa-home"></i> Trang chủ</a></li>
         <li class="active"><a href="#"Quản lý khuyến mãi</a></li>
      </ol>
      <div class="col-xs-12">
         <form id="admin-form" method="post" action="" role="form">
            <div class="col-xs-12">
               <div class="form-group">
                  <!-- Single button -->
                  <a href="index.php?quanly=khuyenmai&ac=add" class="btn btn-submit"><small><i class="fa fa-plus"></i></small> Thêm khuyến mãi</a>

                  <a href="index.php?quanly=khuyenmai&ac=add_kmsp" class="btn btn-submit"><small><i class="fa fa-plus"></i></small> Thêm sản phẩm khuyến mãi</a>

                  <a href="index.php?quanly=khuyenmai&ac=update" class="btn btn-submit"><small><i class="fa fa-plus"></i></small> Cập nhập trạng thái</a>
               </div>
               <table class="table table-bordered table-hover" id="post">
                  <thead>
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
                  </thead>
                  <tbody>
                  </tr>
                    <?php  $i=1; if($datas){foreach ($datas as $data){ ?>
                     <tr>
                        <td class="hidden-xs"><?php echo $i++ ?></td>
                        <td>
                           <a href="new-post.html"><?php echo $data['ten_km'] ?></a>
                        </td>
                        <td><img src="<?php echo $data['anh_km']?>" width="100px"/></td>
                        <td> <?php echo $data['ngay_bd'] ?> </td>
                        <td><?php echo $data['ngay_kt'] ?></td>
                        <td>
                            <?php if($data['status']==0)echo 'Đã qua khuyến mãi'; 
                                if($data['status']==1)echo 'Đang khuyến mãi';
                                if($data['status']==2)echo 'Sắp bắt đầu khuyến mãi'; ?>
                        </td>

                              <td>
                                 <a href="index.php?quanly=khuyenmai&ac=edit&id=<?php echo $data['id']?>"><i class="fa fa-minus-circle" data-toggle="tooltip" data-placement="top" title="Xóa sản phẩm"></i></a>
                              </td>  

                        <td>
                        <a  onclick="return xoansd();" href="index.php?quanly=khuyenmai&ac=del&id=<?php echo $data['id']?> "><i class="fa fa-minus-circle" data-toggle="tooltip" data-placement="top" title="Xóa sản phẩm"></i></a>
                        </td>
                     </tr>
                     <?php } }?>
                  </tbody>
               </table>
            </div>
         </form>
      </div>
      </div>

<script type="text/javascript">
         
         $(document).ready( function () {
           $('#post').DataTable();
        } );

     </script>
