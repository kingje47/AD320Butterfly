<?php
//initializing varialbles and connecting 
$dbHost="localhost"; 
$dbUsername="root";
$dbPassword="root";

$userNameIsUnique = true;
$passwordIsValid = true;				
$userIsEmpty = false;					
$passwordIsEmpty = false;				
$password2IsEmpty = false;
//checks if page is requesting itself before further validations
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //user has filled in the users name in the text field "user" 
    if ($_POST['user'] == "") {
        $userIsEmpty = true;
    }
    
// Create database connection again, havent figured out how to make a page that would just need to be called here. This has worked so far
    $con = mysqli_connect("localhost", "root", "root");
    if (!$con) {
        exit('Connect Error (' . mysqli_connect_errno() . ') '
                . mysqli_connect_error());
    }
    //set the default client character set 
    mysqli_set_charset($con, 'utf-8');
    
//we are going to need to check if user exist in database 
    mysqli_select_db($con, "wishlist");
    $user = mysqli_real_escape_string($con, $_POST['user']);
    $wisher = mysqli_query($con, "SELECT id FROM wishers WHERE name='".$user."'");
    $wisherIDnum=mysqli_num_rows($wisher);
    if ($wisherIDnum) {
        $userNameIsUnique = false;
    }

//we are going to check password
    if ($_POST['password'] == "")
        $passwordIsEmpty = true;
    if ($_POST['password2'] == "")
        $password2IsEmpty = true;
    if ($_POST['password'] != $_POST['password2']) {
        $passwordIsValid = false;
    }

    
//redirect to addingwishlist.php
if (!$userIsEmpty && $userNameIsUnique && !$passwordIsEmpty && !$password2IsEmpty && $passwordIsValid) {
        $password = mysqli_real_escape_string($con, $_POST['password']);
        mysqli_select_db($con, "wishlist");
        mysqli_query($con, "INSERT wishers (name, password) VALUES ('" . $user . "', '" . $password . "')");
        mysqli_free_result($wisher);
        mysqli_close($con);
        header('Location: addingWishlist.php');
        exit;
    }
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
         <link href="style.css" type="text/css" rel="stylesheet">
        <title>NewUser</title> 
    </head>
    
    <body>
    New User<br>
        <form action="newUser.php" method="POST">
            Username: <input type="text" name="user"/><br/>
            <?php
            if ($userIsEmpty) {
                echo ("Enter your name, please!");
                echo ("<br/>");
            }
            ?>
            Password: <input type="password" name="password"/><br/>
            <?php
            if ($passwordIsEmpty) {
                echo ("Enter the password, please");
                echo ("<br/>");
            }
            ?>
            Confirm password: <input type="password" name="password2"/><br/>
            <input type="submit" value="Register"/>
            <?php
             if ($password2IsEmpty) {
                echo ("Confirm your password, please");
                echo ("<br/>");
            }
            if (!$password2IsEmpty && !$passwordIsValid) {
                echo ("<div>The passwords do not match!</div>");
                echo ("<br/>");
            }
            ?>

        </form>
    </body>

</html>