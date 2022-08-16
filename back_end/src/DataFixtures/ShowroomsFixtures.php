<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Showrooms;
use DateTime;

class ShowroomsFixtures extends Fixture
{
    private array $names = ['AutoCool','UseCar'];

    public function load(ObjectManager $manager): void
    {
        foreach ($this->names as $name) {
            $product = new Showrooms();
            $product->setName($name);
            $product->setDateCreated(new DateTime());
            $manager->persist($product);
        }

        $manager->flush();
    }
}
