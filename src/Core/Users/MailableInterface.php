<?php

namespace Meetup\Login\Core;

/**
 * MailableInterface Interface
 *
 * An entity that has a email address
 */
interface MailableInterface
{
    /**
     * Set email
     *
     * @param string $email
     *
     * @return void
     */
    public function setEmail($email);

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail();
}
