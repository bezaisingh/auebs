<?php

// turn on error reporting
error_reporting(1);
ini_set('error_reporting', E_ALL);

// start session
session_start();

// debug session
var_dump($_SESSION);
echo '<br>';
// echo $_SESSION["meter_no"];

//The below codes just prints the session values
// echo '<br>';
// print_r($_SESSION);
// echo '<br>';
// echo("{$_SESSION['meter_no']}"."<br />");

?>

<html>
    <head>

        <title>All Bills List</title>
        
        <link rel="stylesheet" type="text/css" href="gridform.css">
        
    </head>
    
<body align="center"> <!--to align the entire content in centre-->
   
    
    <h1> User Dashboard</h1>
    
    <!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
    
    <!--CSS Code for Table displayed-->
    
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: calibri;
font-size: 20px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
    
    <!--CSS Code for Table displayed ends here-->
    
</head>
<body>
<table>
<tr>
<th>ID</th>
<th>Meter Number</th>
<th>Quarter Number</th>
<th>Name</th>
<th>Designation</th>
<th>Department</th>
<th>Mobile Number</th>
<th>Email ID</th>
<th>Bill Amount</th>
<th>Bill No</th>
<th>Bill Period</th>
<th>Bill date</th>
<th>Units Consumed</th>
<!-- <th>User ID</th>
<th>Password</th> -->

</tr>
<?php
    
    /* To connect to db */
include "dbConn.php";
/*    echo $_SESSION["meter_no"];
    echo '<br>';*/
//$meter_no= $_SESSION["meter_no"];
    echo '<br>';
    
$sql = "SELECT  * FROM bill_table";
    
$result = $conn->query($sql);
    
if($result !== false && $result->num_rows > 0)
    
   /* ($result->num_rows > 0)*/ 
{
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr>
            <td>" . $row["id"] . "</td>
            <td>" . $row["meter_no"] . "</td>
            <td>" . $row["qtr_no"]. "</td>
            <td>" . $row["consumer_name"]."</td>
            <td>" . $row["designation"]. "</td>
            <td>" . $row["dept"]. "</td>
            <td>" . $row["mob_no"]. "</td>
            <td>" . $row["email"]. "</td>
            <td>" . $row["bill_amt"] . "</td>
            <td>" . $row["bill_no"] . "</td>
            <td>" . $row["bill_period"]. "</td>
            <td>" . $row["bill_date"]."</td>  
            <td>" . $row["unit_consumed"] . "</td>             
      </tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>
    
    
    
    </body>
    
</html>