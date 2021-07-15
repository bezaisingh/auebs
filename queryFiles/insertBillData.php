<?php
include '../dbConn.php';



if(isset($_POST["save"]))
{
    
    $ConsumerName=$_POST["consumerName"];
    $MtrNo=$_POST["meterNo"];
    $QtrNo=$_POST["qtrNo"];
    $TariffCat=$_POST["tariffCat"];   
    $BillDate=$_POST["billDate"];    
    $StartDate=$_POST["startDate"];    
    $EndDate=$_POST["endDate"];
    $NoOfDays=$_POST["noOfDays"];       
    $PrevReading=$_POST["prevReading"];      
    $CurrentReading=$_POST["currentReading"];    
    $DiffInReading=$_POST["diffInReading"];    
    $UnitsConsumed=$_POST["unitsConsumed"];       
    $ArrearAmt=$_POST["arrearAmt"];   

    $DueDate=$_POST["dueDate"];
    $NetPayableAmt=$_POST["netPayAmt"];
    $InstallmentAmt=$_POST["instAmt"];
    $BalanceAmt=$_POST["balAmt"];

    $Slab1Units=$_POST["slab1_units"];
    $Slab1Price=$_POST["slab1_price"];
    $Slab2Units=$_POST["slab2_units"];
    $Slab2Price=$_POST["slab2_price"];
    $Slab3Units=$_POST["slab3_units"];
    $Slab3Price=$_POST["slab3_price"];

    $TotalEnergyCharge=$_POST["total_value"];

    
if(!empty($_POST['meterNo'])){
    
        /*$sql="select * from bill_table WHERE meter_no='$MtrNo'";
        $sqli_run=mysqli_query($conn,$sql);
    
        if(mysqli_num_rows($sqli_run)>0)
        {
        echo"<script>alert('Email ID already exists')</script>";
        }
    
       else {*/
    

        $sql="INSERT INTO bill_table(
                                     meter_no,
                                     qtr_no,
                                     consumer_name,
                                     tariff_category,                                    
                                     bill_date,
                                      no_of_days,                                  
                                      prev_reading,
                                      current_reading,
                                      diff_in_reading,
                                      unit_consumed,                                  
                                      arrear_amt,                                   
                                      start_date,
                                      end_date,
                                      due_date,
                                      total_energy_charge,
                                      net_bill_amt,
                                      installment,
                                      balance_amt,
                                      sl1unit,
                                      sl1price,
                                      sl2unit,
                                      sl2price,
                                      sl3unit,
                                      sl3price

                                    ) 
        
        VALUES (
            '$MtrNo',
            '$QtrNo',
            '$ConsumerName',
            '$TariffCat',   
           
            '$BillDate',
            '$NoOfDays',
                      
            '$PrevReading',
            '$CurrentReading',
            '$DiffInReading',
            '$UnitsConsumed',
           
            '$ArrearAmt',
           
            '$StartDate',
            '$EndDate',

            '$DueDate',
            $TotalEnergyCharge,
            '$NetPayableAmt',
            '$InstallmentAmt',
            '$BalanceAmt',

            '$Slab1Units',
            '$Slab1Price',
            '$Slab2Units',
            '$Slab2Price',
            '$Slab3Units',
            '$Slab3Price'
            

            )";
           
            if($conn->query($sql)===TRUE)
                {
                    echo"Record Inserted Successfully";
                    header("location:../billEntry.php?message=Success");
                }
                else
                {
                    echo"Error:" . $sql . "<br>" . $conn->error;
                }
                   
    }
    else
	{
		echo "<script>alert('Enter Meter No!!!')</script>";
    }
    
  mysqli_close($conn);  
     
}  else
	{
		echo "<script>alert('Data not Saved try again!!!')</script>";
    }
   
   
   
?>