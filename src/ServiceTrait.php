<?php

namespace Prushak\Task7;

trait ServiceTrait
{
    public function showBill(array $list): string
    {
        $products = '';
        $generallCost = 0;
        foreach ($list as $item) {
            $products .= 'Kind of: '.$item['name'].', manufacture: '.$item['manufacture'].',
                        release date: '.$item['releaseDate'].', cost: '.$item['cost'].',
                        >>>type: '.$item['type'].', deadline: '.$item['deadline'].',
                        queue: '.$item['queue'].', cost: '.$item['cost'].'<br>';
            $generallCost += (int)$item['cost'];
        }
        $products .= '---->General cost:'.$generallCost;

        return $products;
    }
}
