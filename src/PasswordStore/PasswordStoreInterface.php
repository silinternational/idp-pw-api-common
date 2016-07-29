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
     * @param string $employeeId
     * @return \Sil\IdpPw\Common\PasswordStore\UserPasswordMeta
     * @throw \Sil\IdpPw\Common\PasswordStore\UserNotFoundException
     * @throw \Sil\IdpPw\Common\PasswordStore\AccountLockedException
     */
    public function getMeta($employeeId);

    /**
     * Set user's password
     * @param string $employeeId
     * @param string $password
     * @return \Sil\IdpPw\Common\PasswordStore\UserPasswordMeta
     * @throws \Exception
     * @throw \Sil\IdpPw\Common\PasswordStore\UserNotFoundException
     * @throw \Sil\IdpPw\Common\PasswordStore\AccountLockedException
     */
    public function set($employeeId, $password);
}
