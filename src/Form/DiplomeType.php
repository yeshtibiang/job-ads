<?php

namespace App\Form;

use App\Entity\Diplome;
use App\Form\FormConfig;
use App\Entity\Localites;
use App\Entity\DomaineEtude;
use App\Entity\NiveauFormation;
use Symfony\Component\Form\AbstractType;
use Elao\Enum\Bridge\Symfony\Form\Type\EnumType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class DiplomeType extends FormConfig
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titreFormation', TextType::class, [
                'label_attr' => [
                    'class' => 'col-sm-3 col-form-label  text-dark  mt-1'
                ], 'attr' => [
                    'class' => 'col-md-6 ml-5',
                ]
            ])
            ->add('dateDebut', DateType::class, [
                'label_attr' => [
                    'class' => 'col-sm-3 col-form-label  text-dark  mt-1'
                ], 'attr' => [
                    'class' => 'col-md-6 ml-5',
                ],
                'widget' => 'single_text'
            ])
            ->add('dateFin', DateType::class, [
                'label_attr' => [
                    'class' => 'col-sm-3 col-form-label  text-dark  mt-1'
                ], 'attr' => [
                    'class' => 'col-md-6 ml-5',
                ],
                'widget' => 'single_text'
            ])
            ->add('nomEtablissement', TextType::class, [
                'label_attr' => [
                    'class' => 'col-sm-3 col-form-label  text-dark  mt-1'
                ], 'attr' => [
                    'class' => 'col-md-6 ml-5',
                ]
            ])
            ->add('niveau', EnumType::class, $this->getConfiguration('Niveau', '', [
                'enum_class' => NiveauFormation::class,
                'label_attr' => [
                    'class' => 'col-sm-3 col-form-label  text-dark  mt-1'
                ],
                'attr' => [
                    'class' => 'col-md-6 ml-5',
                ],
                'placeholder' => 'Sélectionnez...'
            ]))
            ->add('localite', EnumType::class, [
                'enum_class' => Localites::class,
                'label_attr' => [
                    'class' => 'col-sm-3 col-form-label  text-dark  mt-1'
                ],
                'attr' => [
                    'class' => 'col-md-6 ml-5',
                ],
                'placeholder' => 'Sélectionnez...'
            ])
            ->add('justificatifFile', FileType::class, $this->getConfiguration('Justificatif', '',[
                'required'=>false
            ]));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Diplome::class,
        ]);
    }
}
