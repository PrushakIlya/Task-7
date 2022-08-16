<?php

namespace App\Entity;

use App\Repository\ShowroomsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ShowroomsRepository::class)]
class Showrooms
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    /**
     * @Assert\Regex(
     *     pattern="~([a-zA-Z]+)~",
     *     match=true,
     *     message="Your name cannot contain a number"
     * )
     * @Assert\Length(
     * min = 3,
     * max = 20,
     * minMessage = "Name must be at least {{ limit }} characters long",
     * maxMessage = "Name cannot be longer than {{ limit }} characters"
     * )
     */
    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $date_created = null;

    #[ORM\OneToMany(mappedBy: 'showroom_id', targetEntity: Vehicles::class)]
    private Collection $model;

    public function __construct()
    {
        $this->model = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

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

    /**
     * @return Collection<int, Vehicles>
     */
    public function getModel(): Collection
    {
        return $this->model;
    }

    public function addModel(Vehicles $model): self
    {
        if (!$this->model->contains($model)) {
            $this->model->add($model);
            $model->setShowroomId($this);
        }

        return $this;
    }

    public function removeModel(Vehicles $model): self
    {
        if ($this->model->removeElement($model)) {
            // set the owning side to null (unless already changed)
            if ($model->getShowroomId() === $this) {
                $model->setShowroomId(null);
            }
        }

        return $this;
    }
}
