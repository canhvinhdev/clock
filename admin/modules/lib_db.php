<?php
global $link;
function data_to_sql_update($tbl,$data){
	if (!$tbl || !$data) return "";
	$vals = array();
	foreach ($data as $k=>$v){
		$vals[] = "{$k}=n'" . sql_str($v) . "'";
	}
	$vals = implode(",",$vals);
	return "update {$tbl} set {$vals}";
}
function data_to_sql_insert($tbl,$data){
	if (!$tbl || !$data) return "";
	$fields = array();
	$vals = array();
	foreach ($data as $k=>$v){
		$fields[] = $k;
		$vals[] = "n'" . sql_str($v) . "'";
	}
	$fields = implode(",",$fields);
	$vals = implode(",",$vals);
	return "insert into {$tbl} ({$fields}) values ({$vals})";
}
function logDebug($mess){
	error_log( date('d.m.Y h:i:s') . " $mess \n", 3, "log.log");
}
function connect(){
	global $link;
	if ($link) return 0;
	$link = mysqli_connect('localhost', 'root', '');
	if (!$link) {
	    die('<br/>Khong ket noi duoc: ' . mysqli_error());
	}	
	mysqli_select_db($link,'clock') or die('Could not select database.');
	mysqli_query($link,"SET NAMES 'utf8'");
	//Truy vấn dữ liệu trong đó $link là kết nối đã được tạo tới csdl, SET NAMES 'utf8' câu lệnh truy vấn
}

function close(){
	global $link;
	if($link){
		mysqli_close($link);
		$link = 0;
	}
}
function select_one($sql){
	$data = exec_select($sql);
	if (!$data) return null;
	return $data[0];
}
function select_list($sql){
	return exec_select($sql);
}
function exec_select($sql){
	logDebug("sql=[$sql]");//de fix bug
	connect();
	global $link;
	$ret = isset($ret) ? $ret : "";
	$res = mysqli_query($link,$sql) ;
	$row = array();
	$err = mysqli_error($link);
	//kiem tra
	if ($err){
		print("Khong the select duoc");
		logDebug("Khong the select duoc,ERROR=[" . $err . "]" );
		logDebug(  "COUNT=[0]" );
		return null;
	}
	//Khong co loi
	if ($res ){
		$i = 1;
		$ret = array();
		while( $row = $res->fetch_array(MYSQLI_ASSOC) )
		{				
			$ret[]= $row ;
		}
		$res->free_result();
	}	
	close();
	return $ret;
}
function exec_update($sql){
	logDebug( "<!-- sql=[$sql] -->");//de fix bug
	connect();
	global $link;
	$res = mysqli_query($link,$sql) ;
	$row = array();
	$err = mysqli_error($link);
	if ($err){
		print("Khong thể select duoc,ERROR=[" . $err . "]" );
		print(  "COUNT=[0]" );
		return -1;
	}
	close();
	return 1;
}
function sql_str($val){
	//===Đồng nhất 2 số bằng nhau và cùng kiểu
	if($val === 0)  return '0' ;
	if($val === null) {
		return 'NULL';
	}
	global $link;
	if(!$link) connect();
	if (get_magic_quotes_gpc()) {//tránh bị lỗi SQL Injection
	// stripslashes() hàm này sẽ loại bỏ các ký tự \ trong chuỗi ký tự
		return "" . mysqli_real_escape_string($link,stripslashes($val)) . "" ;
		
	}
	return "" . mysqli_real_escape_string($link,$val)  . "" ;
}
//mysqli_real_escape_string CHỐNG SQL INJECTION CHO PHP
//SQL Injection là một kỹ thuật lợi dụng những lỗ hổng về câu truy vấn lấy dữ liệu của những website không an toàn trên web
//Một dữ liệu khi được thêm vào database có thể có 2 khả năng xấu như sau:

//Một là: dữ liệu đó có chứa các kí tự đặc biệt (ví dụ như dấu ‘ , ” , /, …) làm cho câu query của chúng ta bị lỗi 
//mysqli_real_escape_string hàm để xử lý các biến trước khi đưa vào câu query.

//Magic_quotes_gpc là 1 giá trị tùy chọn bật chế độ tự động thêm ký tự escape vào trước các ký tự đặc biệt như: 
//nháy đơn ('), nháy kép ("), dấu backslash (\) khi nó đc POST hoặc GET từ client lên,
//