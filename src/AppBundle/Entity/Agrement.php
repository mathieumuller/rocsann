<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Traits\TimeAwareEntity;

/**
 * Agrement.
 *
 * @ORM\Table(name="agrement")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class Agrement
{
    use TimeAwareEntity;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="libAccess", type="string", length=30, nullable=false)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", nullable=true)
     */
    private $photo;

    /**
     * @var int
     *
     * @ORM\Column(name="prix", type="float", nullable=true)
     */
    private $prix;

    /**
     * @ORM\ManyToMany(targetEntity="Configuration", mappedBy="agrements")
     */
    private $configurations;

    /**
     * Set libaccess.
     *
     * @param string $libaccess
     *
     * @return Accessoire
     */
    public function setLibaccess($libaccess)
    {
        $this->libaccess = $libaccess;

        return $this;
    }

    /**
     * Get libaccess.
     *
     * @return string
     */
    public function getLibaccess()
    {
        return $this->libaccess;
    }

    /**
     * Get idaccess.
     *
     * @return int
     */
    public function getIdaccess()
    {
        return $this->idaccess;
    }

    /**
     * Add idcrea.
     *
     * @param \AppBundle\Entity\Crea $idcrea
     *
     * @return Accessoire
     */
    public function addIdcrea(\AppBundle\Entity\Crea $idcrea)
    {
        $this->idcrea[] = $idcrea;

        return $this;
    }

    /**
     * Remove idcrea.
     *
     * @param \AppBundle\Entity\Crea $idcrea
     */
    public function removeIdcrea(\AppBundle\Entity\Crea $idcrea)
    {
        $this->idcrea->removeElement($idcrea);
    }

    /**
     * Get idcrea.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdcrea()
    {
        return $this->idcrea;
    }

    /**
     * Add idlgn.
     *
     * @param \AppBundle\Entity\ConfigComm $idlgn
     *
     * @return Accessoire
     */
    public function addIdlgn(\AppBundle\Entity\ConfigComm $idlgn)
    {
        $this->idlgn[] = $idlgn;

        return $this;
    }

    /**
     * Remove idlgn.
     *
     * @param \AppBundle\Entity\ConfigComm $idlgn
     */
    public function removeIdlgn(\AppBundle\Entity\ConfigComm $idlgn)
    {
        $this->idlgn->removeElement($idlgn);
    }

    /**
     * Get idlgn.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdlgn()
    {
        return $this->idlgn;
    }
}
