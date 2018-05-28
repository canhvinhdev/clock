    <div class="categori-menu">
        <div class="sidebar-menu-title">
            <h2></i>Tìm kiếm nâng cao</h2>
        </div>
        <div class="sidebar-menu">
            <form action="index.php?page_layout=timkiemnangcao" method="post">
                <table class="table search_nc">
                    <tr>
                        <td colspan="2"> 
                            <select name="danhmuc" style="width: 100%; height: 40px;font-size: 16px;padding: 0 5px;">
                                <option value="">|---------CHỌN DANH MỤC--------|</option>
                                <?php
                                    $query = "select * from danhmuc where parent_id=0";
                                    $result = select_list($query);

                                    foreach ($result as $da){?>
                                        <option class="cate_base" value="" disabled="disabled" >
                                            <?php echo $da['ten_dm'] ?>                                
                                        </option>
                                        <?php $sqlCat = "select * from danhmuc where parent_id=".$da['id'];
                                        
                                        $ca = select_list($sqlCat);  ?> 
                                        <?php foreach($ca as $cas) { ?>
                                            <option <?php if(isset($_POST['danhmuc']) && $_POST['danhmuc'] == $cas['id']) {?> selected="selected" <?php } ?> value="<?php echo $cas['id'] ?>">|----<?php echo $cas['ten_dm'] ?></option>
                                            <?php } ?>
                                    <?php }?>
                            </select>  
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style=" text-align: center;">Chọn giá (VNĐ):</td>
                    </tr>
                    <tr>
                        <td> 
                            <select class="from-to" name="giatu" style="width: 100%;height: 40px;font-size: 16px;padding: 0 5px;">
                                <option <?php if(isset($_POST['giatu']) && $_POST['giatu'] == 0) {?> selected="selected" <?php } ?> value="0">Giá từ:</option>
                                <option <?php if(isset($_POST['giatu']) && $_POST['giatu'] == 500000) {?> selected="selected" <?php } ?> value="500000">500.000</option>
                                <option <?php if(isset($_POST['giatu']) && $_POST['giatu'] == 1000000) {?> selected="selected" <?php } ?> value="1000000">1.000.000</option>
                                <option <?php if(isset($_POST['giatu']) && $_POST['giatu'] == 1500000) {?> selected="selected" <?php } ?>  value="1500000">1.500.000</option>
                                <option <?php if(isset($_POST['giatu']) && $_POST['giatu'] == 2000000) {?> selected="selected" <?php } ?>  value="2000000">2.000.000</option>
                                <option <?php if(isset($_POST['giatu']) && $_POST['giatu'] == 3000000) {?> selected="selected" <?php } ?>  value="3000000">3.000.000</option>
                                <option <?php if(isset($_POST['giatu']) && $_POST['giatu'] == 4000000) {?> selected="selected" <?php } ?>  value="4000000">4.000.000</option>
                                <option <?php if(isset($_POST['giatu']) && $_POST['giatu'] == 5000000) {?> selected="selected" <?php } ?>  value="5000000">5.000.000</option>
                                <option <?php if(isset($_POST['giatu']) && $_POST['giatu'] == 6000000) {?> selected="selected" <?php } ?>  value="6000000">6.000.000</option>
                                <option <?php if(isset($_POST['giatu']) && $_POST['giatu'] == 8000000) {?> selected="selected" <?php } ?>  value="8000000">8.000.000</option>
                                <option <?php if(isset($_POST['giatu']) && $_POST['giatu'] == 10000000) {?> selected="selected" <?php } ?>  value="10000000">10.000.000</option>
                                <option <?php if(isset($_POST['giatu']) && $_POST['giatu'] == 12000000) {?> selected="selected" <?php } ?>  value="12000000">12.000.000</option>
                                <option <?php if(isset($_POST['giatu']) && $_POST['giatu'] == 15000000) {?> selected="selected" <?php } ?>  value="15000000">15.000.000</option>
                            </select>
                        </td>
                        <td>
                            <select class="from-to"  name="giaden"  style="width: 100%;height: 40px;font-size: 16px;padding: 0 5px;">
                                <option <?php if(isset($_POST['giaden']) && $_POST['giaden'] == 0) {?> selected="selected" <?php } ?>  value="0">Giá đến:</option>
                                <option <?php if(isset($_POST['giaden']) && $_POST['giaden'] == 1000000) {?> selected="selected" <?php } ?>  value="1000000">1.000.000</option>
                                <option <?php if(isset($_POST['giaden']) && $_POST['giaden'] == 2000000) {?> selected="selected" <?php } ?>  value="2000000">2.000.000</option>
                                <option <?php if(isset($_POST['giaden']) && $_POST['giaden'] == 3000000) {?> selected="selected" <?php } ?>  value="3000000">3.000.000</option>
                                <option <?php if(isset($_POST['giaden']) && $_POST['giaden'] == 4000000) {?> selected="selected" <?php } ?>  value="4000000">4.000.000</option>
                                <option <?php if(isset($_POST['giaden']) && $_POST['giaden'] == 5000000) {?> selected="selected" <?php } ?>  value="5000000">5.000.000</option>
                                <option <?php if(isset($_POST['giaden']) && $_POST['giaden'] == 6000000) {?> selected="selected" <?php } ?>  value="6000000">6.000.000</option>
                                <option <?php if(isset($_POST['giaden']) && $_POST['giaden'] == 7000000) {?> selected="selected" <?php } ?>  value="7000000">7.000.000</option>
                                <option <?php if(isset($_POST['giaden']) && $_POST['giaden'] == 8000000) {?> selected="selected" <?php } ?>  value="8000000">8.000.000</option>
                                <option <?php if(isset($_POST['giaden']) && $_POST['giaden'] == 10000000) {?> selected="selected" <?php } ?>  value="10000000">10.000.000</option>
                                <option <?php if(isset($_POST['giaden']) && $_POST['giaden'] == 12000000) {?> selected="selected" <?php } ?>  value="12000000">12.000.000</option>
                                <option <?php if(isset($_POST['giaden']) && $_POST['giaden'] == 15000000) {?> selected="selected" <?php } ?>  value="15000000">15.000.000</option>
                                <option <?php if(isset($_POST['giaden']) && $_POST['giaden'] == 20000000) {?> selected="selected" <?php } ?>  value="20000000">20.000.000</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            <input type="submit" value="Tìm kiếm" style="background: #22adc2;border:none;"/>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>