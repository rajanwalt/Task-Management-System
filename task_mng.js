// JavaScript Document
$(document).ready(function(){
	$("#create_ticket").hide();
	$("#show_tickets").hide();
	$("#close_tickets").hide();
	$('#new_task').click(function(){
		$("#create_ticket").show();
		$("#show_tickets").hide();
		$("#close_tickets").hide();
		$("#delete_tickets").hide();
		$(".box li P").css({"color": "#2A2A2A","background-color":"#E9E9E9","border-color":"#444"});   
        $(this).css({"color": "#f4f4f4","background-color":"#83B34C","border-color":"#FAA954"});
	});
	$('#exit_task').click(function(){
		$("#create_ticket").hide();
		$("#show_tickets").show();
		$("#close_tickets").hide();
		$("#delete_tickets").hide();
		$(".box li P").css({"color": "#2A2A2A","background-color":"#E9E9E9","border-color":"#444"});   
        $(this).css({"color": "#f4f4f4","background-color":"#83B34C","border-color":"#FAA954"});
	});
	$('#close_task').click(function(){
		$("#create_ticket").hide();
		$("#show_tickets").hide();
		$("#delete_tickets").hide();
		$("#close_tickets").show();
		$(".box li P").css({"color": "#2A2A2A","background-color":"#E9E9E9","border-color":"#444"});   
        $(this).css({"color": "#f4f4f4","background-color":"#83B34C","border-color":"#FAA954"});
		$("#close_tickets").load('retriv_complete_task.php');
	});
	$('#delete_task').click(function(){
		$("#create_ticket").hide();
		$("#show_tickets").hide();
		$("#close_tickets").hide();
		$("#delete_tickets").show();
		$(".box li P").css({"color": "#2A2A2A","background-color":"#E9E9E9","border-color":"#444"});   
        $(this).css({"color": "#f4f4f4","background-color":"#83B34C","border-color":"#FAA954"});
		$("#delete_tickets").load('retriv_delete_task.php');
	});
	//send data to db
	$("#task_submit").click(function() {
		var form_data = $("#new-task").serialize();
		$.ajax({
			url: "task_create.php",
			type: 'POST',
			data: form_data,
			success: function (data) {
              	//$("#task_submit").html(data);
			  	//$("#task_submit").attr('disabled','disabled');
				alert(data);
				window.location.reload(true);
				
            }
		});
		
	});
	$("#comment_submit").click(function() {
		var form_data2 = $("#register_comment").serialize();
		$.ajax({
			url: "task_complete.php",
			type: 'POST',
			data: form_data2,
			success: function (data) {
              //$("#comment_submit").html(data);
			  //$("#comment_submit").attr('disabled','disabled');
			 //$("#element_to_pop_up").hide();
			  //$("#element_to_pop_up").bPopup().close() ;
			  window.location.reload(true);
            }
			
		});
		
	});
});
function delete_task(id)  {
	var task_id=id;
	var parameters='task_id=' + task_id;
	$.ajax({
			url: "task_delete.php",
			type: 'POST',
			data: parameters,
			success: function (data) {
              	alert(data);
				 window.location.reload(true);
            }
		});
}
function complete_task(id)  {
	$('#element_to_pop_up').bPopup(); 
	document.getElementById("task_id").value=id;
	
}