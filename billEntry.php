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
  <title>Bill Entry</title>
  <head>

  <link rel="stylesheet" type="text/css" href="css/navstyle2.css">
  <link rel="stylesheet" href="css/newform.css">
  </head>
<body>
<!-- The lines are important for autofill feature -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->

  <!-- The below 3 lines are same what the above 3 lines are but locally stored -->

  <!-- <link rel="stylesheet" type="text/css" href="css/autofill.css">  -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
<!-- The lines are important for autofill feature ends here -->

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
            <h2>Bill Data Entry Form!</h2> 
        </div>
    
<!-- Form Starts from here -->  

<div class="container">

  <form action="queryFiles/insertBillData.php" method="POST">
        <div class="row">
            <div class="col-25">
              <label for="">Meter Number</label>          
            </div>
            <div class="col-75">
                <!-- <input type="number" id = "meter_no" name="meterNo" required> -->  <!-- Can be Used for Input Box Autofill--> 

<!-- For Meter Select Box Options -->
<select type="number" id = "meter_no" name="meterNo" onchange="autofill()">          
    <option disabled selected>-- Select Meter Number --</option>
    <?php
        include "dbConn.php";  // Using database connection file here
        $records = mysqli_query($conn, "SELECT meter_no From users_table");  // Use select query here 
        while($data = mysqli_fetch_array($records))
        {
            echo "<option value='". $data['meter_no'] ."'>" .$data['meter_no'] ."</option>";  // displaying data in option menu
        }	
    ?>    
  </select>  
<!-- For Meter Select Box Options ends here -->

            </div>
        </div>

  <div class="row">
    <div class="col-25">
        <label for="">Consumer Name</label>          
    </div>
    <div class="col-75">
        <input type="text" id="fname" name="consumerName" input=$consumerName readonly>
    </div>
  </div>

  <div class="row">
    <div class="col-25">
        <label for="">Quarter Number</label>             
    </div>
    <div class="col-75">
        <input type="text" id="qtr_no" name="qtrNo" readonly>
    </div>
  </div>

  <div class="row">
    <div class="col-25">
        <label for="">Department</label>                  
    </div>
    <div class="col-75">
        <input type="text" id="dept" name="dept" readonly>
    </div>
  </div>

  <div class="row">
    <div class="col-25">
        <label for="">Mobile Number</label>                  
    </div>
    <div class="col-75">
        <input type="text" id="mob_no" name="mobNo" readonly>  
    </div>
  </div>

  <div class="row">
    <div class="col-25">
        <label for="">Email Id</label>                  
    </div>
    <div class="col-75">
        <input type="text" id="email" name="email" readonly> 
    </div>
  </div>

  <div class="row">
    <div class="col-25">
          <label for="">Address</label>                     
    </div>
    <div class="col-75">
          <input type="text" id="address" value="Assam University, Silchar" required>    
    </div>
  </div>

  <div class="row">
    <div class="col-25">
          <label for="">Bill Date</label>                
    </div>
    <div class="col-75">
        <input type="date" name="billDate" id="billDate" onchange="addDays()" required>       
    </div>
  </div>

  <!-- <h3 style="color:32A80F" id="duedate_test" align="center"></h3>   -->

  <div class="row">
    <div class="col-25">
          <label for="Start Date">Bill Period</label>                     
    </div>
    
    <div class="col-25">
          <input type="date" name="startDate" id="startDate" onchange="daysDifference()" required>  
    </div>

    <div class="col-25-center">
          <label for="End Date">-- to --</label>                          
    </div>
    <div class="col-25">
          <input type="date" name="endDate" id="endDate" onchange="daysDifference()" required> 
    </div>
  </div>

  <!-- <div class="row">
    <div class="col-25">
          <label for="">End Date</label>                          
    </div>
    <div class="col-75">
          <input type="date" name="endDate" required> 
    </div>
  </div> -->

  <div class="row">
    <div class="col-25">
          <label for="">Number of Days</label>                          
    </div>
    <div class="col-75">
          <input type="number" name="noOfDays" id="noOfDays" readonly>
    </div>
  </div>

     <!-- //To check No of days from bill period  -->
     <!-- <h3 style="color:32A80F" id="result" align="center"></h3>   -->

  <div class="row">
    <div class="col-25">
          <label for="">Current Reading</label>          
    </div>
    <div class="col-75">
          <input type="number" name="currentReading" id="currentReading" onchange="dfferece_in_readings()" onchange="calculateTotal()" onchange="net_Pay_Amt()" required>              
    </div>
  </div>

  <div class="row">
    <div class="col-25">
          <label for="">Previous Reading</label>                        
    </div>
    <div class="col-75">
          <input type="number" name="prevReading" id="prevReading" value="0" required>  
    </div>
  </div>

  <div class="row">
    <div class="col-25">
          <label for="">Difference in Reading</label>                       
    </div>
    <div class="col-75">
          <input type="number" name="diffInReading" id="diffInReading" required>   
    </div>
  </div>

  <div class="row">
    <div class="col-25">
          <label for="">Units Consumed</label>                    
    </div>
    <div class="col-75">
          <input type="number" name="unitsConsumed" id="unitsConsumed" required>  
    </div>
  </div>

  <!-- <div class="row">
    <div class="col-25">
          <label for="">Billable Units</label>                      
    </div>
    <div class="col-75">
         <input type="number" name="billableUnits" required>  
    </div>
  </div> -->

  <div class="row">
    <div class="col-25">
          <label for="">Tariff Category</label>                        
    </div>
    <div class="col-75">
          <input type="text" id="" name="tariffCat" readonly value="Domestic A (Below 5kW)"  required>  
    </div>
  </div>


<!-- /////////////////////////////RATE TABLE SECTION STARTS -->

    <!-- <div class="container mt-4"> -->

      <div class="row">
        <div class="col-25">
          Total Units Consumed:
        </div>
        <div class="col-75">
          <input type="number" value="" class="qty" id="total_units"/>
        </div>
      </div>

      <!-- <br> -->

      <div class="row">
        <div class="col-25">
          Tariff Slabs
        </div>
        <div class="col-25">
          Units in KwH
        </div>
        <div class="col-25">
          Price in ₹
        </div>      
      </div>


<!-- <br> -->
      <div class="row">
        <div class="col-25">
          1. Slab 1
        </div>
        <div class="col-25">
          <input type="number" value="0" class="qty" name="slab1_units" id="slab1_units"/>
        </div>
        <div class="col-25">
          <input type="number" readonly value="0" name="slab1_price" id="slab1_price"/>
        </div>
      </div>
      
       <div class="row my-3">
        <div class="col-25">
          2. Slab 2
        </div>
        <div class="col-25">
          <input type="number" value="0" class="qty" name="slab2_units" id="slab2_units"/>
        </div>
        <div class="col-25">
          <input type="number" readonly value="0" name="slab2_price" id="slab2_price"/>
        </div>
      </div>
      
      <div class="row my-3">
        <div class="col-25">
          3. Slab 3
        </div>
        <div class="col-25">
          <input type="number" class="qty" value="0" name="slab3_price" id="slab3_units"/>
        </div>
        <div class="col-25">
          <input type="number" readonly value="0" name="slab3_price" id="slab3_price"/>
        </div>
      </div>
      
      <!-- <div class="row my-3">
        <div class="col-6">
          4. Slab 4
        </div>
        <div class="col-3">
          <input type="number" class="qty" value="0" id="slab4_units"/>
        </div>
        <div class="col-2">
          <input type="number" readonly value="0" id="slab4_price"/>
        </div>
      </div> -->

      <div class="row my-3">
        <div class="col-25">
          Fixed Charges & Meter Rent
        </div>
        <div class="col-25">
          <input type="number" class="qty" readonly value="1" id="fixedChargesUnits"/>
        </div>
        <div class="col-25">
          <input type="number" readonly value="40" id="fixedChargesPrice"/>
        </div>
      </div>
      
      <div class="row my-4">
      <div class="col-25">
         <!-- //Empty div just for Spacing// -->
        </div>
        <div class="col-25">
         Total Energy Charge ₹:
        </div>
        
        <div class="col-25">
          <input type="number" value="0" name="total_value" id="total_value" readonly>
          <!-- <span id="total_value">0</span> -->
        </div>
      </div>
      
    <!-- </div> -->

<!-- /////////////////////////////RATE TABLE SECTION ENDS -->

<div class="row">
    <div class="col-25">
          <label for="">Due Date</label>                          
    </div>
    <div class="col-75">
          <input type="text" name="dueDate" id="dueDate" readonly>  <!-- NOTE: New Column to be made in DB -->
    </div>
  </div>

<!-- <div class="row">
    <div class="col-25">
          <label for="">Payable Amount Before Due Date</label>                          
    </div>
    <div class="col-75">
          <input type="number" name="payableAmtBfDueDate" required>  
    </div>
  </div>

  <div class="row">
    <div class="col-25">
          <label for="">Payable Amount After Due Date</label>                          
    </div>
    <div class="col-75">
        <input type="number" name="payableAmtAfDueDate" required>
    </div>
  </div>


   <div class="row">
    <div class="col-25">
          <label for="">Supply Voltage Level</label>                        
    </div>
    <div class="col-75">
          <input type="text" name="supplyVoltLvl" required> 
    </div>
  </div>

  <div class="row">
    <div class="col-25">
          <label for="">Connected Load</label>         
    </div>
    <div class="col-75">
        // This javascript is used to limit the max Entry 
          <input name="connectLoad"
            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"   
            type = "number" maxlength = "6" required/>
    </div>
  </div>

  <div class="row">
    <div class="col-25">
          <label for="">Bill Number</label>                      
    </div>
    <div class="col-75">
          <input type="number" name="billNo" required> 
    </div>
  </div>

  <div class="row">
    <div class="col-25">
          <label for="">Meter Status</label>                      
    </div>
    <div class="col-75">
          <input type="text" name="mtrStatus" required>    
    </div>
  </div>

  <div class="row">
    <div class="col-25">
          <label for="">Billing Status</label>                 
    </div>
    <div class="col-75">
          <input type="text" name="billingStatus" required>
    </div>
  </div> -->

  <!-- <div class="row">
    <div class="col-25">
          <label for="">Average Power Factor</label>         
    </div>
    <div class="col-75">
          <input type="number" name="avgPowFactor" required>                  
    </div>
  </div> -->

  <div class="row">
    <div class="col-25">
          <label for="Adjustment Amount">Arrear Amount</label>                      
    </div>
    <div class="col-75">
          <input type="number" step="any" class="dynamic" name="arrearAmt" id="arrearAmt" onchange="net_Pay_Amt()" required>  <!-- NOTE: Column to be Renamed to arrear_amt in DB -->
    </div>
  </div>

  <div class="row">
    <div class="col-25">
          <label for="">Net Payable Amount</label>                      
    </div>
    <div class="col-75">
          <input type="number" class="dynamic" name="netPayAmt" id="netPayAmt" readonly>  <!-- NOTE: New Column to be added in DB -->
    </div>
  </div>

  <div class="row">
    <div class="col-25">
          <label for="">Installment Amount(if any)</label>                      
    </div>
    <div class="col-75">
          <input type="number" class="dynamic" name="instAmt" id="instAmt" onchange="balanceCalc()" required>  <!-- NOTE: New Column to be added in DB -->
    </div>
  </div>

  <div class="row">
    <div class="col-25">
          <label for="">Balance Amount</label>                      
    </div>
    <div class="col-75">
          <input type="number" class="dynamic" name="balAmt" id="balAmt" readonly required>  <!-- NOTE: New Column to be added in DB -->
    </div>
  </div>

  <!-- <div class="row">
    <div class="col-25">
          <label for="">Meter Rent</label>                        
    </div>
    <div class="col-75">
          <input type="number" name="mtrRent" text="50">
    </div>
  </div> -->

  <!-- <div class="row">
    <div class="col-25">
    <label for="">Prepared by</label>                 
    </div>
    <div class="col-75">
          <input type="text" name="prepBy" text="Engineering Section, AUS" required>  
    </div>
  </div> -->

  <br>

  <div class="row">
  <input type="submit" value="Generate Bill" name="save"/>
  </div>
  </form> 
  <!--    Form ends here-->
</div>



<!--Footer-->
<div class="footer1">
    <p>Copyright &copy AUEBS</p>
</div>
    <!--Footer ends-->

</body>

<script text="text/javascript" src="js/functions.js"></script>
<!-- <script text="text/javascript" src="js/rate.js"></script> -->

</html>