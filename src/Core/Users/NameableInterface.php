<?php

namespace Meetup\Login\Core;

/**
 * Nameable Interface
 *
 * An entity that has a first name and last name
 */
interface NameableInterface
{
    /**
     * Set first name
     *
     * @param string $firstName
     *
     * @return void
     */
    public function setFirstName($firstName);

    /**
     * Set last name
     *
     * @param string $lastName
     *
     * @return void
     */
    public function setLastName($lastName);

    /**
     * Get first name
     *
     * @return string
     */
    public function getFirstName();

    /**
     * Get last name
     *
     * @return string
     */
    public function getLastName();
}
