<?php

namespace AppBundle\Entity;

/**
 * GiftCard.
 */
class GiftCard extends Product
{
    /**
     * @var string
     */
    protected $code;

    /**
     * @var string
     */
    protected $photo;

    /**
     * @var Category
     */
    protected $category;

    /**
     * Gets the value of code.
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets the value of code.
     *
     * @param string $code the code
     *
     * @return self
     */
    protected function setCode($code)
    {
        $this->code = $code;

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
     * Gets the value of category.
     *
     * @return Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets the value of category.
     *
     * @param Category $category the category
     *
     * @return self
     */
    protected function setCategory(Category $category)
    {
        $this->category = $category;

        return $this;
    }
}
