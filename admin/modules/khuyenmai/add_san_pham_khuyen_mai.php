<?php 
include ("../lib_db.php");
$i = 0;
foreach($_POST['data'] as $item){
    $res[] = $item;
    $id_sp = $res[$i]['id'];
    //echo $id_dh;die();
    $id_km = $res[$i]['id_km'];
      //echo $id_km;exit();
    $km_dk = $res[$i]['km_dk'];
    $km_tien = $res[$i]['km_tien']; 
    //echo "ok";

    $result = 0;
    $a = 0;
if($id_km>0){
        $km="select spkm.id_sp,spkm.id_km,km.* from sp_km spkm,khuyenmai km where spkm.id_km=km.id";
         //echo $km;die();
        $kmsql=select_list($km);
        //print_r($kmsql);exit();
        foreach ($kmsql as $key) 
        {   
            $sqsl="select * from khuyenmai where id=".$id_km;
            //echo $sqsl;exit();
            $rkm=select_one($sqsl);
            //print_r($rkm);exit();
            $now=date("Y/m/d");
            //echo date('d/m/Y - H:i:s');;exit();
            $now1=strtotime($now);
            $ngay_bd=strtotime($rkm['ngay_bd']);
            $ngay_kt=strtotime($rkm['ngay_kt']);   

            $ngay_bd1=strtotime($key['ngay_bd']);
            $ngay_kt1=strtotime($key['ngay_kt']);                  
            //nếu cùng trong 1 tgian khuyến mãi,kiểm tra các trạng thái 
            if($ngay_bd<=$now1 && $ngay_kt>=$now1 && $ngay_bd1<=$now1 && $ngay_kt1>=$now1&&$ngay_bd<=$now1&&$key['id_sp']==$id_sp){
                  $err = "Sản phẩm đang trong chương trình khuyến mãi mời chọn sản phẩm khác";  
                  //echo $err['sale'];exit();
                  $a ++; 
            }
        }    
    }
    if ($a == 0 ) {
        $sqlSPKM="insert into sp_km(id_sp,id_km,giam_gia,km_dikem) values ($id_sp ,$id_km,$km_tien,'{$km_dk}')";
         //echo $sqlSPKM;
        $result = exec_update($sqlSPKM);

    }
    $i++;
}
    if (isset($err)) {
        echo $err;
    }
    else
   {
  
     echo 'Bạn đã thêm thành công khuyến mãi'; 
   }
 ?>
  