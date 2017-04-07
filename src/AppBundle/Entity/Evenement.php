<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evenement
 *
 * @ORM\Table(name="evenement")
 * @ORM\Entity
 */
class Evenement
{
    /**
     * @var string
     *
     * @ORM\Column(name="titreEvt", type="string", length=100, nullable=false)
     */
    private $titreevt;

    /**
     * @var string
     *
     * @ORM\Column(name="descrEvt", type="text", length=65535, nullable=false)
     */
    private $descrevt;

    /**
     * @var string
     *
     * @ORM\Column(name="photoEvt", type="blob", nullable=false)
     */
    private $photoevt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateEvt", type="date", nullable=false)
     */
    private $dateevt;

    /**
     * @var integer
     *
     * @ORM\Column(name="idEvt", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idevt;



    /**
     * Set titreevt
     *
     * @param string $titreevt
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

    /**
     * Get idevt
     *
     * @return integer 
     */
    public function getIdevt()
    {
        return $this->idevt;
    }
}
