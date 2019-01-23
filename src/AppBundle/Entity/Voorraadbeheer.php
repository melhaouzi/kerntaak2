<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Voorraadbeheer
 *
 * @ORM\Table(name="voorraadbeheer")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\VoorraadbeheerRepository")
 */
class Voorraadbeheer
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
     * @ORM\Column(name="productnaam", type="string", length=255)
     */

    /**
     *
     * @ORM\ManyToOne(targetEntity="Product")
     * @ORM\JoinColumn(name="productnaam", referencedColumnName="id")
     */
    private $productnaam;

    /**
     * @var string
     *
     * @ORM\Column(name="locatie", type="string", length=255)
     */

    /**
     *
     * @ORM\ManyToOne(targetEntity="Locatie")
     * @ORM\JoinColumn(name="locatie", referencedColumnName="id")
     */
    private $locatie;

    /**
     * @var int
     *
     * @ORM\Column(name="aantal", type="integer")
     */
    private $aantal;


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
     * Set productnaam
     *
     * @param string $productnaam
     *
     * @return Voorraadbeheer
     */
    public function setProductnaam($productnaam)
    {
        $this->productnaam = $productnaam;

        return $this;
    }

    /**
     * Get productnaam
     *
     * @return string
     */
    public function getProductnaam()
    {
        return $this->productnaam;
    }

    /**
     * Set locatie
     *
     * @param string $locatie
     *
     * @return Voorraadbeheer
     */
    public function setLocatie($locatie)
    {
        $this->locatie = $locatie;

        return $this;
    }

    /**
     * Get locatie
     *
     * @return string
     */
    public function getLocatie()
    {
        return $this->locatie;
    }

    /**
     * Set aantal
     *
     * @param integer $aantal
     *
     * @return Voorraadbeheer
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
}

