<?php

// turn on error reporting
error_reporting(1);
ini_set('error_reporting', E_ALL);

// start session
session_start();

// debug session
//var_dump($_SESSION);

		include "../dbConn.php";
	
		if(isset($_POST['login']))
		{
			$username=$_POST['uid'];
			$password=$_POST['pwd'];
			
			$sql="SELECT * FROM users_table WHERE uid='$username' AND pwd='$password'";

			$sqli_run=mysqli_query($conn,$sql);
			if(mysqli_num_rows($sqli_run)>0)
			{

				$meter_no = mysqli_fetch_assoc($sqli_run);
				$_SESSION['meter_no']=$meter_no['meter_no'];
				header("location:../userDashboard.php");
			}
			else
			{               
        
		  /*For popup window and to redirect to login page*/
                
             echo   '<script type="text/javascript"> 
                        alert("Wrong Credentials.. Try again!!!"); 
                        window.location.href = "../index.html";
                        </script>';
			}
				mysqli_close($conn);
		}
		?>