<?php

namespace App\Form;

use App\Entity\Location;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LocationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('city',null, [
                'attr' => [
                    'placeholder' => 'Enter city name',
                ],
            ])
            ->add('country',ChoiceType::class,[
                'choices' => [
                    'Poland' => 'PL',
                    'France' => 'FR',
                    'Italy' => 'IT',
                    'Spain' => 'ES',
                    'Germany' => 'DE',
                    'United States' => 'US',
                    'United Kingdom' => 'GB',
                ],
            ])
            ->add('Latitude',NumberType::class,[
                'attr' => [
                    'placeholder' => 'Enter latitude',
                ],
            ])
            ->add('Longtitude',NumberType::class,[
                'attr' => [
                    'placeholder' => 'Enter longitude',
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Location::class,
        ]);
    }



}


