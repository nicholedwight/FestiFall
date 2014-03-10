<?php
require_once( './dbconnect.php');
$db = connectToDatabase();

  if ($_GET) {
    $name = $_GET['name'];
    $query = "SELECT `name`, `about` FROM `bands` WHERE `name` = '" . $name . "'"; //This makes it usable for all band information by identifing by the id set to the band names, which matches the 'name' in the database tables, the query string is what differentiates the queries of each band name.

    if ($result = $db->query($query)) {
      while ($row = $result->fetch_assoc()) {
        echo $row["about"];
      }
    }
    else {
      echo $db->error;
    }
  }

?>
