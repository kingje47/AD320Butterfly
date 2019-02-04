<?php
  require 'buildWishlist.php';

function renderWishlistToPage($queryArray){
  echo "<span id='wishlistList'>";
  foreach($queryArray as $dataRow){
    echo buildWishlist($dataRow);
  }
}







 ?>
