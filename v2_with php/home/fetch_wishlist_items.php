<?php
session_start();
// connect to the database
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'modderhub';

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

// query the database for the wishlist items
$sql = "SELECT wishlist_id, wishlist_prodid, wishlist_uid, wishlist_status FROM tbl_wishlist WHERE wishlist_uid='".$_SESSION['id']."' and wishlist_status='1' ";
$result = $conn->query($sql);

// display the wishlist items as HTML
if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {
        $sql1 = "SELECT * FROM `tbl_products` WHERE `prod_id`='" . $row['wishlist_prodid'] ."'";
        $result1 = $conn->query($sql1);
        $row1 = $result1->fetch_assoc();
		echo "<div style='width:400px'>  ";
		echo "" . $row1['prod_name'] . "</h3>";
        $i=explode(" ",$row1['prod_photo']);
        echo '<img style ="z-index:1;width:30px;height:30px;border-radius:50%"src="../dashboard/assets/img/products/'.  $i[0].'" alt="">';
		
		echo "<form method='GET' ><button  class='btn btn-success'  onclick=''><a style='text-decoration:none;color:white' href='product_details.php?id=".$row1['prod_id']."'>>>></a>
             </button></form>";
		echo "</div>";
	}
} else {
	echo "No wishlist items found.";
}

$conn->close();
?>
