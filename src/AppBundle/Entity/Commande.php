<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 *
 * @ORM\Table(name="commande", indexes={@ORM\Index(name="FK_commande_idUtil", columns={"idUtil"})})
 * @ORM\Entity
 */
class Commande
{
    /**
     * @var string
     *
     * @ORM\Column(name="valid", type="string", length=1, nullable=true)
     */
    private $valid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datComm", type="date", nullable=false)
     */
    private $datcomm;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="delai", type="date", nullable=false)
     */
    private $delai;

    /**
     * @var string
     *
     * @ORM\Column(name="repondu", type="text", length=65535, nullable=false)
     */
    private $repondu;

    /**
     * @var integer
     *
     * @ORM\Column(name="idFlash", type="integer", nullable=false)
     */
    private $idflash;

    /**
     * @var string
     *
     * @ORM\Column(name="idCadeau", type="string", length=13, nullable=false)
     */
    private $idcadeau;

    /**
     * @var string
     *
     * @ORM\Column(name="refus", type="string", length=1, nullable=false)
     */
    private $refus;

    /**
     * @var string
     *
     * @ORM\Column(name="accompte", type="string", length=1, nullable=false)
     */
    private $accompte;

    /**
     * @var string
     *
     * @ORM\Column(name="paye", type="string", length=1, nullable=false)
     */
    private $paye;

    /**
     * @var string
     *
     * @ORM\Column(name="envoi", type="string", length=1, nullable=false)
     */
    private $envoi;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datEnvoi", type="date", nullable=false)
     */
    private $datenvoi;

    /**
     * @var string
     *
     * @ORM\Column(name="fini", type="string", length=1, nullable=false)
     */
    private $fini;

    /**
     * @var string
     *
     * @ORM\Column(name="adrLivr", type="text", length=65535, nullable=false)
     */
    private $adrlivr;

    /**
     * @var string
     *
     * @ORM\Column(name="modPaye", type="string", length=30, nullable=false)
     */
    private $modpaye;

    /**
     * @var integer
     *
     * @ORM\Column(name="fraisPort", type="integer", nullable=false)
     */
    private $fraisport;

    /**
     * @var string
     *
     * @ORM\Column(name="suivi", type="string", length=30, nullable=false)
     */
    private $suivi;

    /**
     * @var integer
     *
     * @ORM\Column(name="relance", type="integer", nullable=false)
     */
    private $relance;

    /**
     * @var integer
     *
     * @ORM\Column(name="idComm", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcomm;

    /**
     * @var \AppBundle\Entity\Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idUtil", referencedColumnName="idUtil")
     * })
     */
    private $idutil;



    /**
     * Set valid
     *
     * @param string $valid
     * @return Commande
     */
    public function setValid($valid)
    {
        $this->valid = $valid;

        return $this;
    }

    /**
     * Get valid
     *
     * @return string 
     */
    public function getValid()
    {
        return $this->valid;
    }

    /**
     * Set datcomm
     *
     * @param \DateTime $datcomm
     * @return Commande
     */
    public function setDatcomm($datcomm)
    {
        $this->datcomm = $datcomm;

        return $this;
    }

    /**
     * Get datcomm
     *
     * @return \DateTime 
     */
    public function getDatcomm()
    {
        return $this->datcomm;
    }

    /**
     * Set delai
     *
     * @param \DateTime $delai
     * @return Commande
     */
    public function setDelai($delai)
    {
        $this->delai = $delai;

        return $this;
    }

    /**
     * Get delai
     *
     * @return \DateTime 
     */
    public function getDelai()
    {
        return $this->delai;
    }

    /**
     * Set repondu
     *
     * @param string $repondu
     * @return Commande
     */
    public function setRepondu($repondu)
    {
        $this->repondu = $repondu;

        return $this;
    }

    /**
     * Get repondu
     *
     * @return string 
     */
    public function getRepondu()
    {
        return $this->repondu;
    }

    /**
     * Set idflash
     *
     * @param integer $idflash
     * @return Commande
     */
    public function setIdflash($idflash)
    {
        $this->idflash = $idflash;

        return $this;
    }

    /**
     * Get idflash
     *
     * @return integer 
     */
    public function getIdflash()
    {
        return $this->idflash;
    }

    /**
     * Set idcadeau
     *
     * @param string $idcadeau
     * @return Commande
     */
    public function setIdcadeau($idcadeau)
    {
        $this->idcadeau = $idcadeau;

        return $this;
    }

    /**
     * Get idcadeau
     *
     * @return string 
     */
    public function getIdcadeau()
    {
        return $this->idcadeau;
    }

    /**
     * Set refus
     *
     * @param string $refus
     * @return Commande
     */
    public function setRefus($refus)
    {
        $this->refus = $refus;

        return $this;
    }

    /**
     * Get refus
     *
     * @return string 
     */
    public function getRefus()
    {
        return $this->refus;
    }

    /**
     * Set accompte
     *
     * @param string $accompte
     * @return Commande
     */
    public function setAccompte($accompte)
    {
        $this->accompte = $accompte;

        return $this;
    }

    /**
     * Get accompte
     *
     * @return string 
     */
    public function getAccompte()
    {
        return $this->accompte;
    }

    /**
     * Set paye
     *
     * @param string $paye
     * @return Commande
     */
    public function setPaye($paye)
    {
        $this->paye = $paye;

        return $this;
    }

    /**
     * Get paye
     *
     * @return string 
     */
    public function getPaye()
    {
        return $this->paye;
    }

    /**
     * Set envoi
     *
     * @param string $envoi
     * @return Commande
     */
    public function setEnvoi($envoi)
    {
        $this->envoi = $envoi;

        return $this;
    }

    /**
     * Get envoi
     *
     * @return string 
     */
    public function getEnvoi()
    {
        return $this->envoi;
    }

    /**
     * Set datenvoi
     *
     * @param \DateTime $datenvoi
     * @return Commande
     */
    public function setDatenvoi($datenvoi)
    {
        $this->datenvoi = $datenvoi;

        return $this;
    }

    /**
     * Get datenvoi
     *
     * @return \DateTime 
     */
    public function getDatenvoi()
    {
        return $this->datenvoi;
    }

    /**
     * Set fini
     *
     * @param string $fini
     * @return Commande
     */
    public function setFini($fini)
    {
        $this->fini = $fini;

        return $this;
    }

    /**
     * Get fini
     *
     * @return string 
     */
    public function getFini()
    {
        return $this->fini;
    }

    /**
     * Set adrlivr
     *
     * @param string $adrlivr
     * @return Commande
     */
    public function setAdrlivr($adrlivr)
    {
        $this->adrlivr = $adrlivr;

        return $this;
    }

    /**
     * Get adrlivr
     *
     * @return string 
     */
    public function getAdrlivr()
    {
        return $this->adrlivr;
    }

    /**
     * Set modpaye
     *
     * @param string $modpaye
     * @return Commande
     */
    public function setModpaye($modpaye)
    {
        $this->modpaye = $modpaye;

        return $this;
    }

    /**
     * Get modpaye
     *
     * @return string 
     */
    public function getModpaye()
    {
        return $this->modpaye;
    }

    /**
     * Set fraisport
     *
     * @param integer $fraisport
     * @return Commande
     */
    public function setFraisport($fraisport)
    {
        $this->fraisport = $fraisport;

        return $this;
    }

    /**
     * Get fraisport
     *
     * @return integer 
     */
    public function getFraisport()
    {
        return $this->fraisport;
    }

    /**
     * Set suivi
     *
     * @param string $suivi
     * @return Commande
     */
    public function setSuivi($suivi)
    {
        $this->suivi = $suivi;

        return $this;
    }

    /**
     * Get suivi
     *
     * @return string 
     */
    public function getSuivi()
    {
        return $this->suivi;
    }

    /**
     * Set relance
     *
     * @param integer $relance
     * @return Commande
     */
    public function setRelance($relance)
    {
        $this->relance = $relance;

        return $this;
    }

    /**
     * Get relance
     *
     * @return integer 
     */
    public function getRelance()
    {
        return $this->relance;
    }

    /**
     * Get idcomm
     *
     * @return integer 
     */
    public function getIdcomm()
    {
        return $this->idcomm;
    }

    /**
     * Set idutil
     *
     * @param \AppBundle\Entity\Utilisateur $idutil
     * @return Commande
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
