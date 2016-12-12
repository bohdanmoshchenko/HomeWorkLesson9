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
    private $manufacturer;

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
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * @param int $manufacturer
     *
     * @return $this
     */
    public function setManufacturer($manufacturer)
    {
        $this->manufacturer = $manufacturer;

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
