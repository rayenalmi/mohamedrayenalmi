<?php

namespace App\Form;

use App\Entity\UserFormation;
use App\Entity\Formation;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserFormationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('idUser', EntityType::class,[
                'class'=>User::class,
                "choice_label"=>'email',
                'expanded'=>false,
                'multiple'=>false
            ])
            ->add('idFormation', EntityType::class,[
                'class'=>Formation::class,
                "choice_label"=>'name',
                'expanded'=>false,
                'multiple'=>false
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => UserFormation::class,
        ]);
    }
}
