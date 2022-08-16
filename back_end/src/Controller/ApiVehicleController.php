<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\VehiclesRepository;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

class ApiVehicleController extends AbstractController
{
    #[Route('/vehicle', name: 'app_answer')]
    public function unsoldCars(VehiclesRepository $vehiclesRepository)
    {
        return
            $this->json(
                [
                    'averagePriceSoldAllTime' => floor($vehiclesRepository->averagePriceSoldAllTime()[1]),
                    'averagePriceSoldToday' => floor($vehiclesRepository->averagePriceSoldToday()[1]),
                    'numbersOfCarsSoldByDate' => $vehiclesRepository->numbersOfCarsSoldByDate(),
                    'currentlyOnSale' => $vehiclesRepository->currentlyOnSale(),
                    'unsoldCars' => $vehiclesRepository->unsoldCars()
                ],
                Response::HTTP_OK,
                [],
                [ObjectNormalizer::CIRCULAR_REFERENCE_HANDLER => function ($object) {
                    return $object->getId();
                }
                ]
            );
    }
}
