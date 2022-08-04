<?php

namespace Prushak\Task7\Products;

class FridgeProduct extends Product
{
    private const NAME = 'Fridge';
    public function __construct(string $releaseDate, int $cost, string $manufacture='')
    {
        parent::__construct(self::NAME, $manufacture, $releaseDate, $cost);
    }
}
