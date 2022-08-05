<?php

namespace Prushak\Task7\Products;

class PhoneProduct extends Product
{
    private const NAME = 'Phone';
    public function __construct(string $type, string $manufacture, string $releaseDate, int $cost)
    {
        parent::__construct($type, self::NAME, $manufacture, $releaseDate, $cost);
    }
}
