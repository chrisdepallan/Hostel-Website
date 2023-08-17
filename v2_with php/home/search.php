<?php
if(isset($_POST['query'])) {
  $query = $_POST['query'];
  // connect to the database
  $con = mysqli_connect("localhost", "root", "", "modderhub");
  // search for products that match the query
  $sql = "SELECT * FROM tbl_products WHERE prod_name LIKE '%$query%'";
  $result = mysqli_query($con, $sql);
  // display the search results
  while($row = mysqli_fetch_assoc($result)) {
    $prod_id = $row['prod_id'];
    
          echo "<script type='text/javascript'> window.location.href = 'product_details.php?id=$prod_id'</script>";
  }
  // if no products were found
  if(mysqli_num_rows($result) == 0) {
    echo "<script type='text/javascript'>alert('no products found')</script>";
    echo "<script type='text/javascript'> window.location.href = 'product_page.php'</script>";


  }
  // close the database connection
  mysqli_close($con);
}
?>