<?php

namespace GeekHub\ShopBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use GeekHub\ShopBundle\Entity\Product;

class LoadProductData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $product = new Product();
        $product->setName('Samisiunge1');
        $product->setDescription('Some description 1111');
        $product->setCategoryId(123);

        $manager->persist($product);
        $manager->flush();

        $product = new Product();
        $product->setName('Samisiunge2');
        $product->setDescription('Some description 22222');
        $product->setCategoryId(123);

        $manager->persist($product);
        $manager->flush();

        $product = new Product();
        $product->setName('Samisiunge3');
        $product->setDescription('Some description 33333');
        $product->setCategoryId(123);

        $manager->persist($product);
        $manager->flush();
    }
}
