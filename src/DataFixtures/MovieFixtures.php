<?php

namespace App\DataFixtures;

use App\Entity\Movie;
use src\Entity\Actor;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MovieFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        $movie1 = new Movie();
        $movie1->setName('Doraemon');
        $movie1->setYear(2000);
        $movie1->setImgPath('link1-doremon');

        //Add data to pivot table
        $movie1->addActor($this->getReference('actor_1'));
        $movie1->addActor($this->getReference('actor_2'));

        $manager->persist($movie1);

        $movie2 = new Movie();
        $movie2->setName('Conan');
        $movie2->setYear(2001);
        $movie2->setImgPath('linkConan');

        //Add data to pivot table
        $movie2->addActor($this->getReference('actor_1'));
        $movie2->addActor($this->getReference('actor_3'));

        $manager->persist($movie2);


        $manager->flush();

        //######

    }
}
