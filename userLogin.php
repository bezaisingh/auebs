<html>
    <head>

        <title>AUEBS Login</title>
        
        <link rel="stylesheet" type="text/css" href="style.css">
        
    </head>
    
<body align="center"> <!--to align the entire content in centre-->
    
    
        <div class="topnav">
  <a class="active" href="home.php">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
</div>
 
<style>
    /* Add a black background color to the top navigation */
.topnav {
  background-color: #333;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: #4b5195;
  color: white;
}
         </style>

    <h1>AUEBS</h1>
    <br>
    
    <h2>User Login Page</h2>
    

    
   <!-- <div id = "nav">
        <ul>
            <li><a href="m1.html">Home</a></li>
            <li><a href="Login.html">Sign in</a></li>
            <li><a href="contact.html">Contact Us</a></li>
            

        </ul>
    
    </div>-->

<br> <br> <br> <br> <br> <br> <br>
   <form align="center" action="queryFiles/userlogin.php" method="POST">
       Username : &nbsp;<input type="text" name="uid">  &nbsp; &nbsp;
       Password : &nbsp;<input type="password" name="pwd">
<input type="submit" value="Login" name="login">
<input type="reset" value="Cancel">
   </form>
 
   <a href="#"><u><center>Click here to register</center> <br>

<!--CSS for footer-->
       
<style>
.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: dimgray;
  color: white;
  text-align: center;
}
</style>

<div class="footer">
  <p>Copyright &copy AUEBS</p>
</div>

</body>

</html>