<?php

namespace GeekHub\ShopBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use GeekHub\ShopBundle\Entity\ClientOrder;

class LoadClientOrderData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $clientOrder = new ClientOrder();
        $clientOrder->setClientId(1213);
        $clientOrder->setProductId(223123);

        $manager->persist($clientOrder);
        $manager->flush();

        $clientOrder = new ClientOrder();
        $clientOrder->setClientId(43543);
        $clientOrder->setProductId(2788978);

        $manager->persist($clientOrder);
        $manager->flush();

        $clientOrder = new ClientOrder();
        $clientOrder->setClientId(213);
        $clientOrder->setProductId(457899);

        $manager->persist($clientOrder);
        $manager->flush();
    }
}
