<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class Exercice extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');
        for($i=0;$i<50;$i++){
            for($i=0;$i<50;$i++){
                $exercice = new Exercice();
                $exercice->setNom($faker->name);
                $exercice->setConsigne($faker->sentence);
                $exercice->setVideo($faker->url);
                $exercice->setPrincipal($faker->boolean());
                $exercice->setPatternMuscle();
                $manager->persist($exercice);
            }
        }

        $manager->flush();
    }
}
