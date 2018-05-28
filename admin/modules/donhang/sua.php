<?php include("edit_exec.php"); ?>
<?php
  $id = isset($_REQUEST["id"]) ? $_REQUEST["id"] * 1 : 0; 
  $sql = "select * from donhang where id= ".$id ;
  $data = select_one($sql);
  ?>

      <script type="text/javascript" language="javascript" src="../ckeditor/ckeditor.js" ></script>
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
                <li class="breadcrumb-current-item">Cập nhật trạng thái đơn hàng</li>
            </ol>
        </div>
    </header>
       
        <form  method="post"  enctype="multipart/form-data">  
          <table class="table table-hover" style="width: 50%;">
            <tr>
              <td>Tình trạng đơn hàng:</td>
              <?php
                function selected($value, $v_compare){
                  if($value==$v_compare)
                      $rs =  'selected="selected"';
                  else
                      $rs = '';
                  return $rs;
                  }
              ?>
              <td>
                <select name="tinhtrang_dh">
                    <option value="0"  <?php echo selected($data['tinhtrang_dh'],'0')  ?> >Chưa chuyển hàng</option>
                    <option value="1" <?php echo selected($data['tinhtrang_dh'],'1')  ?> >Đã chuyển hàng</option>
                </select>
              </td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td><button>Cập nhật</button></td>
            </tr>
                  
          </table>
        </form>
