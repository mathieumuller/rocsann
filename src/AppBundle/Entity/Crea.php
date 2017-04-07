<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Crea.
 *
 * @ORM\Table(name="crea", indexes={@ORM\Index(name="FK_crea_idProduit", columns={"idProduit"})})
 * @ORM\Entity
 */
class Crea
{
    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", nullable=true)
     */
    private $photo;

    /**
     * @var bool
     *
     * @ORM\Column(name="diapo", type="boolean", nullable=true)
     */
    private $diapo;

    /**
     * @var int
     *
     * @ORM\Column(name="prix", type="integer", nullable=true)
     */
    private $prix;

    /**
     * @var string
     *
     * @ORM\Column(name="descrCrea", type="string", length=75, nullable=true)
     */
    private $descrcrea;

    /**
     * @var string
     *
     * @ORM\Column(name="couleur", type="string", length=50, nullable=false)
     */
    private $couleur;

    /**
     * @var string
     *
     * @ORM\Column(name="matiere", type="string", length=40, nullable=false)
     */
    private $matiere;

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
     * @var int
     *
     * @ORM\Column(name="idCrea", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcrea;

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
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Accessoire", mappedBy="idcrea")
     */
    private $idaccess;

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->idaccess = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set photo.
     *
     * @param string $photo
     *
     * @return Crea
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo.
     *
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set diapo.
     *
     * @param int $diapo
     *
     * @return Crea
     */
    public function setDiapo($diapo)
    {
        $this->diapo = $diapo;

        return $this;
    }

    /**
     * Get diapo.
     *
     * @return int
     */
    public function getDiapo()
    {
        return $this->diapo;
    }

    /**
     * Set prix.
     *
     * @param int $prix
     *
     * @return Crea
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix.
     *
     * @return int
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set descrcrea.
     *
     * @param string $descrcrea
     *
     * @return Crea
     */
    public function setDescrcrea($descrcrea)
    {
        $this->descrcrea = $descrcrea;

        return $this;
    }

    /**
     * Get descrcrea.
     *
     * @return string
     */
    public function getDescrcrea()
    {
        return $this->descrcrea;
    }

    /**
     * Set couleur.
     *
     * @param string $couleur
     *
     * @return Crea
     */
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;

        return $this;
    }

    /**
     * Get couleur.
     *
     * @return string
     */
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * Set matiere.
     *
     * @param string $matiere
     *
     * @return Crea
     */
    public function setMatiere($matiere)
    {
        $this->matiere = $matiere;

        return $this;
    }

    /**
     * Get matiere.
     *
     * @return string
     */
    public function getMatiere()
    {
        return $this->matiere;
    }

    /**
     * Set bordure.
     *
     * @param string $bordure
     *
     * @return Crea
     */
    public function setBordure($bordure)
    {
        $this->bordure = $bordure;

        return $this;
    }

    /**
     * Get bordure.
     *
     * @return string
     */
    public function getBordure()
    {
        return $this->bordure;
    }

    /**
     * Set galon.
     *
     * @param string $galon
     *
     * @return Crea
     */
    public function setGalon($galon)
    {
        $this->galon = $galon;

        return $this;
    }

    /**
     * Get galon.
     *
     * @return string
     */
    public function getGalon()
    {
        return $this->galon;
    }

    /**
     * Set frange.
     *
     * @param string $frange
     *
     * @return Crea
     */
    public function setFrange($frange)
    {
        $this->frange = $frange;

        return $this;
    }

    /**
     * Get frange.
     *
     * @return string
     */
    public function getFrange()
    {
        return $this->frange;
    }

    /**
     * Set broderie.
     *
     * @param string $broderie
     *
     * @return Crea
     */
    public function setBroderie($broderie)
    {
        $this->broderie = $broderie;

        return $this;
    }

    /**
     * Get broderie.
     *
     * @return string
     */
    public function getBroderie()
    {
        return $this->broderie;
    }

    /**
     * Get idcrea.
     *
     * @return int
     */
    public function getIdcrea()
    {
        return $this->idcrea;
    }

    /**
     * Set idproduit.
     *
     * @param \AppBundle\Entity\Produit $idproduit
     *
     * @return Crea
     */
    public function setIdproduit(\AppBundle\Entity\Produit $idproduit = null)
    {
        $this->idproduit = $idproduit;

        return $this;
    }

    /**
     * Get idproduit.
     *
     * @return \AppBundle\Entity\Produit
     */
    public function getIdproduit()
    {
        return $this->idproduit;
    }

    /**
     * Add idaccess.
     *
     * @param \AppBundle\Entity\Accessoire $idaccess
     *
     * @return Crea
     */
    public function addIdaccess(\AppBundle\Entity\Accessoire $idaccess)
    {
        $this->idaccess[] = $idaccess;

        return $this;
    }

    /**
     * Remove idaccess.
     *
     * @param \AppBundle\Entity\Accessoire $idaccess
     */
    public function removeIdaccess(\AppBundle\Entity\Accessoire $idaccess)
    {
        $this->idaccess->removeElement($idaccess);
    }

    /**
     * Get idaccess.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdaccess()
    {
        return $this->idaccess;
    }
}
