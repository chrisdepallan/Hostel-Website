<?php
$id=$_POST['id'];
$con=mysqli_connect("localhost","root","","modderhub")or die("Connect failed: %s\n". $conn -> error);
$query1 = "SELECT * FROM `tbl_categories` WHERE cate_id= '$id'";
$result1 = mysqli_query($con,$query1);
$row=mysqli_fetch_array($result1);
if($row['cate_status']==1)
    $status=0;
    else
    $status=1;


$query = "UPDATE `tbl_categories` SET `cate_status`=$status WHERE  cate_id= '$id'";
$result = mysqli_query($con,$query);
    if($result){
        echo $query;
    }
?>