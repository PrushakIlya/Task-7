<?php

namespace App\Entity;

use App\Repository\VehiclesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VehiclesRepository::class)]
class Vehicles
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'id')]
    private ?Showrooms $showroom_id = null;

    #[ORM\Column(length: 255)]
    private ?string $model = null;

    #[ORM\Column(length: 255)]
    private ?string $color = null;

    #[ORM\Column]
    private ?int $price = null;

    #[ORM\Column]
    private ?int $yearOfProduction = null;

    #[ORM\Column(nullable: true)]
    private ?string $dateOfSold = null;

    #[ORM\Column(nullable: true)]
    private ?bool $sale = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $date_created = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getShowroomId(): ?Showrooms
    {
        return $this->showroom_id;
    }

    public function setShowroomId(?Showrooms $showroom_id): self
    {
        $this->showroom_id = $showroom_id;

        return $this;
    }

    public function getModel(): ?string
    {
        return $this->model;
    }

    public function setModel(string $model): self
    {
        $this->model = $model;

        return $this;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(string $color): self
    {
        $this->color = $color;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getYearOfProduction(): ?int
    {
        return $this->yearOfProduction;
    }

    public function setYearOfProduction(int $yearOfProduction): self
    {
        $this->yearOfProduction = $yearOfProduction;

        return $this;
    }

    public function getDateOfSold(): ?string
    {
        return $this->dateOfSold;
    }

    public function setDateOfSold(string $dateOfSold): self
    {
        $this->dateOfSold = $dateOfSold;

        return $this;
    }

    public function isSale(): ?bool
    {
        return $this->sale;
    }

    public function setSale(bool $sale): self
    {
        $this->sale = $sale;

        return $this;
    }

    public function getDateCreated(): ?\DateTimeInterface
    {
        return $this->date_created;
    }

    public function setDateCreated(\DateTimeInterface $date_created): self
    {
        $this->date_created = $date_created;

        return $this;
    }
}
