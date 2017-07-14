<?php

namespace AppBundle\Entity;

/**
 * Accessoire
 */
class Accessoire
{
    /**
     * @var integer
     */
    private $idaccess;

    /**
     * @var string
     */
    private $libaccess;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $idlgn;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $idcrea;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idlgn = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idcrea = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get idaccess
     *
     * @return integer
     */
    public function getIdaccess()
    {
        return $this->idaccess;
    }

    /**
     * Set libaccess
     *
     * @param string $libaccess
     *
     * @return Accessoire
     */
    public function setLibaccess($libaccess)
    {
        $this->libaccess = $libaccess;

        return $this;
    }

    /**
     * Get libaccess
     *
     * @return string
     */
    public function getLibaccess()
    {
        return $this->libaccess;
    }

    /**
     * Add idlgn
     *
     * @param \AppBundle\Entity\ConfigComm $idlgn
     *
     * @return Accessoire
     */
    public function addIdlgn(\AppBundle\Entity\ConfigComm $idlgn)
    {
        $this->idlgn[] = $idlgn;

        return $this;
    }

    /**
     * Remove idlgn
     *
     * @param \AppBundle\Entity\ConfigComm $idlgn
     */
    public function removeIdlgn(\AppBundle\Entity\ConfigComm $idlgn)
    {
        $this->idlgn->removeElement($idlgn);
    }

    /**
     * Get idlgn
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdlgn()
    {
        return $this->idlgn;
    }

    /**
     * Add idcrea
     *
     * @param \AppBundle\Entity\Crea $idcrea
     *
     * @return Accessoire
     */
    public function addIdcrea(\AppBundle\Entity\Crea $idcrea)
    {
        $this->idcrea[] = $idcrea;

        return $this;
    }

    /**
     * Remove idcrea
     *
     * @param \AppBundle\Entity\Crea $idcrea
     */
    public function removeIdcrea(\AppBundle\Entity\Crea $idcrea)
    {
        $this->idcrea->removeElement($idcrea);
    }

    /**
     * Get idcrea
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdcrea()
    {
        return $this->idcrea;
    }
}

