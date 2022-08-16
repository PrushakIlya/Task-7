<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ShowroomsRepository;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

class ApiShowroomController extends AbstractController
{
    #[Route('/showroom', name: 'app_showrooms')]
    public function index(ShowroomsRepository $showroomsRepository): Response
    {
        $results = $showroomsRepository->findAll();

        return $this->json($results, Response::HTTP_OK, [], [
            ObjectNormalizer::CIRCULAR_REFERENCE_HANDLER=>function($object){
            return $object->getId();
        }]);
    }
}
