
<script type="text/javascript" language="javascript" src="modules/ckeditor/ckeditor.js" ></script>
<!-- Topbar -->
<div id="main">
         <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-home"></i> Trang quản trị</a></li>
            <li class="active"><a href="#">Khuyến mãi</a></li>
         </ol>
         <div class="col-xs-12">
            <form class="form-horizontal col-xl-9 col-lg-10 col-md-12 col-sm-12" method="post"  enctype="multipart/form-data" >
            <div class="form-group">
                  <label for="title" class="col-sm-2 control-label required">Chọn khuyến mãi:</label>
                  <div class="col-sm-10">
                    <?php
                        $sql_km = "select * from khuyenmai where status=1 or status=2";	
                        $data_km = select_list($sql_km);
                    ?>
                        <select name="id_km" class="form-control"  id="id_km_sp">
                        <?php foreach ($data_km as $data_sale){?>
                        <option value="<?php echo $data_sale['id'] ?>"><?php echo $data_sale['ten_km'] ?></option>
                        <?php } ?>
                        </select>
                  </div>
               </div>

               <div class="form-group">
                  <label for="title" class="col-sm-2 control-label required">Sản phẩm :</label>
                  <div class="col-sm-10">
                    <?php
                        $sql_sp="select * from sanpham";
                        $datas_sp=select_list($sql_sp); 
                    ?>
                    <?php 
                        foreach ($datas_sp as $dat) { 
                        $id_sp=$dat['id']; 
                        $sql2="SELECT id_sp,tensp_dhct,dongia_dhct, SUM( soluong_dhct )
                        FROM donhangchitiet where id_sp=$id_sp
                        GROUP BY id_sp";
                        $rs=select_one($sql2);
                        $sl=$rs['SUM( soluong_dhct )'];
                        ?>
                        <div style="width: 50%;float: left;">
                        <?php if($sl>0){?>                         
                            <input type="checkbox" class="radio_height" name="sp[]" value="<?php echo $dat['id'] ?>"/> 
                            <?php echo $dat['ten_sp']; }

                            else{ ?>
                            <input type="checkbox" class="radio_height" name="sp[]" value="<?php echo $dat['id'] ?>"/> 
                            <?php echo $dat['ten_sp'];?> 
                            <span style="color:red;">Tồn</span><?php }?>
                            </div>
                   <?php } ?>
                  </div>
               </div>
               <div class="form-group">
                   <label for="content" class="col-sm-2 control-label"></label>
                   <div class="col-sm-offset-2 col-sm-10">
                        <div class="km_sp">
                        <div class="sanphamchon"></div>
                    </div>
                </div>
                
               <div class="form-group">
					<label for="content" class="col-sm-2 control-label"></label>
                     <div class="col-sm-offset-2 col-sm-10">
                        <div id="themtuong_km" class="btn btn-submit"><small><i class="fa fa-plus"></i></small> Thêm mới</div>
                       
                        <a class="btn btn-warning" href="/admin/index.php?quanly=khuyenmai&ac=lietke"><small><i class="fa fa-reply"></i></small> Trở về</a>
                     </div>
                  </div>
            </form>
            </div>
         </div>
    <!-- /Topbar -->



<script src="assets/js/jquery/jquery-1.11.3.min.js"></script>
<script  type="text/javascript" charset="utf-8" async defer>
    $(document).ready(function(){
        $('.radio_height').change(function(e) {
            var data = [];
            $('input[name="sp[]"]:checked').each(function() {
                data.push(this.value);
                
            });
            $.ajax({
                url: "modules/khuyenmai/donghochon.php" ,
                type:'POST',
                data:{'data':data},
                success:function(data){
                $('.sanphamchon').html(data);

            }
        });
    });
        
    });
    $(document).ready(function(){
        $('#themtuong_km').click(function(e){
        var data2=[];
        var id_km = $('#id_km_sp').val();
            $('input[name="danhsachkhuyenmaichon[]"]:checked').each(function() {
              var km_tien = $(this).parents('.kmsp_tien').find('#km_tien');
              var km_tien_new = km_tien.val();
              var id_dh = $(this).parents('.kmsp_tien').find('#id_dh');
              var id = id_dh.val();
              var km_dk = $(this).parents('.kmsp_tien').find('#km_di_kem');
              var km_dk_new = km_dk.val();
               //id.push(this.value);//
        
              var item =  {id_km:id_km,id:id,km_dk:km_dk_new,km_tien:km_tien_new};
             data2.push(item);
        });
          $.ajax({
          url:'modules/khuyenmai/add_san_pham_khuyen_mai.php',
          type:'POST',
          //dataType:'json',
          cache: false,
          data:{'data':data2,},
          success: function(data){

            console.log(data);
            alert(data);

            }
          });
      });
    });
</script>