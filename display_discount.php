<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $description = $_POST["Description"];
    $price = $_POST["Price"];
    $percent = $_POST["Percent"];
}
$DiscountAmount = ($price * $percent * 0.1 * 0.01);
$DiscountPrice = $price - $DiscountAmount;
echo $description . "<br>";
echo "$" . $price . "<br>";
echo $percent . "%" . "<br>";
echo "Discount Amount: " . "$" . $DiscountAmount . "<br>";
echo "Discount Price: " . "$" . $DiscountPrice . "<br>";
?>