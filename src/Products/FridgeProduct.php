<?php

namespace Prushak\Task7\Products;

class FridgeProduct extends Product
{
    private const NAME = 'Fridge';
    public function __construct(string $type, string $releaseDate, int $cost, string $manufacture='')
    {
        parent::__construct($type, self::NAME, $manufacture, $releaseDate, $cost);
    }
}
