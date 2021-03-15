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
    <title>All Users List</title>
    
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
    
$sql = "SELECT  * FROM users_table";
    
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
            <td>" . $row["fname"]." " . $row["lname"]."</td>
            <td>" . $row["designation"]. "</td>
            <td>" . $row["dept"]. "</td>
            <td>" . $row["mob_no"]. "</td>
            <td>" . $row["email"]. "</td>
            
            
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