$(document).ready(function(){

	//Focus on the Text Field
	$("#taskInput").focus();
	//READY!
	console.log("Ready!");

	var task = "";

	$("#actionBtn").click(function(){
		console.log( "Click Test : Success" );

		task = $("#taskInput").val();
		//pre clean up
		//Test CLEAN with <script>alert()</script>
		task = cleanUp(task);
		//post clean up
		//When the data is validated and ready to be sent
		if( task != ""){
			$("#todoForm").submit();
		}else{
			alert("Please enter a task");
		}
	});

	$(".taskActions span").click( function(){
		console.log("test click")
		console.log( $(this) );
		console.log( $(this).attr("class") );

		var actionType 	= $(this).attr("class");
		var taskID 	 	= $(this).parent().parent().parent().parent().parent().attr("id");

		if( actionType == "fa fa-trash"){
			console.log( "Clicked on Trash Icon" );
			$.post( "processData.php", { actionType: "delete", taskID: taskID }).done(function( data ) {
				    console.log( JSON.parse(data) );
				  });
		}else if( actionType == "fa fa-check"){
			console.log( "Clicked on Check Icon" );
			$.post( "processData.php", { actionType: "update", taskID: taskID, taskStatus: 1 }).done(function( data ) {
				    data = JSON.parse(data);
				    console.log( data.status );
				    console.log( data.taskID )

				    if( data.status == "update complete"){
				    	$("#"+data.taskID).css("background", "green")
				    }


				  });
		}

		console.log(  );



	})


});