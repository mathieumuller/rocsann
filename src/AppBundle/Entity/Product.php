<?php

namespace AppBundle\Entity;

/**
 * Product.
 */
class Product extends \SaleBundle\Model\Product
{
    use \AppBundle\Traits\TimeAwareEntityTrait;

    /**
     * @var string
     */
    protected $description;

    /**
     * Gets the value of description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the value of description.
     *
     * @param string $description the description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }
}
