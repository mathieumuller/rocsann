<?php

namespace AppBundle\Entity;

/**
 * Typcarte
 */
class Typcarte
{
    /**
     * @var integer
     */
    private $idtype;

    /**
     * @var string
     */
    private $libtype;

    /**
     * @var integer
     */
    private $prixcarte;


    /**
     * Get idtype
     *
     * @return integer
     */
    public function getIdtype()
    {
        return $this->idtype;
    }

    /**
     * Set libtype
     *
     * @param string $libtype
     *
     * @return Typcarte
     */
    public function setLibtype($libtype)
    {
        $this->libtype = $libtype;

        return $this;
    }

    /**
     * Get libtype
     *
     * @return string
     */
    public function getLibtype()
    {
        return $this->libtype;
    }

    /**
     * Set prixcarte
     *
     * @param integer $prixcarte
     *
     * @return Typcarte
     */
    public function setPrixcarte($prixcarte)
    {
        $this->prixcarte = $prixcarte;

        return $this;
    }

    /**
     * Get prixcarte
     *
     * @return integer
     */
    public function getPrixcarte()
    {
        return $this->prixcarte;
    }
}

