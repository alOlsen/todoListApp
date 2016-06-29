<?php
	include("obj/dbCon.php");

	//Prepare the SQL statement to get
	//all records from database
	$sql = "SELECT * FROM todotasks ORDER BY taskID DESC";
	//Execute SQL command
	$rec = $conn->query( $sql );

	$num = $rec->num_rows;





?>
<!DOCTYPE html>
<html>
	<head>
		<title> TO DO LIST </title>
		<link rel="stylesheet" href="css/normalize.css"/>
		<link rel="stylesheet" href="css/bootstrap.css"/>
		<link rel="stylesheet" href="css/font-awesome.css"/>
		<link rel="stylesheet" href="css/custom.css"/>

	</head>
	<body>

		<div class="container">
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10">
					<form id="todoForm" action="processData.php" method="post">
						<input type="text" class="form-control" placeholder="Text input" id="taskInput" name="taskInput">
						<input type="hidden" name="actionType" value="insert"/>
						<button type="button" class="btn btn-success" id="actionBtn">Success</button>
					</form>
				</div>
				<div class="col-md-1"></div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<ul id="taskList">
<?php
for($i = 0; $i < $num; $i++){
	$row = mysqli_fetch_array($rec);
	echo "<li id='".$row['taskID']."'>";
	echo "<table class='tasksTable'><tr>";
	echo "<td>";
	echo $row['taskName'];
	echo "</td>";
	echo "<td class='taskActions'>";
	echo "<span class='fa fa-check'></span>";
	echo "<span class='fa fa-trash'></span>";
	echo "</td>";
	echo "</tr></table>";
	echo "</li>";
}
?>
					</ul>	
				</div>
			</div>
		</div>
		<script src="js/jquery.min.js"></script>
		<script src="js/custom.js"></script>
		<script src="js/validator.js"></script>
	</body>
</html>