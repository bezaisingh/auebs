<?php
		include "dbConn.php";
		session_start();
		if(isset($_POST['login']))
		{
			$username=$_POST['uid'];
			$password=$_POST['pwd'];
			
			$sql="SELECT * FROM admin_table WHERE uid='$username' AND pwd='$password'";
			$sqli_run=mysqli_query($conn,$sql);
			if(mysqli_num_rows($sqli_run)>0)
			{
				$_SESSION['uid']=$username;
				header("location:billEntry.php");
			}
			else
			{               
        
		  /*For popup window and to redirect to login page*/
                
             echo   '<script type="text/javascript"> 
                        alert("review your answer"); 
                        window.location.href = "login.html";
                        </script>';
			}
				mysqli_close($conn);
		}
		?>