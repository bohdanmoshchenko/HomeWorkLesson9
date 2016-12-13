<?php

namespace GeekHub\ShopBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use GeekHub\ShopBundle\Entity\Category;

class LoadCategoryData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $category = new Category();
        $category->setName('Category1');
        $category->setDescription('Some description 1');

        $manager->persist($category);
        $manager->flush();

        $category = new Category();
        $category->setName('Category1');
        $category->setDescription('Some description 2');

        $manager->persist($category);
        $manager->flush();

        $category = new Category();
        $category->setName('Category1');
        $category->setDescription('Some description 2');

        $manager->persist($category);
        $manager->flush();
    }
}
