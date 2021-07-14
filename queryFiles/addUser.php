<?php

// turn on error reporting
error_reporting(1);
ini_set('error_reporting', E_ALL);
//debug session
var_dump($_SESSION);


include '../dbConn.php';

if(isset($_POST["submit"]))
{
    
$Fname=$_POST["fname"];

$Lname=$_POST["lname"];

$QtrNo=$_POST["qtrno"];

$MtrNo=$_POST["mtrno"];

$Desig=$_POST["desig"];

$Dept=$_POST["dept"];

$MobNo=$_POST["mobno"];

$Email=$_POST["email"];

$Uid=$_POST["uid"];

$Pwd=$_POST["pwd"];
    
if(!empty($_POST['uid'])){
    
        $sql="select * from users_table WHERE uid='uid'";
        $sqli_run=mysqli_query($conn,$sql);
    
        if(mysqli_num_rows($sqli_run)>0)
        {
        echo"<script>alert('Email ID already exists')</script>";
        }
    
       else {
    

        $sql="INSERT INTO users_table(fname, lname, meter_no, qtr_no, designation, dept, mob_no, email, uid, pwd) VALUES ('$Fname','$Lname','$MtrNo','$QtrNo','$Desig','$Dept', '$MobNo', '$Email','$Uid','$Pwd')";
            if($conn->query($sql)===TRUE)
                {
                    echo"Record Inserted Successfully";
                    header("location:../userDataEntry.php?message=Success");
                }
                else
                {
                    echo"Error:" . $sql . "<br>" . $conn->error;
                }
                   
    }
     
} 
   
    mysqli_close($conn);
   
}
else
	{
		echo "<script>alert('Password/Email Does not Match')</script>";
    }
   
?>