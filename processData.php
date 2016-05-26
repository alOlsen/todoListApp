<?php
 	include("obj/dbCon.php");

 	//echo "Hello";

 	$taskName = $_POST['taskInput'];

 	//echo $taskName;

 	$sql = "INSERT INTO todotasks(taskName) VALUES('".$taskName."')";
 	//echo $sql;

 	$rec = $conn->query( $sql );

 	header("Location:index.php");



?>