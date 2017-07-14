<?php

namespace AppBundle\Entity;

/**
 * Livre
 */
class Livre
{
    /**
     * @var integer
     */
    private $idliv;

    /**
     * @var string
     */
    private $msgliv;

    /**
     * @var \DateTime
     */
    private $datliv;

    /**
     * @var string
     */
    private $signlivr;

    /**
     * @var \AppBundle\Entity\Utilisateur
     */
    private $idutil;


    /**
     * Get idliv
     *
     * @return integer
     */
    public function getIdliv()
    {
        return $this->idliv;
    }

    /**
     * Set msgliv
     *
     * @param string $msgliv
     *
     * @return Livre
     */
    public function setMsgliv($msgliv)
    {
        $this->msgliv = $msgliv;

        return $this;
    }

    /**
     * Get msgliv
     *
     * @return string
     */
    public function getMsgliv()
    {
        return $this->msgliv;
    }

    /**
     * Set datliv
     *
     * @param \DateTime $datliv
     *
     * @return Livre
     */
    public function setDatliv($datliv)
    {
        $this->datliv = $datliv;

        return $this;
    }

    /**
     * Get datliv
     *
     * @return \DateTime
     */
    public function getDatliv()
    {
        return $this->datliv;
    }

    /**
     * Set signlivr
     *
     * @param string $signlivr
     *
     * @return Livre
     */
    public function setSignlivr($signlivr)
    {
        $this->signlivr = $signlivr;

        return $this;
    }

    /**
     * Get signlivr
     *
     * @return string
     */
    public function getSignlivr()
    {
        return $this->signlivr;
    }

    /**
     * Set idutil
     *
     * @param \AppBundle\Entity\Utilisateur $idutil
     *
     * @return Livre
     */
    public function setIdutil(\AppBundle\Entity\Utilisateur $idutil = null)
    {
        $this->idutil = $idutil;

        return $this;
    }

    /**
     * Get idutil
     *
     * @return \AppBundle\Entity\Utilisateur
     */
    public function getIdutil()
    {
        return $this->idutil;
    }
}

