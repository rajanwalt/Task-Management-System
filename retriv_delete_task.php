<?php include 'db_connect.php';
	echo "<link rel='stylesheet' type='text/css' media='screen' href='css-table.css' />";
	$sql = "select * from task_mng where deleted_flag LIKE 'Yes'";
	$res=mysqli_query($con,$sql); 
	echo "<table><thead><tr><th>Deleted Date</th><th>Task Name</th><th>Task Preority</th><th>Created Date</th></tr></thead><tbody>";
	if (mysqli_num_rows($res) > 0) { 
		while($row = mysqli_fetch_assoc($res)) {
			echo "<tr>";
				echo "<td>".$row["deleted_date"]."</td>";
				echo "<td>".$row["task_name"]."</td>";
				echo "<td>".$row["task_preority"]."</td>";
				echo "<td>".$row["create_date"]."</td>";
			echo "</tr>";
		}
	}
	echo "</tbody></table>";	
?>