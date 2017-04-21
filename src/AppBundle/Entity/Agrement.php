<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Traits\TimeAwareEntity;
use Doctrine\Common\Collections\ArrayCollection;

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
     * @ORM\Column(name="libelle", type="string", length=30, nullable=false, unique=true)
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
     * Constructor.
     */
    public function __construct()
    {
        $this->configurations = new ArrayCollection();
    }

    /**
     * Gets the value of id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Gets the value of libelle.
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Sets the value of libelle.
     *
     * @param string $libelle the libelle
     *
     * @return self
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Gets the value of photo.
     *
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Sets the value of photo.
     *
     * @param string $photo the photo
     *
     * @return self
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Gets the value of prix.
     *
     * @return int
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Sets the value of prix.
     *
     * @param int $prix the prix
     *
     * @return self
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Gets the value of configurations.
     *
     * @return mixed
     */
    public function getConfigurations()
    {
        return $this->configurations;
    }

    /**
     * Sets the value of configurations.
     *
     * @param mixed $configurations the configurations
     *
     * @return self
     */
    public function setConfigurations($configurations)
    {
        $this->configurations = $configurations;

        return $this;
    }
}
