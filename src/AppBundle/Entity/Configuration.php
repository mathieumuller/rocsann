<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Configuration.
 *
 * @ORM\Table(name="configuration")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ConfigurationRepository")
 */
class Configuration
{
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
     * @ORM\Column(name="matiere", type="string", length=150, nullable=false)
     */
    private $matiere;

    /**
     * @var string
     *
     * @ORM\Column(name="couleur", type="string", length=150, nullable=false)
     */
    private $couleur;

    /**
     * @var string
     *
     * @ORM\Column(name="bordure", type="string", length=150, nullable=true)
     */
    private $bordure;

    /**
     * @var string
     *
     * @ORM\Column(name="galon", type="string", length=150, nullable=true)
     */
    private $galon;

    /**
     * @var string
     *
     * @ORM\Column(name="frange", type="string", length=150, nullable=true)
     */
    private $frange;

    /**
     * @var string
     *
     * @ORM\Column(name="broderie", type="string", length=150, nullable=true)
     */
    private $broderie;

    /**
     * @var string
     *
     * @ORM\Column(name="taille", type="string", columnDefinition="ENUM('Cheval', 'Poney', 'Mini', 'Grand cheval')", nullable=false)
     */
    private $taille;

    /**
     * @var string
     *
     * @ORM\Column(name="logo", type="string", length=255, nullable=true)
     */
    private $logo;

    /**
     * @ORM\ManyToMany(
     *     targetEntity="Agrement",
     *     inversedBy="configurations"
     * )
     * @ORM\JoinTable(
     *     name="configuration_agrement",
     *     joinColumns={@ORM\JoinColumn(name="configuration_id", referencedColumnName="id", nullable=false)},
     *     inverseJoinColumns={@ORM\JoinColumn(name="agrement_id", referencedColumnName="id", nullable=false)}
     * )
     */
    private $agrements;

    /**
     * @ORM\OneToOne(targetEntity="Realisation", mappedBy="configuration")
     */
    private $realisation;

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->agrements = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Gets the value of matiere.
     *
     * @return string
     */
    public function getMatiere()
    {
        return $this->matiere;
    }

    /**
     * Sets the value of matiere.
     *
     * @param string $matiere the matiere
     *
     * @return self
     */
    public function setMatiere($matiere)
    {
        $this->matiere = $matiere;

        return $this;
    }

    /**
     * Gets the value of couleur.
     *
     * @return string
     */
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * Sets the value of couleur.
     *
     * @param string $couleur the couleur
     *
     * @return self
     */
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;

        return $this;
    }

    /**
     * Gets the value of bordure.
     *
     * @return string
     */
    public function getBordure()
    {
        return $this->bordure;
    }

    /**
     * Sets the value of bordure.
     *
     * @param string $bordure the bordure
     *
     * @return self
     */
    public function setBordure($bordure)
    {
        $this->bordure = $bordure;

        return $this;
    }

    /**
     * Gets the value of galon.
     *
     * @return string
     */
    public function getGalon()
    {
        return $this->galon;
    }

    /**
     * Sets the value of galon.
     *
     * @param string $galon the galon
     *
     * @return self
     */
    public function setGalon($galon)
    {
        $this->galon = $galon;

        return $this;
    }

    /**
     * Gets the value of frange.
     *
     * @return string
     */
    public function getFrange()
    {
        return $this->frange;
    }

    /**
     * Sets the value of frange.
     *
     * @param string $frange the frange
     *
     * @return self
     */
    public function setFrange($frange)
    {
        $this->frange = $frange;

        return $this;
    }

    /**
     * Gets the value of broderie.
     *
     * @return string
     */
    public function getBroderie()
    {
        return $this->broderie;
    }

    /**
     * Sets the value of broderie.
     *
     * @param string $broderie the broderie
     *
     * @return self
     */
    public function setBroderie($broderie)
    {
        $this->broderie = $broderie;

        return $this;
    }

    /**
     * Gets the value of taille.
     *
     * @return string
     */
    public function getTaille()
    {
        return $this->taille;
    }

    /**
     * Sets the value of taille.
     *
     * @param string $taille the taille
     *
     * @return self
     */
    public function setTaille($taille)
    {
        $this->taille = $taille;

        return $this;
    }

    /**
     * Gets the value of logo.
     *
     * @return string
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Sets the value of logo.
     *
     * @param string $logo the logo
     *
     * @return self
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Gets the Agrement.
     *
     * @return mixed
     */
    public function getAgrements()
    {
        return $this->agrements;
    }

    /**
     * Sets the Agrement.
     *
     * @param mixed $agrements the agrements
     *
     * @return self
     */
    public function setAgrements($agrements)
    {
        $this->agrements = $agrements;

        return $this;
    }

    /**
     * Adds an Agrement.
     *
     * @param Agrement $agrement the agrement
     *
     * @return self
     */
    public function addAgrement(Agrement $agrement)
    {
        if (!$this->agrements->contains($agrement)) {
            $this->agrements->add($agrement);
        }

        return $this;
    }

    /**
     * Removes an Agrement.
     *
     * @param Agrement $agrement the agrement
     *
     * @return self
     */
    public function removeAgrement(Agrement $agrement)
    {
        if ($this->agrements->contains($agrement)) {
            $this->agrements->removeElement($agrement);
        }

        return $this;
    }

    /**
     * Gets the value of realisation.
     *
     * @return mixed
     */
    public function getRealisation()
    {
        return $this->realisation;
    }

    /**
     * Sets the value of realisation.
     *
     * @param mixed $realisation the realisation
     *
     * @return self
     */
    public function setRealisation(Realisation $realisation)
    {
        $this->realisation = $realisation;

        return $this;
    }
}
