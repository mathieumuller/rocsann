<?php

namespace AppBundle\Entity;

/**
 * ConfigComm
 */
class ConfigComm
{
    /**
     * @var integer
     */
    private $idlgn;

    /**
     * @var string
     */
    private $matiere;

    /**
     * @var string
     */
    private $couleur;

    /**
     * @var string
     */
    private $bordure;

    /**
     * @var string
     */
    private $galon;

    /**
     * @var string
     */
    private $frange;

    /**
     * @var string
     */
    private $broderie;

    /**
     * @var string
     */
    private $taille;

    /**
     * @var string
     */
    private $logo;

    /**
     * @var string
     */
    private $perso;

    /**
     * @var integer
     */
    private $quantite;

    /**
     * @var integer
     */
    private $pxunit;

    /**
     * @var integer
     */
    private $idcreabrute;

    /**
     * @var \AppBundle\Entity\Commande
     */
    private $idcomm;

    /**
     * @var \AppBundle\Entity\Produit
     */
    private $idproduit;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $idaccess;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idaccess = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get idlgn
     *
     * @return integer
     */
    public function getIdlgn()
    {
        return $this->idlgn;
    }

    /**
     * Set matiere
     *
     * @param string $matiere
     *
     * @return ConfigComm
     */
    public function setMatiere($matiere)
    {
        $this->matiere = $matiere;

        return $this;
    }

    /**
     * Get matiere
     *
     * @return string
     */
    public function getMatiere()
    {
        return $this->matiere;
    }

    /**
     * Set couleur
     *
     * @param string $couleur
     *
     * @return ConfigComm
     */
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;

        return $this;
    }

    /**
     * Get couleur
     *
     * @return string
     */
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * Set bordure
     *
     * @param string $bordure
     *
     * @return ConfigComm
     */
    public function setBordure($bordure)
    {
        $this->bordure = $bordure;

        return $this;
    }

    /**
     * Get bordure
     *
     * @return string
     */
    public function getBordure()
    {
        return $this->bordure;
    }

    /**
     * Set galon
     *
     * @param string $galon
     *
     * @return ConfigComm
     */
    public function setGalon($galon)
    {
        $this->galon = $galon;

        return $this;
    }

    /**
     * Get galon
     *
     * @return string
     */
    public function getGalon()
    {
        return $this->galon;
    }

    /**
     * Set frange
     *
     * @param string $frange
     *
     * @return ConfigComm
     */
    public function setFrange($frange)
    {
        $this->frange = $frange;

        return $this;
    }

    /**
     * Get frange
     *
     * @return string
     */
    public function getFrange()
    {
        return $this->frange;
    }

    /**
     * Set broderie
     *
     * @param string $broderie
     *
     * @return ConfigComm
     */
    public function setBroderie($broderie)
    {
        $this->broderie = $broderie;

        return $this;
    }

    /**
     * Get broderie
     *
     * @return string
     */
    public function getBroderie()
    {
        return $this->broderie;
    }

    /**
     * Set taille
     *
     * @param string $taille
     *
     * @return ConfigComm
     */
    public function setTaille($taille)
    {
        $this->taille = $taille;

        return $this;
    }

    /**
     * Get taille
     *
     * @return string
     */
    public function getTaille()
    {
        return $this->taille;
    }

    /**
     * Set logo
     *
     * @param string $logo
     *
     * @return ConfigComm
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get logo
     *
     * @return string
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set perso
     *
     * @param string $perso
     *
     * @return ConfigComm
     */
    public function setPerso($perso)
    {
        $this->perso = $perso;

        return $this;
    }

    /**
     * Get perso
     *
     * @return string
     */
    public function getPerso()
    {
        return $this->perso;
    }

    /**
     * Set quantite
     *
     * @param integer $quantite
     *
     * @return ConfigComm
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return integer
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set pxunit
     *
     * @param integer $pxunit
     *
     * @return ConfigComm
     */
    public function setPxunit($pxunit)
    {
        $this->pxunit = $pxunit;

        return $this;
    }

    /**
     * Get pxunit
     *
     * @return integer
     */
    public function getPxunit()
    {
        return $this->pxunit;
    }

    /**
     * Set idcreabrute
     *
     * @param integer $idcreabrute
     *
     * @return ConfigComm
     */
    public function setIdcreabrute($idcreabrute)
    {
        $this->idcreabrute = $idcreabrute;

        return $this;
    }

    /**
     * Get idcreabrute
     *
     * @return integer
     */
    public function getIdcreabrute()
    {
        return $this->idcreabrute;
    }

    /**
     * Set idcomm
     *
     * @param \AppBundle\Entity\Commande $idcomm
     *
     * @return ConfigComm
     */
    public function setIdcomm(\AppBundle\Entity\Commande $idcomm = null)
    {
        $this->idcomm = $idcomm;

        return $this;
    }

    /**
     * Get idcomm
     *
     * @return \AppBundle\Entity\Commande
     */
    public function getIdcomm()
    {
        return $this->idcomm;
    }

    /**
     * Set idproduit
     *
     * @param \AppBundle\Entity\Produit $idproduit
     *
     * @return ConfigComm
     */
    public function setIdproduit(\AppBundle\Entity\Produit $idproduit = null)
    {
        $this->idproduit = $idproduit;

        return $this;
    }

    /**
     * Get idproduit
     *
     * @return \AppBundle\Entity\Produit
     */
    public function getIdproduit()
    {
        return $this->idproduit;
    }

    /**
     * Add idaccess
     *
     * @param \AppBundle\Entity\Accessoire $idaccess
     *
     * @return ConfigComm
     */
    public function addIdaccess(\AppBundle\Entity\Accessoire $idaccess)
    {
        $this->idaccess[] = $idaccess;

        return $this;
    }

    /**
     * Remove idaccess
     *
     * @param \AppBundle\Entity\Accessoire $idaccess
     */
    public function removeIdaccess(\AppBundle\Entity\Accessoire $idaccess)
    {
        $this->idaccess->removeElement($idaccess);
    }

    /**
     * Get idaccess
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdaccess()
    {
        return $this->idaccess;
    }
}

