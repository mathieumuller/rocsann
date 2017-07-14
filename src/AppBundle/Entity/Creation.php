<?php

namespace AppBundle\Entity;

use AppBundle\Traits;
use Symfony\Component\HttpFoundation\File\File;
use AppBundle\Entity\File as EmbeddedFile;

/**
 * Creation.
 */
class Creation extends Product
{
    use Traits\RealisationTrait;

    /**
     * @var File
     */
    private $photoFile;

    /**
     * @var EmbeddedFile
     */
    private $photo;

    /**
     * @var bool
     */
    private $diaporama = false;

    public function __construct()
    {
        $this->photo = new EmbeddedFile();
    }

    /**
     * Sets the value of photo.
     *
     * @param EmbeddedFile $photo the photo
     *
     * @return self
     */
    protected function setPhoto(EmbeddedFile $photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo.
     *
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set diaporama.
     *
     * @param bool $diaporama
     *
     * @return Realisation
     */
    public function setDiaporama($diaporama)
    {
        $this->diaporama = $diaporama;

        return $this;
    }

    /**
     * Get diaporama.
     *
     * @return bool
     */
    public function getDiaporama()
    {
        return $this->diaporama;
    }

    /**
     * Gets the value of photoFile.
     *
     * @return File
     */
    public function getPhotoFile()
    {
        return $this->photoFile;
    }

    /**
     * If manually uploading a file (i.e. not using Symfony Form) ensure an instance
     * of 'UploadedFile' is injected into this setter to trigger the  update. If this
     * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
     * must be able to accept an instance of 'File' as the bundle will inject one here
     * during Doctrine hydration.
     *
     * @param File|UploadedFile $photo
     */
    public function setPhotoFile(File $photo = null)
    {
        $this->photoFile = $photo;

        if ($photo) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTimeImmutable();
        }
    }
}
