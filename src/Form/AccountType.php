<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AccountType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class, $this->getConfiguration("Email", "Votre adresse e-mail..."))
            ->add('roles')
            ->add('password')
            ->add('firstName', TextType::class ,$this->getConfiguration("Prénom", "Votre prénom..."))
            ->add('lastName', TextType::class ,$this->getConfiguration("nom", "Votre nom de famille..."))
            ->add('address')
            ->add('zipcode')
            ->add('city')
            ->add('createdAt')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
