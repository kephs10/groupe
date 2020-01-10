<?php

namespace App\DataFixtures;

use App\Entity\Role;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        $roles = new Role();
        $roles1->setRoles1((array("ROLE_SUP_ADMIN")));
        $manager->persist($roles1);

        $roles2->setRoles2((array("ROLE_ADMIN")));
        $manager->persist($roles2);

        $roles3->setRoles3((array("ROLE_USER")));
        $manager->persist($roles3);

        $user1 = new User();
        $user1->setPassword($this->encoder->encodePassword($user1, "VOILA"));
        $user1->setRoles((array("ROLE_SUP_ADMIN")));
        $manager->persist($user1);


        $manager->flush();
    }
}
