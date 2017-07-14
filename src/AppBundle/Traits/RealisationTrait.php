<?php

namespace AppBundle\Traits;

use AppBundle\Entity;

trait RealisationTrait
{
    /**
     * @var Configuration
     */
    protected $configuration;

    /**
     * @var Form
     */
    protected $form;

    /**
     * @var Category
     */
    protected $category;

    /**
     * Gets the value of configuration.
     *
     * @return Configuration
     */
    public function getConfiguration()
    {
        return $this->configuration;
    }

    /**
     * Sets the value of configuration.
     *
     * @param Configuration $configuration the configuration
     *
     * @return self
     */
    public function setConfiguration(Entity\Configuration $configuration)
    {
        $this->configuration = $configuration;

        return $this;
    }

    /**
     * Gets the value of form.
     *
     * @return Form
     */
    public function getForm()
    {
        return $this->form;
    }

    /**
     * Sets the value of form.
     *
     * @param Form $form the form
     *
     * @return self
     */
    public function setForm(Entity\Form $form)
    {
        $this->form = $form;

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
    public function setCategory(Entity\Category $category)
    {
        $this->category = $category;

        return $this;
    }
}
