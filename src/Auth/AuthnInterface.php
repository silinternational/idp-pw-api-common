<?php
namespace Sil\IdpPw\Common\Auth;

use yii\web\Request;

/**
 * Interface AuthnInterface
 * @package Sil\IdpPw\Common\Auth
 */
interface AuthnInterface
{
    /**
     * @param string $returnTo Where to have IdP send user after login
     * @param \yii\web\Request|null $request
     * @return User|void
     * @throws InvalidLoginException
     * @throws RedirectException
     */
    public function login($returnTo, Request $request = null);

    /**
     * @param string $returnTo Where to have IdP send user after login
     * @param User|null $user
     * @return void
     * @throws RedirectException
     */
    public function logout($returnTo, User $user = null);
}