<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Typcarte
 *
 * @ORM\Table(name="typcarte")
 * @ORM\Entity
 */
class Typcarte
{
    /**
     * @var string
     *
     * @ORM\Column(name="libType", type="string", length=50, nullable=false)
     */
    private $libtype;

    /**
     * @var integer
     *
     * @ORM\Column(name="prixCarte", type="integer", nullable=false)
     */
    private $prixcarte;

    /**
     * @var integer
     *
     * @ORM\Column(name="idType", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtype;



    /**
     * Set libtype
     *
     * @param string $libtype
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

    /**
     * Get idtype
     *
     * @return integer 
     */
    public function getIdtype()
    {
        return $this->idtype;
    }
}
