<?php

function buildWishlist($wishlistData){
  if(!(empty($wishlistData["Item"]))
  && (!(empty($wishlistData["Size"])))
  && (!(empty($wishlistData["Price"])))
  && (!(empty($wishlistData["URL"]) ))){
    $output_string = "";
    $div_start = "<div ";
    $inline_css = "class='wishlistRow'" .
                  "style='border: 1px solid black;".
                  "padding left: 10px; margin: 5px;" .
                  "width: 30%;float: left;'".
                  ">";
    $itemVal = $wishlistData["Item"];
    $sizeVal = $wishlistData["Size"];
    $priceVal = $wishlistData["Price"];
    $URLVal = $wishlistData["URL"];
    $div_end = "</div>";

    return $div_start . $inline_css . $itemVal . $sizeVal . $priceVal . $URLVal . $div_end;

}
}
//generateWishlist(array("Item"=>"TESTITEM", "Size"=>"TESTSIZE", "Price"=>"TESTPRICE", "URL"=>"TESTURL"));













 ?>
