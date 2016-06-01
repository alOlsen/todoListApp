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
});