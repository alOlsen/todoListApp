<?php
 	include("obj/dbCon.php");

 	//echo "Hello";

 	$taskName = $_POST['taskInput'];

 	//echo $taskName;
 	if( $taskName != ""){
	 	$sql = "INSERT INTO todotasks(taskName) VALUES('".$taskName."')";

	 	$rec = $conn->query( $sql );

 		header("Location:index.php");
 	}else{
 		header("Location:error.php");
 	}



?>