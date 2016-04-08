<?php
namespace Sil\IdpPw\Common\PhoneVerification;

/**
 * Interface PhoneVerificationInterface
 * @package Sil\IdpPw\Common\PhoneVerification
 */
interface PhoneVerificationInterface
{
    /**
     * Initiate phone verification
     * @param string $phoneNumber
     * @param string|null $code
     * @return string The verification code used, or another identifier to be used with self::verify() later
     * @throws \Exception
     */
    public function send($phoneNumber, $code = null);

    /**
     * Verify that previously stored $resetCode matches the code provided by the user, $userProvided
     * Component may use $resetCode as a key for it's own purposes, as is the case with the Nexmo Verify service.
     * Return true on success or throw NotMatchException when match fails.
     * Throw \Exception when other exception occurs like network issue with service provider
     * @param string $resetCode
     * @param string $userProvided
     * @return boolean
     * @throws \Exception
     * @throws \Sil\IdpPw\Common\PhoneVerification\NotMatchException
     */
    public function verify($resetCode, $userProvided);
}