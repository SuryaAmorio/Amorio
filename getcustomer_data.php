<?php 
include 'config.php';
$val=$_REQUEST['val'];
$query='SELECT * FROM `customer_information` where customer_name="'.$val.'"';

$sql=mysqli_query($con,$query);
$row=mysqli_fetch_array($sql);
// print_r($row);
echo $row['customer_address'].'   '.$row['email_address'].' '.$row['phone']
?>