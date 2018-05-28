<?php 
 	include("../lib_db.php");
?>
<script type="text/javascript" language="javascript" src="modules/ckeditor/ckeditor.js" ></script>
<div class="list_content">
		<table class="table table-hover">
			<h3 align="center">Danh sách sản phẩm chọn</h3>
			
				<tr>
					<th>Tên sản phẩm</th>
					<th>khuyến mãi</th>
				</tr>
				
				<?php					
			 	//echo $_SERVER["SCRIPT_FILENAME"];
			 	if($_REQUEST){
					foreach ($_REQUEST['data'] as $value) {
					$sql = "Select * from sanpham where id =".$value;
					$dh = select_one($sql);
					//print_r($dh);exit();
					?>
						<tr >
							<td><?php echo $dh['ten_sp']; ?>
								
							</td>
						
				            <td class="kmsp_tien">
				            	<input type="checkbox" checked="checked" name="danhsachkhuyenmaichon[]" value="<?php echo $dh['id']; ?>" >
				            	<input type="hidden" id="id_dh" value="<?php echo $dh['id']; ?>">
				                <input   type="number" value="" placeholder="0%" name="giam_gia" id="km_tien" >
				                <input  type="text" placeholder="Khuyến mãi đi kèm" name="km_dikem" id="km_di_kem">
				                
				            </td>			        
				            
				        </tr>

					<?php } }else "";
					?>

		</table>
</div>
	