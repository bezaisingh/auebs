<?php


// turn on error reporting
error_reporting(1);
ini_set('error_reporting', E_ALL);

// start session
session_start();

// debug session
var_dump($_SESSION);
echo '<br>';
echo $_SESSION["meter_no"];

//The below codes just prints the session values
echo '<br>';
print_r($_SESSION);
echo '<br>';
echo("{$_SESSION['meter_no']}"."<br />");

?>

<html>
    <head>

        <title>AUEBS Login</title>
        
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
font-family: monospace;
font-size: 25px;
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
    echo '<br>';
    
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
    
    
    
    </body>
    
</html>