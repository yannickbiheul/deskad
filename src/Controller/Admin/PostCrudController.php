<?php

namespace App\Controller\Admin;

use App\Entity\Post;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class PostCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Post::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            AssociationField::new('category'),
            IdField::new('id')->hideOnForm(),
            TextField::new('title'),
            ImageField::new('image')->setUploadDir("public/assets/images/posts")
                                    ->setBasePath("/assets/images/posts")
                                    ->setRequired('false'),
            TextEditorField::new('content'),
            TextEditorField::new('iframe'),
        ];
    }
    
}
