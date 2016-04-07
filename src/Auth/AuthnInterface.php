<?php
namespace Sil\IdpPw\Common\Auth;

use yii\web\Request;

interface AuthnInterface
{
    /**
     * @param string $returnTo Where to have IdP send user after login
     * @param \yii\web\Request|null $request
     * @return User|void
     * @throws InvalidLoginException
     */
    public function login($returnTo, Request $request = null);

    /**
     * @param string $returnTo Where to have IdP send user after login
     * @param User|null $user
     * @return void
     */
    public function logout($returnTo, User $user = null);
}