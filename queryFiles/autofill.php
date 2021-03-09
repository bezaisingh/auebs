<?php
header('Content-Type: application/json');
$response = array();
if (isset($_GET['sid']))
{
	// $con=mysqli_connect("localhost", "root", "", "my_db_student_table");
	$con=mysqli_connect("localhost", "root", "", "auebs");
	if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	// $qry = "SELECT * FROM student_table WHERE id = '".$_GET['sid']."' ";
	$qry = "SELECT * FROM users_table WHERE meter_no = '".$_GET['sid']."' ";
	$result = mysqli_query($con, $qry);  //mysql_query($qry);
	while ($row = mysqli_fetch_array($result)) {
		array_push($response, $row);
    }

	echo json_encode($response);
} 
?>
