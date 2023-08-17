<!DOCTYPE html>
<html>
<head>
	<title>Wishlist Popup</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	
	
</head>
<body>
<!-- search form -->
<form method="POST" action="search.php">
  <input type="text" name="query" placeholder="Search products by name">
  <button type="submit">Search</button>
</form>

<!-- JavaScript code for the popup window -->
<script>
function showPopup(prod_id) {
  var url = "product_details.php?id=" + prod_id;
  window.open(url, "_blank", "width=600,height=400");
}
</script>


	
</body>
</html>
