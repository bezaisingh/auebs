<?php

// turn on error reporting
error_reporting(1);
ini_set('error_reporting', E_ALL);

// start session
session_start();

// debug session
// var_dump($_SESSION);
// echo '<br>';
// echo $_SESSION["meter_no"];

//The below codes just prints the session values
// echo '<br>';
// print_r($_SESSION);
// echo '<br>';
// echo("{$_SESSION['meter_no']}"."<br />");

?>

<html>
 <title>All Bills List</title>
<div class="topnav">
  <a class="active" href="home.php">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
  <a style="float:right" href="queryFiles/logout.php">Logout</a>
</div>
        
    <head>

        <link rel="stylesheet" type="text/css" href="navstyle2.css">
        
    </head>
    
<body align="center"> <!--to align the entire content in centre-->

    <img src="resources/logo.png" alt="Varsity Logo">      

         <h2>AUEBS</h2>
    <h3>All Bills List</h3>
    
<table>
<tr>
<th>Sl No</th>
<th>Meter Number</th>
<th>Quarter Number</th>
<th>Employee Name</th>
<th>Designation</th>
<th>Department</th>
<!-- <th>Mobile Number</th>
<th>Email ID</th> -->
<th>Bill Amount</th>
<th>Print</th>
<!-- <th>Bill No</th>
<th>Bill Period</th>
<th>Bill date</th>
<th>Units Consumed</th> -->
<!-- <th>User ID</th>
<th>Password</th> -->

</tr>
<?php
    
    /* To connect to db */
include "dbConn.php";
/*    echo $_SESSION["meter_no"];
    echo '<br>';*/
//$meter_no= $_SESSION["meter_no"];
    // echo '<br>';
    
// $sql = "SELECT  * FROM bill_table";

$sql= "SELECT * FROM users_table
                INNER JOIN bill_table ON bill_table.meter_no= users_table.meter_no";
    
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
            <td>" . $row["bill_amt"] . "</td>
            <td><a href = 'receipt.php?id=$row[id]'>Print Bill</td>

                    
      </tr>";

            // <td>" . $row["mob_no"]. "</td>
            // <td>" . $row["email"]. "</td>
            // <td>" . $row["bill_no"] . "</td>
            // <td>" . $row["bill_period"]. "</td>
            // <td>" . $row["bill_date"]."</td>  
            // <td>" . $row["unit_consumed"] . "</td>    
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