<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder

            ->add('nom')
            ->add('prenom')
            ->add('password',PasswordType::class,['label'=>'Mot de passe'])
            ->add('email')
            ->add('age')
            ->add('sexe')
            ->add('photo')
            ->add('avant')
            ->add('apres')
            ->add('poids')
            ->add('photo', FileType::class, [
                'label' => 'Photo profile',
                // unmapped means that this field is not associated to any entity property
                'mapped' => false,
                'required' => false,
                // unmapped fields can't define their validation using annotations
                // in the associated entity, so you can use the PHP constraint classes
                'constraints' => [
                    new File([
                        'maxSize' => '2M',
                        'mimeTypes' => [
                            'image/png',
                            'image/x-png',
                            'image/jpeg',
                            'image/jpg',
                            'image/gif',
                        ],
                        'mimeTypesMessage' => "Le fichier n'est pas valide",
                    ])
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
