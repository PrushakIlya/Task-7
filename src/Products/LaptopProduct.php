<?php

namespace Prushak\Task7\Products;

class LaptopProduct extends Product
{
    private const NAME = 'Laptop';
    public function __construct(string $type, string $manufacture, string $releaseDate, int $cost)
    {
        parent::__construct($type, self::NAME, $manufacture, $releaseDate, $cost);
    }
}
