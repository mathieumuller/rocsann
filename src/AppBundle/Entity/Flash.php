<?php

namespace AppBundle\Entity;

/**
 * Flash
 */
class Flash
{
    /**
     * @var integer
     */
    private $idflash;

    /**
     * @var integer
     */
    private $prixflash;

    /**
     * @var integer
     */
    private $stock;

    /**
     * @var string
     */
    private $remise;

    /**
     * @var string
     */
    private $tailleflash;

    /**
     * @var integer
     */
    private $fraisport;

    /**
     * @var \AppBundle\Entity\Crea
     */
    private $idcrea;


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
     * Set prixflash
     *
     * @param integer $prixflash
     *
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
     *
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
     *
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
     *
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
     *
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
     * Set idcrea
     *
     * @param \AppBundle\Entity\Crea $idcrea
     *
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

