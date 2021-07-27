<?php

namespace App\Controller\Admin;

use App\Entity\HomeContent;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;


class HomeContentCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return HomeContent::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('introTitle'),
            TextEditorField::new('introContent'),
            TextField::new('section1Title'),
            TextEditorField::new('section1Content'),
            TextField::new('section2Title'),
            TextEditorField::new('section2Content'),
            TextField::new('section3Title'),
            TextEditorField::new('section3Intro'),
            TextField::new('section3Video1'),
            TextEditorField::new('section3Video1Content'),
            TextField::new('section3Video2'),
            TextEditorField::new('section3Video2Content'),
        ];
    }

}
