<?php
$conn = mysqli_connect("localhost", "root", "", "modderhub") or die("Connect failed: %s\n" . $conn->error);

$sql = "SELECT forum_category FROM `tbl_forum`";
$result = mysqli_query($conn, $sql);

$tags_array = array(); // Array to store unique tags

if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $tags = $row['forum_category'];
    $tags_arr = explode(',', $tags);

    foreach ($tags_arr as $tag) {
      $tag = trim($tag); // Remove whitespace
      if (!in_array($tag, $tags_array)) {
        $tags_array[] = $tag;
      }
    }
  }
}

// Output unique tags
foreach ($tags_array as $tag) {
  echo $tag . "<br>";
}

// Array of tags/terms

// Loop through each tag/term


// Set the URL to scrape
$url = 'https://www.techopedia.com/definition/';

// Define an array of tag terms to scrape


// Loop through each tag and scrape the definition text
foreach ($tags_array as $tag) {
    $url = "https://en.wikipedia.org/wiki/" . urlencode($tag); // construct URL for the tag
    $html = file_get_contents($url); // fetch the HTML content of the page
    $doc = new DOMDocument();
    @$doc->loadHTML($html); // load the HTML content into a DOMDocument object
    $xpath = new DOMXPath($doc);

    // get the first paragraph of the page as the definition
    $definition = "";
    $nodes = $xpath->query('//div[@class="mw-parser-output"]/p[1]');
    if ($nodes->length > 0) {
        $definition = $nodes->item(0)->textContent;
    }

    echo "<br>Tag: $tag\n ";
    echo "Definition: $definition\n\n";
}

?>
