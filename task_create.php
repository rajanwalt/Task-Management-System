<?php include 'db_connect.php';
	date_default_timezone_set("Asia/Kolkata");
	$task_name=$_POST['task_name'];
	$task_type=$_POST['task_type'];
	$create_date=date("Y-m-d h:i:sa");
	//echo $task_name;
	$sql="insert into task_mng(task_name,task_preority,create_date,task_type,deleted_flag) values ('$task_name','$task_type','$create_date','Open','No')";
	if(mysqli_query($con,$sql)) {
		echo "Task Created";
	}
	else  {
		echo "Try Again";
	}
		
?>