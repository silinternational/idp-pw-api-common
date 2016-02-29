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
     * @throws NotFoundException
     * @throws \Exception
     */
    public function findByEmployeeId($employeeId);

    /**
     * @param mixed $username
     * @return PersonnelUser|null
     * @throws NotFoundException
     * @throws \Exception
     */
    public function findByUsername($username);

    /**
     * @param mixed $email
     * @return PersonnelUser|null
     * @throws NotFoundException
     * @throws \Exception
     */
    public function findByEmail($email);
}