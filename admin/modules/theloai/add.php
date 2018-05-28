<?php include("add_exec.php"); ?>
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
                <li class="breadcrumb-current-item">Thêm thể loại</li>
            </ol>
        </div>
    </header>

<form method="post"  enctype="multipart/form-data">

	<table class="table table-hover">
		<tr>
			<td>Tên thể loại:</td>
			<td><input type="text" name="ten_tl"  value="" size="30" required="required"/>
            <?php
                if($_POST){echo '<span style="color:red">'.$err['tl']."<br/> </span>";}   
            ?>
            </td>
		</tr>
		<tr>
			<td>Trạng thái:</td>
			<td>
				<input type="radio" class="first radio_height" name="status" value="0" checked="checked" />Hiện
                <input type="radio" class="radio_height" name="status" value="1"/>Ẩn
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><button>Thêm</button></td>
		</tr>	
	</table>
</form>
