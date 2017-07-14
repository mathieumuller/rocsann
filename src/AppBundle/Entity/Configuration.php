<?php

namespace AppBundle\Entity;

/**
 * Configuration.
 */
class Configuration
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $matter;

    /**
     * @var string
     */
    protected $colour;

    /**
     * @var string
     */
    protected $border;

    /**
     * @var string
     */
    protected $braid;

    /**
     * @var string
     */
    protected $fringe;

    /**
     * @var string
     */
    protected $embroidery;

    /**
     * @var string
     */
    protected $size;

    /**
     * @var string
     */
    protected $logo;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    protected $accessories;

    /**
     * @var Creation
     */
    protected $creation;

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->accessories = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Gets the value of matter.
     *
     * @return string
     */
    public function getMatter()
    {
        return $this->matter;
    }

    /**
     * Sets the value of matter.
     *
     * @param string $matter the matter
     *
     * @return self
     */
    public function setMatter($matter)
    {
        $this->matter = $matter;

        return $this;
    }

    /**
     * Gets the value of colour.
     *
     * @return string
     */
    public function getColour()
    {
        return $this->colour;
    }

    /**
     * Sets the value of colour.
     *
     * @param string $colour the colour
     *
     * @return self
     */
    public function setColour($colour)
    {
        $this->colour = $colour;

        return $this;
    }

    /**
     * Gets the value of border.
     *
     * @return string
     */
    public function getBorder()
    {
        return $this->border;
    }

    /**
     * Sets the value of border.
     *
     * @param string $border the border
     *
     * @return self
     */
    public function setBorder($border)
    {
        $this->border = $border;

        return $this;
    }

    /**
     * Gets the value of braid.
     *
     * @return string
     */
    public function getBraid()
    {
        return $this->braid;
    }

    /**
     * Sets the value of braid.
     *
     * @param string $braid the braid
     *
     * @return self
     */
    public function setBraid($braid)
    {
        $this->braid = $braid;

        return $this;
    }

    /**
     * Gets the value of fringe.
     *
     * @return string
     */
    public function getFringe()
    {
        return $this->fringe;
    }

    /**
     * Sets the value of fringe.
     *
     * @param string $fringe the fringe
     *
     * @return self
     */
    public function setFringe($fringe)
    {
        $this->fringe = $fringe;

        return $this;
    }

    /**
     * Gets the value of embroidery.
     *
     * @return string
     */
    public function getEmbroidery()
    {
        return $this->embroidery;
    }

    /**
     * Sets the value of embroidery.
     *
     * @param string $embroidery the embroidery
     *
     * @return self
     */
    public function setEmbroidery($embroidery)
    {
        $this->embroidery = $embroidery;

        return $this;
    }

    /**
     * Gets the value of size.
     *
     * @return string
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Sets the value of size.
     *
     * @param string $size the size
     *
     * @return self
     */
    public function setSize($size)
    {
        $this->size = $size;

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
     * Gets the value of accessories.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAccessories()
    {
        return $this->accessories;
    }

    /**
     * Adds a value of accessories.
     *
     * @param Accessory $accessory the accessory
     *
     * @return self
     */
    public function addAccessory(Accessory $accessory)
    {
        if (!$this->accessories->contains($accessory)) {
            $this->accessories->add($accessory);
        }

        return $this;
    }

    /**
     * Removes a value of accessories.
     *
     * @param Accessory $accessory the accessory
     *
     * @return self
     */
    public function removeAccessory(Accessory $accessory)
    {
        if ($this->accessories->contains($accessory)) {
            $this->accessories->add($accessory);
        }

        return $this;
    }

    /**
     * Gets the value of creation.
     *
     * @return Creation
     */
    public function getCreation()
    {
        return $this->creation;
    }

    /**
     * Sets the value of creation.
     *
     * @param Creation $creation the creation
     *
     * @return self
     */
    public function setCreation(Creation $creation)
    {
        $this->creation = $creation;

        return $this;
    }
}
