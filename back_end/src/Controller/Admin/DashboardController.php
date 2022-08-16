<?php

namespace App\Controller\Admin;

use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\Routing\Annotation\Route;
use App\Controller\Admin\UserCrudController;
use App\Entity\Showrooms;
use App\Entity\User;
use App\Entity\Vehicles;
use Symfony\Component\Form\Button;
use Symfony\Component\HttpFoundation\JsonResponse;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        // return parent::index();

        // Option 1. You can make your dashboard redirect to some common page of your backend
        //
        $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
        return $this->redirect($adminUrlGenerator->setController(UserCrudController::class)->generateUrl());
        return $this->redirect($adminUrlGenerator->setController(VehiclesCrudController::class)->generateUrl());
        return $this->redirect($adminUrlGenerator->setController(ShowroomsCrudController::class)->generateUrl());

        // Option 2. You can make your dashboard redirect to different pages depending on the user
        //
        // if ('jane' === $this->getUser()->getUsername()) {
        //     return $this->redirect('...');
        // }

        // Option 3. You can render some custom template to display a proper dashboard with widgets, etc.
        // (tip: it's easier if your template extends from @EasyAdmin/page/content.html.twig)
        //
        // return $this->render('some/path/my-dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('AdmiPanel');
    }
    

    public function configureMenuItems(): iterable
    {
        return [
            MenuItem::section('Managing'),
            MenuItem::linkToCrud('Users', 'fa fa-users', User::class),
            MenuItem::linkToCrud('Showrooms', 'fa fa-building-o', Showrooms::class),
            MenuItem::linkToCrud('Vehicles', 'fa fa-car', Vehicles::class),
            MenuItem::linkToUrl('Back', 'fa-solid fa-arrow-left', 'http://localhost:3000'),
        ];
    }
}
