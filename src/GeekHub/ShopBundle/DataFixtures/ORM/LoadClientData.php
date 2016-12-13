<?php

namespace GeekHub\ShopBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use GeekHub\ShopBundle\Entity\Client;

class LoadClientData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $userAdmin = new Client();
        $userAdmin->setLogin('admin1');
        $userAdmin->setPassword('test');

        $manager->persist($userAdmin);
        $manager->flush();

        $userAdmin = new Client();
        $userAdmin->setLogin('admin2');
        $userAdmin->setPassword('test');

        $manager->persist($userAdmin);
        $manager->flush();

        $userAdmin = new Client();
        $userAdmin->setLogin('admin3');
        $userAdmin->setPassword('test');

        $manager->persist($userAdmin);
        $manager->flush();
    }
}
