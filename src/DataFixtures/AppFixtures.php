<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $user = new User();
        $user->setFirstName("Pablo");
        $user->setEmail("pablo.tabernerovidal@gmail.com");
        $manager->persist($user);

        $user = new User();
        $user->setFirstName("Diego");
        $user->setEmail("dipribu@gmail.com");
        $manager->persist($user);

        $manager->flush();
    }
}
