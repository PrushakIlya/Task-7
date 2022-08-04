<?php

namespace Prushak\Task7;

use Prushak\Task7\Products\FridgeProduct;
use Prushak\Task7\Services\ConfigureService;
use Prushak\Task7\Services\DeliveryService;
use Prushak\Task7\Services\InstallService;

class BlankProduct implements ProductInterface
{
    use ServiceTrait;

    public function blanks(): array
    {
        $product_1 = new FridgeProduct('configure', '05.05.2022', 100, 'Samsung');
        $product_2 = new FridgeProduct('delivery', '05.05.2023', 10);
        $product_3 = new FridgeProduct('install', '05.05.2022', 100, '');

        return $this->makeBill([$product_1, $product_2, $product_3]);
    }

    public function makeBill(array $products): array
    {
        $list = [];
        $count = 0;

        foreach ($products as $product) {
            $product->manufacture === '' && $product->type = '';
            switch ($product->type) {
                case 'configure':  array_push($list, [
                    ...$product->getData(),
                    ...(new ConfigureService(rand(1, 10), rand(1, 10), rand(20, 100)))->getData(),
                ]);

                    break;
                case 'delivery':  array_push($list, [
                    ...$product->getData(),
                    ...(new DeliveryService(rand(1, 10), rand(1, 10), rand(20, 100)))->getData(),
                ]);

                    break;
                case 'install':  array_push($list, [
                    ...$product->getData(),
                    ...(new InstallService(rand(1, 10), rand(1, 10), rand(20, 100)))->getData(),
                ]);

                    break;
                default:
                    $count += 1;
            }
        }
        if ($count > 0) {
            echo 'There is a no position withoud product: '. $count .' quantity <br>';
        }

        return $list;
    }
}
