<?php include 'db_connect.php';
	date_default_timezone_set("Asia/Kolkata");
	$task_id=$_POST['task_id'];
	$deleted_date=date("Y-m-d h:i:sa");
	//echo $task_name;
	$sql="update task_mng set deleted_flag='Yes',deleted_date='$deleted_date' where id='$task_id'";
	if(mysqli_query($con,$sql)) {
		echo "Task Deleted";
	}
	else  {
		echo "Try Again";
	}
		
?>