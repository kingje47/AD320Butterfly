<?php
$servername = "127.0.0.1";
$username = "root";
$password = "Narwhal47*";
$dbname = "butterfly";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error){
  die("Connection failed: " . $conn->connect_error);
}

$query = "SELECT * FROM item;";

$result = $conn->query($query);

  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()){
      echo
        "||Item Name: "
        . $row["item_name"]
        . "|| "
        . "||Price: "
        . $row["item_price"]
        . "|| "
        . "||Size: "
        . $row["item_size"]
        . "|| "
        . "||URL: "
        . $row["item_URL"]
        . "||<br>";

    }}
















 ?>
