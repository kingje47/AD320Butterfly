<?php

if(isset($_GET["ItemName"])){
    echo .$_GET["ItemName"];
} else{
    echo "Missing Item Name !!";
}

if(isset($_GET["Size"])){
    echo .$_GET["Size"];
} else {
    echo"Missing Item's Size !!";
}

if(isset($_GET["Price"])){
    echo .$_GET["Price"];
} else {
    echo"Missing Item's Price !!";
}

if(isset($_GET["URL"])){
    echo .$_GET["URL"];
} else {
    echo"Missing Item's URL !!";
}



// if (!empty($_GET["item3"])){
    echo .$_GET["item3"];
}

//if (!empty($_GET["item4"]])){
    echo .$_GET["item4"];
}  

?>