<?php

namespace AppBundle\Traits;

/**
 * Adds createdAt and updatedAt properties to entities
 * and uses the lifecycle callbacks to set the values automatically.
 *
 * Note: the entity has to listen to the lifecycle callbacks
 * Note: if you have to implement additional behaviour to @prePersist and @preUpdate life cycle callbacks,
 *       just define prePersist and/or preUpdate methods in the entity
 */
trait TimeAwareEntity
{
    /**
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    protected $createdAt;

    /**
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    protected $updatedAt;

    /**
     * Gets the value of createdAt.
     *
     * @return DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @ORM\PrePersist
     */
    public function prePersistEntity()
    {
        $this->createdAt = new \DateTime();
        if (method_exists($this, 'prePersist')) {
            $this->prePersist();
        }

        return $this;
    }

    /**
     * Gets the value of updatedAt.
     *
     * @return DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @ORM\PreUpdate
     */
    public function preUpdateEntity()
    {
        $this->updatedAt = new \DateTime();
        if (method_exists($this, 'preUpdate')) {
            $this->preUpdate();
        }

        return $this;
    }
}
