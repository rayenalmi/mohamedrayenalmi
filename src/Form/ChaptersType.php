<?php

namespace App\Form;

use App\Entity\Chapters;
use App\Entity\Formation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;


class ChaptersType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name')
            ->add('context')
            ->add('formation',EntityType::class,[
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
            'data_class' => Chapters::class,
        ]);
    }
}
