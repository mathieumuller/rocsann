<?php

namespace AppBundle\Entity;

/**
 * Carte
 */
class Carte
{
    /**
     * @var string
     */
    private $idcarte;

    /**
     * @var string
     */
    private $nombenef;

    /**
     * @var string
     */
    private $prenbenef;

    /**
     * @var string
     */
    private $modpaie;

    /**
     * @var integer
     */
    private $paiement = '0';

    /**
     * @var \DateTime
     */
    private $dateachat;

    /**
     * @var integer
     */
    private $util = '0';

    /**
     * @var \AppBundle\Entity\Typcarte
     */
    private $idtype;

    /**
     * @var \AppBundle\Entity\Utilisateur
     */
    private $commanditaire;


    /**
     * Get idcarte
     *
     * @return string
     */
    public function getIdcarte()
    {
        return $this->idcarte;
    }

    /**
     * Set nombenef
     *
     * @param string $nombenef
     *
     * @return Carte
     */
    public function setNombenef($nombenef)
    {
        $this->nombenef = $nombenef;

        return $this;
    }

    /**
     * Get nombenef
     *
     * @return string
     */
    public function getNombenef()
    {
        return $this->nombenef;
    }

    /**
     * Set prenbenef
     *
     * @param string $prenbenef
     *
     * @return Carte
     */
    public function setPrenbenef($prenbenef)
    {
        $this->prenbenef = $prenbenef;

        return $this;
    }

    /**
     * Get prenbenef
     *
     * @return string
     */
    public function getPrenbenef()
    {
        return $this->prenbenef;
    }

    /**
     * Set modpaie
     *
     * @param string $modpaie
     *
     * @return Carte
     */
    public function setModpaie($modpaie)
    {
        $this->modpaie = $modpaie;

        return $this;
    }

    /**
     * Get modpaie
     *
     * @return string
     */
    public function getModpaie()
    {
        return $this->modpaie;
    }

    /**
     * Set paiement
     *
     * @param integer $paiement
     *
     * @return Carte
     */
    public function setPaiement($paiement)
    {
        $this->paiement = $paiement;

        return $this;
    }

    /**
     * Get paiement
     *
     * @return integer
     */
    public function getPaiement()
    {
        return $this->paiement;
    }

    /**
     * Set dateachat
     *
     * @param \DateTime $dateachat
     *
     * @return Carte
     */
    public function setDateachat($dateachat)
    {
        $this->dateachat = $dateachat;

        return $this;
    }

    /**
     * Get dateachat
     *
     * @return \DateTime
     */
    public function getDateachat()
    {
        return $this->dateachat;
    }

    /**
     * Set util
     *
     * @param integer $util
     *
     * @return Carte
     */
    public function setUtil($util)
    {
        $this->util = $util;

        return $this;
    }

    /**
     * Get util
     *
     * @return integer
     */
    public function getUtil()
    {
        return $this->util;
    }

    /**
     * Set idtype
     *
     * @param \AppBundle\Entity\Typcarte $idtype
     *
     * @return Carte
     */
    public function setIdtype(\AppBundle\Entity\Typcarte $idtype = null)
    {
        $this->idtype = $idtype;

        return $this;
    }

    /**
     * Get idtype
     *
     * @return \AppBundle\Entity\Typcarte
     */
    public function getIdtype()
    {
        return $this->idtype;
    }

    /**
     * Set commanditaire
     *
     * @param \AppBundle\Entity\Utilisateur $commanditaire
     *
     * @return Carte
     */
    public function setCommanditaire(\AppBundle\Entity\Utilisateur $commanditaire = null)
    {
        $this->commanditaire = $commanditaire;

        return $this;
    }

    /**
     * Get commanditaire
     *
     * @return \AppBundle\Entity\Utilisateur
     */
    public function getCommanditaire()
    {
        return $this->commanditaire;
    }
}

