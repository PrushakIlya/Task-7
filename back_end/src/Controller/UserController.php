<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RequestStack;
use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Component\PasswordHasher\Hasher\PasswordHasherFactory;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Security\Http\Attribute\CurrentUser;

class UserController extends AbstractController
{
    // #[Route('/user', name: 'app_user')]
    // public function index(Request $request, UserRepository $userRepository, ValidatorInterface $validator): Response
    // {
    //     $payload = json_decode($request->getContent());

    //     $user = new User();

    //     $hashPassword = $this->hashPassword($payload->password);

    //     $user->setEmail($payload->email);
    //     $user->setPassword($hashPassword);

    //     if ($user->getEmail()) {
    //         // $userRepository->add($user, true);

    //         return $this->json(true);
    //     }

    //     return $this->json(false);
    // }

    // private function hashPassword(string $password, $typeHashing = 'common') : string
    // {
    //     $factory = new PasswordHasherFactory([
    //         'common' => ['algorithm' => 'bcrypt'],
    //         'memory-hard' => ['algorithm' => 'sodium'],
    //     ]);

    //     $passwordHasher = $factory->getPasswordHasher($typeHashing);
    //     $hashPassword = $passwordHasher->hash($password);
    //     return $hashPassword;
    // }

    // #[Route('/login', name: 'apiLogin')]
    // public function login():Response
    // {
    //     dd($this->getUser());
    //     // if ($user) {
    //     //     return $this->json([
    //     //         'message' => 'Welcome to your new controller!',
    //     //         'path' => 'src/Controller/ApiLoginController.php',
    //     //     ]);
    //     // }
        
    //     return $this->json('11');
    // }

    #[Route('/api/login', name: 'api_login')]
    public function index(): Response
    {
        $user = $this->getUser();
        dd($user);
        // if (null === $user) {
        //     return $this->json([
        //         'message' => 'missing credentials',
        //     ], Response::HTTP_UNAUTHORIZED);
        // }
    
        // $token = 'sdgdsgdsg'; // somehow create an API token for $user
    
        return $this->json([
            'user'  => $user->getUserIdentifier(),
            // 'token' => $token,
         ]);
    }
}
