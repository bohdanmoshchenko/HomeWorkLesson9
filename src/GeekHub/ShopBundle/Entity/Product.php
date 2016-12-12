<?php

namespace GeekHub\ShopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 *
 * @ORM\Table(name="product")
 * @ORM\Entity(repositoryClass="GeekHub\ShopBundle\Repository\ProductRepository")
 */
class Product
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="cathegory_id", type="integer")
     */
    private $cathegory_id;

    /**
     * @var int
     *
     * @ORM\Column(name="manufacturer", type="integer")
     */
    private $manufacturer_id;

    /**
     * @var int
     *
     * @ORM\Column(name="description", type="integer")
     */
    private $description;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
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
    public function getCathegoryId()
    {
        return $this->cathegory_id;
    }

    /**
     * @param int $cathegory_id
     *
     * @return $this
     */
    public function setCathegoryId($cathegory_id)
    {
        $this->cathegory_id = $cathegory_id;

        return $this;
    }

    /**
     * @return int
     */
    public function getManufacturerId()
    {
        return $this->manufacturer_id;
    }

    /**
     * @param int $manufacturer_id
     *
     * @return $this
     */
    public function setManufacturerId($manufacturer_id)
    {
        $this->manufacturer_id = $manufacturer_id;

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
