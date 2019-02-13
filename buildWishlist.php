<?php

$servername = "127.0.0.1";
$username = "root";
$password = "Narwhal47*";
$dbname = "butterfly";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error){
  die("Connection failed: " . $conn->connect_error);
}

$getList = "SELECT * FROM item;";



  $insertItem = "INSERT INTO item (item_name, item_price, item_size, item_URL) VALUES ('$_GET[itemName]', '$_GET[price]', '$_GET[size]', '$_GET[url]');";
if ($conn->query($insertItem) === TRUE) {
    echo "New record created successfully<br><br>";
} else {
    echo "Error: " . $sinsertItem . "<br>" . $conn->error . "<br>";
}


// $deleteItem = "DELETE FROM item WHERE (item_name)='$_GET[itemName]');";
// if ($conn->query($insertItem) === TRUE) {
//     echo "Record deleted<br><br>";
// } else {
//     echo "Error: " . $sinsertItem . "<br>" . $conn->error . "<br>";
// }




//$execute = $conn->query($insertItem);


$result = $conn->query($getList);

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
