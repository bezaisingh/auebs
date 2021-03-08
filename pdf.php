<?php

include "dbConn.php";
require('mpdf/vendor/autoload.php');

$sql = "SELECT  meter_no,
                qtr_no,
                consumer_name,
                unit_consumed, 
                net_bill_amt_    FROM bill_table";

$result = $conn->query($sql);
    
if($result !== false && $result->num_rows > 0)
    
   /* ($result->num_rows > 0)*/ 
{
// output data of each row
while($row = $result->fetch_assoc()) {
    
echo "<tr>
            <td>" . $row["meter_no"] . "</td>
            <td>" . $row["qtr_no"]. "</td>
            <td>" . $row["consumer_name"]. "</td>
            <td>" . $row["unit_consumed"]. "</td>
            <td>" . $row["net_bill_amt_"]. "</td>
            
      </tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
/*require('mpdf/vendor/autoload.php');*/
/*$conn=mysqli_connect('localhost', 'root', '', 'auebs');*/
/*$res=mysqli_query($conn,"select * from bill table");*/

if (!$res || mysqli_num_rows($res)== 0){    
    
        $html='<table>';
        $html.='<style></style> <table class="#">';
    
         while($row=mysqli_fetch_assoc($res)){    
        $html.='<tr>
                    <td>Id</td>
                    <td>Name</td>
                    <td>Id</td>
                    <td>Name</td>              
            </tr>';
     
   
        
        $html.='<tr>
                    <td>'.$row['id'].'</td><td>'.$row['meter_no'].'</td>
                    <td>'.$row['qtr_no'].'</td>
                    <td>'.$row['consumer_name'].'</td>
                </tr>';
    }
    $html.='</table>';
     
} else {
        $html.='Data not Found';
}

$mpdf= new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$file='media'.time().'.pdf';
$mpdf->output($file, 'I');

//D
//I
//F
//S
?>