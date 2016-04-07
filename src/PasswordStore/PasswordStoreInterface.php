<?php
namespace Sil\IdpPw\Common\PasswordStore;

/**
 * Interface PasswordStoreInterface
 * @package Sil\IdpPw\Common\PasswordStore
 */
interface PasswordStoreInterface
{
    /**
     * Get metadata about user's password including last_changed_date and expires_date
     * @param string $username
     * @return array<string, string>
     */
    public function getMeta($username);

    /**
     * Set user's password
     * @param string $username
     * @param string $password
     * @return boolean
     * @throws \Exception
     */
    public function set($username, $password);
}