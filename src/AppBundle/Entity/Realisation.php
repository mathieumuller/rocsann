<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Traits\TimeAwareEntity;

/**
 * Realisation.
 *
 * @ORM\Entity
 * @ORM\Table(name="realisation", indexes={
 *     @ORM\Index(name="FK_realisation_configuration", columns={"configuration_id"}),
 *     @ORM\Index(name="FK_realisation_categorie", columns={"categorie_id"}),
 *     @ORM\Index(name="FK_realisation_forme", columns={"forme_id"})
 * })
 *
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="type", type="string")
 * @ORM\DiscriminatorMap({
 *     "crea"  = "Creation",
 *     "perso" = "Personnalisation"
 * })
 *
 * @ORM\HasLifecycleCallbacks
 */
abstract class Realisation
{
    use TimeAwareEntity;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var int
     *
     * @ORM\Column(name="prix", type="float", nullable=true)
     */
    protected $prix;

    /**
     * @ORM\OneToOne(targetEntity="Configuration", inversedBy="realisation")
     */
    protected $configuration;

    /**
     * @ORM\ManyToOne(targetEntity="Categorie", inversedBy="realisations")
     * @ORM\JoinColumn(name="categorie_id", referencedColumnName="id")
     */
    protected $categorie;

    /**
     * @ORM\ManyToOne(targetEntity="Forme", inversedBy="realisations")
     * @ORM\JoinColumn(name="forme_id", referencedColumnName="id")
     */
    protected $forme;

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
     * Gets the value of configuration.
     *
     * @return mixed
     */
    public function getConfiguration()
    {
        return $this->configuration;
    }

    /**
     * Sets the value of configuration.
     *
     * @param mixed $configuration the configuration
     *
     * @return self
     */
    public function setConfiguration(Configuration $configuration)
    {
        $this->configuration = $configuration;

        return $this;
    }

    /**
     * Gets the value of categorie.
     *
     * @return mixed
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Sets the value of categorie.
     *
     * @param mixed $categorie the categorie
     *
     * @return self
     */
    public function setCategorie(Categorie $categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Gets the value of forme.
     *
     * @return mixed
     */
    public function getForme()
    {
        return $this->forme;
    }

    /**
     * Sets the value of forme.
     *
     * @param mixed $forme the forme
     *
     * @return self
     */
    public function setForme(Forme $forme)
    {
        $this->forme = $forme;

        return $this;
    }
}
