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
//	$qry = "SELECT * FROM users_table WHERE meter_no = '".$_GET['sid']."' "; //Commented this on 12th july 2021

$qry = "SELECT
users_table.`id`,
users_table.`fname`,
users_table.`lname`,
users_table.`meter_no`,
users_table.`qtr_no`,
users_table.`dept`,
users_table.`designation`,
users_table.`email`,
users_table.`mob_no`,

bill_table.`current_reading`,
bill_table.`balance_amt`
     
FROM users_table LEFT OUTER JOIN bill_table  ON
     users_table.`meter_no` = bill_table.`meter_no` 
	 WHERE users_table.`meter_no`='".$_GET['sid']."' ";

	$result = mysqli_query($con, $qry);  //mysql_query($qry);
	while ($row = mysqli_fetch_array($result)) {
		array_push($response, $row);
    }

	echo json_encode($response);
} 
?>
