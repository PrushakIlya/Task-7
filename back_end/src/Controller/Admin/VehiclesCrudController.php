<?php

namespace App\Controller\Admin;

use App\Entity\Vehicles;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Symfony\Bridge\Doctrine\Form\ChoiceList\IdReader;
use Symfony\Config\Security\ProviderConfig\ChainConfig;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;

class VehiclesCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Vehicles::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')
                ->onlyOnIndex(),
            AssociationField::new('showroom_id','Showroom')
                ->setFormTypeOption('choice_label', 'name'),
            TextField::new('model'),
            TextField::new('color'),
            IntegerField::new('price', 'Price $'),
            IntegerField::new('yearOfProduction'),
            TextField::new('dateOfSold'),
            DateField::new('date_created'),
            BooleanField::new('sale')
        ];
    }

}
