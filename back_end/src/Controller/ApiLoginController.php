<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Http\Attribute\CurrentUser;
use Symfony\Component\HttpFoundation\Request;

class ApiLoginController extends AbstractController
{

    // protected const HEADER_AUTH_TOKEN = 'AUTH-TOKEN';
    // #[Route('/api/login/me', name: 'api_login')]
    // public function index(#[CurrentUser] ?User $user): Response
    // {
    //     if (null === $user) {
    //         return $this->json([
    //             'message' => 'missing credentials',
    //         ], Response::HTTP_UNAUTHORIZED);
    //     }
    
    //     $token = 'prushka'; // somehow create an API token for $user
    
    //     return $this->json([
    //         'user'  => $user->getUserIdentifier(),
    //         'token' => $token,
    //      ]);
    // }


    #[Route('/api/login/mee', name: 'api_logdin')]
    public function t(#[CurrentUser] ?User $user, Request $request): Response
    {
        return $this->json($request->headers->get('authorization'));
    }
}
