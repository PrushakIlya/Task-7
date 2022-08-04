<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\BillRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Models\BillModel;

class FrontController extends AbstractController
{
    #[Route('/bill', name: 'app_bill')]
    public function index(Request $request, BillRepository $billRepository, BillModel $billModel): JsonResponse
    {
        $data = $request->getContent();
        $result = $billModel->store($data, $billRepository);

        return $this->json($result);
    }
}
