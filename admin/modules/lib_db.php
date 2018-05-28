<?php
global $link;
function data_to_sql_update($tbl,$data){
	if (!$tbl || !$data) return "";
	$fields = array();
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
	mysqli_select_db($link,'donghotot') or die('Could not select database.');
	mysqli_query($link,"SET NAMES 'utf8'");
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
	//$res = $link->query($sql);
	//Truy vấn dữ liệu trong đó $link là kết nối đã được tạo tới csdl, $sql câu lệnh truy vấn
	$row = array();
	//Lay loi sau khi thuc hien truy van
	$err = mysqli_error($link);////mysqli_error() trả ra một chuỗi mô tả lỗi
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
		//Đọc từng dòng dữ liệu và lặp cho tới hết bảng dữ liệu
		//while( $row = mysqli_fetch_array($res,MYSQL_ASSOC) )
		while( $row = $res->fetch_array(MYSQLI_ASSOC) )//Biểu thức điều kiện để dừng vòng lặp, nếu biểu thức sai thì dừng vòng lặp
		{				
			$ret[]= $row ;
		}
		//mysql_free_result($res);
		$res->free_result();//Giải phóng bộ nhớ ở cuối mỗi lệnh SELECT
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
	if($val === 0)  return '0' ;
	if($val === null) {
		return 'NULL';
	}
	global $link;
	if(!$link) connect();
	if (get_magic_quotes_gpc()) {
		return "" . mysqli_real_escape_string($link,stripslashes($val)) . "" ;
		
	}
	return "" . mysqli_real_escape_string($link,$val)  . "" ;
}