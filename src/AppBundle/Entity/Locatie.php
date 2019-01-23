<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Locatie
 *
 * @ORM\Table(name="locatie")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\LocatieRepository")
 */
class Locatie
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
     * @ORM\Column(name="vestiging", type="string", length=255)
     */
    private $vestiging;

    /**
     * @var string
     *
     * @ORM\Column(name="plaats", type="string", length=255)
     */
    private $plaats;

    /**
     * @var string
     *
     * @ORM\Column(name="adres", type="string", length=255)
     */
    private $adres;

    /**
     * @var string
     *
     * @ORM\Column(name="postcode", type="string", length=255)
     */
    private $postcode;

    /**
     * @var string
     *
     * @ORM\Column(name="telefoonnummer", type="string", length=255)
     */
    private $telefoonnummer;


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
     * Set vestiging
     *
     * @param string $vestiging
     *
     * @return Locatie
     */
    public function setVestiging($vestiging)
    {
        $this->vestiging = $vestiging;

        return $this;
    }

    /**
     * Get vestiging
     *
     * @return string
     */
    public function getVestiging()
    {
        return $this->vestiging;
    }

    /**
     * Set plaats
     *
     * @param string $plaats
     *
     * @return Locatie
     */
    public function setPlaats($plaats)
    {
        $this->plaats = $plaats;

        return $this;
    }

    /**
     * Get plaats
     *
     * @return string
     */
    public function getPlaats()
    {
        return $this->plaats;
    }

    /**
     * Set adres
     *
     * @param string $adres
     *
     * @return Locatie
     */
    public function setAdres($adres)
    {
        $this->adres = $adres;

        return $this;
    }

    /**
     * Get adres
     *
     * @return string
     */
    public function getAdres()
    {
        return $this->adres;
    }

    /**
     * Set postcode
     *
     * @param string $postcode
     *
     * @return Locatie
     */
    public function setPostcode($postcode)
    {
        $this->postcode = $postcode;

        return $this;
    }

    /**
     * Get postcode
     *
     * @return string
     */
    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     * Set telefoonnummer
     *
     * @param string $telefoonnummer
     *
     * @return Locatie
     */
    public function setTelefoonnummer($telefoonnummer)
    {
        $this->telefoonnummer = $telefoonnummer;

        return $this;
    }

    /**
     * Get telefoonnummer
     *
     * @return string
     */
    public function getTelefoonnummer()
    {
        return $this->telefoonnummer;
    }

    public function __toString()
    {
        return (string) $this->getVestiging();
    }
}

