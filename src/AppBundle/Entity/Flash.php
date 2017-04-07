<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Flash
 *
 * @ORM\Table(name="flash", indexes={@ORM\Index(name="FK_flash_idCrea", columns={"idCrea"})})
 * @ORM\Entity
 */
class Flash
{
    /**
     * @var integer
     *
     * @ORM\Column(name="prixFlash", type="integer", nullable=true)
     */
    private $prixflash;

    /**
     * @var integer
     *
     * @ORM\Column(name="stock", type="integer", nullable=true)
     */
    private $stock;

    /**
     * @var string
     *
     * @ORM\Column(name="remise", type="string", length=50, nullable=false)
     */
    private $remise;

    /**
     * @var string
     *
     * @ORM\Column(name="tailleFlash", type="string", length=25, nullable=false)
     */
    private $tailleflash;

    /**
     * @var integer
     *
     * @ORM\Column(name="fraisPort", type="integer", nullable=false)
     */
    private $fraisport;

    /**
     * @var integer
     *
     * @ORM\Column(name="idFlash", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idflash;

    /**
     * @var \AppBundle\Entity\Crea
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Crea")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCrea", referencedColumnName="idCrea")
     * })
     */
    private $idcrea;



    /**
     * Set prixflash
     *
     * @param integer $prixflash
     * @return Flash
     */
    public function setPrixflash($prixflash)
    {
        $this->prixflash = $prixflash;

        return $this;
    }

    /**
     * Get prixflash
     *
     * @return integer 
     */
    public function getPrixflash()
    {
        return $this->prixflash;
    }

    /**
     * Set stock
     *
     * @param integer $stock
     * @return Flash
     */
    public function setStock($stock)
    {
        $this->stock = $stock;

        return $this;
    }

    /**
     * Get stock
     *
     * @return integer 
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * Set remise
     *
     * @param string $remise
     * @return Flash
     */
    public function setRemise($remise)
    {
        $this->remise = $remise;

        return $this;
    }

    /**
     * Get remise
     *
     * @return string 
     */
    public function getRemise()
    {
        return $this->remise;
    }

    /**
     * Set tailleflash
     *
     * @param string $tailleflash
     * @return Flash
     */
    public function setTailleflash($tailleflash)
    {
        $this->tailleflash = $tailleflash;

        return $this;
    }

    /**
     * Get tailleflash
     *
     * @return string 
     */
    public function getTailleflash()
    {
        return $this->tailleflash;
    }

    /**
     * Set fraisport
     *
     * @param integer $fraisport
     * @return Flash
     */
    public function setFraisport($fraisport)
    {
        $this->fraisport = $fraisport;

        return $this;
    }

    /**
     * Get fraisport
     *
     * @return integer 
     */
    public function getFraisport()
    {
        return $this->fraisport;
    }

    /**
     * Get idflash
     *
     * @return integer 
     */
    public function getIdflash()
    {
        return $this->idflash;
    }

    /**
     * Set idcrea
     *
     * @param \AppBundle\Entity\Crea $idcrea
     * @return Flash
     */
    public function setIdcrea(\AppBundle\Entity\Crea $idcrea = null)
    {
        $this->idcrea = $idcrea;

        return $this;
    }

    /**
     * Get idcrea
     *
     * @return \AppBundle\Entity\Crea 
     */
    public function getIdcrea()
    {
        return $this->idcrea;
    }
}
