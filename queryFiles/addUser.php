<?php
include '../dbConn.php';



if(isset($_POST["submit"]))
{
    
$Fname=$_POST["fname"];

$Lname=$_POST["lname"];

$QtrNo=$_POST["qtrno"];

$MtrNo=$_POST["mtrno"];

$Desig=$_POST["desig"];

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
    

        $sql="INSERT INTO users_table(meter_no, qtr_no, fname, lname, designation, uid, pwd) VALUES ('$Fname','$Lname','$MtrNo','$QtrNo','$Desig','$Uid','$Pwd')";
            if($conn->query($sql)===TRUE)
                {
                    echo"Record Inserted Successfully";
                    header("location:../userDataEntry.php");
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