<?php
require_once( './dbconnect.php');
$db = connectToDatabase();

  if ($_GET) {
    $name = $_GET['name'];
    $query = "SELECT `name`, `about` FROM `bands` WHERE `name` = '" . $name . "'";

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
