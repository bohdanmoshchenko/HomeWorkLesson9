<?php

namespace GeekHub\ShopBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use GeekHub\ShopBundle\Entity\Manufacturer;

class LoadManufacturerData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $manufacturer = new Manufacturer();
        $manufacturer->setName('Manuf_name1');
        $manufacturer->setDescription('Description 1');

        $manager->persist($manufacturer);
        $manager->flush();

        $manufacturer = new Manufacturer();
        $manufacturer->setName('Manuf_name2');
        $manufacturer->setDescription('Description 2');

        $manager->persist($manufacturer);
        $manager->flush();

        $manufacturer = new Manufacturer();
        $manufacturer->setName('Manuf_name3');
        $manufacturer->setDescription('Description 3');

        $manager->persist($manufacturer);
        $manager->flush();
    }
}
