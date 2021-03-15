<html>
  <title>Bill Entry</title>
  <head>

  <link rel="stylesheet" type="text/css" href="navstyle2.css">

  </head>
<body>
<!-- The lines are important for autofill feature -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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

<!-- javascript code for autofill     -->

<script type="text/javascript">
        $(document).ready(function() {
            $('#meter_no').keyup(function() {
                var sid = $(this).val();
				//alert(sid);
                var data_String = 'sid=' + sid;
                $.get('queryFiles/autofill.php', data_String, function(result) {

                    $.each(result, function(){
                        $('#id').val(this.id);
                        $('#meter_no').val(this.meter_no);
                        $('#qtr_no').val(this.qtr_no);
                         $('#fname').val(this.fname +' '+ this.lname) ;
						             $('#lname').val(this.lname);
					            	 $('#designation').val(this.designation);
						             $('#dept').val(this.dept);
                         $('#mob_no').val(this.mob_no);
						             $('#email').val(this.email);
					            
                    });

                    $consumerName= "Bijay";


                });
            });
        });
    </script>

<!-- javascript code for autofill ends here -->

<h1>Bill Data Entry Form!</h1>    
    
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
      <h3>Enter Bill Details</h3>
      <form action="queryFiles/insertBillData.php" method="post">
          
          
                 <!-- ////////////// DROP DOW OF METER///////////////////-->
<!-- <p>
           <label for="">Meter Number</label>              
 <select>          
    <option disabled selected>-- Select Meter Number --</option>
  //  <?php
    //    include "dbConn.php";  // Using database connection file here
      //  $records = mysqli_query($conn, "SELECT meter_no From users_table");  // Use select query here 
       // while($data = mysqli_fetch_array($records))
        //{
          //  echo "<option value='". $data['meter_no'] ."'>" .$data['meter_no'] ."</option>";  // displaying data in option menu
        //}	
    ?>    
  </select>       
       <p>    
--> 
          <!--////////////////DROP DOW OF METER ENDS HERE////////////////-->
          
      <p>
          <label for="">Meter Number</label>
          <input type="number" id = "meter_no" name="meterNo">
        </p>
          
        <p>
          <label for="">Consumer Name</label>
          <input type="text" id="fname" name="consumerName" input=$consumerName readonly>
        </p>          
                
     <p>
          <label for="">Quarter Number</label>
          <input type="text" id="qtr_no" name="qtrNo" readonly>
        </p>
          
         <p>
          <label for="">Designation</label>
           <input type="text" id="designation" name="desig" readonly>  
          </p>    
          
          <p>
          <label for="">Department</label>
           <input type="text" id="dept" name="dept" readonly>  
          </p> 

          <p>
          <label for="">Mobile Number</label>
           <input type="text" id="mob_no" name="mobNo" readonly>  
          </p> 

          <p>
          <label for="">Email Id</label>
           <input type="text" id="email" name="email" readonly>  
          </p> 
               
        <p>
          <label for="">Tariff Category</label>
          <input type="text" id="" name="tariffCat">
        </p>
          
            <p>
          <label for="">Supply Voltage Level</label>
          <input type="text" name="supplyVoltLvl">
        </p>
          
            <p>
          <label for="">Connected Load</label>
          <!-- This javascript is used to limit the max Entry -->
          <input name="connectLoad"
          oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"   
    type = "number"
    maxlength = "6"/>
        </p>
          
            <p>
          <label for="">Bill Amount</label>
          <input type="number" name="billAmt">
        </p>
          
            <p>
          <label for="">Bill Number</label>
          <input type="number" name="billNo">
        </p>
          
            <p>
          <label for="">Bill Period</label>
          <input type="text" name="billPeriod">
        </p>
          
            <p>
          <label for="">Bill Date</label>
          <input type="date" name="billDate">
        </p>
          
            <p>
          <label for="">Number of Days</label>
          <input type="number" name="noOfDays">
        </p>
          
            <p>
          <label for="">Meter Status</label>
          <input type="text" name="mtrStatus">
        </p>
          
            <p>
          <label for="">Billing Status</label>
          <input type="text" name="billingStatus">
        </p>
          
            <p>
          <label for="">Address</label>
          <input type="text" name="address">
        </p>
          
            <p>
          <label for="">Reading Type</label>
          <input type="text" name="readingType">
        </p>
          
            <p>
          <label for="">Previous Reading</label>
          <input type="number" name="prevReading">
        </p>
          
            <p>
          <label for="">Current Reading</label>
          <input type="number" name="currentReading">
        </p>
          
            <p>
          <label for="">Difference in Reading</label>
          <input type="number" name="diffInReading">
        </p>
          
            <p>
          <label for="">Units Consumed</label>
          <input type="number" name="unitsConsumed">
        </p>
          
            <p>
          <label for="">Billable Units</label>
          <input type="number" name="billableUnits">
        </p>
          
            <p>
          <label for="">Recorded Demand</label>
          <input type="number" name="recordDemand">
        </p>
          
           <p>
          <label for="">Max Demand</label>
          <input type="number" name="maxDemand">
        </p>
          
          
          
           <p>
          <label for="">Billing Demand</label>
          <input type="number" name="billingDemad">
        </p>
          
           <p>
          <label for="">Average Power Factor</label>
          <input type="number" name="avgPowFactor">
        </p>
          
           <p>
          <label for="">Power on Hours</label>
          <input type="number" name="powOnHrs">
        </p>
          
           <p>
          <label for="">Availability Percent</label>
          <input type="text" name="availPercent">
        </p>
          
           <p>
          <label for="">Current Demand</label>
          <input type="number" name="currentDemand">
        </p>
          
           <p>
          <label for="">Outstanding Demand</label>
          <input type="number" name="outstandingDemand">
        </p>
          
           <p>
          <label for="">Adjustment Amount</label>
          <input type="number" name="adjAmt">
        </p>
          
           <p>
          <label for="">Net Bill Amount</label>
          <input type="number" name="netBillAmt">
        </p>
          
           <p>
          <label for="">Net Bill Amount in Words</label>
          <input type="text" name="netBillInWords">
        </p>
          
             <p>
          <label for="">Rate</label>
          <input type="number" name="rate">
        </p>
          
          
             <p>
          <label for="">Energy Charge</label>
          <input type="number" name="energyCharge">
        </p>
          
          
             <p>
          <label for="">Total Energy Charge</label>
          <input type="number" name="totEnergyCharge">
        </p>
          
          
             <p>
          <label for="">Demand Fixed Charge</label>
          <input type="number" name="demandFixedCharge">
        </p>
          
          
             <p>
          <label for="">Electricity Duty</label>
          <input type="number" name="electricityDuty">
        </p>
          
          
             <p>
          <label for="">Meter Rent</label>
          <input type="number" name="mtrRent">
        </p>
          
          
             <p>
          <label for="">Arrear Principle</label>
          <input type="number" name="arrPrinciple">
        </p>
          
                  <p>
          <label for="">Arrear Surcharge</label>
          <input type="number" name="arrSurcharge">
        </p>
          
          
        <p>
          <label for="">Current Surcharge</label>
          <input type="number" name="currSurcharge">
        </p>
          
          
        <p>
          <label for="">Miscellaneous Arrear</label>
          <input type="number" name="miscArrear">
        </p>
          
          
        <p>
          <label for="">Payable Amount Before Due Date</label>
          <input type="number" name="payableAmtBfDueDate">
        </p>
          
          
                  <p>
          <label for="">Payable Amount After Due Date</label>
          <input type="number" name="payableAmtAfDueDate">
        </p>
          
          
                  <p>
          <label for="">Prepared by</label>
          <input type="text" name="prepBy">
        </p>
          
          
                  <p>
          <label for="">Consumer Category</label>
          <input type="text" name="consumerCat">
        </p>
          
          
                  <p>
          <label for="">Start Date</label>
          <input type="date" name="startDate">
        </p>
          
          
        <p>
          <label for="">End Date</label>
          <input type="date" name="endDate">
        </p>
          
          
          
       <!-- <p class="full-width">
          <label for="">Additional Details (Optional)</label>
          <textarea name="" id="" cols="30" rows="7"></textarea>
        </p>-->
          
        <p class="full-width">
          <button value="save" name="save">Save</button>
            
        </p>
      </form>
    </div>
  </div>
</div>
<!--    Form ends here-->

<!--Footer-->
<div class="footer">
  <p>Copyright &copy AUEBS</p>
</div>
    <!--Footer ends-->

</body>
</html>