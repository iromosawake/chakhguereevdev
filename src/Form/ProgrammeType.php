<?php

namespace App\Form;

use App\Entity\Exercice;
use App\Entity\Programme;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProgrammeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('ordre')
            ->add('series')
            ->add('reps')
            ->add('charge')
            ->add('repos')
            ->add('rpe')
            ->add('exercice',EntityType::class,[
//                    'required' => false,
//                    'choice_label' => 'nom',
//                    'mapped' => false,
                    'class' => Exercice::class,])
//                    'attr' => [
//                        'class' => 'select2'
//                    ]])
            ->add('seances')
            ->add('Creer', SubmitType::class);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Programme::class,
        ]);
    }
}
