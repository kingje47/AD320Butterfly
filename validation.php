<?php
//stores the URL the request is sent to
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
// define variables and initialize with empty values
$itemNameErr = $sizeErr = "";
$itemName = $size =  $price = $url = "";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (empty($_GET["itemName"])) {
        $itemNameErr = "Missing";
    }
    else {
        $itemName = $_GET["itemName"];
        echo "itemName: $itemName<br />";
    }

    if (empty($_GET["size"])) {
        $sizeErr = "Missing";
    }
    else {
        $price = $_GET["size"];
        echo "size: $price<br />";
    }

    if (empty($_GET["price"]))  {
        $price = "";
    }
    else {
       $price = $_GET["price"];
        echo "price: $price<br />";
    }
     if (empty($_GET["url"]))  {
        $url = "";
    }
    else {
        $url = $_GET["url"];
        echo "url: $url<br />";
    }
}

    //echo "Name: $name<br />";
        
    //echo "Email: $email<br />";
        
    //echo "Phone: $phoneNumber<br />";
        
    //echo "State: $stateOfResidency<br />";
    
?>