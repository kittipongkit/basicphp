<?php
$name   = "Pornsiri";
$age    = 29;
$weight = 55;

$normal_price = "299";
$sale_price   = 299.00;

echo "<pre>";
var_dump($name, $age, $weight);
echo "</pre>";

var_dump($normal_price <=> $sale_price);
var_dump($normal_price === $sale_price);
