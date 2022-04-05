<?php

namespace App\Form;

use App\Entity\Motifs;
use App\Entity\Signaler;
use Elao\Enum\Bridge\Symfony\Form\Type\EnumType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SignalerType extends FormConfig
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('motif', EnumType::class, $this->getConfiguration('Motifs', '',[
                'enum_class'=>Motifs::class
            ]))
            ->add('commentaire', TextareaType::class, $this->getConfiguration('Commentaire', '',[
                'required'=>false
            ]))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Signaler::class,
        ]);
    }
}
