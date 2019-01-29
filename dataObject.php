<html>
<style>
table,th,td {
    border-style: ridge;
    text-align: left;
    border-collapse: collapse;
    }
    </style>

<?php 
$wlItem=array("item1","item2","item3","item4");
$wlSize=array("size1","size2","size3","size4");
$wlPrice=array("price1","price2","price3","price4");
$wlURL=array("URL1","URL2","URL3","URL4");
$itemlength=count($wlItem);
?>
<table style="width:30%">
    <tr>
        <th>Item</th>
        <th>Size</th>
        <th>Price</th>
        <th>URL</th>
    <?php for($i=0; $i<$itemlength; $i++){
    echo "<tr><td>"
    .$wlItem[$i]."</td><td>"
    .$wlSize[$i]."</td><td>"
    .$wlPrice[$i]."</td><td>"
    .$wlURL[$i]."</td></tr>";
    }?>
 
</table>
</html>