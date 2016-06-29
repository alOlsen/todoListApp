<?php
 	include("obj/dbCon.php");

 	$arr = false;
 	//echo "Hello";
 	$actionType = $_POST['actionType'];

 	switch( $actionType ){
 		case "update":
 				$taskID 		= $_POST['taskID'];
 				$taskStatus 	= $_POST['taskStatus'];

 				$sql = "UPDATE todotasks SET taskStatus = ".$taskStatus." WHERE taskID = ". $taskID;
 				$rec = $conn->query( $sql );

 				$arr['status'] = "update complete";
 				$arr['taskID'] = $taskID;

 			break;
 		case "insert":
 				$taskInput = $_POST['taskInput'];

 				$sql		= "INSERT INTO todotasks(taskName) VALUES('".$taskInput."')";
 				$rec = $conn->query( $sql );
 				$arr['status'] = "insertion complete";
 			break;
 		case "select":

 			break;
 		case "delete":
 				$taskID 		= $_POST['taskID'];
 				$sql = "DELETE FROM todotasks WHERE taskID = ".$taskID;
 				$rec = $conn->query( $sql );

 				$arr['status'] = "delete complete";
 				$arr['taskID'] = $taskID;
 			break;
 	}

 	echo json_encode( $arr );



// 	$taskName = $_POST['taskInput'];

 	//echo $taskName;
 	// if( $taskName != ""){
	 // 	$sql = "INSERT INTO todotasks(taskName) VALUES('".$taskName."')";

	 // 	$rec = $conn->query( $sql );

 	// 	//header("Location:index.php");
 	// }else{
 	// 	//header("Location:error.php");
 	// }



?>