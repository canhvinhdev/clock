
<script type="text/javascript" language="javascript" src="modules/ckeditor/ckeditor.js" ></script>
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
                <li class="breadcrumb-current-item">Thêm khuyến mãi cho sản phẩm</li>
            </ol>
        </div>
    </header>
    <!-- /Topbar -->
<form method="post"  enctype="multipart/form-data">

	<table class="table table-hover" >
		
		<tr>
    			<td  style="width: 150px;">Chọn khuyến mãi:</td>
    			<td>
      			<?php
      				$sql_km = "select * from khuyenmai where status=1 or status=2";	
      				$data_km = select_list($sql_km);
      			?>
      				<select name="id_km"  id="id_km_sp">
      				<?php foreach ($data_km as $data_sale){?>
      				<option value="<?php echo $data_sale['id'] ?>"><?php echo $data_sale['ten_km'] ?></option>
      				<?php } ?>
      				</select>
    			</td>
		</tr>
		<tr>
            <td>Sản phẩm</td>
            <td>
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
                
            </td>
        </tr>
		
	</table>
  <div class="km_sp">
    <div class="sanphamchon"></div>
    <br/>
    <div style="margin-left: 450px;" >
        <div  id="themtuong_km" class="btn btn-success">Thêm khuyến mãi</div> 
    </div> 
    </div>
</form>


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