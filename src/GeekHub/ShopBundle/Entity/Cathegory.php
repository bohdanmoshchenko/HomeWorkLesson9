<?php

namespace GeekHub\ShopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cathegory
 *
 * @ORM\Table(name="cathegory")
 * @ORM\Entity(repositoryClass="GeekHub\ShopBundle\Repository\CathegoryRepository")
 */
class Cathegory
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="name", type="string", unique="true")
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="description", type="string")
     */
    private $description;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param int $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return int
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param int $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }
}
