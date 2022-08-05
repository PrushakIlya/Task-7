<?php

namespace Prushak\Task7\Products;

use Prushak\Task7\ServiceTrait;

abstract class Product
{
    use ServiceTrait;
    private string $name;
    public string $manufacture;
    private string $releaseDate;
    private int $cost;

    public function __construct(string $name, string $manufacture, string $releaseDate, int $cost)
    {
        $this->name = $name;
        $this->manufacture = $manufacture;
        $this->releaseDate = $releaseDate;
        $this->cost = $cost;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setManufacture(string $manufacture): void
    {
        $this->manufacture = $manufacture;
    }

    public function getManufacture(): string
    {
        return $this->manufacture;
    }

    public function setReleaseDate(string $releaseDate): void
    {
        $this->releaseDate = $releaseDate;
    }

    public function getReleaseDate(): string
    {
        return $this->releaseDate;
    }

    public function setCost(string $releaseDate): void
    {
        $this->releaseDate = $releaseDate;
    }

    public function getCost(): string
    {
        return $this->releaseDate;
    }

    public function getData(): array
    {
        return [
            'name' => $this->name,
            'manufacture' => $this->manufacture,
            'releaseDate' => $this->releaseDate, 'cost' => $this->cost,
        ];
    }
}
