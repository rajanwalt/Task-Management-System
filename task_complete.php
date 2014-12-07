<?php include 'db_connect.php';
	date_default_timezone_set("Asia/Kolkata");
	$task_id=$_POST['task_id'];
	$action=$_POST['action_comment'];
	$completed_date=date("Y-m-d h:i:sa");
	//echo $task_name;
	$sql="update task_mng set task_type='Completed',completed_date='$completed_date',action_taken='$action' where id='$task_id'";
	if(mysqli_query($con,$sql)) {
		echo "Task Completed";
	}
	else  {
		echo "Try Again";
	}
		
?>