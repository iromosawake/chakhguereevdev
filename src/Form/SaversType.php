<?php

namespace App\Form;

use App\Entity\Savers;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SaversType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('silence',CheckboxType::class,['help' => '10 minutes de méditation'])
            ->add('affirmations',CheckboxType::class,['help' => "Réciter mes affirmations positives"])
            ->add('visualisation',CheckboxType::class,['help' => 'Que veux-je atteindre ?'])
            ->add('exercice',CheckboxType::class,['help' => 'Etirements, petit échauffement...'])
            ->add('reading',CheckboxType::class,['help' => 'Lire deux trois pages'])
            ->add('scribing',CheckboxType::class,['help' => 'Ecrire trois priorités de la journée'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Savers::class,
        ]);
    }
}
