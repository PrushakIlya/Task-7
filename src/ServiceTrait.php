<?php

namespace Prushak\Task7;

trait ServiceTrait
{
    public function showBill(array $list): string
    {
        $products = '';
        $generallCost = 0;
        $count = 0;
        foreach ($list as $item) {
            if ($item['manufacture'] !== '') {
                $products .= '
                Kind of: '.$item['name'].', manufacture: '.$item['manufacture'].',
                release date: '.$item['releaseDate'].', cost: '.$item['serviceCost'].',
                deadline: '.$item['serviceDeadline'].', queue: '.$item['serviceQueue'].', 
                service: '.$item['serviceType'].'<br>
                ';
                $generallCost += (int)$item['serviceCost'];
            } else {
                $count++;
            }
        }
        $products .= '---->General cost:'.$generallCost.'<br>';
        $error = "$count ERROR by reason of not adding manufacture";

        return $products.$error;
    }
}
