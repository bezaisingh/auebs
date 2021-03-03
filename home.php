<html>
<body>

    <div class="topnav">
  <a class="active" href="#home">Home</a>
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
    

    
<h1>Choose Action</h1>

    
    
<!-- Form Starts from here -->  
    <div class="contain">
        <link rel="stylesheet" type="text/css" href="gridform.css">

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
        
     <button onclick="location.href = 'userDataEntry.php';" id="btnAdUser" >Add User</button>
        
       
        <br> <br>
        
        
        <button onclick="location.href = 'billEntry.php';" id="btnCreateBillr" >Create Bill</button>
   
    </div>
  </div>
</div>
<!--    Form ends here-->

    
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