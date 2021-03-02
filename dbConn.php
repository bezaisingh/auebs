
<?php
$conn=mysqli_connect('localhost','root','','auebs');

if($conn->connect_error)
{die("Connection failed: ".$conn->connect_error);
}
/*echo"Db Connected Successfully";*/
echo "<br>";
mysqli_select_db($conn,"auebs");
?>