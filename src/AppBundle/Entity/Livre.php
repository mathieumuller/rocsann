<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Livre
 *
 * @ORM\Table(name="livre", indexes={@ORM\Index(name="FK_livre_idUtil", columns={"idUtil"})})
 * @ORM\Entity
 */
class Livre
{
    /**
     * @var string
     *
     * @ORM\Column(name="msgLiv", type="text", length=65535, nullable=false)
     */
    private $msgliv;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datLiv", type="date", nullable=false)
     */
    private $datliv;

    /**
     * @var string
     *
     * @ORM\Column(name="signLivr", type="string", length=60, nullable=false)
     */
    private $signlivr;

    /**
     * @var integer
     *
     * @ORM\Column(name="idLiv", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idliv;

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
     * Set msgliv
     *
     * @param string $msgliv
     * @return Livre
     */
    public function setMsgliv($msgliv)
    {
        $this->msgliv = $msgliv;

        return $this;
    }

    /**
     * Get msgliv
     *
     * @return string 
     */
    public function getMsgliv()
    {
        return $this->msgliv;
    }

    /**
     * Set datliv
     *
     * @param \DateTime $datliv
     * @return Livre
     */
    public function setDatliv($datliv)
    {
        $this->datliv = $datliv;

        return $this;
    }

    /**
     * Get datliv
     *
     * @return \DateTime 
     */
    public function getDatliv()
    {
        return $this->datliv;
    }

    /**
     * Set signlivr
     *
     * @param string $signlivr
     * @return Livre
     */
    public function setSignlivr($signlivr)
    {
        $this->signlivr = $signlivr;

        return $this;
    }

    /**
     * Get signlivr
     *
     * @return string 
     */
    public function getSignlivr()
    {
        return $this->signlivr;
    }

    /**
     * Get idliv
     *
     * @return integer 
     */
    public function getIdliv()
    {
        return $this->idliv;
    }

    /**
     * Set idutil
     *
     * @param \AppBundle\Entity\Utilisateur $idutil
     * @return Livre
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
