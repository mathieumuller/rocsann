<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Creation.
 *
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CreationRepository")
 */
class Creation extends Realisation
{
    const PHOTO_PATH = '/public/images/';
    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", nullable=true)
     */
    private $photo;

    /**
     * @var bool
     *
     * @ORM\Column(name="diaporama", type="boolean", nullable=false, options={"default" : 0})
     */
    private $diaporama = false;

    public function getPhotoUrl()
    {
        return self::PHOTO_PATH.$this->getPhoto();
    }

    public function getDescription()
    {
        $config = $this->getConfiguration();
        $categorie = $this->getCategorie() ? $this->getCategorie()->getLibelle() : '';
        $forme = $this->getForme() ? $this->getForme()->getLibelle() : '';
        $matiere = $config->getMatiere();
        $couleur = $config->getCouleur();

        $description = [$categorie, $forme, $matiere, $couleur];

        return implode(' ', array_filter($description, 'strlen'));
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
     * Gets the value of diaporama.
     *
     * @return bool
     */
    public function getDiaporama()
    {
        return $this->diaporama;
    }

    /**
     * Sets the value of diaporama.
     *
     * @param bool $diaporama the diaporama
     *
     * @return self
     */
    public function setDiaporama($diaporama)
    {
        $this->diaporama = $diaporama;

        return $this;
    }
}
