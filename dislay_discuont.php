<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product = $_POST["product"];
    $list = $_POST["list"];
    $discount = $_POST["discount"];
}
echo "Product:" .$product;
$discountamount = (($list * $discount) * 0.1) /10;
echo "<br><br>Discount Amount: " .$discountamount;
$discoountprice = $list - $discountamount;
echo "<br><br>Discount Price: " .$discoountprice;