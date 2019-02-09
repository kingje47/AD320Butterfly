<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content= "text/html; charset=UTF-8">  
        <link href="style.css" type="text/css" rel="stylesheet">
        <title>Buttlefly Wishlist APP</title>
    </head>
<!--    incase we decide to create different users, might also require another database and more security?-->
    
    <body   img src="pictures/shopping.jpg" alt="shopping">>
       <div id="butterfly">
            <a href="">
            <img src="pictures/logo.jpg" alt="logo">
            </a>
        </div> 
        <div id="wrapper">
<!--        this will open the connection to the database-->
    <form action="wishlist.php" method="GET" name="wishlist">
      Show wish list of: <input type="text" name="user" value=""/>
		<input type="submit" value="Go" />
</form>
    
        Create new user <a href="newUser.php">Make A New User</a>
            
        </div>
    </body>
</html>
<!--
<?php

  require 'renderDisplay.php';

  renderWishlistToPage($wishlistData);

 ?>
-->
