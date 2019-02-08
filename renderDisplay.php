<?php
  require 'buildWishlist.php';

function renderWishlistToPage($queryArray){
  echo "<div id='wishlistList'>";
  foreach($queryArray as $dataRow){
    echo buildWishlist($dataRow);
  }
}







 ?>
