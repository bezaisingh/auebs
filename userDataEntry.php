
<html>
<body>

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
    

    
<h1>Consumer Master Data Entry Form!</h1>
    
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
      <h3>Enter User Details</h3>
      <form action="queryFiles/addUser.php" method="POST">
        <p>
          <label for="">First Name</label>
          <input type="name" name="fname">
        </p>
          
           <p>
          <label for="">Last Name</label>
          <input type="text" name="lname">
        </p>
          
        <p>
          <label for="">Meter Number</label>
          <input type="number" name="mtrno">
        </p>
        <p>
          <label for="">Quarter Number</label>
          <input type="text" name="qtrno">
        </p>
          
           <p>
          <label for="">Designation</label>
          <input type="text" name="desig">    
          </p>

          <p>
          <label for="">Department</label>
          <input type="text" name="dept">    
        </p>

        <p>
          <label for="">Mobile Number</label>
          <input name="mobno" 
          oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"   
          type = "number"
          maxlength = "10"/>    
        </p>

        <p>
          <label for="">Email Id</label>
          <input type="email" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
        </p>
          
        <p>
          <label for="">User Id</label>
          <input type="text" name="uid">
        </p>
          
            <p>
          <label for="">Password</label>
          <input type="text" name="pwd">
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