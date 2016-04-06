<?php
namespace Sil\IdpPw\Common\Auth;

use yii\web\Request;

interface AuthnInterface
{
    /**
     * @param \yii\web\Request|null $request
     * @param string $returnTo Where to have IdP send user after login
     * @return User|null If null is returned the user was redirected to IdP
     * @throws InvalidLoginException
     */
    public function login(Request $request = null, $returnTo);

    /**
     * @param User|null $user
     * @param string $returnTo Where to have IdP send user after login
     * @return void
     */
    public function logout(User $user = null, $returnTo);
}