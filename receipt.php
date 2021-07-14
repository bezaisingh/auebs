<?php

// turn on error reporting
error_reporting(1);
ini_set('error_reporting', E_ALL);
$id=$_GET['id'];

// start session
session_start();


//debug session
// var_dump($_SESSION);
// echo '<br>';
// echo $_SESSION["meter_no"];

// echo '<br>';
// echo $id;

//The below codes just prints the session values
// echo '<br>';
// print_r($_SESSION);
// echo '<br>';
// echo("{$_SESSION['meter_no']}"."<br />");


require('fpdf/fpdf.php');

// Db connectio querry
$conn=mysqli_connect('localhost','root','','auebs');
mysqli_select_db($conn,"auebs");
//Data fetching query
$sql = "SELECT * FROM bill_table INNER JOIN users_table 
        ON bill_table.meter_no= users_table.meter_no 
        WHERE bill_table.id=$id";
        
$result = $conn->query($sql);

if($result !== false && $result->num_rows > 0){
    
    while($row = $result->fetch_assoc()) {

    $id = $row["id"] ;
    $meter_no = $row["meter_no"] ;
    $qtr_no = $row["qtr_no"] ;
    $consumer_name = $row["consumer_name"] ;
    $tariff_category = $row["tariff_category"] ;
    $bill_date = $row["bill_date"] ;
  //  $meter_status = $row["meter_status"] ;
    $unit_consumed = $row["unit_consumed"] ;
    $net_bill_amt = $row["net_bill_amt"] ;
    $start_date = $row["start_date"] ;
    $end_date = $row["end_date"] ;
  //  $consumer_category = $row["consumer_category"] ;
    $dept = $row["dept"] ;
    $designation = $row["designation"] ;

    $tariff_category = $row["tariff_category"] ;
  //  $supply_volt_lvl = $row["supply_volt_lvl"] ;
  //  $connected_load = $row["connected_load"] ;
  //  $bill_amt = $row["bill_amt"] ;
  //  $bill_period = $row["bill_period"] ;
    $no_of_days = $row["no_of_days"] ;
  //  $biling_status = $row["biling_status"] ;
  //  $address = $row["address"] ;
   // $reading_type = $row["reading_type"] ;
    $prev_reading = $row["prev_reading"] ;
    $current_reading = $row["current_reading"] ;
    $diff_in_reading = $row["diff_in_reading"] ;
    $unit_consumed = $row["unit_consumed"] ;
    // $billable_units = $row["billable_units"] ;
    // $recorded_demand = $row["recorded_demand"] ;
    // $max_demand = $row["max_demand"] ;
    // $avg_pow_factor = $row["avg_pow_factor"] ;
    // $pow_on_hrs = $row["pow_on_hrs"] ;
    // $avl_percent = $row["avl_percent"] ;
    // $current_demand = $row["current_demand"] ;
    // $outstanding_demand = $row["outstanding_demand"] ;
    // $net_bill_amt_in_wrds = $row["net_bill_amt_in_wrds"] ;
    // $rate = $row["rate"] ;
    // $energy_charge = $row["energy_charge"] ;
    // $tot_energy_charge = $row["tot_energy_charge"] ;
    // $demand_fix_charge = $row["demand_fix_charge"] ;
    // $electricity_duty = $row["electricity_duty"] ;
    // $meter_rent = $row["meter_rent"] ;
    // $arrear_principal = $row["arrear_principal"] ;
    // $arrear_surcharge = $row["arrear_surcharge"] ;
    // $current_surcharge = $row["current_surcharge"] ;
    // $misc_arrear = $row["misc_arrear"] ;
    // $payable_amt_bf_due = $row["payable_amt_bf_due"] ;
    // $payable_amt_af_due = $row["payable_amt_af_due"] ;
    // $prepd_by = $row["prepd_by"] ;
    // $billing_demand = $row["billing_demand"] ;
 
}
}

$pdf = new FPDF();

$pdf->AddPage();

// Logo
 $pdf->Image('resources/logo.png',10,6,25);
 // Arial bold 15
 $pdf->SetFont('Arial','B',15);
 // Move to the right
 $pdf->Cell(80);
 // Title
 $pdf->Cell(55,10,'Bill Receipt',1,0,'C');
 // Line break
 $pdf->Ln(20);

$pdf->SetFont('Arial', '', 12);
$pdf->Line(10, 30, 200, 30); //The 1st Long Horizontal Line line

$pdf->Ln(1);
$pdf->Cell(55, 5, 'Meter No', 0, 0);
$pdf->Cell(58, 5, ': '.$meter_no, 0, 0);

$pdf->Cell(55, 5, 'Quarter No', 0, 0);
$pdf->Cell(52, 5, ': '.$qtr_no, 0, 1);

$pdf->Cell(55, 5, 'Consumer Name', 0, 0);
$pdf->Cell(58, 5, ': '.$consumer_name, 0, 0);

//$pdf->Cell(55, 5, 'Tariff Category', 0, 0);
//$pdf->Cell(52, 5, ': '.$tariff_category, 0, 1);

//$pdf->Cell(55, 5, 'Address', 0, 0);
//$pdf->Cell(58, 5, ': '.$address, 0, 0);

$pdf->Cell(55, 5, 'Bill Date', 0, 0);
$pdf->Cell(52, 5, ': '.$bill_date, 0, 1);

$pdf->Ln(0);
//$pdf->Cell(55, 5, 'Meter Status', 0, 0);
//$pdf->Cell(58, 5, ': '.$meter_status, 0, 1);

$pdf->Line(10, 62, 200, 62); //The 2nd Long Horizontal Line line

$pdf->Cell(55, 5, 'Unit Consumed', 0, 0);
$pdf->Cell(58, 5, ': '.$unit_consumed, 0, 1);

$pdf->Cell(55, 5, 'Net Bill Amount', 0, 0);
$pdf->Cell(58, 5, ': '.$net_bill_amt, 0, 1);

$pdf->Ln(2);
$pdf->Cell(55, 5, 'Start Date', 0, 0);
$pdf->Cell(58, 5, ': '.$start_date, 0, 1);

$pdf->Ln(0);//Line break
$pdf->Cell(55, 5, 'End Date', 0, 0);
$pdf->Cell(58, 5, ': '.$end_date, 0, 1);

// $pdf->Line(155, 75, 195, 75); //The 1st Short Horizontal Line line

$pdf->Line(10, 88, 200, 88); //The 3rd Long Horizontal Line line
$pdf->Ln(0);//Line break
//$pdf->Cell(55, 5, 'Consumer Category', 0, 0);
//$pdf->Cell(58, 5, ': '.$consumer_category, 0, 1);

$pdf->Cell(55, 5, 'Tariff Category', 0, 0);
$pdf->Cell(58, 5, ': '.$tariff_category, 0, 1);

//$pdf->Cell(55, 5, 'Supply Voltage Level', 0, 0);
//$pdf->Cell(58, 5, ': '.$supply_volt_lvl, 0, 0);

//$pdf->Cell(55, 5, 'Bill Amount', 0, 0);
//$pdf->Cell(52, 5, ': '.$bill_amt, 0, 1);

$pdf->Ln(1);//Line break
//$pdf->Cell(55, 5, 'Bill Period', 0, 0);
//$pdf->Cell(58, 5, ': '.$bill_period, 0, 0);

$pdf->Cell(55, 5, 'No. of days', 0, 0);
$pdf->Cell(52, 5, ': '.$no_of_days, 0, 1);

//$pdf->Cell(55, 5, 'Billing Status', 0, 0);
//$pdf->Cell(58, 5, ': '.$biling_status, 0, 0);



//$pdf->Cell(55, 5, 'Reading Type', 0, 0);
//$pdf->Cell(52, 5, ': '.$reading_type, 0, 1);

$pdf->Cell(55, 5, 'Previous Reading', 0, 0);
$pdf->Cell(58, 5, ': '.$prev_reading, 0, 0);

$pdf->Cell(55, 5, 'Current Reading', 0, 0);
$pdf->Cell(52, 5, ': '.$current_reading, 0, 1);

$pdf->Cell(55, 5, 'Difference in Reading', 0, 0);
$pdf->Cell(58, 5, ': '.$diff_in_reading, 0, 0);

$pdf->Cell(55, 5, 'Units Consumed', 0, 0);
$pdf->Cell(52, 5, ': '.$unit_consumed, 0, 1);

//$pdf->Cell(55, 5, 'Billable Units', 0, 0);
//$pdf->Cell(58, 5, ': '.$billable_units, 0, 0);

//$pdf->Cell(55, 5, 'Recorded Demand', 0, 0);
//$pdf->Cell(52, 5, ': '.$recorded_demand, 0, 1);

//$pdf->Cell(55, 5, 'Maximum Demand', 0, 0);
//$pdf->Cell(58, 5, ': '.$max_demand, 0, 0);

//$pdf->Cell(55, 5, 'Average Power Factor', 0, 0);
//$pdf->Cell(52, 5, ': '.$avg_pow_factor, 0, 1);

//$pdf->Cell(55, 5, 'Power Factor', 0, 0);
//$pdf->Cell(58, 5, ': '.$pow_on_hrs, 0, 0);

//$pdf->Cell(55, 5, 'Available Percentage', 0, 0);
//$pdf->Cell(52, 5, ': '.$avl_percent, 0, 1);

//$pdf->Cell(55, 5, 'Current Demand', 0, 0);
//$pdf->Cell(58, 5, ': '.$current_demand, 0, 0);

//$pdf->Cell(55, 5, 'Outstanding Demand', 0, 0);
//$pdf->Cell(52, 5, ': '.$outstanding_demand, 0, 1);

//$pdf->Cell(55, 5, 'Amount in Words', 0, 0);
//$pdf->Cell(58, 5, ': '.$net_bill_amt_in_wrds, 0, 0);

//$pdf->Cell(55, 5, 'Rate', 0, 0);
//$pdf->Cell(52, 5, ': '.$rate, 0, 1);

//$pdf->Cell(55, 5, 'Energy Charge', 0, 0);
//$pdf->Cell(58, 5, ': '.$energy_charge, 0, 0);

//$pdf->Cell(55, 5, 'Total Energy Charge', 0, 0);
//$pdf->Cell(52, 5, ': '.$tot_energy_charge, 0, 1);

//$pdf->Cell(55, 5, 'Demand Fixed Charge', 0, 0);
//$pdf->Cell(58, 5, ': '.$demand_fix_charge, 0, 0);

//$pdf->Cell(55, 5, 'Electricity Duty', 0, 0);
//$pdf->Cell(52, 5, ': '.$electricity_duty, 0, 1);

//$pdf->Cell(55, 5, 'Meter Rent', 0, 0);
//$pdf->Cell(58, 5, ': '.$meter_rent, 0, 0);

//$pdf->Cell(55, 5, 'Arrear Principal', 0, 0);
//$pdf->Cell(52, 5, ': '.$arrear_principal, 0, 1);

//$pdf->Cell(55, 5, 'Arrear Surcharge', 0, 0);
//$pdf->Cell(58, 5, ': '.$arrear_surcharge, 0, 0);

//$pdf->Cell(55, 5, 'Current Surcharge', 0, 0);
//$pdf->Cell(52, 5, ': '.$current_surcharge, 0, 1);

//$pdf->Cell(55, 5, 'Miscellaneous', 0, 0);
//$pdf->Cell(58, 5, ': '.$misc_arrear, 0, 0);

//$pdf->Cell(55, 5, 'Payable Amount before due', 0, 0);
//$pdf->Cell(52, 5, ': '.$payable_amt_bf_due, 0, 1);

//$pdf->Cell(55, 5, 'Payable Amount after due', 0, 0);
//$pdf->Cell(58, 5, ': '.$payable_amt_af_due, 0, 0);

//$pdf->Cell(55, 5, 'Billig Demand', 0, 0);
//$pdf->Cell(52, 5, ': '.$billing_demand, 0, 1);

$pdf->Line(10, 165, 200, 165); //The 4th Long Horizontal Line line
//$pdf->Cell(165, 10, 'Prepared by: '.$prepd_by, 0, 0,'R');
// $pdf->Cell(58, 5, ': '.$prepd_by, 0, 1);

$pdf->Output();
?>