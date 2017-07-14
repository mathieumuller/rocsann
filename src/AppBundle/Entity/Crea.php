<?php

namespace AppBundle\Entity;

/**
 * Crea
 */
class Crea
{
    /**
     * @var integer
     */
    private $idcrea;

    /**
     * @var string
     */
    private $photo;

    /**
     * @var integer
     */
    private $diapo;

    /**
     * @var integer
     */
    private $prix;

    /**
     * @var string
     */
    private $descrcrea;

    /**
     * @var string
     */
    private $couleur;

    /**
     * @var string
     */
    private $matiere;

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
     * Get idcrea
     *
     * @return integer
     */
    public function getIdcrea()
    {
        return $this->idcrea;
    }

    /**
     * Set photo
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
     * Get photo
     *
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set diapo
     *
     * @param integer $diapo
     *
     * @return Crea
     */
    public function setDiapo($diapo)
    {
        $this->diapo = $diapo;

        return $this;
    }

    /**
     * Get diapo
     *
     * @return integer
     */
    public function getDiapo()
    {
        return $this->diapo;
    }

    /**
     * Set prix
     *
     * @param integer $prix
     *
     * @return Crea
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return integer
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set descrcrea
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
     * Get descrcrea
     *
     * @return string
     */
    public function getDescrcrea()
    {
        return $this->descrcrea;
    }

    /**
     * Set couleur
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
     * Get couleur
     *
     * @return string
     */
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * Set matiere
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
     * Get matiere
     *
     * @return string
     */
    public function getMatiere()
    {
        return $this->matiere;
    }

    /**
     * Set bordure
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
     * @return Crea
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
     * @return Crea
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
     * @return Crea
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
     * Set idproduit
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
     * @return Crea
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

