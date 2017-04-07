<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Carte
 *
 * @ORM\Table(name="carte", indexes={@ORM\Index(name="idType", columns={"idType"}), @ORM\Index(name="commanditaire", columns={"commanditaire"})})
 * @ORM\Entity
 */
class Carte
{
    /**
     * @var string
     *
     * @ORM\Column(name="nomBenef", type="string", length=50, nullable=false)
     */
    private $nombenef;

    /**
     * @var string
     *
     * @ORM\Column(name="prenBenef", type="string", length=50, nullable=false)
     */
    private $prenbenef;

    /**
     * @var string
     *
     * @ORM\Column(name="modPaie", type="string", length=30, nullable=false)
     */
    private $modpaie;

    /**
     * @var integer
     *
     * @ORM\Column(name="paiement", type="integer", nullable=false)
     */
    private $paiement;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateAchat", type="date", nullable=false)
     */
    private $dateachat;

    /**
     * @var integer
     *
     * @ORM\Column(name="util", type="integer", nullable=false)
     */
    private $util;

    /**
     * @var string
     *
     * @ORM\Column(name="idCarte", type="string", length=13)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcarte;

    /**
     * @var \AppBundle\Entity\Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="commanditaire", referencedColumnName="idUtil")
     * })
     */
    private $commanditaire;

    /**
     * @var \AppBundle\Entity\Typcarte
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Typcarte")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idType", referencedColumnName="idType")
     * })
     */
    private $idtype;



    /**
     * Set nombenef
     *
     * @param string $nombenef
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
     * Get idcarte
     *
     * @return string 
     */
    public function getIdcarte()
    {
        return $this->idcarte;
    }

    /**
     * Set commanditaire
     *
     * @param \AppBundle\Entity\Utilisateur $commanditaire
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

    /**
     * Set idtype
     *
     * @param \AppBundle\Entity\Typcarte $idtype
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
}
