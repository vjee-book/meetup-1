<?php

namespace Meetup\Login\Core;

/**
 * Storable Interface
 *
 * An entity that can be stored
 */
interface StorableInterface
{
    /**
     * Get the ID of the entity
     *
     * @return integer
     */
    public function getId();

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt();

    /**
     * Set createdAt
     *
     * @param \DateTime $datetime
     *
     * @return void
     */
    public function setCreatedAt($datetime);

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt();

    /**
     * Set updatedAt
     *
     * @param \DateTime $datetime
     *
     * @return void
     */
    public function setUpdatedAt($datetime);
}
