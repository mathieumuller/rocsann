<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Accessoire
 *
 * @ORM\Table(name="accessoire")
 * @ORM\Entity
 */
class Accessoire
{
    /**
     * @var string
     *
     * @ORM\Column(name="libAccess", type="string", length=30, nullable=false)
     */
    private $libaccess;

    /**
     * @var integer
     *
     * @ORM\Column(name="idAccess", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idaccess;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Crea", inversedBy="idaccess")
     * @ORM\JoinTable(name="access_crea",
     *   joinColumns={
     *     @ORM\JoinColumn(name="idAccess", referencedColumnName="idAccess")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="idCrea", referencedColumnName="idCrea")
     *   }
     * )
     */
    private $idcrea;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\ConfigComm", inversedBy="idaccess")
     * @ORM\JoinTable(name="access_comm",
     *   joinColumns={
     *     @ORM\JoinColumn(name="idAccess", referencedColumnName="idAccess")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="idLgn", referencedColumnName="idLgn")
     *   }
     * )
     */
    private $idlgn;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idcrea = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idlgn = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set libaccess
     *
     * @param string $libaccess
     * @return Accessoire
     */
    public function setLibaccess($libaccess)
    {
        $this->libaccess = $libaccess;

        return $this;
    }

    /**
     * Get libaccess
     *
     * @return string 
     */
    public function getLibaccess()
    {
        return $this->libaccess;
    }

    /**
     * Get idaccess
     *
     * @return integer 
     */
    public function getIdaccess()
    {
        return $this->idaccess;
    }

    /**
     * Add idcrea
     *
     * @param \AppBundle\Entity\Crea $idcrea
     * @return Accessoire
     */
    public function addIdcrea(\AppBundle\Entity\Crea $idcrea)
    {
        $this->idcrea[] = $idcrea;

        return $this;
    }

    /**
     * Remove idcrea
     *
     * @param \AppBundle\Entity\Crea $idcrea
     */
    public function removeIdcrea(\AppBundle\Entity\Crea $idcrea)
    {
        $this->idcrea->removeElement($idcrea);
    }

    /**
     * Get idcrea
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdcrea()
    {
        return $this->idcrea;
    }

    /**
     * Add idlgn
     *
     * @param \AppBundle\Entity\ConfigComm $idlgn
     * @return Accessoire
     */
    public function addIdlgn(\AppBundle\Entity\ConfigComm $idlgn)
    {
        $this->idlgn[] = $idlgn;

        return $this;
    }

    /**
     * Remove idlgn
     *
     * @param \AppBundle\Entity\ConfigComm $idlgn
     */
    public function removeIdlgn(\AppBundle\Entity\ConfigComm $idlgn)
    {
        $this->idlgn->removeElement($idlgn);
    }

    /**
     * Get idlgn
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdlgn()
    {
        return $this->idlgn;
    }
}
