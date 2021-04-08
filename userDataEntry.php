<?php

if(isset($_GET["message"]))
{
    $message=$_GET["message"];
    echo $message;
    echo "
    <script type=\"text/javascript\">
    alert('User data entered successfully');
    </script>";

    
}

?>

<html>
  <title>User Data Entry</title>
  <link rel="shortcut icon" href="resources\favicon.ico">
<head>
        <link rel="stylesheet" type="text/css" href="css/navstyle2.css">
      
<!-- Navigation bar for navstyle.css -->
        <!-- <ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li style="float:right"><a href="#about">Logout</a></li>
       </ul> -->
<!-- Navigation bar for navstyle.css ends here -->
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
           
        <div class=centre>
            <img src="resources/logo.png" alt="Varsity Logo">  
        </div>
    

    
<h2 align="center">Consumer Data Entry Form!</h2>
    
   <!--Old Simple Form-->
<!--<form>
  <label for="fname">First name:</label>&nbsp;
  <input type="text" id="fname" name="fname">&emsp;
    
  <label for="mname">Middle name:</label>&nbsp;
  <input type="text" id="mname" name="mname">&emsp;
    
  <label for="lname">Last name:</label>&nbsp;
  <input type="text" id="lname" name="lname"><br><br>
    
  <label for="mtrno">Meter Number:</label>&nbsp;
  <input type="text" id="mtrno" name="mtrno">&emsp;
    
  <label for="qtrno">Quarter Number:</label>&nbsp;
  <input type="text" id="qtrno" name="qtrno">&emsp;
    
  <label for="desig">Designation:</label>&nbsp;
  <input type="text" id="desig" name="desig"><br><br>
    
  <label for="uid">UserId:</label>&nbsp;
  <input type="text" id="uid" name="uid">&emsp;
    
  <label for="pwd">Password:</label>&nbsp;
  <input type="text" id="pwd" name="pwd"><br>
    
</form>
    
    <button >Submit</button><br>-->
    
    
<!-- Form Starts from here -->  
    <div class="contain">
        <link rel="stylesheet" type="text/css" href="css/gridform.css">

  <div class="wrapper">
    <div class="contacts">
      <h3>AUEBS</h3>

      <ul>
        <li>Assam University Energy Billing System</li>
        <li>Assam University Silchar - 788 011, Assam, India</li>
          <li>update.auwebsite@gmail.com</li>
      </ul>
    </div>

    <div class="form">
      <h3>Enter User Details</h3>
      <form action="queryFiles/addUser.php" method="POST">
        <p>
          <label for="">First Name</label>
          <input type="name" name="fname" required>
        </p>
          
           <p>
          <label for="">Last Name</label>
          <input type="text" name="lname" required>
        </p>
          
        <p>
          <label for="">Meter Number</label>
          <input type="number" name="mtrno" required>
        </p>
        <p>
          <label for="">Quarter Number</label>
          <input type="text" name="qtrno" required>
        </p>
          
           <p>
          <label for="">Designation</label>
          <input type="text" name="desig" required>    
          </p>

          <p>
          <label for="">Department</label>
          <input type="text" name="dept" required>    
        </p>

        <p>
          <label for="">Mobile Number</label>
          <input name="mobno" type = "tel" placeholder="10 digit Number only" pattern="[6-9]{1}[0-9]{3}[0-9]{3}[0-9]{3}" maxlength = "10" required/>    
        </p>

        <p>
          <label for="">Email Id</label>
          <input type="email" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
        </p>
          
        <p>
          <label for="">User Id</label>
          <input type="text" name="uid" required>
        </p>
          
            <p>
          <label for="">Password</label>
          <input type="text" name="pwd" required>
        </p>
          
       <!-- <p class="full-width">
          <label for="">Additional Details (Optional)</label>
          <textarea name="" id="" cols="30" rows="7"></textarea>
        </p>-->
          
        <p class="full-width">
          <button type="submit" name="submit">Save</button>
        </p>
      </form>
    </div>
  </div>
</div>
<!--    Form ends here-->

<div class="footer">
  <p>Copyright &copy AUEBS</p>
</div>

</body>
</html>