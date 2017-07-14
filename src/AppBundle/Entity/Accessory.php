<?php

namespace AppBundle\Entity;

/**
 * Accessory.
 */
class Accessory extends Product
{
    /**
     * @var string
     */
    protected $photo;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    protected $configurations;

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->configurations = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Gets the value of configurations.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getConfigurations()
    {
        return $this->configurations;
    }

    /**
     * Add configuration.
     *
     * @param Configuration $configuration
     *
     * @return Accessory
     */
    public function addConfiguration(ConfigurationInterface $configuration)
    {
        if (!$this->configurations->contains($configuration)) {
            $this->configurations->add($configuration);
        }

        return $this;
    }

    /**
     * Remove configuration.
     *
     * @param Configuration $configuration
     */
    public function removeConfiguration(ConfigurationInterface $configuration)
    {
        if ($this->configurations->contains($configuration)) {
            $this->configurations->removeElement($configuration);
        }

        return $this;
    }
}
