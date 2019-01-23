<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 *
 * @ORM\Table(name="product")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProductRepository")
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
     * @ORM\Column(name="naam", type="string", length=255)
     */
    private $naam;

    /**
     * @var int
     *
     * @ORM\Column(name="aantal", type="integer")
     */
    private $aantal;

    /**
     * @var float
     *
     * @ORM\Column(name="prijs", type="float")
     */
    private $prijs;


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
     * Set naam
     *
     * @param string $naam
     *
     * @return Product
     */
    public function setNaam($naam)
    {
        $this->naam = $naam;

        return $this;
    }

    /**
     * Get naam
     *
     * @return string
     */
    public function getNaam()
    {
        return $this->naam;
    }

    /**
     * Set aantal
     *
     * @param integer $aantal
     *
     * @return Product
     */
    public function setAantal($aantal)
    {
        $this->aantal = $aantal;

        return $this;
    }

    /**
     * Get aantal
     *
     * @return int
     */
    public function getAantal()
    {
        return $this->aantal;
    }

    /**
     * Set prijs
     *
     * @param float $prijs
     *
     * @return Product
     */
    public function setPrijs($prijs)
    {
        $this->prijs = $prijs;

        return $this;
    }

    /**
     * Get prijs
     *
     * @return float
     */
    public function getPrijs()
    {
        return $this->prijs;
    }

    public function __toString()
    {
        return (string) $this->getNaam();
    }
}

