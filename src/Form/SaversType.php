<?php

namespace App\Form;

use App\Entity\Savers;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SaversType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('silence')
            ->add('affirmations')
            ->add('visualisation')
            ->add('exercice')
            ->add('reading')
            ->add('scribing')
            ->add('Saisir', SubmitType::class);
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Savers::class,
        ]);
    }
}
