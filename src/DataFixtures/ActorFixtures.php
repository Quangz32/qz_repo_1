<?php

namespace App\DataFixtures;

use App\Entity\Movie;
use App\Entity\Actor;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ActorFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        $actor1 = new Actor();
        $actor1->setName('Quangz');
        $manager->persist($actor1);

        $actor2 = new Actor();
        $actor2->setName('Thai');
        $manager->persist($actor2);

        $actor3 = new Actor();
        $actor3->setName('Qui');
        $manager->persist($actor3);

        $manager->flush();

        //Add Reference
        $this->addReference('actor_1',$actor1);
        $this->addReference('actor_2',$actor2);
        $this->addReference('actor_3',$actor3);

    }
}
