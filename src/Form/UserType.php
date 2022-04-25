<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Login')
            ->add('Nom')
            ->add('Prenom')
            ->add('Pwd')
            ->add('EtatActiv')
            ->add('EtatConnect')
            ->add('IsAdminOng')
            ->add('DateDernCon')
            ->add('photo')
            ->add('DateCreat')
            ->add('UserCreat')
            ->add('DateModif')
            ->add('UserModif')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
