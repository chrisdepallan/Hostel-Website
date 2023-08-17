<?php
$id=$_POST['id'];
$con=mysqli_connect("localhost","root","","modderhub")or die("Connect failed: %s\n". $conn -> error);
$query1 = "SELECT * FROM `tbl_invoices` WHERE invoice_id= '$id'";
$result1 = mysqli_query($con,$query1);
$row=mysqli_fetch_array($result1);
if($row['invoice_status']==1)
    $status=0;
    else
    $status=1;


$query = "UPDATE `tbl_invoices` SET `invoice_status`=$status WHERE  invoice_id= '$id'";
$result = mysqli_query($con,$query);
    
?>