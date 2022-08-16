<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Vehicles;
use App\Entity\Showrooms;
use DateTime;

class VehicleFixtures extends Fixture
{
    private array $yearOfProduction = [1990,2000,2022,1999,2005];
    private array $colors = ['red', 'black', 'white', 'blue'];
    private array $models = ['Mersedes', 'Bmw', 'Opel', 'Volksvagen'];

    public function load(ObjectManager $manager): void
    {
        $showroom = new Showrooms();
        foreach ($this->yearOfProduction as $item) {
            $sold = rand(0, 1);
            $vehicle = new Vehicles();
            $vehicle->setShowroomId($showroom->getId());
            $vehicle->setModel($this->models[mt_rand(0, 3)]);
            $vehicle->setColor($this->colors[mt_rand(0, 3)]);
            $vehicle->setPrice(mt_rand(1000, 10000));
            $vehicle->setYearOfProduction($item);
            $sold === 1 ? $vehicle->setSale(0):$vehicle->setSale(mt_rand(0, 1));
            $sold === 0 ? $vehicle->setDateOfSold('0') : $vehicle->setDateOfSold(date("Y-m-d", mt_rand(1340000000, 1660520908)));
            $vehicle->setDateCreated(new DateTime());
            $manager->persist($vehicle);
        }


        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            UserFixtures::class,
            ShowroomsFixtures::class,
            VehicleFixtures::class,
        ];
    }
}
