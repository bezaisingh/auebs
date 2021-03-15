<?php

// turn on error reporting
error_reporting(1);
ini_set('error_reporting', E_ALL);

// start session
session_start();

//debug session
var_dump($_SESSION);
echo '<br>';
echo $_SESSION["meter_no"];

//The below codes just prints the session values
echo '<br>';
print_r($_SESSION);
echo '<br>';
echo("{$_SESSION['meter_no']}"."<br />");

?>
<!DOCTYPE html>
<html>
<title>User Dashboard</title>

<head>
        <link rel="stylesheet" type="text/css" href="navstyle2.css">
      
<!-- Navigation bar for navstyle.css -->
        <!-- <ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li style="float:right"><a href="#about">Logout</a></li>
       </ul> -->
<!-- Navigation bar for navstyle.css ends here -->
  </head>
<body align="center"> <!--to align the entire content in centre--> 
<!-- Navigation bar for navstyle2.css -->
<div class="topnav">
  <a class="active" href="home.php">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
  <a style="float:right" href="queryFiles/logout.php">Logout</a>
</div>
 <!-- Navigation bar for navstyle2.css ends here -->
           
         <img src="resources/logo.png" alt="Varsity Logo">      

         <h2>AUEBS</h2>
<h3> User Dashboard</h3> 
<table>
<tr>
<th>Meter Number</th>
<th>Quarter Number</th>
<th>User Name</th>
<th>Units Consumed</th>
<th>Bill Amount</th>
</tr>

<?php
    
    /* To connect to db */
include "dbConn.php";
/*    echo $_SESSION["meter_no"];
    echo '<br>';*/
$meter_no= $_SESSION["meter_no"];
    // echo '<br>';
    
$sql = "SELECT  meter_no,
                qtr_no,
                consumer_name,
                unit_consumed, 
                net_bill_amt_   FROM bill_table where meter_no='$meter_no'";
    
$result = $conn->query($sql);
    
if($result !== false && $result->num_rows > 0)
    
   /* ($result->num_rows > 0)*/ 
{
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr>
            <td>" . $row["meter_no"] . "</td>
            <td>" . $row["qtr_no"]. "</td>
            <td>" . $row["consumer_name"]. "</td>
            <td>" . $row["unit_consumed"]. "</td>
            <td>" . $row["net_bill_amt_"]. "</td>
            
      </tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
   
    </body>


    
</html>

