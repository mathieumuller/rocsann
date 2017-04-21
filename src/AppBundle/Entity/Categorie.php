<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Produit.
 *
 * @ORM\Table(name="categorie")
 * @ORM\Entity
 */
class Categorie
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=50, nullable=false)
     */
    protected $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=20, nullable=false, unique=true)
     */
    protected $code;

    /**
     * @ORM\OneToMany(targetEntity="Realisation", mappedBy="categorie")
     */
    protected $realisations;

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->realisations = new ArrayCollection();
    }

    public function __toString()
    {
        return $this->getLibelle();
    }

    /**
     * Gets the value of id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Gets the value of libelle.
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Sets the value of libelle.
     *
     * @param string $libelle the libelle
     *
     * @return self
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Gets the value of code.
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets the value of code.
     *
     * @param string $code the code
     *
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Gets the value of realisations.
     *
     * @return mixed
     */
    public function getRealisations()
    {
        return $this->realisations;
    }

    /**
     * Sets the value of realisations.
     *
     * @param mixed $realisations the realisations
     *
     * @return self
     */
    public function setRealisations($realisations)
    {
        $this->realisations = $realisations;

        return $this;
    }
}
