<?php

namespace AppBundle\Entity;

/**
 * Produit
 */
class Produit
{
    /**
     * @var integer
     */
    private $idproduit;

    /**
     * @var string
     */
    private $libtype;

    /**
     * @var string
     */
    private $libforme;


    /**
     * Get idproduit
     *
     * @return integer
     */
    public function getIdproduit()
    {
        return $this->idproduit;
    }

    /**
     * Set libtype
     *
     * @param string $libtype
     *
     * @return Produit
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
     * Set libforme
     *
     * @param string $libforme
     *
     * @return Produit
     */
    public function setLibforme($libforme)
    {
        $this->libforme = $libforme;

        return $this;
    }

    /**
     * Get libforme
     *
     * @return string
     */
    public function getLibforme()
    {
        return $this->libforme;
    }
}

