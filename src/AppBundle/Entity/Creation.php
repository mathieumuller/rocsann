<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Creation.
 *
 * @ORM\Entity
 */
class Creation extends Realisation
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
     * @ORM\Column(name="diaporama", type="boolean", nullable=false, options={"default" : 0})
     */
    private $diaporama = false;

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
