<?php

namespace AppBundle\Entity;

/**
 * Evenement
 */
class Evenement
{
    /**
     * @var integer
     */
    private $idevt;

    /**
     * @var string
     */
    private $titreevt;

    /**
     * @var string
     */
    private $descrevt;

    /**
     * @var string
     */
    private $photoevt;

    /**
     * @var \DateTime
     */
    private $dateevt;


    /**
     * Get idevt
     *
     * @return integer
     */
    public function getIdevt()
    {
        return $this->idevt;
    }

    /**
     * Set titreevt
     *
     * @param string $titreevt
     *
     * @return Evenement
     */
    public function setTitreevt($titreevt)
    {
        $this->titreevt = $titreevt;

        return $this;
    }

    /**
     * Get titreevt
     *
     * @return string
     */
    public function getTitreevt()
    {
        return $this->titreevt;
    }

    /**
     * Set descrevt
     *
     * @param string $descrevt
     *
     * @return Evenement
     */
    public function setDescrevt($descrevt)
    {
        $this->descrevt = $descrevt;

        return $this;
    }

    /**
     * Get descrevt
     *
     * @return string
     */
    public function getDescrevt()
    {
        return $this->descrevt;
    }

    /**
     * Set photoevt
     *
     * @param string $photoevt
     *
     * @return Evenement
     */
    public function setPhotoevt($photoevt)
    {
        $this->photoevt = $photoevt;

        return $this;
    }

    /**
     * Get photoevt
     *
     * @return string
     */
    public function getPhotoevt()
    {
        return $this->photoevt;
    }

    /**
     * Set dateevt
     *
     * @param \DateTime $dateevt
     *
     * @return Evenement
     */
    public function setDateevt($dateevt)
    {
        $this->dateevt = $dateevt;

        return $this;
    }

    /**
     * Get dateevt
     *
     * @return \DateTime
     */
    public function getDateevt()
    {
        return $this->dateevt;
    }
}

