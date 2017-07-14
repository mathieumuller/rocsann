<?php

namespace AppBundle\Traits;

trait TimeAwareEntityTrait
{
    protected $createdAt;
    protected $updatedAt;

    /**
     * Gets the value of createdAt.
     *
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Sets the value of createdAt.
     *
     * @param mixed $createdAt the created at
     *
     * @return self
     */
    public function persist()
    {
        $this->createdAt = new \DateTime();

        return $this;
    }

    /**
     * Gets the value of updatedAt.
     *
     * @return mixed
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Sets the value of updatedAt.
     *
     * @param mixed $updatedAt the updated at
     *
     * @return self
     */
    public function update()
    {
        $this->updatedAt = new \DateTime();

        return $this;
    }
}
