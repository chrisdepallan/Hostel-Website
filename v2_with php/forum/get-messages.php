<?php
// Connect to database
$conn = mysqli_connect("localhost", "root", "", "modderhub");

// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
$user1=$_GET['sender'];
$user2=$_GET['receiver'];

// Fetch messages from database
$sql = "SELECT * FROM tbl_messages 
WHERE (mesg_sender = '$user1' AND mesg_recipient = '$user2') 
OR (mesg_sender = '$user2' AND mesg_recipient = '$user1')
ORDER BY mesg_date DESC;";

$result = mysqli_query($conn, $sql);

$sqls="SELECT * FROM `tbl_login_details` WHERE logdet_id='$user1'";
$results = mysqli_query($conn, $sqls);
$rows = mysqli_fetch_assoc($results);
$sqls1="SELECT * FROM `tbl_reg_details` WHERE regdet_lid='".$rows['logdet_id']."'";
$results1 = mysqli_query($conn, $sqls1);
$rows1 = mysqli_fetch_assoc($results1);

$sqlr="SELECT * FROM `tbl_login_details` WHERE logdet_id='$user2'";
$resultr = mysqli_query($conn, $sqlr);
$rowr = mysqli_fetch_assoc($resultr);
$sqlr1="SELECT * FROM `tbl_reg_details` WHERE regdet_lid='".$rowr['logdet_id']."'";
$resultr1 = mysqli_query($conn, $sqlr1);
$rowr1 = mysqli_fetch_assoc($resultr1);

// Display messages in HTML format
if (mysqli_num_rows($result) > 0) {
	while ($row = mysqli_fetch_assoc($result)) {
		echo "<div class='message'>";
		echo "<h4>" . $rows1['regdet_name'] . "</h4>";
		echo "<p>" . $row['mesg_text'] . "</p>";
		echo "</div>";
	}
} else {
	echo "No messages found.";
}

// Close database connection
mysqli_close($conn);
?>
