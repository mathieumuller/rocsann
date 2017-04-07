<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Podium
 *
 * @ORM\Table(name="podium", indexes={@ORM\Index(name="idUtil", columns={"idUtil"})})
 * @ORM\Entity
 */
class Podium
{
    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="string", length=150, nullable=true)
     */
    private $commentaire;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datePhoto", type="date", nullable=false)
     */
    private $datephoto;

    /**
     * @var string
     *
     * @ORM\Column(name="forme", type="string", length=50, nullable=true)
     */
    private $forme;

    /**
     * @var string
     *
     * @ORM\Column(name="chemin", type="blob", nullable=false)
     */
    private $chemin;

    /**
     * @var integer
     *
     * @ORM\Column(name="valid", type="integer", nullable=false)
     */
    private $valid;

    /**
     * @var integer
     *
     * @ORM\Column(name="idPhoto", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idphoto;

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
     * Set commentaire
     *
     * @param string $commentaire
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
     * Get idphoto
     *
     * @return integer 
     */
    public function getIdphoto()
    {
        return $this->idphoto;
    }

    /**
     * Set idutil
     *
     * @param \AppBundle\Entity\Utilisateur $idutil
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
