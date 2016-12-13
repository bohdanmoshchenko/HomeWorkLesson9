<?php

namespace GeekHub\ShopBundle\Repository;
use Doctrine\ORM\EntityRepository;

/**
 * CathegoryRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CategoryRepository extends EntityRepository
{
    public function getAllOrderByName()
    {
        return $this->createQueryBuilder('c')
            ->orderBy('c.name', 'ASC')
            ->getQuery()
            ->getResult();
    }
}
