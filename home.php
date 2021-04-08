<html>
  <title>Home</title>
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
    
<h2 align="center">Select an action from the given below options</h2>

<!-- Form Starts from here -->  
    <div class="contain">
    <link rel="stylesheet" type="text/css" href="css/gridform.css">
      <div class="wrapper">
        <div class="contacts">

          <h3>AUEBS</h3>

            <p1>Assam University Energy Billing System<p1>
            <p1>Assam University Silchar - 788 011, Assam, India<p1>
            <p1>update.auwebsite@gmail.com<p1>

      <!-- <ul>
        <li>Assam University Energy Billing System</li>
        <li>Assam University Silchar - 788 011, Assam, India</li>
          <li>update.auwebsite@gmail.com</li>
      </ul> -->
        </div>

    <div class="form">
        
        <button onclick="location.href = 'userDataEntry.php';" id="btnAdUser" >Add User</button>   
  <br> <br>      
        <button onclick="location.href = 'viewAllUsers.php';" id="btnCreateBillr" >View All Users</button>
  <br> <br>  <br> <br>  
       <button onclick="location.href = 'billEntry.php';" id="btnCreateBillr" >Create Bill</button>
  <br> <br>  
        <button onclick="location.href = 'allBillList.php';" id="btnCreateBillr" >View All Bills</button>           
   
    </div>
  </div>
</div>

<div class="footer">
  <p>Copyright &copy AUEBS</p>
</div>

</body>
</html>