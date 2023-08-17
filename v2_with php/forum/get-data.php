<?php
// Connect to database
$mysqli = new mysqli("localhost", "root", "", "modderhub");
session_start();
// Check for errors
if ($mysqli->connect_errno) {
    die("Failed to connect to MySQL: " . $mysqli->connect_error);
}

// Fetch data from table
$query = "SELECT mesg_sender, mesg_text, mesg_date FROM tbl_messages" ;

$result = $mysqli->query($query);

// Display data in HTML format
while ($row = $result->fetch_assoc()) {
    echo '<a href="#" class="tt-item">';
    echo '<div class="tt-col-avatar">';
    echo '<svg class="tt-icon">';
    echo '<use xlink:href="#icon-ava-t"></use>';
    echo '</svg>';
    echo '</div>';
    echo '<div class="tt-col-description">';
    echo '<h4 class="tt-title"><span>' . $row["mesg_sender"] . '</span> <span class="time">' . $row["mesg_date"] . '</span></h4>';
    echo '<div class="tt-message tt-select">' . $row["mesg_sender"] . ': ' . $row["mesg_text"] . '</div>';
    echo '</div>';
    echo '</a>';
}

// Close database connection
$mysqli->close();
?>
