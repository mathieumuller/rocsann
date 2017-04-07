<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ConfigComm
 *
 * @ORM\Table(name="config_comm", indexes={@ORM\Index(name="FK_config_comm_idProduit", columns={"idProduit"}), @ORM\Index(name="FK_config_comm_idComm", columns={"idComm"})})
 * @ORM\Entity
 */
class ConfigComm
{
    /**
     * @var string
     *
     * @ORM\Column(name="matiere", type="string", length=40, nullable=false)
     */
    private $matiere;

    /**
     * @var string
     *
     * @ORM\Column(name="couleur", type="string", length=50, nullable=false)
     */
    private $couleur;

    /**
     * @var string
     *
     * @ORM\Column(name="bordure", type="string", length=40, nullable=false)
     */
    private $bordure;

    /**
     * @var string
     *
     * @ORM\Column(name="galon", type="string", length=50, nullable=false)
     */
    private $galon;

    /**
     * @var string
     *
     * @ORM\Column(name="frange", type="string", length=40, nullable=false)
     */
    private $frange;

    /**
     * @var string
     *
     * @ORM\Column(name="broderie", type="string", length=40, nullable=false)
     */
    private $broderie;

    /**
     * @var string
     *
     * @ORM\Column(name="taille", type="string", length=30, nullable=false)
     */
    private $taille;

    /**
     * @var string
     *
     * @ORM\Column(name="logo", type="blob", length=65535, nullable=false)
     */
    private $logo;

    /**
     * @var string
     *
     * @ORM\Column(name="perso", type="text", length=65535, nullable=false)
     */
    private $perso;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantite", type="integer", nullable=false)
     */
    private $quantite;

    /**
     * @var integer
     *
     * @ORM\Column(name="pxUnit", type="integer", nullable=false)
     */
    private $pxunit;

    /**
     * @var integer
     *
     * @ORM\Column(name="idCreaBrute", type="integer", nullable=false)
     */
    private $idcreabrute;

    /**
     * @var integer
     *
     * @ORM\Column(name="idLgn", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idlgn;

    /**
     * @var \AppBundle\Entity\Commande
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Commande")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idComm", referencedColumnName="idComm")
     * })
     */
    private $idcomm;

    /**
     * @var \AppBundle\Entity\Produit
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Produit")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idProduit", referencedColumnName="idProduit")
     * })
     */
    private $idproduit;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Accessoire", mappedBy="idlgn")
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
     * Set matiere
     *
     * @param string $matiere
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
     * Get idlgn
     *
     * @return integer 
     */
    public function getIdlgn()
    {
        return $this->idlgn;
    }

    /**
     * Set idcomm
     *
     * @param \AppBundle\Entity\Commande $idcomm
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
