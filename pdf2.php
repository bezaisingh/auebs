<?php
require('mpdf/vendor/autoload.php');
/*require('mpdf/vendor/autoload.php');*/
$conn=mysqli_connect('localhost', 'root', '', 'auebs');

$sql="SELECT    id,
                meter_no,
                qtr_no,
                consumer_name,
                unit_consumed, 
                net_bill_amt_    FROM bill_table";

$res=mysqli_query($conn,$sql);

if (mysqli_num_rows($res)>0){    
    
        $html='<table>';
        $html.='<style></style> <table class="#">';
    
         while($row=mysqli_fetch_assoc($res)){    
        $html.='<tr>
                    <td>Id</td>
                    <td>Meter No</td>
                    <td>Qtr No</td>
                    <td>Name</td>              
            </tr>';   
        
        $html.='<tr>
                    <td>'.$row['id'].'</td>
                    <td>'.$row['meter_no'].'</td>
                    <td>'.$row['qtr_no'].'</td>
                    <td>'.$row['consumer_name'].'</td>
                </tr>';
    }
    $html.='</table>';
     
} else {
        $html='Data not Found';
}
echo $html;


$mpdf= new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$file='media'.time().'.pdf';
$mpdf->output($file, 'I');

//D
//I
//F
//S

?>