<?php

session_start();

if ($_SESSION["uid"] == null){

  header("location:./admin.html");
}

if(isset($_GET["message"]))
{
    $message=$_GET["message"];
    //echo $message;
    echo "
    <script type=\"text/javascript\">
    alert('User data entered successfully');
    </script>";  
}

setcookie('uid', '',time() - 3600);

?>

<!-- ********************************************************************* -->

<!DOCTYPE html>
<html>
<head>
<title>User Data Entry</title>
    <link rel="shortcut icon" href="resources\favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/navstyle2.css">
    <link rel="stylesheet" href="css/newform.css">
</head>
<body>
    <!-- Navigation bar for navstyle2.css -->
<div class="topnav">
  <a class="active" href="home.php">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
  <a style="float:right" href="queryFiles/logout.php">Logout</a>
</div>
 <!-- Navigation bar for navstyle2.css ends here -->
           
        <div class=center-image>
            <img src="resources/logo.png" alt="Varsity Logo">  
            <h2 align="center">Consumer Data Entry Form!</h2>
        </div>
    

<div class="container">
  <form name="form1" action="queryFiles/addUser.php" method="POST">
  
  <div class="row">
    <div class="col-25">
        <label for="">First Name</label>          
    </div>
    <div class="col-75">
        <input type="text" name="fname" required>
    </div>
  </div>


  <div class="row">
    <div class="col-25">
        <label for="">Last Name</label>          
    </div>
    <div class="col-75">
        <input type="text" name="lname" required>
    </div>
  </div>

  <div class="row">
    <div class="col-25">
        <label for="">Meter Number</label>          
    </div>
    <div class="col-75">
        <input type="number" name="mtrno" maxlength= "8" required>     
    </div>
  </div>

  <div class="row">
    <div class="col-25">
        <label for="">Quarter Number</label>             
    </div>
    <div class="col-75">
        <input type="text" name="qtrno" required> 
    </div>
  </div>

  <div class="row">
    <div class="col-25">
        <label for="">Designation</label>                  
    </div>
    <div class="col-75">
        <input type="text" name="desig" required>  
    </div>
  </div>

  <div class="row">
    <div class="col-25">
        <label for="">Department</label>                  
    </div>
    <div class="col-75">
        <input type="text" name="dept" required>
    </div>
  </div>

  <div class="row">
    <div class="col-25">
        <label for="">Mobile Number</label>                  
    </div>
    <div class="col-75">
        <!-- <input name="mobno" type = "tel" placeholder="10 digit Number only" 
        pattern="[6-9]{1}[0-9]{3}[0-9]{3}[0-9]{3}" maxlength = "10" required/>     -->
        <input id="mobno" name="mobno" type="text" onkeypress="return isNumber(event)" onchange="ValidateNo()" required/>
    </div>
  </div>

  <div class="row">
    <div class="col-25">
        <label for="">Email Id</label>                  
    </div>
    <div class="col-75">
        <input type="email" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required> 
    </div>
  </div>

  <div class="row">
    <div class="col-25">
        <label for="">User Id</label>          
    </div>
    <div class="col-75">
        <input type="text" name="uid" required>          
    </div>
  </div>

  <div class="row">
    <div class="col-25">
        <label for="">Password</label>              
    </div>
    <div class="col-75">
        <input type="text" name="pwd" required> 
    </div>
  </div>

  <div class="row">
    <div class="col-25">
        <label for="">Remarks (if any)</label>                 
    </div>
    <div class="col-75">
        <input type="text" name="remark" id="remark" ></input>  
    </div>
  </div>

  <!-- <div class="row">
    <div class="col-25">
      <label for="country">Country</label>
    </div>
    <div class="col-75">
      <select id="country" name="country">
        <option value="australia">Australia</option>
        <option value="canada">Canada</option>
        <option value="usa">USA</option>
      </select>
    </div>
  </div> -->

  <br>

  <div class="row">
    <input type="submit" name="submit" value="Save">
  </div>
  </form>
</div>

<div class="footer1">
  <p>Copyright &copy AUEBS</p>
</div>

</body>

<script text="text/javascript" src="js/functions.js"></script>

</html>
