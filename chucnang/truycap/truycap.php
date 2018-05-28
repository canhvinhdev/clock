 <?php
$session=session_id();
$time=time();
$time_check=$time-600; 
$sql="SELECT count(*) as number  FROM nguoitruycap WHERE session='$session'";
//echo $sql;exit();
    //echo $sqlnum;exit();
    $num = select_one($sql);
    $count=$num['number']; 
    //echo $total_record;exit();

if($count==0){
	$sql1="INSERT INTO nguoitruycap(session, time)VALUES('$session', '$time')";
	//echo $sql1;exit();
	$result1=exec_update($sql1);
}
else{
	$sql2="UPDATE nguoitruycap SET time='$time' WHERE session = '$session'";
	$result2=exec_update($sql2);
}
$sql3="SELECT count(*) as number1  FROM nguoitruycap";
$num1 = select_one($sql3);
$count1=$num1['number1']; 

$sql4="DELETE FROM nguoitruycap WHERE time<$time_check";
$data = exec_update($sql4);?>
<div class="box-left">
	<div class="status">
		<p style="font-size: 20px;text-align: center;padding-top: 20px;">Số người đang truy cập</p>
	</div>
	<div class="countuser" align="center"><p style="color:#f981a6;font-size: 20px;"><?php echo $count1 ?></p></div>
</div>