<head><style>
    /* Style the reviews section */
#reviews {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 2rem;
}

/* Style each review */
article {
  background-color: #f5f5f5;
  border-radius: 10px;
  padding: 1rem;
  box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
  width: 400px;
}

article h2 {
  font-size: 1.5rem;
  margin-bottom: 0.5rem;
}

article p {
  font-size: 1.2rem;
  margin-bottom: 1rem;
}

article p:last-of-type {
  font-weight: bold;
}

</style>
</head>
<?php
// Connect to the database
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'modderhub';

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Query the database to retrieve reviews
$sql = "SELECT `review_id`, `review_topic`, `review_content`, `review_rating`, `review_prodid`, `review_uid`, `review_status` FROM `tbl_review` WHERE 1";
$result = mysqli_query($conn, $sql);

// Display the reviews on the webpage
echo '<div id="reviews">';
while ($row = mysqli_fetch_assoc($result)) {
  echo '<article>';
  echo '<h2>' . $row['review_topic'] . '</h2>';
  echo '<p>' . $row['review_content'] . '</p>';
  echo '<p>Rating: ' . $row['review_rating'] . '</p>';
  echo '</article>';
}
echo '</div>';

// Close the database connection
mysqli_close($conn);
?>
