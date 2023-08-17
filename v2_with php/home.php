<?php
session_start();
$_SESSION['homeflag']=0;
$_SESSION['flag']=0;
echo "<script> window.location.href = 'signin.php'</script>";
?>