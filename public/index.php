<?php

include '../vendor/autoload.php';

use Prushak\Task7\BlankProduct;

$blankProduct = new BlankProduct();

echo($blankProduct->showBill($blankProduct->blanks()));


