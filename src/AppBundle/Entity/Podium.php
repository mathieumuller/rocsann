<?php

namespace AppBundle\Entity;

/**
 * Podium
 */
class Podium
{
    /**
     * @var integer
     */
    private $idphoto;

    /**
     * @var string
     */
    private $commentaire;

    /**
     * @var \DateTime
     */
    private $datephoto;

    /**
     * @var string
     */
    private $forme = 'Autre';

    /**
     * @var string
     */
    private $chemin;

    /**
     * @var integer
     */
    private $valid = '0';

    /**
     * @var \AppBundle\Entity\Utilisateur
     */
    private $idutil;


    /**
     * Get idphoto
     *
     * @return integer
     */
    public function getIdphoto()
    {
        return $this->idphoto;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     *
     * @return Podium
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Set datephoto
     *
     * @param \DateTime $datephoto
     *
     * @return Podium
     */
    public function setDatephoto($datephoto)
    {
        $this->datephoto = $datephoto;

        return $this;
    }

    /**
     * Get datephoto
     *
     * @return \DateTime
     */
    public function getDatephoto()
    {
        return $this->datephoto;
    }

    /**
     * Set forme
     *
     * @param string $forme
     *
     * @return Podium
     */
    public function setForme($forme)
    {
        $this->forme = $forme;

        return $this;
    }

    /**
     * Get forme
     *
     * @return string
     */
    public function getForme()
    {
        return $this->forme;
    }

    /**
     * Set chemin
     *
     * @param string $chemin
     *
     * @return Podium
     */
    public function setChemin($chemin)
    {
        $this->chemin = $chemin;

        return $this;
    }

    /**
     * Get chemin
     *
     * @return string
     */
    public function getChemin()
    {
        return $this->chemin;
    }

    /**
     * Set valid
     *
     * @param integer $valid
     *
     * @return Podium
     */
    public function setValid($valid)
    {
        $this->valid = $valid;

        return $this;
    }

    /**
     * Get valid
     *
     * @return integer
     */
    public function getValid()
    {
        return $this->valid;
    }

    /**
     * Set idutil
     *
     * @param \AppBundle\Entity\Utilisateur $idutil
     *
     * @return Podium
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

