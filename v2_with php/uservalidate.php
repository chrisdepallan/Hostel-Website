<?php
$uname=$_POST['username'];
$con=mysqli_connect("localhost","root","","modderhub")or die("Connect failed: %s\n". $conn -> error);
$query = "SELECT * FROM `tbl_login_details` WHERE logdet_email= '$uname'";
    $result = mysqli_query($con,$query);
    $count=mysqli_num_rows($result);
        echo $count;
?>