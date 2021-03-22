<?php

require('fpdf/fpdf.php');

// Db connectio querry
//include "dbConn.php";
$conn=mysqli_connect('localhost','root','','auebs');
mysqli_select_db($conn,"auebs");
//Data fetching query
$sql = "SELECT * FROM bill_table JOIN users_table WHERE bill_table.`meter_no`=users_table.`meter_no`;";
$result = $conn->query($sql);

// if($result !== false && $result->num_rows > 0)
// {
// 	$row = $result->fetch_assoc();

//     $id = $row["id"] ;
//     $meter_no = $row["meter_no"] ;
//     $qtr_no = $row["qtr_no"] ;
//     $consumer_name = $row["consumer_name"] ;
//     $tariff_category = $row["tariff_category"] ;
//     $bill_date = $row["bill_date"] ;
//     $meter_status = $row["meter_status"] ;
//     $unit_consumed = $row["unit_consumed"] ;
//     $net_bill_amt_ = $row["net_bill_amt_"] ;
//     $start_date = $row["start_date"] ;
//     $end_date = $row["end_date"] ;
//     $consumer_category = $row["consumer_category"] ;
//     $dept = $row["dept"] ;
//     $designation = $row["designation"] ;

// }

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
		$pdf->Cell(10, 8, 'Id', 1, 0);
		$pdf->Cell(30, 8, 'Meter No', 1, 0);
		$pdf->Cell(30, 8, 'Quarter No', 1, 0);
		$pdf->Cell(30, 8, 'Name', 1, 0);
		$pdf->Cell(30, 8, 'Department', 1, 0);
		$pdf->Cell(30, 8, 'Designation', 1, 0);
		$pdf->Cell(30, 8, 'Unit Consumed', 1, 0);
		$pdf->Cell(30, 8, 'Bill Amount', 1, 0);

// foreach($result as $row) {
	
// 	$pdf->SetFont('Arial','',10);	
// 	$pdf->Ln();
// 	foreach($row as $column)
// 		$pdf->Cell(30,8,$column,1);
// } 

foreach ($result as $row)
 {
 	$pdf->SetFont('Arial','',10);	
	$pdf->Ln();
		foreach($row as $column)
		$pdf->Cell(20,8,$column,1);

// $pdf->Cell(10, 5, $meter_no, 0, 0);
// $pdf->Cell(20, 5, $qtr_no, 0, 0);
// $pdf->Cell(30, 5, $consumer_name, 0, 0);
// $pdf->Cell(30, 5, $bill_date, 0, 0);
// $pdf->Cell(20, 5, $meter_status, 0, 0);
// $pdf->Cell(20, 5, $unit_consumed, 0, 0);
// $pdf->Cell(20, 5, $net_bill_amt_, 0, 0);
// $pdf->Cell(20, 5, $consumer_category, 0, 1);
} 

$pdf->Output();
?>