<?php

namespace App\Controller\Admin;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use Symfony\Component\PasswordHasher\Hasher\PasswordHasherFactory;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\HiddenField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\PasswordField;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Route;

class UserCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return User::class;
    }
    
    public function persistEntity(EntityManagerInterface $entityManager, $entityInstance): void
    {
        $factory = new PasswordHasherFactory([
            'common' => ['algorithm' => 'bcrypt'],
            'memory-hard' => ['algorithm' => 'sodium'],
        ]);

        $passwordHasher = $factory->getPasswordHasher('common');
        $hash = $passwordHasher->hash($entityInstance->getPassword());
        $entityInstance->setPassword($hash);

        $entityManager->persist($entityInstance);
        $entityManager->flush();
    }


    public function configureFields(string $pageName): iterable
    {
        $roles = ['ROLE_SUPER_ADMIN', 'ROLE_ADMIN', 'ROLE_MODERATOR', 'ROLE_USER'];
        return [
            IdField::new('id')
                ->onlyOnIndex(),
            EmailField::new('email'),
            TextField::new('password')
                ->onlyOnForms(),
            ArrayField::new('roles'),
        ];
    }

    // public function configureActions(Actions $actions): Actions
    // {
    //     return parent::configureActions($actions)
    //         ->setPermission(Action::NEW,'ROLE_ADMIN')
    //         ->setPermission(Action::NEW,'ROLE_SUPER_ADMIN')
    //         ->setPermission(Action::NEW,'ROLE_MODERATOR')
    //         ->setPermission(Action::NEW,'ROLE_USER');
    // }
}
