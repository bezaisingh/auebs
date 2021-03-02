<?php
include '../dbConn.php';

echo "Connected hai bhau";

/*if(isset($_POST["submit"]))
{
$Fname=$_POST["Fname"];
$Mname=$_POST["Mname"];
$Lname=$_POST["Lname"];
$FatName=$_POST["FatName"];
$MotName=$_POST["MotName"];
$gender=$_POST["gender"];
$DOB=$_POST["DOB"];
$Addr=$_POST["Addr"];
$Dist=$_POST["Dist"];
$Pin=$_POST["Pin"];
$Stt=$_POST["Stt"];
$Country=$_POST["Country"];
$MobNo=$_POST["MobNo"];
$AltNo=$_POST["AltNo"];
$emailID=$_POST["emailID"];
$cemailID=$_POST["cemailID"];
$pwd=$_POST["pwd"];
$cpwd=$_POST["cpwd"];

if($pwd==$cpwd)
{
    $sql="select * from register WHERE emailID='$emailID'";
    $sqli_run=mysqli_query($conn,$sql);
    
    if(mysqli_num_rows($sqli_run)>0)
    {
        echo"<script>alert('Email ID already exists')</script>";
    }
    else
    {

        $sql="INSERT INTO register(Fname, Mname, Lname, FatName, MotName, gender, DOB, Addr, Dist, Pin, Stt, Country, MobNo, AltNo, emailID, pwd) VALUES ('$Fname','$Mname','$Lname','$FatName','$MotName','$gender','$DOB','$Addr','$Dist','$Pin','$Stt','$Country','$MobNo','$AltNo','$emailID','$pwd')";
            if($conn->query($sql)===TRUE)
                {
                    echo"Record Inserted Successfully";
                    header("location:form2.html");
                }
                else
                {
                    echo"Error:" . $sql . "<br>" . $conn->error;
                }
                   
    }
    mysqli_close($conn);
}
else
	{
		echo "<script>alert('Password/Email Does not Match')</script>";
    }
}*/
?>