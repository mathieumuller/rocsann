<?php

namespace AppBundle\Entity;

/**
 * Utilisateur
 */
class Utilisateur
{
    /**
     * @var integer
     */
    private $idutil;

    /**
     * @var string
     */
    private $nomutil;

    /**
     * @var string
     */
    private $prenutil;

    /**
     * @var string
     */
    private $passutil;

    /**
     * @var string
     */
    private $mailutil;

    /**
     * @var string
     */
    private $voieutil;

    /**
     * @var string
     */
    private $cputil;

    /**
     * @var string
     */
    private $communeutil;

    /**
     * @var string
     */
    private $paysutil;

    /**
     * @var integer
     */
    private $nbconnect;

    /**
     * @var \DateTime
     */
    private $lastconnect;

    /**
     * @var string
     */
    private $dossutil;

    /**
     * @var integer
     */
    private $news = '0';

    /**
     * @var \AppBundle\Entity\Question
     */
    private $idquestion;

    /**
     * @var \AppBundle\Entity\Typutil
     */
    private $libtyp;


    /**
     * Get idutil
     *
     * @return integer
     */
    public function getIdutil()
    {
        return $this->idutil;
    }

    /**
     * Set nomutil
     *
     * @param string $nomutil
     *
     * @return Utilisateur
     */
    public function setNomutil($nomutil)
    {
        $this->nomutil = $nomutil;

        return $this;
    }

    /**
     * Get nomutil
     *
     * @return string
     */
    public function getNomutil()
    {
        return $this->nomutil;
    }

    /**
     * Set prenutil
     *
     * @param string $prenutil
     *
     * @return Utilisateur
     */
    public function setPrenutil($prenutil)
    {
        $this->prenutil = $prenutil;

        return $this;
    }

    /**
     * Get prenutil
     *
     * @return string
     */
    public function getPrenutil()
    {
        return $this->prenutil;
    }

    /**
     * Set passutil
     *
     * @param string $passutil
     *
     * @return Utilisateur
     */
    public function setPassutil($passutil)
    {
        $this->passutil = $passutil;

        return $this;
    }

    /**
     * Get passutil
     *
     * @return string
     */
    public function getPassutil()
    {
        return $this->passutil;
    }

    /**
     * Set mailutil
     *
     * @param string $mailutil
     *
     * @return Utilisateur
     */
    public function setMailutil($mailutil)
    {
        $this->mailutil = $mailutil;

        return $this;
    }

    /**
     * Get mailutil
     *
     * @return string
     */
    public function getMailutil()
    {
        return $this->mailutil;
    }

    /**
     * Set voieutil
     *
     * @param string $voieutil
     *
     * @return Utilisateur
     */
    public function setVoieutil($voieutil)
    {
        $this->voieutil = $voieutil;

        return $this;
    }

    /**
     * Get voieutil
     *
     * @return string
     */
    public function getVoieutil()
    {
        return $this->voieutil;
    }

    /**
     * Set cputil
     *
     * @param string $cputil
     *
     * @return Utilisateur
     */
    public function setCputil($cputil)
    {
        $this->cputil = $cputil;

        return $this;
    }

    /**
     * Get cputil
     *
     * @return string
     */
    public function getCputil()
    {
        return $this->cputil;
    }

    /**
     * Set communeutil
     *
     * @param string $communeutil
     *
     * @return Utilisateur
     */
    public function setCommuneutil($communeutil)
    {
        $this->communeutil = $communeutil;

        return $this;
    }

    /**
     * Get communeutil
     *
     * @return string
     */
    public function getCommuneutil()
    {
        return $this->communeutil;
    }

    /**
     * Set paysutil
     *
     * @param string $paysutil
     *
     * @return Utilisateur
     */
    public function setPaysutil($paysutil)
    {
        $this->paysutil = $paysutil;

        return $this;
    }

    /**
     * Get paysutil
     *
     * @return string
     */
    public function getPaysutil()
    {
        return $this->paysutil;
    }

    /**
     * Set nbconnect
     *
     * @param integer $nbconnect
     *
     * @return Utilisateur
     */
    public function setNbconnect($nbconnect)
    {
        $this->nbconnect = $nbconnect;

        return $this;
    }

    /**
     * Get nbconnect
     *
     * @return integer
     */
    public function getNbconnect()
    {
        return $this->nbconnect;
    }

    /**
     * Set lastconnect
     *
     * @param \DateTime $lastconnect
     *
     * @return Utilisateur
     */
    public function setLastconnect($lastconnect)
    {
        $this->lastconnect = $lastconnect;

        return $this;
    }

    /**
     * Get lastconnect
     *
     * @return \DateTime
     */
    public function getLastconnect()
    {
        return $this->lastconnect;
    }

    /**
     * Set dossutil
     *
     * @param string $dossutil
     *
     * @return Utilisateur
     */
    public function setDossutil($dossutil)
    {
        $this->dossutil = $dossutil;

        return $this;
    }

    /**
     * Get dossutil
     *
     * @return string
     */
    public function getDossutil()
    {
        return $this->dossutil;
    }

    /**
     * Set news
     *
     * @param integer $news
     *
     * @return Utilisateur
     */
    public function setNews($news)
    {
        $this->news = $news;

        return $this;
    }

    /**
     * Get news
     *
     * @return integer
     */
    public function getNews()
    {
        return $this->news;
    }

    /**
     * Set idquestion
     *
     * @param \AppBundle\Entity\Question $idquestion
     *
     * @return Utilisateur
     */
    public function setIdquestion(\AppBundle\Entity\Question $idquestion = null)
    {
        $this->idquestion = $idquestion;

        return $this;
    }

    /**
     * Get idquestion
     *
     * @return \AppBundle\Entity\Question
     */
    public function getIdquestion()
    {
        return $this->idquestion;
    }

    /**
     * Set libtyp
     *
     * @param \AppBundle\Entity\Typutil $libtyp
     *
     * @return Utilisateur
     */
    public function setLibtyp(\AppBundle\Entity\Typutil $libtyp = null)
    {
        $this->libtyp = $libtyp;

        return $this;
    }

    /**
     * Get libtyp
     *
     * @return \AppBundle\Entity\Typutil
     */
    public function getLibtyp()
    {
        return $this->libtyp;
    }
}

