<?php
// Get the product ID from the GET or POST request
session_start();

// Connect to the database
// $db = mysqli_connect('localhost', 'username', 'password', 'database_name');
$con = mysqli_connect("localhost", "root", "", "modderhub") or die("Connect failed: %s\n" . $con->error);
													
// Prepare and execute the SQL query to delete the wishlist entries
$query = "UPDATE `tbl_wishlist` SET `wishlist_status` = 0 WHERE `wishlist_uid` = '".$_SESSION['id']."'";

$result = mysqli_query($con, $query);
// Close the datab

// Redirect the user back to the wishlist page
header('Location: index.php#');
exit();
?>
