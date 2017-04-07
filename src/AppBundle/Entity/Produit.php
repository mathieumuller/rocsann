<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 *
 * @ORM\Table(name="produit")
 * @ORM\Entity
 */
class Produit
{
    /**
     * @var string
     *
     * @ORM\Column(name="libType", type="string", length=50, nullable=false)
     */
    private $libtype;

    /**
     * @var string
     *
     * @ORM\Column(name="libForme", type="string", length=50, nullable=false)
     */
    private $libforme;

    /**
     * @var integer
     *
     * @ORM\Column(name="idProduit", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idproduit;



    /**
     * Set libtype
     *
     * @param string $libtype
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

    /**
     * Get idproduit
     *
     * @return integer 
     */
    public function getIdproduit()
    {
        return $this->idproduit;
    }
}
