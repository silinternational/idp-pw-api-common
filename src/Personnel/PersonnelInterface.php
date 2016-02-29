<?php
namespace Sil\IdpPw\Common\Personnel;

/**
 * Interface PersonnelInterface
 * @package Sil\IdpPw\Common\Personnel
 */
interface PersonnelInterface
{
    /**
     * @param mixed $employeeId
     * @return PersonnelUser|null
     */
    public function findByEmployeeId($employeeId);

    /**
     * @param mixed $username
     * @return PersonnelUser|null
     */
    public function findByUsername($username);

    /**
     * @param mixed $email
     * @return PersonnelUser|null
     */
    public function findByEmail($email);
}