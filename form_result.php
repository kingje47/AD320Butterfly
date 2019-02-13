<html>
<body>
<?php echo "<br>Name: " . $_GET["itemName"]; ?>
<?php echo "<br>Email: " . $_GET["size"]; ?>
<?php if ($_GET["PhoneNumber"] != "" ) {
    echo "<br>Phone: " . $_GET["PhoneNumber"];
}?>
<?php if ($_GET["State"] != ""){

    echo "<br>State: " . $_GET["State"];
}?>
</body>
</html>
