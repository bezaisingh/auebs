<?php

require('fpdf/fpdf.php');

// Db connectio querry
//include "dbConn.php";
$conn=mysqli_connect('localhost','root','','auebs');
mysqli_select_db($conn,"auebs");
//Data fetching query
$sql = "SELECT * FROM bill_table JOIN users_table WHERE bill_table.`meter_no`=users_table.`meter_no`;";
$result = $conn->query($sql);

if($result !== false && $result->num_rows > 0){
    
    while($row = $result->fetch_assoc()) {

    $id = $row["id"] ;
    $meter_no = $row["meter_no"] ;
    $qtr_no = $row["qtr_no"] ;
    $consumer_name = $row["consumer_name"] ;
    $tariff_category = $row["tariff_category"] ;
    $bill_date = $row["bill_date"] ;
    $meter_status = $row["meter_status"] ;
    $unit_consumed = $row["unit_consumed"] ;
    $net_bill_amt_ = $row["net_bill_amt_"] ;
    $start_date = $row["start_date"] ;
    $end_date = $row["end_date"] ;
    $consumer_category = $row["consumer_category"] ;
    $dept = $row["dept"] ;
    $designation = $row["designation"] ;

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
 $pdf->Cell(35,10,'Bill Receipt',1,0,'C');
 // Line break
 $pdf->Ln(20);

$pdf->SetFont('Arial', '', 12);
$pdf->Line(10, 30, 200, 30); //The 1st Long Horizontal Line line

$pdf->Ln(1);
$pdf->Cell(55, 5, 'Meter No', 0, 0);
$pdf->Cell(58, 5, ': '.$meter_no, 0, 0);

$pdf->Cell(30, 5, 'Quarter No', 0, 0);
$pdf->Cell(52, 5, ': '.$qtr_no, 0, 1);

$pdf->Cell(55, 5, 'Consumer Name', 0, 0);
$pdf->Cell(58, 5, ': '.$consumer_name, 0, 0);

$pdf->Cell(30, 5, 'Tariff Category', 0, 0);
$pdf->Cell(52, 5, ': '.$tariff_category, 0, 1);

$pdf->Cell(55, 5, 'Bill Date', 0, 0);
$pdf->Cell(58, 5, ': '.$bill_date, 0, 1);

$pdf->Ln(0);
$pdf->Cell(55, 5, 'Meter Status', 0, 0);
$pdf->Cell(58, 5, ': '.$meter_status, 0, 1);

$pdf->Line(10, 62, 200, 62); //The 2nd Long Horizontal Line line

$pdf->Cell(55, 5, 'Unit Consumed', 0, 0);
$pdf->Cell(58, 5, ': '.$unit_consumed, 0, 1);

$pdf->Cell(55, 5, 'Net Bill Amount', 0, 0);
$pdf->Cell(58, 5, ': '.$net_bill_amt_, 0, 1);

$pdf->Ln(2);
$pdf->Cell(55, 5, 'Start Date', 0, 0);
$pdf->Cell(58, 5, ': '.$start_date, 0, 1);

$pdf->Ln(1);//Line break
$pdf->Cell(55, 5, 'End Date', 0, 0);
$pdf->Cell(58, 5, ': '.$end_date, 0, 1);

// $pdf->Line(155, 75, 195, 75); //The 1st Short Horizontal Line line

$pdf->Line(10, 90, 200, 90); //The 3rd Long Horizontal Line line
$pdf->Ln(0);//Line break
$pdf->Cell(55, 5, 'Consumer Category', 0, 0);
$pdf->Cell(58, 5, ': '.$consumer_category, 0, 1);

$pdf->Output();
?>