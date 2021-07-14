<?php
require('fpdf/fpdf.php');

$conn=mysqli_connect('localhost','root','','auebs');
mysqli_select_db($conn,"auebs");

$sql = "SELECT * FROM bill_table JOIN users_table WHERE bill_table.`meter_no`=users_table.`meter_no`;";
    
$result = $conn->query($sql);


$title = 'All Bill List';
$pdf = new FPDF();
$pdf -> AddPage();
$pdf->SetTitle($title);


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

    //$pdf->SetTextColor(0,0,0,1);
	
	$pdf->Ln(1);
	   $pdf->SetFont('Arial', 'B', 10);
		$pdf->Cell(10, 8, 'Id', 1, 0);
		$pdf->Cell(20, 8, 'Meter No', 1, 0);
		$pdf->Cell(20, 8, 'Quarter No', 1, 0);
		$pdf->Cell(30, 8, 'Name', 1, 0);
		$pdf->Cell(25, 8, 'Department', 1, 0);
		$pdf->Cell(32, 8, 'Designation', 1, 0);
		$pdf->Cell(30, 8, 'Unit Consumed', 1, 0);
		$pdf->Cell(25, 8, 'Bill Amount', 1, 1);

if($result !== false && $result->num_rows > 0){
    
    while($row = $result->fetch_assoc()) {

    $id = $row["id"] ;
    $meter_no = $row["meter_no"] ;
    $qtr_no = $row["qtr_no"] ;
    $consumer_name = $row["consumer_name"] ;
    $tariff_category = $row["tariff_category"] ;
    $bill_date = $row["bill_date"] ;
    //$meter_status = $row["meter_status"] ;
    $unit_consumed = $row["unit_consumed"] ;
    $net_bill_amt = $row["net_bill_amt"] ;
    $start_date = $row["start_date"] ;
    $end_date = $row["end_date"] ;
    //$consumer_category = $row["consumer_category"] ;
    $dept = $row["dept"] ;
    $designation = $row["designation"] ;
 
    $pdf->SetFont('Arial', '', 10);
	
    $pdf->Cell(10, 7, $id, 1, 0);
    $pdf->Cell(20, 7, $meter_no, 1, 0);
    $pdf->Cell(20, 7, $qtr_no, 1, 0);
    $pdf->Cell(30, 7, $consumer_name, 1, 0);
	$pdf->Cell(25, 7, $dept, 1, 0);
    $pdf->Cell(32, 7, $designation, 1, 0);
    $pdf->Cell(30, 7, $unit_consumed, 1, 0);
    $pdf->Cell(25, 7, $net_bill_amt, 1, 1);

        
    }
    
    $pdf->Output();
    echo '<br>';

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta id="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create PDF using PHP</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="main-block">
        <div class="header">
            Add New Users
        </div>
        <div class="body">
            <form action='' method="POST">
                <input type="text" id="usid" placeholder="id" required>
                <input type="text" id="meter_no" placeholder="meter_no" required>
                <input type="text" id="qtr_no" placeholder="Current qtr_no" required>
                <input type="submit" value="Add User">
            </form>
        </div>
        <div class="footer">
            <p>Developed by <a href="https:/aus.ac.in" target="_blank">AUEBS</a></p>
        </div>
    </div>
</body>
</html>