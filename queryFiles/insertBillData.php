<?php
include '../dbConn.php';



if(isset($_POST["save"]))
{
    
    $ConsumerName=$_POST["consumerName"];
    $MtrNo=$_POST["meterNo"];
    $QtrNo=$_POST["qtrNo"];
    $Desig=$_POST["desig"];
    $TariffCat=$_POST["tariffCat"];
    $SupplyVoltLvl=$_POST["supplyVoltLvl"];    
    $ConnectLoad=$_POST["connectLoad"];    
    $BillAmt=$_POST["billAmt"];    
    $BillNo=$_POST["billNo"];    
    $BillPeriod=$_POST["billPeriod"];    
    $BillDate=$_POST["billDate"];    
    $NoOfDays=$_POST["noOfDays"];    
    $MtrStatus=$_POST["mtrStatus"];    
    $BillingStatus=$_POST["billingStatus"];    
    $Address=$_POST["address"];    
    $ReadingType=$_POST["readingType"];    
    $PrevReading=$_POST["prevReading"];      
    $CurrentReading=$_POST["currentReading"];    
    $DiffInReading=$_POST["diffInReading"];    
    $UnitsConsumed=$_POST["unitsConsumed"];    
    $BillableUnits=$_POST["billableUnits"];    
    $RecordDemand=$_POST["recordDemand"];    
    $MaxDemand=$_POST["maxDemand"];    
    $BillingDemad=$_POST["billingDemad"];    
    $AvgPowFactor=$_POST["avgPowFactor"];    
    $PowOnHrs=$_POST["powOnHrs"];    
    $AvailPercent=$_POST["availPercent"];    
    $CurrentDemand=$_POST["currentDemand"];    
    $OutstandingDemand=$_POST["outstandingDemand"];    
    $AdjAmt=$_POST["adjAmt"];    
    $NetBillAmt=$_POST["netBillAmt"];    
    $NetBillInWords=$_POST["netBillInWords"];    
    $Rate=$_POST["rate"];    
    $EnergyCharge=$_POST["energyCharge"];    
    $TotEnergyCharge=$_POST["totEnergyCharge"];    
    $DemandFixedCharge=$_POST["demandFixedCharge"];    
    $ElectricityDuty=$_POST["electricityDuty"];    
    $MtrRent=$_POST["mtrRent"];    
    $ArrPrinciple=$_POST["arrPrinciple"];    
    $ArrSurcharge=$_POST["arrSurcharge"];    
    $CurrSurcharge=$_POST["currSurcharge"];    
    $MiscArrear=$_POST["miscArrear"];    
    $PayableAmtBfDueDate=$_POST["payableAmtBfDueDate"];    
    $PayableAmtAfDueDate=$_POST["payableAmtAfDueDate"];    
    $PrepBy=$_POST["prepBy"];    
    $ConsumerCat=$_POST["consumerCat"];    
    $StartDate=$_POST["startDate"];    
    $EndDate=$_POST["endDate"];
    
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
                                    supply_volt_lvl,
                                    connected_load,
                                    bill_amt,
                                    bill_no,
                                    bill_period,
                                    bill_date,
                                    no_of_days,
                                    meter_status,
                                    biling_status,
                                    address,
                                    reading_type,
                                    prev_reading,
                                    current_reading,
                                    diff_in_reading,
                                    unit_consumed,
                                    billable_units,
                                    recorded_demand,
                                    max_demand,
                                    avg_pow_factor,
                                    billing_demand,
                                    pow_on_hrs,
                                    avl_percent,
                                    current_demand,
                                    adj_amt,
                                    net_bill_amt_,
                                    net_bill_amt_in_wrds,
                                    
                                    rate,
                                    energy_charge,
                                    tot_energy_charge,
                                    demand_fix_charge,
                                    electricity_duty,
                                    meter_rent,
                                    arrear_principal,
                                    arrear_surcharge,
                                    current_surcharge,
                                    misc_arrear,
                                    payable_amt_bf_due,
                                    payable_amt_af_due,
                                    prepd_by,
                                    consumer_category,
                                    start_date,
                                    end_date,
                                    outstanding_demand

        ) 
        
        VALUES (
            '$MtrNo',
            '$QtrNo',
            '$ConsumerName',
            '$TariffCat',
            '$SupplyVoltLvl',
            '$ConnectLoad',
            '$BillAmt',
            '$BillNo',
            '$BillPeriod',
            '$BillDate',
            '$NoOfDays',
            '$MtrStatus',            
            '$BillingStatus',
            '$Address',
            '$ReadingType',
            '$PrevReading',
            '$CurrentReading',
            '$DiffInReading',
            '$UnitsConsumed',
            '$BillableUnits',
            '$RecordDemand',
            '$MaxDemand',
            '$AvgPowFactor',
            '$BillingDemad',
            '$PowOnHrs',            
            '$AvailPercent',
            '$CurrentDemand',
            '$AdjAmt',
            '$NetBillAmt',
            '$NetBillInWords',
            '$Rate',
            '$EnergyCharge',
            '$TotEnergyCharge',
            '$DemandFixedCharge',
            '$ElectricityDuty',
            '$MtrRent',
            '$ArrPrinciple',
            '$ArrSurcharge',            
            '$CurrSurcharge',
            '$MiscArrear',
            '$PayableAmtBfDueDate',
            '$PayableAmtAfDueDate',
            '$PrepBy',
            '$ConsumerCat',
            '$StartDate',
            '$EndDate',
            '$OutstandingDemand'

            
            )";
           
            if($conn->query($sql)===TRUE)
                {
                    echo"Record Inserted Successfully";
                    header("location:../billEntry.php");
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