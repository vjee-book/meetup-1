<?php
namespace Meetup\Login\Core;

use Meetup\Login\Core\Users\MailableInterface;
use Meetup\Login\Core\Users\NameableInterface;
use Meetup\Login\Core\Users\StorableInterface;

/**
 * User Interface
 *
 * Represents a user entity.
 */
interface UserInterface extends StorableInterface, NameableInterface, MailableInterface
{
    /**
     * Set Password.
     *
     * The password set here is immediately hashed.
     *
     * @param string $password Password
     *
     * @return void
     */
    public function setPassword($password);


    /**
     * Check if the provided password matches the stored password.
     *
     * @param string $password Text password
     *
     * @return bool Whether the password is correct
     */
    public function checkPassword($password);
}
