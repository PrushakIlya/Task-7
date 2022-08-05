<?php

include '../vendor/autoload.php';

use Prushak\Task7\BlankProduct;
use Prushak\Task7\Products\FridgeProduct;
use Prushak\Task7\Services\ConfigureService;

$blankProduct = new BlankProduct();

$product_1 = new FridgeProduct('20.03.22', 10);
$product_2 = new FridgeProduct('20.03.33', 14, 'Samsung');

$blankProduct->createBlank(
    [
        [$product_1, new ConfigureService()],
        [$product_2, new ConfigureService()],
    ]
);

echo $blankProduct->showBill($blankProduct->getBlank());
