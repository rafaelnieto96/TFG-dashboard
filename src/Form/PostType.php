<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PostType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextType::class, [
                'label' => 'Título',
                'required' => true,
                'attr' => [
                    'class' => 'form-group'
                ]
            ])
            ->add('subtitle', TextareaType::class, [
                'label' => 'Descripción',
                'required' => false,
                'attr' => [
                    'class' => 'form-group'
                ]
            ])
            ->add('author', TextType::class, [
                'label' => 'Autor',
                'required' => false,
                'attr' => [
                    'class' => 'form-group'
                ]
            ])
            ->add('place', TextType::class, [
                'label' => 'Lugar',
                'required' => false,
                'attr' => [
                    'class' => 'form-group'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
