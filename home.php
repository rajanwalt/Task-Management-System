<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Task Management System</title>
<link rel="stylesheet" href="task_mng.css">
<script type="text/javascript" src="jquery-2.1.1.js"></script>
<script type="text/javascript" src="task_mng.js"></script>
<!-- pop up -->
<script src="jquery.bpopup.min.js"></script>
<link rel='stylesheet' type='text/css'  href='css-table.css' />
</head>
<body>
	<div id="whole_container">
		<div id="menu_header">
			<p id="p_head">Task Management System</p>
		</div>
		<div class="space">
		</div>
		<div id="main">
			<div id="menu_list_details">
					<ul class="box">
						 <li><P id="new_task">NEW TASK</P></li>
						 <li><P id="exit_task" >OPEN TASK</P></li> 
						 <li><P id="close_task" >COMPLETED TASK</P></li>
						 <li><P id="delete_task" >DELETED TASK</P></li>              
					 </ul>
			</div>
			<div id="container">
        		<div id="create_ticket" class="task_div">
					<form id="new-task" action="" method="" enctype='multipart/form-data' name='send'>
						<div class="input_details">
							<input type="text" name="task_name" placeholder="Task Name" class="input_textbox"/>
						</div>
						<div class="input_details">
							<select name="task_type" class="select_input_textbox">
								<option value="">Select Task Priority</option>
								<option value="Low">Low</option>
								<option value="Medium">Medium</option>
								<option value="High">High</option>
							</select>
						</div>
						<div class="input_details">
							<button type="button" name="task_submit" id="task_submit">Create Task</button>
						</div> 
					</form>				
				</div>
				<div id="show_tickets" class="task_div">
					<table>
						<thead>
							<tr><th>Date</th><th>Task Name</th><th>Task Preority</th><th>Complete Task</th><th>Delete Task</th></tr>
						</thead>
						<tbody>
						<?php include 'db_connect.php'; $sql="select * from task_mng where task_type='Open' and deleted_flag LIKE 'No' "; $res=mysqli_query($con,$sql); if (mysqli_num_rows($res) > 0) { while($row = mysqli_fetch_assoc($res)) {?>
						<tr>
							<td><?php echo $row["create_date"];?></td>
							<td><?php echo $row["task_name"];?></td>
							<td><?php echo $row["task_preority"];?></td>
							<td><button type="button" onclick="complete_task(<?php echo $row["id"];?>)">Complete</button></td>
							<td><button type="button" onclick="delete_task(<?php echo $row["id"];?>)">Delete</button></td>
						</tr>
						<?php } }?>
						</tbody>
					</table>
				</div>
				<div id="close_tickets" class="task_div">
            	</div>
				<div id="delete_tickets" class="task_div">
            	</div>
			</div>
		</div>
		<div id="element_to_pop_up">
			<a class="b-close">x</a>
			<form id="register_comment" action="" method="" enctype='multipart/form-data'>
				<div class="input_details">
					<input type="hidden" name="task_id" id="task_id"/>
					<input type="text" name="action_comment" placeholder="Action taken to complete the task" class="input_textbox"  id="action_tkn"/>
				</div>
				<div class="input_details">
					<button type="button" id="comment_submit">Submit</button>
				</div>
		   </form>
		</div> 
	</div>
</body>
</html>
