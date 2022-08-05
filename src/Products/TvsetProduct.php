<?php

namespace Prushak\Task7\Products;

class TvsetProduct extends Product
{
    public const NAME = 'TvSet';
    public function __construct(string $type, string $manufacture, string $releaseDate, int $cost)
    {
        parent::__construct($type, self::NAME, $manufacture, $releaseDate, $cost);
    }
}
